<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Session;

class Authentication extends Controller
{
    public function logout(Request $request)
    {
        // Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        // return redirect()->route('login');
        Session::flush();
        Auth::logout();
        return redirect('/admin/login');
    }

    public function changepassword(Request $request)
    {
        //dd($request->oldpassword);
        $userdata = Auth::user();
        Log::info('User data: ', ['user' => $userdata]);
        if (Hash::check($request->oldpassword, $userdata->password)) {

            // Update user's password
            $userdata->password = Hash::make($request->newpassword);
            $userdata->save();
            Log::info('Password updated successfully for user: ', ['user' => $userdata]);
            return redirect()->route('adminprofile')->with('success', 'Password Changed successfully..!!!!');
        } else {
            return back()->with('error', 'Failed to update, check old password');
        }
    }
}
