<?php
                                # “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”
use App\Http\Controllers\backend\AdminView;
use App\Http\Controllers\backend\Authentication;
use App\Http\Controllers\backend\Store;
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
        return view('AdminPanel.admindashboard');
    })->name('Admindashboard');
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

    //when user logged in
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


//Admin Panel Routes
Route::get('/admin/login', function() { return view('auth.login'); });
Route::get('/logoutuser', [Authentication::class, 'logout'])->name('logoutuser');
Route::post('/changepassword', [Authentication::class, 'changepassword'])->name('changepassword');

//Admin View Routes
Route::controller(AdminView::class)->group(function() {
    Route::get('adminprofile', 'adminprofile')->name('adminprofile');
    Route::get('companyprofile', 'companyprofile')->name('companyprofile');
    Route::get('master', 'master')->name('master');
    Route::get('submaster', 'submaster')->name('submaster');
});


//Admin Store & Delete Routes
Route::controller(Store::class)->group(function() {
    Route::post('storecompanyprofile', 'storecompanyprofile')->name('storecompanyprofile');
    Route::post('storemaster', 'storemaster')->name('storemaster');
    Route::get('deletemaster/{id}', 'deletemaster')->name('deletemaster');
    Route::post('storesubmaster', 'storesubmaster')->name('storesubmaster');
    Route::get('getsubmasterajax/{selectedCat}', 'getsubmasterajax')->name('getsubmasterajax');
});

