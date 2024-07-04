<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AddVariant;
use App\Models\AdPost;
use App\Models\CarList;
use App\Models\PostOffices;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Auth;
use Exception;
use Illuminate\Support\Facades\Hash;

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
        return redirect()->route('loginuser')->with('failure', 'Invalid credentials');
    }

    public function logoutuserfront()
    {
        \Session::flush();
        Auth::guard('registeruser')->logout();
        return redirect()->route('loginuser');
    }

    public function showstatepincode($selecteddistrict)
    {
        $statedata = PostOffices::where('District', $selecteddistrict)->first();
        // dd($statedata);
        return response()->json($statedata);
    }

    public function changeuserpassword(Request $request)
    {
        $userdata = Auth::guard('registeruser')->user();
        // dd($userdata);
        if (Hash::check($request->oldpassword, $userdata->password)) {
            $userdata->update([
                'password' => Hash::make($request->newpassword),
            ]);

            Log::info('Password updated successfully for user: ', ['user' => $userdata]);
            return redirect()->route('userprofile')->with('success', 'Password Changed successfully..!!!!');
        } else {
            return redirect()->route('userprofile')->with('error', 'Fail to reset try again...');
        }
    }

    public function resetPasswordUser(Request $req)
    {

        $data = RegisterUser::where('contactno', '=', $req->phonenumber)->first();
        if ($data) {
            $otp = rand(100000, 999999);
            $data->randomno = $otp;
            $data->save();
            return response()->json(['msg' => 'success', 'data' => ['id' => $data->id]]);
        }

        return response()->json(['msg' => 'failure']);
    }

    public function verifyotp(Request $request)
    {
        // dd($request->registerid);
        $user = RegisterUser::find($request->registerid);
        // dd($user);
        if ($user && $user->randomno == implode('', array_slice($request->all(), 1, 6))) {
            // OTP verified
            return response()->json(['msg' => 'success', 'data' => ['id' => $user->id]]);
        }

        return response()->json(['msg' => 'failure']);
    }

    public function updatePassword(Request $request)
    {
        // Validate and update the new password
        $request->validate([
            'newpassword' => 'required',
        ]);

        $user = RegisterUser::find($request->otpuserid);
        if ($user) {
            $user->update([
                'password' => Hash::make($request->newpassword),
            ]);
            return redirect()->route('loginuser')->with('status', 'Password updated successfully!');
        } else {
            return back();
        }

    }

    public function edituserprofile(Request $req)
    {
        try {

            $profiledata = RegisterUser::findOrFail($req->userid);
            $profiledata->district = $req->district;
            $profiledata->state = $req->state;
            $profiledata->pincode = $req->pincode;
            $profiledata->addresss = $req->addresss;

            if ($req->hasFile('dp')) {
                $req->validate([
                    'dp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('dp');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $profiledata['dp'] = $filename;
            }
            $profiledata->save();

            return back()->with('success', 'Profile Updated successfully.');

        } catch (Exception $e) {
            return back()->with('error', 'Failed to update profile. ' . $e->getMessage());
        }
    }

    public function filterbrandname($selectedbrandname)
    {
        $carlistdata = CarList::where('brandname', $selectedbrandname)->get();
        // dd($statedata);
        return response()->json($carlistdata);
    }
    public function filtermodalname($selectedcar)
    {
        $carmodalname = AddVariant::where('carname', $selectedcar)->get();
        // dd($statedata);
        return response()->json($carmodalname);
    }

    public function insertadpost(Request $rq)
    {
        //dd($rq->all());
        try {
            $data = $rq->validate([
                'brandname' => 'required',
                'carname' => 'required',
                'modalname' => 'required',
                'district' => 'required',
                'state' => 'required',
                'pincode' => 'required',
                'price' => 'required',
                'kilometersdriven' => 'required',
                'fueltype' => 'required',
                'registeryear' => 'required',
                'manufactureyear' => 'required',
                'ownernumbers' => 'required',
                'transmissiontype' => 'required',
                'color' => 'required',
                'insurance' => 'required',
                'registertype' => 'required',
                'lastupdated' => 'required',
                'images' => 'required',
            ]);
            $positions = $rq->input('positions');
            $files = $rq->file('images');
            $imageData = [];
            if ($files) {
                foreach ($files as $index => $file) {
                    if ($file->isValid()) {
                        $image_name = md5(rand(1000, 10000));
                        $extension = strtolower($file->getClientOriginalExtension());
                        $image_fullname = $image_name . '.' . $extension;
                        $uploaded_path = "assets/backend-assets/images/";
                        $image_url = $uploaded_path . $image_fullname;
                        $file->move(public_path($uploaded_path), $image_fullname);

                        $position = $positions[$index];
                        $imageData[] = [
                            'label' => $position,
                            'imageurl' => $uploaded_path . $image_fullname,
                        ];
                    }
                }

            }

            $jsonImageData = json_encode($imageData);
            AdPost::create([
                'brandname' => $rq->brandname,
                'carname' => $rq->carname,
                'modalname' => $rq->modalname,
                'district' => $rq->district,
                'state' => $rq->state,
                'pincode' => $rq->pincode,
                'price' => $rq->price,
                'kilometersdriven' => $rq->kilometersdriven,
                'fueltype' => $rq->fueltype,
                'registeryear' => $rq->registeryear,
                'manufactureyear' => $rq->manufactureyear,
                'ownernumbers' => $rq->ownernumbers,
                'transmissiontype' => $rq->transmissiontype,
                'color' => $rq->color,
                'insurance' => $rq->insurance,
                'registertype' => $rq->registertype,
                'lastupdated' => $rq->lastupdated,
                'images' => $jsonImageData

            ]);
            Log::info('Add Post Inserted Successfully: ', ['adpost' => $data]);
            return back()->with('success', 'Ad Post Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('addadshow')->with('error', $e->getMessage());
            //return redirect()->route('addadshow')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deleteadpost($id)
    {
        $data = AdPost::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updateadpost(Request $rq)
    {
        // dd($rq->all());
        try {
            $data = $rq->validate([
                'brandname' => 'required',
                'carname' => 'required',
                'modalname' => 'required',
                'district' => 'required',
                'state' => 'required',
                'pincode' => 'required',
                'price' => 'required',
                'kilometersdriven' => 'required',
                'fueltype' => 'required',
                'registeryear' => 'required',
                'manufactureyear' => 'required',
                'ownernumbers' => 'required',
                'transmissiontype' => 'required',
                'color' => 'required',
                'insurance' => 'required',
                'registertype' => 'required',
                'lastupdated' => 'required',
                'images' => 'required',
            ]);

            $positions = $rq->input('positions');
            $imgthumbs = $rq->input('imgthumbnail');

            $files = $rq->file('images');
            $imageData = [];

            if ($files) {
                foreach ($files as $index => $file) {
                    if ($file) {
                        if ($file->isValid()) {
                            $image_name = md5(rand(1000, 10000));
                            $extension = strtolower($file->getClientOriginalExtension());
                            $image_fullname = $image_name . '.' . $extension;
                            $uploaded_path = "assets/backend-assets/images/";
                            $image_url = $uploaded_path . $image_fullname;
                            $file->move(public_path($uploaded_path), $image_fullname);
                            $position = $positions[$index];
                            $imageData[] = [
                                'label' => $position,
                                'imageurl' => $image_url,
                            ];
                        }
                    }
                }
            }
            foreach($positions as $index =>  $row){
                $imgthumb = $imgthumbs[$index];
                $imageData[] = [
                    'label' => $row,
                    'imageurl' => $imgthumb,
                ];
            }
            $uniqueImageData = collect($imageData)->unique('label')->values()->all();

            $jsonImageData = json_encode($uniqueImageData);
            AdPost::where('id', $rq->postid)->update([
                'brandname' => $rq->brandname,
                'carname' => $rq->carname,
                'modalname' => $rq->modalname,
                'district' => $rq->district,
                'state' => $rq->state,
                'pincode' => $rq->pincode,
                'price' => $rq->price,
                'kilometersdriven' => $rq->kilometersdriven,
                'fueltype' => $rq->fueltype,
                'registeryear' => $rq->registeryear,
                'manufactureyear' => $rq->manufactureyear,
                'ownernumbers' => $rq->ownernumbers,
                'transmissiontype' => $rq->transmissiontype,
                'color' => $rq->color,
                'insurance' => $rq->insurance,
                'registertype' => $rq->registertype,
                'lastupdated' => $rq->lastupdated,
                'images' => $jsonImageData
            ]);

            Log::info('Ad Post Updated Successfully: ', ['adpost' => $data]);
            return back()->with('success', 'Ad Post Updated..!!!!');
        } catch (Exception $e) {
            return redirect()->route('editadshow')->with('error', $e->getMessage());
        }
    }

}
