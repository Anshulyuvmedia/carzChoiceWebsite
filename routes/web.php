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
    Route::get('addblog', 'addblog')->name('addblog');
    Route::get('bloglist', 'bloglist')->name('bloglist');
    Route::get('editblog/{id}', 'editblog')->name('editblog');
    Route::get('formattributes', 'formattributes')->name('formattributes');
    Route::get('leadmanagement', 'leadmanagement')->name('leadmanagement');
    Route::get('faqs', 'faqs')->name('faqs');
    Route::get('vehicleimages', 'vehicleimages')->name('vehicleimages');
    Route::get('addcarlist', 'addcarlist')->name('addcarlist');
    Route::get('addvariant', 'addvariant')->name('addvariant');
    Route::get('variantslist', 'variantslist')->name('variantslist');
    Route::get('editvariant/{id}', 'editvariant')->name('editvariant');

});


//Admin Store, Update & Delete Routes
Route::controller(Store::class)->group(function() {
    Route::post('updatecompanyprofile/{id}', 'updatecompanyprofile')->name('updatecompanyprofile');
    Route::post('storemaster', 'storemaster')->name('storemaster');
    Route::get('deletemaster/{id}', 'deletemaster')->name('deletemaster');
    Route::post('storesubmaster', 'storesubmaster')->name('storesubmaster');
    Route::get('getsubmasterajax/{selectedCat}', 'getsubmasterajax')->name('getsubmasterajax');
    Route::post('insertblog', 'insertblog')->name('insertblog');
    Route::get('deleteblog/{id}', 'deleteblog')->name('deleteblog');
    Route::post('updateblog', 'updateblog')->name('updateblog');
    Route::post('/updateblogstatus', 'updateblogstatus')->name('updateblogstatus');
    Route::get('/filteroldcar/{selectedtype}', 'filteroldcar')->name('filteroldcar');
    Route::post('/insertformattributes', 'insertformattributes')->name('insertformattributes');
    Route::get('/deleteattribute/{id}', 'deleteattribute')->name('deleteattribute');
    Route::get('/getattributesajax/{selectedSubCat}/{selectedAnother}', 'getattributesajax')->name('getattributesajax');
    Route::post('/updateattributes', 'updateattributes')->name('updateattributes');
    Route::post('/insertlead', 'insertlead')->name('insertlead');
    Route::get('deletelead/{id}', 'deletelead')->name('deletelead');
    Route::post('/updatelead', 'updatelead')->name('updatelead');
    Route::post('/insertremarks', 'insertremarks')->name('insertremarks');
    Route::get('/getremarks/{id}', 'getremarks')->name('getremarks');
    Route::post('/updateleadstatus', 'updateleadstatus')->name('updateleadstatus');
    Route::post('/datefilterleads', 'datefilterleads')->name('datefilterleads');
    Route::post('/storefaq', 'storefaq')->name('storefaq');
    Route::get('deletefaq/{id}', 'deletefaq')->name('deletefaq');
    Route::post('updatefaq', 'updatefaq')->name('updatefaq');
    Route::post('insertvehicleimages', 'insertvehicleimages')->name('insertvehicleimages');
    Route::get('deletevehicleimg/{id}', 'deletevehicleimg')->name('deletevehicleimg');
    Route::post('updatevehicleimgs', 'updatevehicleimgs')->name('updatevehicleimgs');
    Route::post('insertcarlist', 'insertcarlist')->name('insertcarlist');
    Route::get('deletecarlist/{id}', 'deletecarlist')->name('deletecarlist');
    Route::post('updatecarlist', 'updatecarlist')->name('updatecarlist');
    Route::post('insertvariants', 'insertvariants')->name('insertvariants');
    Route::get('deletevariants/{id}', 'deletevariants')->name('deletevariants');
    Route::post('updatevariants', 'updatevariants')->name('updatevariants');

});

