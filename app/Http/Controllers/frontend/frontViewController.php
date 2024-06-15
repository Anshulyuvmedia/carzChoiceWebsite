<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontViewController extends Controller
{
    public function carlistingdetails() {
        return view('frontend.carlistingdetails');
    }
    public function carlisting() {
        return view('frontend.carlisting');
    }
    public function reviews() {
        return view('frontend.reviews');
    }
    public function reviewsdetails() {
        return view('frontend.reviewsdetails');
    }
    public function compare() {
        return view('frontend.compare');
    }
    public function compareresult() {
        return view('frontend.compareresult');
    }
    public function login() {
        return view('frontend.login');
    }
    public function registration() {
        return view('frontend.registration');
    }
    public function postyourad() {
        return view('frontend.postyourad');
    }
    public function userprofile() {
        return view('frontend.dashboard.userprofile');
    }
    public function userarchive() {
        return view('frontend.dashboard.userarchive');
    }
    public function userfavourites() {
        return view('frontend.dashboard.userfavourites');
    }
    public function usermessages() {
        return view('frontend.dashboard.usermessages');
    }
    public function userdeactive() {
        return view('frontend.dashboard.userdeactive');
    }
    public function pricing() {
        return view('frontend.pricing');
    }
    public function blogs() {
        return view('frontend.blogs');
    }
    public function blogdetails() {
        return view('frontend.blogdetails');
    }
    public function about() {
        return view('frontend.about');
    }
    public function error404() {
        return view('frontend.error404');
    }
    public function contactus() {
        return view('frontend.contactus');
    }
    public function services() {
        return view('frontend.services');
    }

}
