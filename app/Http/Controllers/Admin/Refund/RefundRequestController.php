<?php

namespace App\Http\Controllers\Admin\Refund;

use App\DataTables\Admin\RefundDataTable;
use App\Http\Controllers\Controller;
use App\Models\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RefundRequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Refund Request|Payout Refund Request|Show Refund Request|Reject Refund Request', ['only' => ['index']]);
        $this->middleware('permission:Show Refund Request', ['only' => ['show']]);
        $this->middleware('permission:Payout Refund Request', ['only' => ['payout', 'payoutStore']]);
        $this->middleware('permission:Reject Refund Request', ['only' => ['reject', 'destroy']]);
    }

    public function index(RefundDataTable $dataTable)
    {
        set_page_meta('Refund Request');

        return $dataTable->render('admin.refund.request');
    }

    public function show($id)
    {
        $refund = Refund::whereId($id)->with('beneficiary')->firstOrFail();
        set_page_meta('Refund Request');

        return view('admin.refund.show', [
            'refund' => $refund,
        ]);
    }

    public function payout($id)
    {
        $refund = Refund::findOrFail($id);
        set_page_meta('Refund Payout');

        return view('admin.refund.payout', [
            'refund' => $refund,
        ]);
    }

    public function partialPayout($id)
    {
        $refund = Refund::findOrFail($id);
        set_page_meta('Refund Payout');

        return view('admin.refund.partial_payout', [
            'refund' => $refund,
        ]);
    }

    public function payoutStore(Request $request)
    {
        $request->validate([
            'payout_type' => 'required',
            'note' => 'required',
            'refund_percentage' => 'nullable|numeric|min:0|max:100',
        ]);

        DB::transaction(function () use ($request) {
            $refund = Refund::findOrFail($request->id);

            // Check if a refund percentage is provided; if not, assume 100% refund
            $refundPercentage = $request->refund_percentage ?? 100;
            $refundAmount = ($refundPercentage / 100) * $refund->amount;

            $refund->note = $request->note;
            $refund->refund_percentage = $refundPercentage;
            $refund->refund_amount = $refundAmount;
            $refund->status = COMPLETE;
            $refund->save();

            // Create a transaction for the refunded amount
            $refund->transactions()->create([
                'user_id' => $refund->user_id,
                'amount' => $refundAmount,
                'type' => CREDIT,
            ]);
        });

        if ($request->payout_type == 'create') {
            record_created_flash();
        } else {
            record_updated_flash();
        }

        return back();
    }

    public function reject($id)
    {
        $refund = Refund::findOrFail($id);

        if ($refund->status == REJECT) {

            record_deleted_flash('Already Rejected');

            return back();
        } else {

            DB::transaction(function () use ($refund) {

                $refund->status = REJECT;
                $refund->save();
            });
        }

        record_deleted_flash();

        return back();
    }

    public function destroy($id)
    {
        try {
            $refund = Refund::findOrFail($id);

            if ($refund->status == REJECT) {
                $refund->delete();
            } else {
                $refund->delete();
            }
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            logger($e);

            return back();
        }
    }
}
