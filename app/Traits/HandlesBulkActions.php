<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait HandlesBulkActions
{
    public function handleBulkAction(Request $request, $model)
    {
        $actionType = $request->input('action_type');
        $ids = $request->input('ids');
        $statusField = $request->input('status_field');

        // Decode IDs from JSON
        $ids = json_decode($ids, true);

        if (! is_array($ids)) {
            return redirect()->back()->with('error', 'Invalid data format for IDs.');
        }

        switch ($actionType) {
            case 'delete':
                $model::whereIn('id', $ids)->delete();
                $message = 'Selected items deleted successfully.';
                break;

            case 'approve':
                $model::whereIn('id', $ids)->update([$statusField => APPROVED]);
                $message = 'Selected items approved successfully.';
                break;

            case 'hold':
                $model::whereIn('id', $ids)->update([$statusField => HOLD]);
                $message = 'Selected items placed on hold successfully.';
                break;

            case 'active':
                $model::whereIn('id', $ids)->update([$statusField => ACTIVE]);
                $message = 'Selected items activated successfully.';
                break;

            case 'inactive':
                $model::whereIn('id', $ids)->update([$statusField => INACTIVE]);
                $message = 'Selected items deactivated successfully.';
                break;

            case 'pending':
                $model::whereIn('id', $ids)->update([$statusField => PENDING]);
                $message = 'Selected items marked as pending.';
                break;

            case 'block':
                $model::whereIn('id', $ids)->update([$statusField => BLOCK]);
                $message = 'Selected items blocked successfully.';
                break;

            case 'inprogress':
                $model::whereIn('id', $ids)->update([$statusField => INPROGRESS]);
                $message = 'Selected items marked as in progress.';
                break;

            case 'complete':
                $model::whereIn('id', $ids)->update([$statusField => COMPLETE]);
                $message = 'Selected items marked as complete.';
                break;

            case 'rejected':
                $model::whereIn('id', $ids)->update([$statusField => REJECT]);
                $message = 'Selected items rejected successfully.';
                break;

            case 'draft':
                $model::whereIn('id', $ids)->update([$statusField => DRAFT]);
                $message = 'Selected items saved as draft.';
                break;

            case 'published':
                $model::whereIn('id', $ids)->update([$statusField => PUBLISHED]);
                $message = 'Selected items published successfully.';
                break;

            case 'open':
                $model::whereIn('id', $ids)->update([$statusField => OPEN]);
                $message = 'Selected items opened successfully.';
                break;

            case 'closed':
                $model::whereIn('id', $ids)->update([$statusField => CLOSED]);
                $message = 'Selected items closed successfully.';
                break;

            default:
                return redirect()->back()->with('error', 'Invalid action selected.');
        }

        return redirect()->back()->with('success', $message);
    }
}
