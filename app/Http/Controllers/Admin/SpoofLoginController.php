<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpoofLoginController extends Controller
{
    public function loginAsUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
        ]);

        session()->put('admin_login_id', auth()->id());

        Auth::loginUsingId($request->user_id);

        // Redirect to the user's dashboard or any desired page
        return redirect('/auth/login');
    }

    public function backToAdmin($id)
    {
        if (session()->has('admin_login_id')) {

            Auth::loginUsingId($id);

            session()->forget('admin_login_id');

            return redirect()->route('admin.dashboard');
        } else {

            return back();
        }

        // Redirect to the user's dashboard or any desired page

    }
}
