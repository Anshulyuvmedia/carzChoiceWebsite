<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\RegisterDealer;
use Carbon\Carbon;
use App\Models\AddFeature;
use App\Models\AddSpecification;
use App\Models\AddVariant;
use App\Models\AdPost;
use App\Models\DisplaySetting;
use App\Models\Master;
use App\Models\CarList;
use App\Models\Pincode;
use App\Models\Faqs;
use App\Models\PostOffices;
use App\Models\CompareVehicle;
use App\Models\ProsCons;
use App\Models\SliderImage;
use App\Models\VariantFaq;
use App\Models\VehicleImage;
use Illuminate\Support\Facades\Log;
use App\View\Components\AllBrands;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
// use DB;
use Illuminate\Support\Facades\DB;


class frontViewController extends Controller
{
    public function home()
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


        //Matching Variants from Carname field...
        $variantdata = AddVariant::where('showhidestatus', '=', 1)->get();
        $trendingCarNames = $trending->pluck('carname');
        $trendingPopularNames = $popular->pluck('carname');
        $trendingUpcomingNames = $upcoming->pluck('carname');
        $offer = $offer->pluck('carname');
        $topcarsinindia = $topcarindia->pluck('carname');

        $matches = $variantdata->whereIn('carname', $trendingCarNames);
        $matches = $matches->map(function ($item) use ($trending) {
            $trendingItem = $trending->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $matchespopular = $variantdata->whereIn('carname', $trendingPopularNames);
        $matchespopular = $matchespopular->map(function ($item) use ($popular) {
            $trendingItem = $popular->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames);
        $matchesupcoming = $matchesupcoming->map(function ($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });



        $matchesoffer = $variantdata->whereIn('carname', $offer);
        $matchesoffer = $matchesoffer->map(function ($item) use ($offer) {
            $trendingItem = $offer->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchestopcarsindia = $variantdata->whereIn('carname', $topcarsinindia);
        $matchestopcarsindia = $matchestopcarsindia->map(function ($item) use ($topcarindia) {
            $trendingItem = $topcarindia->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });
        $statedata = PostOffices::select('StateName', DB::raw('COUNT(id) as count'))->groupBy('StateName')->get();
        return view('frontend.home', compact('imagesdata', 'statedata', 'bodytype', 'carlists', 'adposts', 'matches', 'matchespopular', 'matchesupcoming', 'matchesoffer', 'matchestopcarsindia'));
    }
    public function carlistingdetails($id)
    {
        $cardetails = AddVariant::where('id', $id)->where('showhidestatus', '=', 1)->first();
        $new = [];
        $images = VehicleImage::where('vehicle', $cardetails->carname)->get();
        $spces = AddSpecification::where('vehicleid', $id)->get();
        $features = AddFeature::where('vehicleid', $id)->get();
        $variants = AddVariant::where('carname', $cardetails->carname)->where('id', $id)->where('showhidestatus', '=', 1)->get();
        $similarcars = AddVariant::where('bodytype', $cardetails->bodytype)->where('id', $id)->where('showhidestatus', '=', 1)->get()->unique('carname');
        $carNames = $similarcars->pluck('carname')->toArray();
        $similarcarsimages = VehicleImage::whereIn('vehicle', $carNames)->get();
        // Merge images into newarray based on index
        foreach ($similarcars as $key => $vehicle) {
            $vehicle->addimage = $similarcarsimages->where('vehicle', $vehicle->carname)->first()->addimage ?? null;
        }


        $variantsfaqs = VariantFaq::where('vehicleid', $id)->get();
        $proscons = ProsCons::first();
        $pros = json_decode($proscons->pros, true);
        $cons = json_decode($proscons->cons, true);

        $cardetails->images = json_decode($images);
        $cardetails->specificaitons = json_decode($spces);
        $cardetails->features = json_decode($features);
        $cardetails->variants = json_decode($variants);


        //Getting Dealers of Particular Brands
        $dealers = RegisterDealer::get();
        $variants = AddVariant::where('showhidestatus', '=', 1)->get();
        $matchingDealers = [];
        foreach ($dealers as $dealer) {
            $brands = json_decode($dealer->brands, true);
            foreach ($brands as $brand) {
                foreach ($variants as $variant) {
                    if ($brand == $variant->brandname) {
                        $matchingDealers[] = [
                            'brandname' => $variant->brandname,
                            'dealers' => $dealer,
                        ];
                        break;
                    }
                }
            }
        }
        return view('frontend.carLayouts.carlistingdetails', compact('cardetails', 'pros', 'cons', 'variantsfaqs', 'similarcars', 'matchingDealers'));
    }
    public function carlisting()
    {
        return view('frontend.carlisting');
    }
    public function reviews()
    {
        $reviewdata = Blog::orderBy('created_at', 'desc')->where('categorytype', '=', 'Expert Reviews')->paginate(3);
        // dd($blogdata);
        return view('frontend.reviews', compact('reviewdata'));
    }
    public function reviewsdetails()
    {
        return view('frontend.reviewsdetails');
    }
    public function compare()
    {
        return view('frontend.compare');
    }
    public function compareresult($id)
    {
        $new = session('new', []);


        $data = CompareVehicle::where('id', $id)->first();
        // dd($data);
        $new = [];
        $ids = json_decode($data->vehicles);
        $specs = AddSpecification::whereIn('vehicleid', $ids)->get();
        $features = AddFeature::whereIn('vehicleid', $ids)->get();


        // Fetch details for the vehicles based on IDs
        $newarray = AddVariant::join('car_lists', 'car_lists.carname', '=', 'add_variants.carname')
            ->where('add_variants.showhidestatus', '=', 1)
            ->select('add_variants.id', 'add_variants.carname', 'add_variants.carmodalname', 'add_variants.brandname', 'add_variants.price', 'car_lists.colors')
            ->whereIn('add_variants.id', $ids)
            ->get();

        //dd($newarray);
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
        return view('frontend.compareresult', compact('new'));
    }
    public function loginuser()
    {
        return view('frontend.loginuser');
    }
    public function registration()
    {
        return view('frontend.registration');
    }
    public function postyourad()
    {
        return view('frontend.postyourad');
    }
    public function userprofile()
    {
        if (Auth::guard('registeruser')->check()) {
            $user = Auth::guard('registeruser')->user();
            $addpostcount = AdPost::count();
            $brands = Master::where('type', '=', 'Brand')->get();
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            return view('frontend.dashboard.userprofile', compact('user', 'statedata', 'addpostcount', 'brands'));
        } else {
            return view('frontend.loginuser');
        }
    }
    public function userarchive()
    {
        return view('frontend.dashboard.userarchive');
    }
    public function useractiveads()
    {
        if (Auth::guard('registeruser')->check()) {
            $user = Auth::guard('registeruser')->user();
            $addpostcount = AdPost::count();
            $adposts = AdPost::orderBy('created_at', 'desc')->get();
            return view('frontend.dashboard.useractiveads', compact('user', 'adposts', 'addpostcount'));
        } else {
            return view('frontend.loginuser');
        }
    }
    public function userfavourites()
    {
        return view('frontend.dashboard.userfavourites');
    }
    public function usermessages()
    {
        return view('frontend.dashboard.usermessages');
    }
    public function userdeactive()
    {
        return view('frontend.dashboard.userdeactive');
    }
    public function pricing()
    {
        return view('frontend.pricing');
    }
    public function news()
    {
        $blogdata = Blog::orderBy('created_at', 'desc')->where('categorytype', '=', 'Car News')->paginate(3);
        // dd($blogdata);

        return view('frontend.news', compact('blogdata'));
    }
    public function newsdetails(Request $request)
    {

        $blogdata = Blog::where('id', '=', $request->id)->first();

        if ($blogdata) {

            $blogdata->formatted_date = Carbon::parse($blogdata->created_at)
                ->setTimezone('Asia/Kolkata')
                ->format('F d, Y, h:i A T');

            // Format the video URL
            $blogdata->embed_url = $this->formatYouTubeUrl($blogdata->vurl);
        }

        $imagesdata = VehicleImage::where('vehicle', $blogdata->carname)->pluck('addimage');

        $variantdata = AddVariant::where('showhidestatus', '=', 1)->where('carname', $blogdata->carname)->get();
        // dd($imagesdata);

        return view('frontend.newsdetails', compact('blogdata', 'variantdata', 'imagesdata'));
    }
    private function formatYouTubeUrl($url)
    {
        // Check if the URL is of the type "https://www.youtube.com/watch?v=VIDEO_ID"
        if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
            $video_id = $id[1];
        }
        // Check if the URL is of the type "https://youtu.be/VIDEO_ID"
        elseif (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
            $video_id = $id[1];
        }
        // Default to the original URL if no match is found
        else {
            return $url;
        }

        // Return the standardized embed URL
        return 'https://www.youtube.com/embed/' . $video_id;
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function error404()
    {
        return view('frontend.error404');
    }
    public function contactus()
    {
        return view('frontend.contactus');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function newcars()
    {
        $carlists = Carlist::get();

        $trending = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Trending')->get();

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


        //Matching Variants from Carname field...
        $variantdata = AddVariant::where('showhidestatus', '=', 1)->get();
        $trendingCarNames = $trending->pluck('carname');
        $trendingPopularNames = $popular->pluck('carname');
        $trendingUpcomingNames = $upcoming->pluck('carname');
        $offer = $offer->pluck('carname');
        $topcarsinindia = $topcarindia->pluck('carname');

        $matches = $variantdata->whereIn('carname', $trendingCarNames);
        $matches = $matches->map(function ($item) use ($trending) {
            $trendingItem = $trending->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $matchespopular = $variantdata->whereIn('carname', $trendingPopularNames);
        $matchespopular = $matchespopular->map(function ($item) use ($popular) {
            $trendingItem = $popular->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames);
        $matchesupcoming = $matchesupcoming->map(function ($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });



        $matchesoffer = $variantdata->whereIn('carname', $offer);
        $matchesoffer = $matchesoffer->map(function ($item) use ($offer) {
            $trendingItem = $offer->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchestopcarsindia = $variantdata->whereIn('carname', $topcarsinindia);
        $matchestopcarsindia = $matchestopcarsindia->map(function ($item) use ($topcarindia) {
            $trendingItem = $topcarindia->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });
        $statedata = PostOffices::select('StateName', DB::raw('COUNT(id) as count'))->groupBy('StateName')->get();
        return view('frontend.newCarsLayouts.newcars', compact('matches', 'carlists', 'statedata', 'matchespopular', 'matchesupcoming', 'matchesoffer', 'matchestopcarsindia'));
    }
    public function upcomingcar()
    {
        $upcoming = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('display_settings.category', '=', 'Upcoming')->get();

        $variantdata = AddVariant::where('showhidestatus', '=', 1)->get();
        $trendingUpcomingNames = $upcoming->pluck('carname');
        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames);


        $matchesupcoming = $matchesupcoming->map(function ($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $brands = Master::where('type', 'Brand')->get();
        return view('frontend.newCarsLayouts.upcomingcar', compact('matchesupcoming', 'brands'));
    }
    public function newcarlaunches()
    {
        return view('frontend.newCarsLayouts.newcarlaunches');
    }
    public function electriccar()
    {
        $electriccars = CarList::join('add_variants', 'car_lists.carname', '=', 'add_variants.carname')
            ->join('vehicle_images', 'vehicle_images.vehicle', '=', 'car_lists.carname')
            ->select('add_variants.*', 'car_lists.carname', 'car_lists.brandname', 'vehicle_images.addimage')
            ->where('vehicle_images.type', '=', 'Outer view')
            ->where('showhidestatus', '=', 1)
            ->get();

        //dd($electriccars);
        $electricfinal = $electriccars->filter(function($car) {
            $fueltypes = json_decode($car->fueltype, true);
            return is_array($fueltypes) && in_array('Electric', $fueltypes);
        });

        // Filter for Hybrid cars
        $hybridCars = $electriccars->filter(function($car) {
            $fueltypes = json_decode($car->fueltype, true);

            // Check if 'Hybrid' is in the decoded array
            return is_array($fueltypes) && in_array('Hybrid', $fueltypes);
        });
        return view('frontend.newCarsLayouts.electriccar',compact('electricfinal','hybridCars'));
    }
    public function usedcar()
    {
        $adposts = AdPost::orderBy('created_at', 'desc')->get();
        $usedcarfaq = Faqs::where('category', '=', 'Old Car')->get();
        return view('frontend.usedCarsLayouts.usedcar', compact('adposts', 'usedcarfaq'));
    }
    public function usedcarbylocation($filtertype)
    {
        $filtertypenew = $filtertype;
        $variants = session('variants', []);
        $results = Master::where('type', '=', 'Body Type')
            ->orWhere('type', '=', 'Transmission')
            ->orWhere('type', '=', 'Fuel Type')
            ->orWhere('type', '=', 'Seating Capacity')
            ->get();
        return view('frontend.usedCarsLayouts.usedcarbylocation', compact('variants', 'filtertypenew', 'results'));
    }
    public function carloan()
    {
        $brands = Master::where('type', 'brand')->get();
        $pincodedata = Pincode::select('State', 'City', 'District', DB::raw('GROUP_CONCAT(DISTINCT PostOfficeName) as PostOfficeNames'), DB::raw('COUNT(*) as count'))
            ->groupBy('State', 'City', 'District')
            ->get();
        // dd($pincodedata[0]);
        $vehiclesByBrand = [];

        foreach ($brands as $brand) {
            $vehicles = Master::join('car_lists', 'masters.value', '=', 'car_lists.brandname')
                ->select('car_lists.carname', 'car_lists.brandname')
                ->where('car_lists.brandname', $brand->value) // Correct filtering
                ->distinct()
                ->get();
            $vehiclesByBrand[] = [
                'brandname' => $brand->value,
                'brand_image' => $brand->iconimage,
                'vehicles' => $vehicles,
            ];
        }
        //dd($vehiclesByBrand);
        return view('frontend.newCarsLayouts.carloan', compact('vehiclesByBrand', 'pincodedata'));
    }
    public function findcar($filtertype)
    {
        $filtertypenew = $filtertype;
        $filtertypenew = $filtertype;
        $results = Master::where('type', '=', 'Body Type')
            ->orWhere('type', '=', 'Transmission')
            ->orWhere('type', '=', 'Fuel Type')
            ->orWhere('type', '=', 'Seating Capacity')
            ->get();
        $variants = session('variants', []);
        return view('frontend.findcar', compact('variants', 'results', 'filtertypenew'));
    }

    public function carviewimages($carname)
    {
        $allcarimage = VehicleImage::join('car_lists', 'vehicle_images.vehicle', 'car_lists.carname')
            ->select('vehicle_images.*', 'car_lists.brandname')
            ->where('vehicle', '=', $carname)
            ->get();


        $vehicleCounts = VehicleImage::select('vehicle')
            // ->where('type', 'Outer view')
            ->groupBy('vehicle')
            ->selectRaw('vehicle, COUNT(*) as count')
            ->pluck('count', 'vehicle');
        $allcarimage->each(function ($item) use ($vehicleCounts) {
            $item->vehicle_count = $vehicleCounts->get($item->vehicle, 0);
        });

        // dd($allcarimage);
        return view('frontend.carLayouts.carviewimages', compact('allcarimage'));
    }

    public function carimages()
    {
        // Step 1: Retrieve car image data and count occurrences of each vehicle
        $carimagedata = VehicleImage::join('car_lists', 'vehicle_images.vehicle', 'car_lists.carname')
            ->select('vehicle_images.*', 'car_lists.brandname')
            ->where('type', 'Outer view')->get()->unique('vehicle');

        // Step 2: Count the occurrences of each vehicle in the 'vehicle' column
        $vehicleCounts = VehicleImage::select('vehicle')
            // ->where('type', 'Outer view')
            ->groupBy('vehicle')
            ->selectRaw('vehicle, COUNT(*) as count')
            ->pluck('count', 'vehicle');

        // Step 3: Append the count to each entry in carimagedata
        $carimagedata->each(function ($item) use ($vehicleCounts) {
            $item->vehicle_count = $vehicleCounts->get($item->vehicle, 0);
        });

        // Debugging: Dump the modified carimagedata to check the counts
        // dd($carimagedata);

        // Step 4: Return the view with the modified carimagedata
        return view('frontend.carLayouts.carimages', compact('carimagedata'));
    }

    public function finddealer()
    {
        $dealers = RegisterDealer::where('dealertype','Old Car Dealer')->orderBy('created_at', 'desc')->get();
        $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
        return view('frontend.dealerlayouts.finddealer', compact('dealers', 'statedata'));
    }
    public function dealerprofile($id)
    {
        $dealerdetails = RegisterDealer::find($id);
        return view('frontend.dealerlayouts.dealerprofile', compact('dealerdetails'));
    }
    public function dealershowroom()
    {
        return view('frontend.newCarsLayouts.dealershowroom');
    }
    public function dealerbylocation()
    {
        return view('frontend.newCarsLayouts.dealerbylocation');
    }

    public function addadshow()
    {
        if (Auth::guard('registeruser')->check()) {
            $color = Master::where('type', '=', 'Color')->get();
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            $carlistdata = CarList::get();
            return view('frontend.dashboard.addadshow', compact('statedata', 'carlistdata', 'color'));
        } else {
            return view('frontend.loginuser');
        }
    }

    public function editadshow($id)
    {
        if (Auth::guard('registeruser')->check()) {
            $adshowdata = AdPost::find($id);
            $brandname = Master::where('type', '=', 'Brand')->get();
            $color = Master::where('type', '=', 'Color')->get();
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            $variantdata = AddVariant::where('showhidestatus', '=', 1)->get();
            return view('frontend.dashboard.editadshow', compact('adshowdata', 'statedata', 'brandname', 'color'));
        } else {
            return view('frontend.loginuser');
        }
    }
}
