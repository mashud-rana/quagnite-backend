<?php

namespace App\Http\Controllers\Student\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Bootcamp;
use App\Models\Course;
use App\Models\EnrollBootcamp;
use App\Models\EnrollCourse;
use App\Models\InvoiceItem;
use App\Models\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RefundController extends Controller
{
    public function submitRefundRequest(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'refundable_id' => 'required|integer',
            'beneficiary_id' => 'required|integer',
            'refundable_type' => 'required|string',
            'reason' => 'required|string',
        ]);

        $resolvedType = $this->resolveRefundableType($request->refundable_type);

        if (! $resolvedType) {
            return response()->json(['error' => true, 'message' => 'Invalid refundable type.']);
        }

        $itemToRefund = $resolvedType::find($request->refundable_id);

        if (! $itemToRefund) {
            return response()->json(['error' => true, 'message' => 'Invalid refundable item.']);
        }

        $relatedInvoiceItem = InvoiceItem::where('itemable_id', $request->refundable_id)
            ->where('itemable_type', $resolvedType)
            ->first();

        if (! $relatedInvoiceItem) {
            return response()->json(['error' => true, 'message' => 'Couldn’t find related invoice item.']);
        }
        // Check if a refund request has already been submitted
        $existingRefund = Refund::where('invoice_item_id', $relatedInvoiceItem->id)->first();

        if ($existingRefund) {
            return response()->json(['error' => true, 'message' => 'A refund request has already been submitted for this item.']);
        }

        // Retrieve the corresponding enrollment record
        $enrollment = null;

        if ($resolvedType === Course::class) {
            $enrollment = EnrollCourse::where('course_id', $request->refundable_id)->first();
        } elseif ($resolvedType === Bootcamp::class) {
            $enrollment = EnrollBootcamp::where('bootcamp_id', $request->refundable_id)->first();
        }

        if (! $enrollment || ! $enrollment->is_refund_valid) {
            return response()->json(['error' => true, 'message' => 'Refund period is over.']);
        }

        // Start a transaction to ensure atomicity
        DB::beginTransaction();

        try {
            // Attempt to delete the enrollment record
            $enrollmentDeleted = $enrollment->delete();

            if (! $enrollmentDeleted) {
                // If deletion failed, throw an exception
                throw new \Exception('Failed to delete the enrollment record.');
            }

            // Create the refund request only if deletion was successful
            Refund::create([
                'user_id' => auth()->id(),
                'invoice_item_id' => $relatedInvoiceItem->id,
                'amount' => $relatedInvoiceItem->price,
                'reason' => $request->reason,
                'refundable_id' => $request->refundable_id,
                'beneficiary_id' => $request->beneficiary_id,
                'refundable_type' => $resolvedType,
            ]);

            // Commit the transaction
            DB::commit();

            return response()->json(['success' => true, 'message' => 'Refund request submitted successfully!']);
        } catch (\Exception $e) {
            logger($e);
            DB::rollBack();

            return response()->json(['error' => true, 'message' => 'An error occurred']);
        }
    }

    // Helper function to resolve the refundable type
    private function resolveRefundableType($type)
    {
        $namespace = 'App\\Models\\';
        $modelClass = $namespace.ucfirst($type);

        return class_exists($modelClass) ? $modelClass : null;
    }
}
