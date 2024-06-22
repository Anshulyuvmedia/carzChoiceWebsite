<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\frontViewController;

Route::get('/', function () {
    return view('frontend.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::controller(frontViewController::class)->group(function () {
    Route::get('carlistingdetails', 'carlistingdetails');
    Route::get('carlisting', 'carlisting');
    Route::get('reviews', 'reviews');
    Route::get('reviewsdetails', 'reviewsdetails');
    Route::get('compare', 'compare');
    Route::get('compareresult', 'compareresult');
    Route::get('loginuser', 'loginuser');
    Route::get('registration', 'registration');
    Route::get('postyourad', 'postyourad');
    Route::get('newcars', 'newcars');

    Route::get('userprofile', 'userprofile');
    Route::get('userarchive', 'userarchive');
    Route::get('useractiveads', 'useractiveads');
    Route::get('userfavourites', 'userfavourites');
    Route::get('usermessages', 'usermessages');
    Route::get('userdeactive', 'userdeactive');
    Route::get('pricing', 'pricing');
    Route::get('blogs', 'blogs');
    Route::get('blogdetails', 'blogdetails');
    Route::get('about', 'about');
    Route::get('error404', 'error404');
    Route::get('contactus', 'contactus');
    Route::get('services', 'services');

});