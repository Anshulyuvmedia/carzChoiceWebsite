<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AddVariant;
use App\Models\AdPost;
use App\Models\DisplaySetting;
use App\Models\Master;
use App\Models\CarList;
use App\Models\PostOffices;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Auth;
use DB;
class frontViewController extends Controller
{
    public function home(){
        $imagesdata = SliderImage::first();
        $brands = Master::where('type','=','Brand')->get();
        $bodytypes = Master::where('type','=','Body Type')->get();
        $budgets = Master::where('type','=','Budget')->get();
        $fueltypes = Master::where('type','=','Fuel Type')->get();
        $transmissions = Master::where('type','=','Transmission')->get();
        $seatings = Master::where('type','=','Seating Capacity')->get();

        $trending = CarList::join('display_settings','display_settings.vehicleid','=','car_lists.id')
        ->join('vehicle_images','vehicle_images.vehicle','=','car_lists.carname')
        ->select('display_settings.*','car_lists.carname','car_lists.brandname','vehicle_images.addimage')
        ->where('vehicle_images.type','=','Outer view')
        ->where('display_settings.category','=','Trending')->get();

        $popular = CarList::join('display_settings','display_settings.vehicleid','=','car_lists.id')
        ->join('vehicle_images','vehicle_images.vehicle','=','car_lists.carname')
        ->select('display_settings.*','car_lists.carname','car_lists.brandname','vehicle_images.addimage')
        ->where('vehicle_images.type','=','Outer view')
        ->where('display_settings.category','=','Popular')->get();

        $upcoming = CarList::join('display_settings','display_settings.vehicleid','=','car_lists.id')
        ->join('vehicle_images','vehicle_images.vehicle','=','car_lists.carname')
        ->select('display_settings.*','car_lists.carname','car_lists.brandname','vehicle_images.addimage')
        ->where('vehicle_images.type','=','Outer view')
        ->where('display_settings.category','=','Upcoming')->get();

        $offer = CarList::join('display_settings','display_settings.vehicleid','=','car_lists.id')
        ->join('vehicle_images','vehicle_images.vehicle','=','car_lists.carname')
        ->select('display_settings.*','car_lists.carname','car_lists.brandname','vehicle_images.addimage')
        ->where('vehicle_images.type','=','Outer view')
        ->where('display_settings.type','=','Offers On Popular Cars')->get();

        $topcarindia = CarList::join('display_settings','display_settings.vehicleid','=','car_lists.id')
        ->join('vehicle_images','vehicle_images.vehicle','=','car_lists.carname')
        ->select('display_settings.*','car_lists.carname','car_lists.brandname','vehicle_images.addimage')
        ->where('vehicle_images.type','=','Outer view')
        ->where('display_settings.type','=','Top Cars In India')->get();


        //Matching Variants from Carname field...
        $variantdata = AddVariant::get();
        $trendingCarNames = $trending->pluck('carname');
        $trendingPopularNames = $popular->pluck('carname');
        $trendingUpcomingNames = $upcoming->pluck('carname');
        $offer = $offer->pluck('carname');
        $topcarsinindia = $topcarindia->pluck('carname');

        $matches = $variantdata->whereIn('carname', $trendingCarNames);
        $matches = $matches->map(function($item) use ($trending) {
            $trendingItem = $trending->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        $matchespopular = $variantdata->whereIn('carname', $trendingPopularNames);
        $matchespopular = $matchespopular->map(function($item) use ($popular) {
            $trendingItem = $popular->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchesupcoming = $variantdata->whereIn('carname', $trendingUpcomingNames);
        $matchesupcoming = $matchesupcoming->map(function($item) use ($upcoming) {
            $trendingItem = $upcoming->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });



        $matchesoffer = $variantdata->whereIn('carname', $offer);
        $matchesoffer = $matchesoffer->map(function($item) use ($offer) {
            $trendingItem = $offer->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });


        $matchestopcarsindia = $variantdata->whereIn('carname', $topcarsinindia);
        $matchestopcarsindia = $matchestopcarsindia->map(function($item) use ($topcarindia) {
            $trendingItem = $topcarindia->firstWhere('carname', $item->carname);
            if ($trendingItem) {
                $item->addimage = $trendingItem->addimage;
            }
            return $item;
        });

        return view('frontend.home',compact('imagesdata','brands','bodytypes','budgets','fueltypes','transmissions','seatings','matches','matchespopular','matchesupcoming','matchesoffer','matchestopcarsindia'));
    }
    public function carlistingdetails() {
        return view('frontend.carLayouts.carlistingdetails');
    }
    public function carlisting()
    {
        return view('frontend.carlisting');
    }
    public function reviews()
    {
        return view('frontend.reviews');
    }
    public function reviewsdetails()
    {
        return view('frontend.reviewsdetails');
    }
    public function compare()
    {
        return view('frontend.compare');
    }
    public function compareresult()
    {
        return view('frontend.compareresult');
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
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            return view('frontend.dashboard.userprofile',compact('user','statedata','addpostcount'));
        }else {
            return view('frontend.loginuser');
        }
    }
    public function userarchive()
    {
        return view('frontend.dashboard.userarchive');
    }
    public function useractiveads()
    {
        if(Auth::guard('registeruser')->check()){
            $user = Auth::guard('registeruser')->user();
            $addpostcount = AdPost::count();
            $adposts = AdPost::orderBy('created_at','desc')->get();
            return view('frontend.dashboard.useractiveads',compact('user','adposts','addpostcount'));
        }else {
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
    public function blogs()
    {
        return view('frontend.blogs');
    }
    public function blogdetails()
    {
        return view('frontend.blogdetails');
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
        return view('frontend.newCarsLayouts.newcars');
    }
    public function upcomingcar()
    {
        return view('frontend.newCarsLayouts.upcomingcar');
    }
    public function newcarlaunches()
    {
        return view('frontend.newCarsLayouts.newcarlaunches');
    }
    public function electriccar()
    {
        return view('frontend.newCarsLayouts.electriccar');
    }
    public function usedcar()
    {
        return view('frontend.usedCarsLayouts.usedcar');
    }
    public function usedcarbylocation()
    {
        return view('frontend.usedCarsLayouts.usedcarbylocation');
    }
    public function carloan()
    {
        return view('frontend.newCarsLayouts.carloan');
    }
    public function findcar()
    {
        return view('frontend.findcar');
    }
    public function carviewimages()
    {
        return view('frontend.carLayouts.carviewimages');
    }
    public function carimages()
    {
        return view('frontend.carLayouts.carimages');
    }
    public function finddealer() {
        return view('frontend.dealerlayouts.finddealer');
    }
    public function dealerprofile() {
        return view('frontend.dealerlayouts.dealerprofile');
    }
    public function dealershowroom() {
        return view('frontend.newCarsLayouts.dealershowroom');
    }
    public function dealerbylocation() {
        return view('frontend.newCarsLayouts.dealerbylocation');
    }

    public function addadshow(){
        if(Auth::guard('registeruser')->check()){
            $color = Master::where('type','=','Color')->get();
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            $carlistdata = CarList::get();
            return view('frontend.dashboard.addadshow',compact('statedata','carlistdata','color'));
        }else {
            return view('frontend.loginuser');
        }
    }

    public function editadshow($id){
        if (Auth::guard('registeruser')->check()) {
            $adshowdata = AdPost::find($id);
            $brandname = Master::where('type','=','Brand')->get();
            $color = Master::where('type','=','Color')->get();
            $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
            $variantdata = AddVariant::get();
            return view('frontend.dashboard.editadshow',compact('adshowdata','statedata','brandname','color'));
        }else {
            return view('frontend.loginuser');
        }
    }
}
