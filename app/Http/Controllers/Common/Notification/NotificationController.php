<?php

namespace App\Http\Controllers\Common\Notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function allNotification()
    {
        return view('common.notification.index');
    }

    public function adminAllNotification()
    {
        return view('admin.notification.index');
    }

    public function markAsRead($id)
    {

        $user = Auth::user();
        $user->unreadNotifications->where('id', $id)->markAsRead();

        return response()->json(true);
    }

    public function markAsReadByType($type)
    {
        $unreadNotifications = Auth::user()->unreadNotifications->where('data.type', $type);

        // Mark all notification as read by type
        foreach ($unreadNotifications as $notification) {
            $notification->markAsRead();
        }

        return response()->json(true);
    }

    public function markAsReadAll()
    {
        $user = Auth::user();
        $user->unreadNotifications->markAsRead();

        return redirect()->back();
    }

    public function destroy(Request $request, $notificationId)
    {

        $user = Auth::user();

        $notification = $user->notifications->find($notificationId);

        if ($notification) {
            // Delete the notification
            $notification->delete();
            record_deleted_flash();

            return back();
        } else {
            something_wrong_flash();

            return back();
        }
    }
}
