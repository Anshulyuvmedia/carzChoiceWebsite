<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\AddFeature;
use App\Models\AddSpecification;
use App\Models\AddVariant;
use App\Models\AdPost;
use App\Models\CarList;
use App\Models\CarLoanEnquiry;
use App\Models\CompareVehicle;
use App\Models\DisplaySetting;
use App\Models\PostOffices;
use App\Models\Pincode;
use App\Models\RegisterDealer;
use App\Models\VehicleImage;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Hash;
use DB;

class FrontendStore extends Controller
{

    public function register_customer(Request $request)
    {
        // dd($request->all());
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
        $data->usertype = $request->input('usertype');
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
                return back()->with('successtest', 'Registration Successfully..!!!');
            } else {
                return back()->with('failuretest', 'Invalid Details..');
            }
        } catch (Exception $e) {
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
        Session::flush();
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
        $carmodalname = AddVariant::where('showhidestatus', '=', 1)->where('carname', $selectedcar)->get();
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
            foreach ($positions as $index => $row) {
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
            return back()->with('success', 'Ad Post Updated..!!!!')->with($rq->postid);
        } catch (Exception $e) {
            return redirect()->route('editadshow', ['id' => $rq->postid])->with('error', $e->getMessage());
        }
    }

    public function getupcomingvehiclebybrands($selectedbrand)
    {
        $upcoming = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('car_lists.brandname', '=', $selectedbrand)
            ->where('display_settings.category', '=', 'Upcoming')->get();


        $variantdata = AddVariant::where('showhidestatus', '=', 1)->get();
        $trendingUpcomingNames = $upcoming->pluck('carname');

        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames);
        $matchesupcoming = $matchesupcoming->map(function ($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
                $item->brandname = $trendingItem->brandname;
                $item->price = $trendingItem->price; // Add other necessary fields here
            }
            return $item;
        })->values();
        //  dd($matchesupcoming);
        return response()->json(['data' => $matchesupcoming->toArray()]);
    }

    public function filtervariants($finalvalue)
    {
        $variantdata = AddVariant::where('showhidestatus', '=', 1)->where('carname', $finalvalue)->get();
        return response()->json($variantdata);
    }

    public function filterbyfueltypesandtras(Request $rq)
    {
        $carname = $rq->input('carname');
        $checkboxes = $rq->input('checkboxes');

        $variantdata = AddVariant::where('showhidestatus', '=', 1)->where('carname', $carname);

        // Check if checkboxes are not empty
        if (!empty($checkboxes)) {
            $variantdata->where(function ($query) use ($checkboxes) {
                foreach ($checkboxes as $value) {
                    $query->orWhereJsonContains('fueltype', $value);
                    $query->orWhereJsonContains('transmission', $value);
                }
            });
        }
        $variantdata = $variantdata->get();
        // dd($variantdata);
        return response()->json($variantdata);
    }

    public function filtercities($location)
    {
        $filtereddata = Pincode::where('City', $location)->get();
        // dd($filtereddata[0]);
        return response()->json($filtereddata);
    }

    public function insertcarloanenquiry(Request $rq)
    {
        // dd($rq->all());
        try {
            CarLoanEnquiry::create([
                'carname' => $rq->carname,
                'enquirytype' => $rq->enquirytype,
                'city' => $rq->cityname,
                'fullname' => $rq->fullname,
                'mobileno' => $rq->mobileno,

            ]);
            return back()->with('success', 'Thank you We Will Reach You Soon!!!!');
        } catch (Exception $e) {
            //return redirect()->route('carloan')->with('error', $e->getMessage());
            return redirect()->route('carloan')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function filterhomepagecars(Request $rq)
    {
        // dd($rq->all());
        $carname = explode(',', $rq->input('carname'));

        $variant = AddVariant::join('vehicle_images', 'vehicle_images.vehicle', '=', 'add_variants.carname')
            ->select('add_variants.*', 'vehicle_images.addimage')->where('add_variants.carname', $carname)->get();

        session(['variants' => $variant]);

        return response()->json([
            'success' => true,
            'redirect_url' => route('findcar', ['filtertype' => $rq->carname])
        ], 200);
    }

    public function filterByAttribute(Request $request)
    {

        $attribute = $request->input('attribute');
        //dd($attribute);

        // Step 1: Retrieve the type corresponding to the given attribute from Master table
        if ($attribute == 'Upcoming' || $attribute == 'Newly Launched') {
            $type = $attribute;
            // dd($type);
        } else {
            $type = Master::where('value', $attribute)->pluck('type')->first();
            if (!$type) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid attribute'
                ], 400);
            }
        }

        // Step 2: Based on the type, filter AddVariant data
        switch ($type) {
            case 'Newly Launched':

                $variantData = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
                    ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
                    ->join('add_variants', 'add_variants.carname', '=', 'car_lists.carname')
                    ->select('display_settings.*', 'add_variants.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
                    ->where('vehicle_images.type', '=', 'Outer view')
                    ->where('add_variants.availabelstatus', '=', 'Newly Launched')->get()->unique('carmodalname');
                // dd($variantData);

                break;
            case 'Upcoming':

                $variantData = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
                    ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
                    ->join('add_variants', 'add_variants.carname', '=', 'car_lists.carname')
                    ->select('display_settings.*', 'add_variants.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
                    ->where('vehicle_images.type', '=', 'Outer view')
                    ->where('display_settings.category', '=', 'Upcoming')->get();
                // dd($variantData);

                break;
            case 'Brand':
                $variantData = AddVariant::join('vehicle_images', 'vehicle_images.vehicle', '=', 'add_variants.carname')
                    ->select('add_variants.*', 'vehicle_images.addimage')
                    ->where('add_variants.brandname', $attribute)
                    ->where('add_variants.showhidestatus', '=', 1)
                    ->get()->unique('carname');
                break;

            case 'Body Type':
                $variantData = AddVariant::join('vehicle_images', 'vehicle_images.vehicle', '=', 'add_variants.carname')
                    ->select('add_variants.*', 'vehicle_images.addimage')
                    ->where('add_variants.bodytype', $attribute)
                    ->where('add_variants.showhidestatus', '=', 1)
                    ->get()->unique('carname');
                break;

            case 'Fuel Type':
                $variantData = AddVariant::join('vehicle_images', 'vehicle_images.vehicle', '=', 'add_variants.carname')
                    ->select('add_variants.*', 'vehicle_images.addimage')
                    ->whereJsonContains('add_variants.fueltype', $attribute)
                    ->where('add_variants.showhidestatus', '=', 1)
                    ->get()->unique('carname');
                break;

            case 'Transmission':
                $variantData = AddVariant::join('vehicle_images', 'vehicle_images.vehicle', '=', 'add_variants.carname')
                    ->select('add_variants.*', 'vehicle_images.addimage')
                    ->whereJsonContains('add_variants.transmission', $attribute)
                    ->where('add_variants.showhidestatus', '=', 1)
                    ->get()->unique('carname');
                break;

            case 'Seating Capacity':

                $parts = explode(' ', $attribute);
                $avalseat = intval($parts[0]);
                // dd($budgetvalue);
                $variantData = AddVariant::join('vehicle_images', 'vehicle_images.vehicle', '=', 'add_variants.carname')
                    ->select('add_variants.*', 'vehicle_images.addimage')
                    ->where('add_variants.seatingcapacity', '<', $avalseat)
                    ->where('add_variants.showhidestatus', '=', 1)
                    ->get()->unique('carname');
                break;

            case 'Budget':
                $parts = explode(' ', $attribute);
                $lowerValue = null;
                $upperValue = null;

                if ($parts[0] === "Below") {
                    $upperValue = intval($parts[1]);
                } elseif ($parts[0] === "Over") {
                    $lowerValue = intval($parts[1]);
                } elseif ($parts[0] === "Range") {
                    $rangeParts = explode('-', $parts[1]);
                    $lowerValue = intval($rangeParts[0]);
                    $upperValue = intval($rangeParts[1]);
                }

                $variantData = AddVariant::join('vehicle_images', 'vehicle_images.vehicle', '=', 'add_variants.carname')
                    ->select('add_variants.*', 'vehicle_images.addimage')
                    ->where('add_variants.showhidestatus', '=', 1)
                    ->get();

                $filteredVariants = $variantData->filter(function ($variant) use ($lowerValue, $upperValue) {
                    $mileages = json_decode($variant->mileages, true);

                    foreach ($mileages as $fuelType => $mileage) {
                        $mileage = intval($mileage);

                        if ($lowerValue !== null && $mileage < $lowerValue) {
                            continue;
                        }

                        if ($upperValue !== null && $mileage > $upperValue) {
                            continue;
                        }

                        return true;
                    }

                    return false;
                })->unique('carname');

                break;


            default:
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid type'
                ], 400);
        }
        // dd($variantData);

        // Store the result in session
        session(['variants' => $variantData]);

        // Return the response
        return response()->json([
            'success' => true,
            'redirect_url' => route('findcar', ['filtertype' => $attribute . " New"])
        ], 200);
    }

    public function showcomparecars($fullId)
    {

        $data = CompareVehicle::find($fullId);
        // dd($data);
        if (!$data) {
            return response()->json(['success' => false, 'message' => 'No data found'], 404);
        }

        $new = [];

        $ids = json_decode($data->vehicles);
        $specs = AddSpecification::whereIn('vehicleid', $ids)->get();
        $features = AddFeature::whereIn('vehicleid', $ids)->get();

        // Fetch details for the vehicles based on IDs
        $newarray = AddVariant::whereIn('id', $ids)
            ->where('showhidestatus', '=', 1)
            ->select('id', 'carname', 'carmodalname', 'brandname', 'price')
            ->get();

        // Fetch images for the vehicles based on carname from newarray
        $images = VehicleImage::whereIn('vehicle', $newarray->pluck('carname'))
            ->where('type', 'Outer view')
            ->get();

        // Merge images into newarray based on index
        foreach ($newarray as $key => $vehicle) {
            $vehicle->addimage = $images->where('vehicle', $vehicle->carname)->first()->addimage ?? null;
            $vehicle->specifications = json_decode($specs->where('vehicleid', $vehicle->id)->first()->specifications ?? '[]', true);
            $vehicle->features = json_decode($features->where('vehicleid', $vehicle->id)->first()->features ?? '[]', true);
        }
        $new[] = ['id' => $data->id, 'vehicles' => $newarray];
        // dd($new);

        session(['new' => $new]);

        return response()->json([
            'success' => true,
            'redirect_url' => route('compareresult', ['id' => $data->id])
        ], 200);
    }

    public function filterbyfuelcardetails(Request $rq)
    {
        $carname = $rq->input('carname');
        $checkboxes = $rq->input('checkboxes');

        $variantdata = AddVariant::where('showhidestatus', '=', 1)->where('carname', $carname);

        // Check if checkboxes are not empty
        if (!empty($checkboxes)) {
            $variantdata->where(function ($query) use ($checkboxes) {
                foreach ($checkboxes as $value) {
                    $query->orWhereJsonContains('fueltype', $value);
                    $query->orWhereJsonContains('transmission', $value);
                }
            });
        }
        $variantdata = $variantdata->get();
        return response()->json($variantdata);
    }

    public function insertcompareoffcanvas(Request $rq)
    {
        // if (Auth::guard('registeruser')->check()) {
        //     $user = Auth::guard('registeruser')->user();
        $compare = CompareVehicle::create([
            'vehicles' => json_encode($rq->compareid),
            // 'userid' => $user->id,
        ]);
        // dd($compare);
        return redirect()->route('compareresult', ['id' => $compare->id]);
        // } else {
        //     return view('frontend.loginuser');
        // }
    }

    public function makefilterfindcar(Request $rq)
    {
        parse_str($rq->input('formdata'), $formData);

        $bodyTypes = $formData['bodytypes'] ?? [];
        $transmissions = $formData['transmissions'] ?? [];
        $fuelTypes = $formData['fueltypes'] ?? [];
        $seatingCaps = $formData['seatingcaps'] ?? [];
        $minPrice = $formData['minprice'] ?? 0;
        $maxPrice = $formData['maxprice'] ?? PHP_INT_MAX;
        // dd([
        //     'bodyTypes' => $bodyTypes,
        //     'transmissions' => $transmissions,
        //     'fuelTypes' => $fuelTypes,
        //     'seatingCaps' => $seatingCaps,
        //     'minPrice' => $minPrice,
        //     'maxPrice' => $maxPrice,
        // ]);

        // Build the query
        $query = AddVariant::query();

        if (!empty($bodyTypes)) {
            $query->whereIn('bodytype', $bodyTypes);
        }

        if (!empty($transmissions)) {
            foreach ($transmissions as $transmission) {
                $query->whereRaw("JSON_CONTAINS(transmission, '\"$transmission\"')");
            }
        }

        if (!empty($fuelTypes)) {
            foreach ($fuelTypes as $fuelType) {
                $query->whereRaw("JSON_CONTAINS(fueltype, '\"$fuelType\"')");
            }
        }

        if (!empty($seatingCaps)) {
            $query->where('seatingcapacity', $seatingCaps);
        }

        if ($minPrice || $maxPrice) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }

        $query->leftJoin('vehicle_images', 'add_variants.id', '=', 'vehicle_images.variantid')
            ->where('add_variants.showhidestatus', '=', 1)
            ->select('add_variants.*', 'vehicle_images.addimage');

        $variants = $query->get();

        // dd($variants);
        return response()->json($variants);
    }

    public function registerdealer(Request $req)
    {
        // dd($rq->all());
        try {

            //Mutiple Image Upload
            $image = array();
            if ($files = $req->file('businesspics')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $extension = strtolower($file->getClientOriginalExtension());
                    $image_fullname = $image_name . '.' . $extension;
                    $uploaded_path = "assets/backend-assets/images/";
                    $image_url = $uploaded_path . $image_fullname;
                    $file->move($uploaded_path, $image_fullname);
                    $image[] = $image_url;
                }
            }

            $image2 = array();
            if ($files = $req->file('officepics')) {
                foreach ($files as $file) {
                    $image_name2 = md5(rand(1000, 10000));
                    $extension2 = strtolower($file->getClientOriginalExtension());
                    $image_fullname2 = $image_name2 . '.' . $extension2;
                    $uploaded_path2 = "assets/backend-assets/images/";
                    $image_url2 = $uploaded_path2 . $image_fullname2;
                    $file->move($uploaded_path2, $image_fullname2);
                    $image2[] = $image_url2;
                }
            }

            RegisterDealer::create([
                'businessname' => $req->businessname,
                'dealertype' => $req->dealertype,
                'mobilenumber' => $req->mobilenumber,
                'whatsappnumber' => $req->whatsappnumber,
                'brands' => json_encode($req->brands),
                'district' => $req->district,
                'state' => $req->state,
                'pincode' => $req->pincode,
                'email' => $req->email,
                'businesspics' => $image2 = count($image2) > 0 ? implode(',', $image2) : null,
                'officepics' => $image = count($image) > 0 ? implode(',', $image) : null,

            ]);
            return back()->with('success', 'Registered Successfully..');
        } catch (Exception $e) {
            return redirect()->route('userprofile')->with('error', $e->getMessage());
            //return redirect()->route('userprofile')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function usedcarfilter(Request $request)
    {
        $attribute = $request->input('attribute');
        // dd($request);

        // Step 1: Retrieve the type corresponding to the given attribute from Master table
        $type = Master::where('value', $attribute)->pluck('type')->first();
        // dd($type);
        if (!$type) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid attribute'
            ], 400);
        }

        // Step 2: Based on the type, filter AddVariant data
        switch ($type) {
            case 'Brand':
                $variantData = AdPost::select('*', 'images as addimage', 'ad_posts.modalname as carmodalname')->where('brandname', $attribute)->get()->unique('carname');
                $variantData->transform(function ($item) {
                    $images = json_decode($item->addimage, true);
                    if (is_array($images) && !empty($images)) {
                        $firstImageUrl = $images[0]['imageurl'];
                        $item->addimage = basename($firstImageUrl);
                    } else {
                        $item->addimage = null;
                    }
                    return $item;
                });
                break;

            case 'Body Type':
                $variantData = AdPost::join('add_variants', 'add_variants.carname', '=', 'ad_posts.carname')
                    ->select('add_variants.bodytype', 'ad_posts.*', 'ad_posts.images as addimage', 'ad_posts.modalname as carmodalname')->where('add_variants.showhidestatus', '=', 1)->where('add_variants.bodytype', $attribute)
                    ->get()->unique('carname');
                $variantData->transform(function ($item) {
                    $images = json_decode($item->addimage, true);
                    if (is_array($images) && !empty($images)) {
                        $firstImageUrl = $images[0]['imageurl'];
                        $item->addimage = basename($firstImageUrl);
                    } else {
                        $item->addimage = null;
                    }
                    return $item;
                });
                // dd($variantData);
                break;

            case 'Fuel Type':
                $variantData = AdPost::select('*', 'images as addimage', 'ad_posts.modalname as carmodalname')->where('fueltype', $attribute)->get()->unique('carname');

                $variantData->transform(function ($item) {
                    $images = json_decode($item->addimage, true);
                    if (is_array($images) && !empty($images)) {
                        $firstImageUrl = $images[0]['imageurl'];
                        $item->addimage = basename($firstImageUrl);
                    } else {
                        $item->addimage = null;
                    }
                    return $item;
                });
                break;

            case 'Transmission':
                $variantData = AdPost::join('add_variants', 'add_variants.carname', '=', 'ad_posts.carname')
                    ->where('add_variants.showhidestatus', '=', 1)
                    ->select('add_variants.bodytype', 'ad_posts.*', 'ad_posts.images as addimage', 'ad_posts.modalname as carmodalname')->whereJsonContains('add_variants.transmission', $attribute)
                    ->get()->unique('carname');
                $variantData->transform(function ($item) {
                    $images = json_decode($item->addimage, true);
                    if (is_array($images) && !empty($images)) {
                        $firstImageUrl = $images[0]['imageurl'];
                        $item->addimage = basename($firstImageUrl);
                    } else {
                        $item->addimage = null;
                    }
                    return $item;
                });
                break;

            case 'Seating Capacity':
                $parts = explode(' ', $attribute);
                $avalseat = intval($parts[0]);
                $variantData = AdPost::join('add_variants', 'add_variants.carname', '=', 'ad_posts.carname')
                    ->where('add_variants.showhidestatus', '=', 1)
                    ->select('add_variants.seatingcapacity', 'ad_posts.*', 'ad_posts.images as addimage', 'ad_posts.modalname as carmodalname')->where('add_variants.seatingcapacity', '<', $avalseat)
                    ->get()->unique('carname');
                $variantData->transform(function ($item) {
                    $images = json_decode($item->addimage, true);
                    if (is_array($images) && !empty($images)) {
                        $firstImageUrl = $images[0]['imageurl'];
                        $item->addimage = basename($firstImageUrl);
                    } else {
                        $item->addimage = null;
                    }
                    return $item;
                });
                break;

            case 'Budget':
                $parts = explode(' ', $attribute);
                $budgetvalue = intval($parts[1]) * 100000;
                // dd($budgetvalue);
                $variantData = AdPost::select('*', 'images as addimage', 'ad_posts.modalname as carmodalname')->where('price', '<', $budgetvalue)->get()->unique('carname');
                $variantData->transform(function ($item) {
                    $images = json_decode($item->addimage, true);
                    if (is_array($images) && !empty($images)) {
                        $firstImageUrl = $images[0]['imageurl'];
                        $item->addimage = basename($firstImageUrl);
                    } else {
                        $item->addimage = null;
                    }
                    return $item;
                });
                // dd($variantData);
                break;

            default:
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid type'
                ], 400);
        }
        //  dd($variantData);
        // Store the result in session
        session(['variants' => $variantData]);

        // Return the response
        return response()->json([
            'success' => true,
            'redirect_url' => route('findcar', ['filtertype' => $attribute . " Used"])
        ], 200);
    }

    public function filtercarsbylocation($city)
    {
        $cityname = $city;
        $data = AdPost::select('*', 'images as addimage', 'ad_posts.modalname as carmodalname')->where('District', $cityname)->get();
        $data->transform(function ($item) {
            $images = json_decode($item->addimage, true);
            if (is_array($images) && !empty($images)) {
                $firstImageUrl = $images[0]['imageurl'];
                $item->addimage = basename($firstImageUrl);
            } else {
                $item->addimage = null;
            }
            return $item;
        });
        session(['variants' => $data]);
        // dd($data);
        // Return the response
        return response()->json([
            'success' => true,
            'redirect_url' => route('usedcarbylocation', ['filtertypenew' => $city])
        ], 200);
    }

    public function filterdealersbycity($cityname)
    {

        $dealers = RegisterDealer::where('district', $cityname)->get();
        return response()->json($dealers);
    }

    public function filterdistrictbystate($state)
    {
        $districtsdata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->where('StateName', $state)->get();
        return response()->json($districtsdata);
    }

    public function filternewcardealersbybrand($brand)
    {

        $dealers = RegisterDealer::where('dealertype', '=', 'New Car Dealer')->whereJsonContains('brands', $brand)->get();
        // dd($dealers);
        return response()->json($dealers);
    }
    public function filternewcardealersbycity($citynamedeal)
    {

        $dealerscity = RegisterDealer::where('dealertype', '=', 'New Car Dealer')->where('district', $citynamedeal)->get();
        // dd($dealers);
        return response()->json($dealerscity);
    }
}
