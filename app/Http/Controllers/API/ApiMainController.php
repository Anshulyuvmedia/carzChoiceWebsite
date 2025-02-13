<?php
# “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\RegisterDealer;
use Illuminate\Http\Request;
use App\Models\RegisterUser;
use App\Models\SliderImage;
use App\Models\AdPost;
use App\Models\Carlist;
use App\Models\Master;
use App\Models\AddVariant;
use App\Models\PostOffices;
use App\Models\CompareVehicle;
use App\Models\AddFeature;
use App\Models\VehicleImage;
use App\Models\InsuranceLead;
use App\Models\Review;
use App\Models\ProsCons;
use App\Models\Pincode;
use App\Models\CarLoanEnquiry;
use App\Models\Blog;
use App\Models\VariantFaq;
use App\Models\Lead;
use App\Models\AddSpecification;
use Auth, DB, Log, Cache, Exception;
use Illuminate\Support\Facades\Validator;
class ApiMainController extends Controller
{
    public function loginuser(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $data = RegisterUser::where('email', $credentials['email'])->first();

        if ($data && Auth::guard('registeruser')->attempt($credentials)) {
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'data' => $data
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials'
        ], 401);
    }

    public function register_customer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|unique:register_users,email',
            'contactno' => 'required|unique:register_users,contactno',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
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

        return response()->json([
            'success' => true,
            'message' => 'Registration successful',
            'data' => $data
        ]);
    }

    public function featuredCars()
    {
        $imagesdata = SliderImage::first();
        $adposts = AdPost::orderBy('created_at', 'desc')->get();
        $carlists = Carlist::get();
        $bodytype = Master::where('type', '=', 'Body Type')->get();

        $trending = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Trending')
            ->get();

        $popular = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Popular')->get();

        $upcoming = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Upcoming')->get();


        $offer = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.type', '=', 'Offers On Popular Cars')->get();

        $topcarindia = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.type', '=', 'Top Cars In India')->get();

        $variantdata = AddVariant::where('showhidestatus', '=', 1)->get();
        $trendingCarNames = $trending->pluck('carname');
        $trendingPopularNames = $popular->pluck('carname');
        $trendingUpcomingNames = $upcoming->pluck('carname');
        $offer = $offer->pluck('carname');
        $topcarsinindia = $topcarindia->pluck('carname');

        $matches = $variantdata->whereIn('carname', $trendingCarNames)->unique('carname');
        $matches = $matches->map(function ($item) use ($trending) {
            $trendingItem = $trending->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        Log::info('Matching Trending:', $matches->toArray());
        $matchespopular = $variantdata->whereIn('carname', $trendingPopularNames)->unique('carname');
        $matchespopular = $matchespopular->map(function ($item) use ($popular) {
            $trendingItem = $popular->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames)->unique('carname');
        $matchesupcoming = $matchesupcoming->map(function ($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $matchesoffer = $variantdata->whereIn('carname', $offer)->unique('carname');
        $matchesoffer = $matchesoffer->map(function ($item) use ($offer) {
            $trendingItem = $offer->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $matchestopcarsindia = $variantdata->whereIn('carname', $topcarsinindia)->unique('carname');
        $matchestopcarsindia = $matchestopcarsindia->map(function ($item) use ($topcarindia) {
            $trendingItem = $topcarindia->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $statedata = PostOffices::select('StateName', DB::raw('COUNT(id) as count'))->groupBy('StateName')->get();

        return response()->json([
            'success' => true,
            'data' => [
                'imagesdata' => $imagesdata,
                'variantdata' => $variantdata,
                'statedata' => $statedata,
                'bodytype' => $bodytype,
                'carlists' => $carlists,
                'adposts' => $adposts,
                'matches' => $matches,
                'matchespopular' => $matchespopular,
                'matchesupcoming' => $matchesupcoming,
                'matchesoffer' => $matchesoffer,
                'matchestopcarsindia' => $matchestopcarsindia
            ]
        ]);
    }

    public function brandlist()
    {
        $masterdata = Master::where('type', '=', 'Brand')->get();
        return response()->json([
            'success' => true,
            'data' => $masterdata
        ]);
    }

    public function filterByAttribute(Request $request)
    {
        $attribute = $request->input('attribute');
        Log::info('Checking attribute:', ['attribute' => $attribute]);

        if ($attribute == 'Upcoming' || $attribute == 'Newly Launched') {
            $type = $attribute;
        } else {
            $type = Master::where('value', $attribute)->pluck('type')->first();
            if (!$type) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid attribute'
                ], 400);
            }
        }


        switch ($type) {
            case 'Newly Launched':
                $variantData = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
                    ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
                    ->join('add_variants', 'add_variants.carname', '=', 'car_lists.carname')
                    ->select('display_settings.*', 'add_variants.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
                    ->where('vehicle_images.type', '=', 'Outer view')
                    ->where('add_variants.availabelstatus', '=', 'Newly Launched')->get()->unique('carmodalname');
                break;
            case 'Upcoming':
                $variantData = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
                    ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
                    ->join('add_variants', 'add_variants.carname', '=', 'car_lists.carname')
                    ->select('display_settings.*', 'add_variants.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
                    ->where('vehicle_images.type', '=', 'Outer view')
                    ->where('display_settings.category', '=', 'Upcoming')->get();
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
                Log::info('Checking type:', ['avalseat' => $avalseat]);
                $variantData = AddVariant::join('vehicle_images', 'vehicle_images.vehicle', '=', 'add_variants.carname')
                    ->select('add_variants.*', 'vehicle_images.addimage')
                    ->where('add_variants.seatingcapacity', '<=', $avalseat)
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

                $variantData = $variantData->filter(function ($variant) use ($lowerValue, $upperValue) {
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
        Cache::forget('variants_data');
        Cache::put('variants_data', $variantData, now()->addMinutes(10));    // New thing learned data will be stored in cache till 10 minutes

        return response()->json([
            'success' => true,
            'variants' => $variantData,
            'redirect_url' => route('api.findcar', ['filtertype' => $attribute . " New"])
        ], 200);
    }

    public function findcar($filtertype)
    {
        $filtertypenew = $filtertype;
        $results = Master::where('type', '=', 'Body Type')
            ->orWhere('type', '=', 'Transmission')
            ->orWhere('type', '=', 'Fuel Type')
            ->orWhere('type', '=', 'Seating Capacity')
            ->get();

        // Retrieve cached data
        $variants = Cache::get('variants_data', []);

        return response()->json([
            'success' => true,
            'data' => [
                'variants' => $variants,
                'results' => $results,
                'filtertypenew' => $filtertypenew
            ]
        ]);
    }

    public function showcomparecars($id)
    {
        $compare = [];
        if (RegisterUser::find($id)) {
            $compare = CompareVehicle::where('adminid', '=', '1')->orWhere('userid', '=', $id)->get();
        } else {
            $compare = CompareVehicle::where('adminid', '=', '1')->get();
        }

        $new = [];
        foreach ($compare as $index => $data) {
            $ids = json_decode($data->vehicles);

            // Fetch details for the vehicles based on IDs
            $newarray = AddVariant::whereIn('id', $ids)
                ->select('id', 'carname', 'carmodalname', 'brandname', 'price')
                ->where('showhidestatus', '=', 1)
                ->get();

            // Fetch images for the vehicles based on carname from newarray
            $images = VehicleImage::whereIn('vehicle', $newarray->pluck('carname'))
                ->where('type', 'Outer view')
                ->get();

            // Merge images into newarray based on index
            foreach ($newarray->take(2) as $key => $vehicle) {
                $vehicle->addimage = $images->where('vehicle', $vehicle->carname)->first()->addimage ?? null;
            }

            $new[] = ['id' => $data->id, 'vehicles' => $newarray->take(2)];
        }

        return response()->json([
            'success' => true,
            'data' => $new
        ]);
    }

    public function showcompareresults($fullId)
    {
        $data = CompareVehicle::find($fullId);
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

        Cache::forget('new');
        Cache::put('new', $new, now()->addMinutes(10));

        return response()->json([
            'success' => true,
            'redirect_url' => route('api.compareresult', ['id' => $data->id])
        ], 200);
    }

    public function compareresult($id)
    {
        $new = Cache::get('new', []);
        $data = CompareVehicle::where('id', $id)->first();
        if (!$data) {
            return response()->json(['success' => false, 'message' => 'No data found'], 404);
        }

        $ids = json_decode($data->vehicles);
        $specs = AddSpecification::whereIn('vehicleid', $ids)->get();
        $features = AddFeature::whereIn('vehicleid', $ids)->get();

        // Fetch details for the vehicles based on IDs
        $newarray = AddVariant::join('car_lists', 'car_lists.carname', '=', 'add_variants.carname')
            ->where('add_variants.showhidestatus', '=', 1)
            ->select('add_variants.id', 'add_variants.carname', 'add_variants.carmodalname', 'add_variants.brandname', 'add_variants.price', 'car_lists.colors')
            ->whereIn('add_variants.id', $ids)
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

        $allbrands = Master::where('type', '=', 'Brand')->get();

        return response()->json([
            'success' => true,
            'data' => [
                'new' => $new,
                'allbrands' => $allbrands
            ]
        ]);
    }

    public function bookvehiclenow(Request $request)
    {
        try {
            $data = $request->validate([
                'mobile' => 'required',
                'email' => 'required|email',
                'city' => 'required',
                'vehiclename' => 'required',
                'statename' => 'required',
            ]);
            $leads = Lead::create([
                'fullname' => $request->fullname,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'city' => $request->city,
                'vehicle' => $request->vehiclename,
                'state' => $request->statename,
                'remarks' => $request->remarks,
            ]);
            Log::info('Lead Inserted Successfully: ', ['lead' => $leads]);
            return response()->json([
                'success' => true,
                'message' => 'Lead Added Successfully',
                'data' => $leads
            ], 201);

        } catch (Exception $e) {
            Log::error('Error inserting lead: ', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to add lead. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function news()
    {
        $newsdata = Blog::orderBy('created_at', 'desc')->where('categorytype', '=', 'Car News')->get();
        return response()->json([
            'success' => 'true',
            'allnews' => $newsdata,
        ]);
    }

    public function latestcarupdate()
    {
        $carnews = Blog::orderBy('created_at', 'desc')->where('categorytype', '=', 'Car News')->get();
        $expertreviews = Blog::orderBy('created_at', 'desc')->where('categorytype', '=', 'Expert Reviews')->get();
        $videos = Blog::orderBy('created_at', 'desc')->where('categorytype', '=', 'Videos')->get();
        return response()->json([
            'carnews' => $carnews,
            'expertreviews' => $expertreviews,
            'videos' => $videos,
        ]);
    }

    public function requestinsurance(Request $req)
    {
        try {
            $data = $req->validate([
                'brandname' => 'required',
                'carname' => 'required',
                'modalname' => 'required',
                'city' => 'required',
                'registerdate' => 'required',
                'fullname' => 'required',
                'emailaddress' => 'required|email',
                'phonenumber' => 'required',
            ]);

            $insuranceLead = InsuranceLead::create([
                'brandname' => $req->brandname,
                'carname' => $req->carname,
                'modalname' => $req->modalname,
                'city' => $req->city,
                'registerdate' => $req->registerdate,
                'fullname' => $req->fullname,
                'emailaddress' => $req->emailaddress,
                'phonenumber' => $req->phonenumber,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Insurance request submitted successfully',
                'data' => $insuranceLead
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to submit insurance request. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function electricpage()
    {
        $electriccars = CarList::join('add_variants', 'car_lists.carname', '=', 'add_variants.carname')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('add_variants.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage', 'add_variants.fueltype')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('showhidestatus', '=', 1)
            ->get();

        $electricfinal = $electriccars->filter(function ($car) {
            $fueltypes = json_decode($car->fueltype, true);

            // Ensure it's an array before checking
            return is_array($fueltypes) && in_array('Electric', array_map('trim', $fueltypes));
        });

        $hybridCars = $electriccars->filter(function ($car) {
            $fueltypes = json_decode($car->fueltype, true);

            return is_array($fueltypes) && in_array('Hybrid', array_map('trim', $fueltypes));
        });

        Log::info("Electric Cars : ", ['cars' => $electricfinal]);
        Log::info("Hybrid Cars : ", ['cars' => $hybridCars]);

        return response()->json([
            'success' => true,
            'data' => [
                'electricfinal' => $electricfinal->values(), // Reset keys
                'hybridCars' => $hybridCars->values(),
            ]
        ]);
    }

    public function filternewcardealers(Request $req)
    {

        $brand = $req->query('brandname');
        $city = $req->query('cityname');

        $dealers = RegisterDealer::query();

        if ($brand) {
            $dealers->where('dealertype', '=', 'New Car Dealer')->whereJsonContains('brands', $brand);
        }

        if ($city) {
            $dealers->where('dealertype', '=', 'New Car Dealer')->where('district', $city);
        }

        return response()->json([
            'success' => true,
            'dealers' => $dealers->get()
        ]);
    }

    public function oldvehiclelist()
    {
        $oldvehicles = AdPost::orderByDesc('created_at')->get();
        return response()->json($oldvehicles);
    }

    public function sellvehicle(Request $rq)
    {
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
            Log::info('Request Data', ['positions' => $rq->input('positions'), 'images' => $rq->file('images')]);

            $positions = $rq->input('positions', []);
            $files = $rq->file('images', []);
            $imageData = [];
            if (is_array($files) && count($files) > 0) {
                foreach ($files as $index => $file) {
                    if ($file instanceof \Illuminate\Http\UploadedFile && $file->isValid()) {
                        $image_name = md5(uniqid()) . '.' . strtolower($file->getClientOriginalExtension()); // Unique name for each image
                        $uploaded_path = "assets/backend-assets/images/";
                        $file->move(public_path($uploaded_path), $image_name);
                        $image_url = $uploaded_path . $image_name;

                        // Get the corresponding labels for this image
                        if (isset($positions[$index])) {
                            $splitPositions = explode(',', $positions[$index]); // Split multi-position values
                            foreach ($splitPositions as $position) {
                                $imageData[] = [
                                    'label' => trim($position), // Trim spaces if any
                                    'imageurl' => $image_url, // Ensure correct image URL
                                ];
                            }
                        }
                    }
                }
            }

            $jsonImageData = json_encode($imageData);
            Log::info('jsonImageData', ['jsonImageData' => $jsonImageData]);
            $finaldata = AdPost::create([
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
                'images' => $jsonImageData,
                'userid' => $rq->userid,
            ]);

            Log::info('Ad Post Inserted Successfully: ', ['adpost' => $finaldata]);
            return response()->json([
                'success' => true,
                'message' => 'Ad Post Added Successfully',
                'data' => $finaldata
            ], 201);
        } catch (Exception $e) {
            Log::error('Error inserting ad post: ', ['error' => $e->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Failed to add ad post. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function givereview(Request $req)
    {
        try {
            $data = $req->validate([
                'vehicle' => 'required',
                'customerfullname' => 'required',
                'ratings' => 'required',
                'discription' => 'required',
                'reviewimg' => 'required|image|mimes:jpeg,png,jpg,webp',
            ]);

            if ($req->hasFile('reviewimg')) {
                $filereviewimg = $req->file('reviewimg');
                $filenameroad = time() . '_' . $filereviewimg->getClientOriginalName();
                $filereviewimg->move(public_path('assets/backend-assets/images'), $filenameroad);
                $imagedata['reviewimg'] = $filenameroad;
            }

            $review = Review::create([
                'vehicle' => $req->vehicle,
                'customerfullname' => $req->customerfullname,
                'discription' => $req->discription,
                'ratings' => $req->ratings,
                'reviewimg' => $imagedata['reviewimg'] ?? null,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Review added successfully',
                'data' => $review
            ], 201);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to add review. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function getreviews()
    {
        $allreviews = Review::orderBy('created_at', 'desc')->where('reviewstatus', '=', 'Approved')->get();
        $countofreviews = Review::get()->count();

        return response()->json([
            'success' => true,
            'reviews' => $allreviews,
            'count' => $countofreviews
        ]);
    }

    public function viewtheircars($id)
    {
        $adposts = AdPost::where('userid', $id)->orderBy('created_at', 'DESC')->get();
        return response()->json([
            'success' => true,
            'adposts' => $adposts,
        ]);
    }

    public function carlistingdetails($id)
    {
        $cardetails = AddVariant::where('id', $id)->where('showhidestatus', '=', 1)->first();

        if (!$cardetails) {
            return response()->json(['success' => false, 'message' => 'Car details not found'], 404);
        }

        $images = VehicleImage::where('vehicle', $cardetails->carname)->get();
        $specs = AddSpecification::where('vehicleid', $id)->get();
        $features = AddFeature::where('vehicleid', $id)->get();
        $variants = AddVariant::where('carname', $cardetails->carname)->where('showhidestatus', '=', 1)->get();


        $similarcars = AddVariant::where('bodytype', $cardetails->bodytype)->where('id', '!=', $id)->where('showhidestatus', '=', 1)->get()->unique('carname');
        $carNames = $similarcars->pluck('carname')->toArray();

        // Related to similar cars
        $similarcarsimages = VehicleImage::whereIn('vehicle', $carNames)->get();
        foreach ($similarcars as $vehicle) {
            $vehicle->addimage = $similarcarsimages->where('vehicle', $vehicle->carname)->first()->addimage ?? null;
        }

        $variantsfaqs = VariantFaq::where('vehicleid', $id)->get();
        $proscons = ProsCons::where('vehicleid', $id)->first();
        $pros = $proscons ? json_decode($proscons->pros, true) : [];
        $cons = $proscons ? json_decode($proscons->cons, true) : [];

        $cardetails->images = $images;
        $cardetails->specifications = $specs;
        $cardetails->features = $features;
        $cardetails->variants = $variants;

        // Getting Dealers of Particular Brands
        $dealers = RegisterDealer::get();
        $matchingDealers = [];
        foreach ($dealers as $dealer) {
            $brands = json_decode($dealer->brands, true);
            if (in_array($cardetails->brandname, $brands)) {
                $matchingDealers[] = $dealer;
            }
        }

        $pincodedata = Pincode::select('State', 'City', 'District', DB::raw('GROUP_CONCAT(DISTINCT PostOfficeName) as PostOfficeNames'), DB::raw('COUNT(*) as count'))
            ->groupBy('State', 'City', 'District')
            ->get();

        return response()->json([
            'success' => true,
            'data' => [
                'cardetails' => $cardetails,
                'pincodedata' => $pincodedata,
                'pros' => $pros,
                'cons' => $cons,
                'variantsfaqs' => $variantsfaqs,
                'similarcars' => $similarcars,
                'matchingDealers' => $matchingDealers
            ]
        ]);
    }

    public function newcarloan(Request $rq)
    {
        try {
            if ($rq->enquirytype == 'newcar') {
                $data = CarLoanEnquiry::create([
                    'carname' => $rq->carname,
                    'enquirytype' => $rq->enquirytype,
                    'city' => $rq->cityname,
                    'fullname' => $rq->fullname,
                    'mobileno' => $rq->mobileno,
                ]);
                return response()->json([
                    'success' => true,
                    'data' => $data,
                    'message' => 'Thank you We Will Reach You Soon!!!!'
                ], 201);
            } elseif ($rq->enquirytype == 'oldcar') {
                $data = CarLoanEnquiry::create([
                    'enquirytype' => $rq->enquirytype,
                    'city' => $rq->cityname,
                    'fullname' => $rq->fullname,
                    'mobileno' => $rq->mobileno,
                ]);
                return response()->json([
                    'success' => true,
                    'data' => $data,
                    'message' => 'Thank you We Will Reach You Soon!!!!'
                ], 201);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Not Added Try Again...!!!!'
            ], 500);
        }
    }
}
