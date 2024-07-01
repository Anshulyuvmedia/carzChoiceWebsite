<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Auth;
class FrontendStore extends Controller
{

    public function register_customer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|unique:register_users,email',
            'contactno' => 'required|unique:register_users,contactno',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);    //The Working Validations
        }

        $randomNumber = rand(100000, 999999);
        $data = new RegisterUser();
        $data->fullname = $request->input('fullname');
        $data->contactno = $request->input('contactno');
        $data->email = $request->input('email');
        $data->password = bcrypt($request->input('password'));
        $data->randomno = $randomNumber;
        $data->save();
        $responsedata = [
            'msg' => 'success',
            'data' => $data->toArray(),
        ];
        return response()->json($responsedata);
    }

    public function verifyregisterotp(Request $request)
    {
        $reqdata = [
            $request->otptest1,
            $request->otptest2,
            $request->otptest3,
            $request->otptest4,
            $request->otptest5,
            $request->otptest6
        ];
        $optnumber = implode($reqdata);

        try {
            $registeruserdata = RegisterUser::where('id', $request->registerid)
                ->where('randomno', $optnumber)
                ->first();
            // dd($registeruserdata);
            if ($registeruserdata) {
                $registeruserdata->update([
                    'verifystatus' => '1',
                ]);
                return back()->with('successtest', 'Thank you, we will reach you soon');
            } else {
                return back()->with('failuretest', 'Invalid Details..!!!!!!!!');
            }
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error($e->getMessage());
            return back()->with('failuretest', 'Error verifying OTP. Please try again later.');
        }
    }

    public function loginuser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $data = RegisterUser::where('email', '=', $credentials)->first();
        // dd($data);
        if ($data && Auth::guard('registeruser')->attempt($credentials)) {
            //dd("HELLO");
            // Authentication passed...
            return redirect()->route('userprofile');
        }
        return redirect()->route('loginuser')->with('error', 'Invalid credentials');
    }

    public function logoutuserfront()
    {
        \Session::flush();
        Auth::guard('registeruser')->logout();
        return redirect()->route('loginuser');
    }
}
