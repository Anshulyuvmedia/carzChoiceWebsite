<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AddVariant;
use App\Models\AdPost;
use App\Models\Master;
use App\Models\CarList;
use App\Models\PostOffices;
use Illuminate\Http\Request;
use Auth;
use DB;
class frontViewController extends Controller
{
    public function carlistingdetails()
    {
        return view('frontend.carlistingdetails');
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
