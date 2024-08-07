<?php
                # “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”
use App\Http\Controllers\backend\AdminView;
use App\Http\Controllers\backend\Authentication;
use App\Http\Controllers\backend\Store;
use App\Http\Controllers\backend\ExcelCarList;
use App\Http\Controllers\frontend\FrontendStore;
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

    Route::get('/', 'home');
    Route::get('carlistingdetails/{id}', 'carlistingdetails')->name('carlistingdetails');
    Route::get('carlisting', 'carlisting');
    Route::get('reviews', 'reviews');
    Route::get('reviewsdetails', 'reviewsdetails');
    Route::get('compare', 'compare');
    Route::get('compareresult/{id}', 'compareresult')->name('compareresult');
    Route::get('loginuser', 'loginuser')->name('loginuser');
    Route::get('registration', 'registration')->name('registration');
    Route::get('postyourad', 'postyourad');
    Route::get('new-cars', 'newcars');
    Route::get('upcoming-car', 'upcomingcar');
    Route::get('new-car-launches', 'newcarlaunches');
    Route::get('electric-car', 'electriccar');
    Route::get('used-car', 'usedcar');
    Route::get('usedcar-bylocation/{filtertypenew}', '
    ')->name('usedcarbylocation');
    Route::get('car-loan', 'carloan')->name('carloan');
    Route::get('find-car/{filtertype}', 'findcar')->name('findcar');
    Route::get('car-view-images/{carname}', 'carviewimages')->name('carviewimages');
    Route::get('car-images', 'carimages');
    Route::get('find-dealer', 'finddealer')->name('finddealer');
    Route::get('dealer-profile/{id}', 'dealerprofile')->name('dealerprofile');
    Route::get('dealer-showroom', 'dealershowroom');
    Route::get('dealer-location', 'dealerbylocation');


    //when user logged in
    Route::get('userprofile', 'userprofile')->name('userprofile');
    Route::get('userarchive', 'userarchive');
    Route::get('useractiveads', 'useractiveads')->name('useractiveads');
    Route::get('userfavourites', 'userfavourites');
    Route::get('usermessages', 'usermessages');
    Route::get('userdeactive', 'userdeactive');
    Route::get('addadshow', 'addadshow')->name('addadshow');
    Route::get('editadshow/{id}', 'editadshow')->name('editadshow');


    Route::get('pricing', 'pricing');
    Route::get('news', 'news');
    Route::get('newsdetails/{id}', 'newsdetails')->name('newsdetails');
    Route::get('about', 'about');
    Route::get('error404', 'error404');
    Route::get('contactus', 'contactus');
    Route::get('services', 'services');

});

//Frontend Functionality Routes
Route::controller(FrontendStore::class)->group(function() {
    Route::post('register_customer', 'register_customer')->name('registercustomer');
    Route::post('verifyregisterotp', 'verifyregisterotp')->name('verifyregisterotp');
    Route::post('loginuser', 'loginuser')->name('loginuser');
    Route::get('logoutuserfront', 'logoutuserfront')->name('logoutuserfront');
    Route::get('showstatepincode/{selecteddistrict}', 'showstatepincode')->name('showstatepincode');
    Route::post('changeuserpassword', 'changeuserpassword')->name('changeuserpassword');
    Route::post('resetpassworduser', 'resetpassworduser')->name('resetpassworduser');
    Route::post('verifyotp', 'verifyotp')->name('verifyotp');
    Route::post('updatePassword', 'updatePassword')->name('updatePassword');
    Route::post('edituserprofile', 'edituserprofile')->name('edituserprofile');
    Route::get('filterbrandname/{selectedbrandname}', 'filterbrandname')->name('filterbrandname');
    Route::get('filtermodalname/{selectedcar}', 'filtermodalname')->name('filtermodalname');
    Route::post('insertadpost', 'insertadpost')->name('insertadpost');
    Route::get('deleteadpost/{id}', 'deleteadpost')->name('deleteadpost');
    Route::post('updateadpost', 'updateadpost')->name('updateadpost');
    Route::get('getupcomingvehiclebybrands/{selectedbrand}', 'getupcomingvehiclebybrands')->name('getupcomingvehiclebybrands');
    Route::post('filtervariants/{finalvalue}', 'filtervariants')->name('filtervariants');
    Route::post('filterbyfueltypesandtras', 'filterbyfueltypesandtras')->name('filterbyfueltypesandtras');
    Route::post('filtercities/{location}', 'filtercities')->name('filtercities');
    Route::post('insertcarloanenquiry', 'insertcarloanenquiry')->name('insertcarloanenquiry');
    Route::post('/filterhomepagecars', 'filterhomepagecars')->name('filterhomepagecars');
    Route::post('/filterbycarbodytype/{bodytype}', 'filterbycarbodytype')->name('filterbycarbodytype');
    Route::post('/filterByAttribute/{filtertype}', 'filterByAttribute')->name('filterByAttribute');
    Route::post('/showcomparecars/{fullId}', 'showcomparecars')->name('showcomparecars');
    Route::post('filterbyfuelcardetails', 'filterbyfuelcardetails')->name('filterbyfuelcardetails');
    Route::post('insertcompareoffcanvas', 'insertcompareoffcanvas')->name('insertcompareoffcanvas');
    Route::post('makefilterfindcar', 'makefilterfindcar')->name('makefilterfindcar');
    Route::post('registerdealer', 'registerdealer')->name('registerdealer');
    Route::post('usedcarfilter/{filtertype}', 'usedcarfilter')->name('usedcarfilter');
    Route::post('filtercarsbylocation/{city}', 'filtercarsbylocation')->name('filtercarsbylocation');
    Route::post('filterdealersbycity/{cityname}', 'filterdealersbycity')->name('filterdealersbycity');

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
    Route::get('userslist', 'userslist')->name('userslist');
    Route::get('addfeatures/{id}', 'addfeatures')->name('addfeatures');
    Route::get('addspecifications/{id}', 'addspecifications')->name('addspecifications');
    Route::get('addbannerimmages', 'addbannerimmages')->name('addbannerimmages');
    Route::get('displaysettings', 'displaysettings')->name('displaysettings');
    Route::get('comparecars', 'comparecars')->name('comparecars');
    Route::get('allenquiriessite', 'allenquiriessite')->name('allenquiriessite');
    Route::get('prosandcons/{id}', 'prosandcons')->name('prosandcons');
    Route::get('variantfaqs/{id}/{carname}', 'variantfaqs')->name('variantfaqs');
    Route::get('addvehicleimages/{id}/{carname}', 'addvehicleimages')->name('addvehicleimages');
    Route::get('dealerslist', 'dealerslist')->name('dealerslist');

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
    Route::post('/updateloginstatus', 'updateloginstatus')->name('updateloginstatus');
    Route::get('deleteuser/{id}', 'deleteuser')->name('deleteuser');
    Route::post('storefeatures', 'storefeatures')->name('storefeatures');
    Route::post('storespecifications', 'storespecifications')->name('storespecifications');
    Route::post('/updatefeatures', 'updatefeatures')->name('updatefeatures');
    Route::post('/updatespecs', 'updatespecs')->name('updatespecs');
    Route::post('/insertbannerimages', 'insertbannerimages')->name('insertbannerimages');
    Route::post('updatebannerimages', 'updatebannerimages')->name('updatebannerimages');
    Route::post('insertdisplaysettings', 'insertdisplaysettings')->name('insertdisplaysettings');
    Route::get('deletedisplaysettings/{id}', 'deletedisplaysettings')->name('deletedisplaysettings');
    Route::post('insertcompare', 'insertcompare')->name('insertcompare');
    Route::get('deleteenquiry/{id}', 'deleteenquiry')->name('deleteenquiry');
    Route::post('updateenquirystatus', 'updateenquirystatus')->name('updateenquirystatus');
    Route::post('insertprosandcons', 'insertprosandcons')->name('insertprosandcons');
    Route::post('insertvariantfaqs', 'insertvariantfaqs')->name('insertvariantfaqs');
    Route::post('updatevariantfaq', 'updatevariantfaq')->name('updatevariantfaq');
    Route::get('deletevariantfaq/{id}', 'deletevariantfaq')->name('deletevariantfaq');
    Route::post('insertcolorvariants', 'insertcolorvariants')->name('insertcolorvariants');
    Route::get('deletedealer/{id}', 'deletedealer')->name('deletedealer');
    Route::post('/filterdealers', 'filterdealers')->name('filterdealers');
    Route::post('/updatevariantshowhidestatus', 'updatevariantshowhidestatus')->name('updatevariantshowhidestatus');
});




//Excel Routes
Route::get('/import-excel', [ExcelCarList::class,'index'])->name('import.excel');
Route::get('/import-excelvarinats', [ExcelCarList::class,'index'])->name('import.excelvarinats');
Route::post('/import-excel', [ExcelCarList::class,'import']);
Route::post('/import-excelvarinats', [ExcelCarList::class,'importvariants']);
