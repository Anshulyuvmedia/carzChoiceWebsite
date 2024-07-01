@extends('frontend.layouts.website')
@section('content')
@section('title', 'User Favourites')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="small-breadcrumb">
                <div class=" breadcrumb-link">
                   <ul>
                      <li><a href="/">Home </a></li>
                      <li><a class="active" href="#">Favourite</a></li>
                   </ul>
                </div>
                <div class="header-page">
                   <h1>User Dashboard</h1>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
 <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
 <div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="custom-padding no-top gray">
       <!-- Main Container -->
       <div class="container">
          <!-- Row -->
          <div class="row">
             <!-- Middle Content Area -->
             <div class="col-md-12 col-xs-12 col-sm-12">
                <section class="search-result-item">
                   <a class="image-link" href="#"><img class="image center-block" alt="" src="{{ asset('assets/frontend-assets/images/users/9.jpg')}}"> </a>
                   <div class="search-result-item-body">
                      <div class="row">
                         <div class="col-md-5 col-sm-12 col-xs-12">
                            <h4 class="search-result-item-heading"><a href="#">Umair</a></h4>
                            <p class="info">
                               <span><a href="profile.html"><i class="fa fa-user "></i>Profile </a></span>
                               <span><a href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Profile </a></span>
                            </p>
                            <p class="description">You last logged in at: 14-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)</p>
                            <span class="label label-warning">Paid Package</span>
                            <span class="label label-success">Dealer</span>
                         </div>
                         <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="row ad-history">
                               <div class="col-md-4 col-sm-4 col-xs-12">
                                  <div class="user-stats">
                                     <h2>374</h2>
                                     <small>Ad Sold</small>
                                  </div>
                               </div>
                               <div class="col-md-4 col-sm-4 col-xs-12">
                                  <div class="user-stats">
                                     <h2>980</h2>
                                     <small>Total Listings</small>
                                  </div>
                               </div>
                               <div class="col-md-4 col-sm-4 col-xs-12">
                                  <div class="user-stats">
                                     <h2>413</h2>
                                     <small>Favourites Ads</small>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </section>
                <div class="dashboard-menu-container">
                  <ul>
                     <li>
                        <a href="/userprofile">
                           <div class="menu-name"> Profile </div>
                        </a>
                     </li>
                     <li>
                        <a href="/userarchive">
                           <div class="menu-name">Archives</div>
                        </a>
                     </li>
                     <li>
                        <a href="/useractiveads">
                           <div class="menu-name">My Ads</div>
                        </a>
                     </li>
                     <li class="active">
                        <a href="/userfavourites">
                           <div class="menu-name">Favourites Ads</div>
                        </a>
                     </li>
                     <li>
                        <a href="/usermessages">
                           <div class="menu-name">Messages</div>
                        </a>
                     </li>
                     <li>
                        <a href="/userdeactive">
                           <div class="menu-name">Close Account</div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="menu-name">Logout</div>
                        </a>
                     </li>
                  </ul>
                </div>
             </div>
             <!-- Middle Content Area  End -->
          </div>
          <!-- Row End -->
         
          <div class="row margin-top-40">
             <!-- Middle Content Area -->
             <div class="col-md-12 col-lg-12 col-sx-12">
                <!-- Row -->
                <ul class="list-unstyled">
                   <!-- Listing Grid -->
                   <li>
                      <div class="well ad-listing clearfix">
                         <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                            <!-- Image Box -->
                            <div class="img-box">
                               <img src="{{ asset('assets/frontend-assets/images/posting/25.jpg')}}" class="img-responsive" alt="">
                               <div class="total-images"><strong>8</strong> photos </div>
                               <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                            </div>
                            <!-- Ad Status --><span class="ad-status"> Featured </span>
                            <!-- User Preview -->
                            <div class="user-preview">
                               <a href="#"> <img src="{{ asset('assets/frontend-assets/images/users/2.jpg')}}" class="avatar avatar-small" alt=""> </a>
                            </div>
                         </div>
                         <div class="col-md-9 col-sm-7 col-xs-12">
                            <!-- Ad Content-->
                            <div class="row">
                               <div class="content-area">
                                  <div class="col-md-9 col-sm-12 col-xs-12">
                                     <!-- Ad Title -->
                                     <h3><a>2016 Audi A6 2.0T Quattro Premium Plus</a></h3>
                                     <!-- Ad Meta Info -->
                                     <ul class="ad-meta-info">
                                        <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                        <li>15 minutes ago </li>
                                     </ul>
                                     <!-- Ad Description-->
                                     <div class="ad-details">
                                        <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                        <ul class="list-unstyled">
                                           <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                           <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                           <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                           <li><i class="flaticon-key"></i>Manual</li>
                                           <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                     <!-- Ad Stats -->
                                     <div class="short-info">
                                        <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                        <div class="ad-stats hidden-xs"><span>Type : </span>Coupe</div>
                                        <div class="ad-stats hidden-xs"><span>Make : </span>Audi</div>
                                     </div>
                                     <!-- Price -->
                                     <div class="price"> <span>$18,640</span> </div>
                                     <!-- Ad View Button -->
                                     <button class="btn btn-block btn-default"><i class="fa fa-times" aria-hidden="true"></i> UnFavorite</button>
                                  </div>
                               </div>
                            </div>
                            <!-- Ad Content End -->
                         </div>
                      </div>
                   </li>
                   <!-- Listing Grid -->
                   <li>
                      <div class="well ad-listing clearfix">
                         <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                            <!-- Image Box -->
                            <div class="img-box">
                               <img src="{{ asset('assets/frontend-assets/images/posting/26.jpg')}}" class="img-responsive" alt="">
                               <div class="total-images"><strong>4</strong> photos </div>
                               <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                            </div>
                            <!-- Ad Status --><span class="ad-status"> Featured </span>
                            <!-- User Preview -->
                            <div class="user-preview">
                               <a href="#"> <img src="{{ asset('assets/frontend-assets/images/users/6.jpg')}}" class="avatar avatar-small" alt=""> </a>
                            </div>
                         </div>
                         <div class="col-md-9 col-sm-7 col-xs-12">
                            <!-- Ad Content-->
                            <div class="row">
                               <div class="content-area">
                                  <div class="col-md-9 col-sm-12 col-xs-12">
                                     <!-- Ad Title -->
                                     <h3><a>2010 Ford Shelby GT500 Coupe</a></h3>
                                     <!-- Ad Meta Info -->
                                     <ul class="ad-meta-info">
                                        <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                        <li>15 minutes ago </li>
                                     </ul>
                                     <!-- Ad Description-->
                                     <div class="ad-details">
                                        <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                        <ul class="list-unstyled">
                                           <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                           <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                           <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                           <li><i class="flaticon-key"></i>Manual</li>
                                           <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                     <!-- Ad Stats -->
                                     <div class="short-info">
                                        <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                        <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                        <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                     </div>
                                     <!-- Price -->
                                     <div class="price"> <span>$900</span> </div>
                                     <!-- Ad View Button -->

                                     <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                  </div>
                               </div>
                            </div>
                            <!-- Ad Content End -->
                         </div>
                      </div>
                   </li>
                   <!-- Listing Grid -->
                   <li>
                      <div class="well ad-listing clearfix">
                         <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                            <!-- Image Box -->
                            <div class="img-box">
                               <img src="{{ asset('assets/frontend-assets/images/posting/7.jpg')}}" class="img-responsive" alt="">
                               <div class="total-images"><strong>5</strong> photos </div>
                               <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                            </div>
                            <!-- User Preview -->
                            <div class="user-preview">
                               <a href="#"> <img src="{{ asset('assets/frontend-assets/images/users/5.jpg')}}" class="avatar avatar-small" alt=""> </a>
                            </div>
                         </div>
                         <div class="col-md-9 col-sm-7 col-xs-12">
                            <!-- Ad Content-->
                            <div class="row">
                               <div class="content-area">
                                  <div class="col-md-9 col-sm-12 col-xs-12">
                                     <!-- Ad Title -->
                                     <h3><a> 2010 Lamborghini Gallardo Spyder</a></h3>
                                     <!-- Ad Meta Info -->
                                     <ul class="ad-meta-info">
                                        <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                        <li>15 minutes ago </li>
                                     </ul>
                                     <!-- Ad Description-->
                                     <div class="ad-details">
                                        <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                        <ul class="list-unstyled">
                                           <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                           <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                           <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                           <li><i class="flaticon-key"></i>Manual</li>
                                           <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                     <!-- Ad Stats -->
                                     <div class="short-info">
                                        <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                        <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                        <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                     </div>
                                     <!-- Price -->
                                     <div class="price"> <span>$120</span> </div>
                                     <!-- Ad View Button -->
                                     <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                  </div>
                               </div>
                            </div>
                            <!-- Ad Content End -->
                         </div>
                      </div>
                   </li>
                   <!-- Listing Grid -->
                   <li>
                      <div class="well ad-listing clearfix">
                         <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                            <!-- Image Box -->
                            <div class="img-box">
                               <img src="{{ asset('assets/frontend-assets/images/posting/2.jpg')}}" class="img-responsive" alt="">
                               <div class="total-images"><strong>3</strong> photos </div>
                               <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                            </div>
                            <!-- User Preview -->
                            <div class="user-preview">
                               <a href="#"> <img src="{{ asset('assets/frontend-assets/images/users/3.jpg')}}" class="avatar avatar-small" alt=""> </a>
                            </div>
                         </div>
                         <div class="col-md-9 col-sm-7 col-xs-12">
                            <!-- Ad Content-->
                            <div class="row">
                               <div class="content-area">
                                  <div class="col-md-9 col-sm-12 col-xs-12">
                                     <!-- Ad Title -->
                                     <h3><a> Porsche 911 Carrera 2017 </a></h3>
                                     <!-- Ad Meta Info -->
                                     <ul class="ad-meta-info">
                                        <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                        <li>15 minutes ago </li>
                                     </ul>
                                     <!-- Ad Description-->
                                     <div class="ad-details">
                                        <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                        <ul class="list-unstyled">
                                           <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                           <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                           <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                           <li><i class="flaticon-key"></i>Manual</li>
                                           <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                     <!-- Ad Stats -->
                                     <div class="short-info">
                                        <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                        <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                        <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                     </div>
                                     <!-- Price -->
                                     <div class="price"> <span>$1,129</span> </div>
                                     <!-- Ad View Button -->
                                     <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                  </div>
                               </div>
                            </div>
                            <!-- Ad Content End -->
                         </div>
                      </div>
                   </li>
                   <!-- Listing Grid -->
                   <li>
                      <div class="well ad-listing clearfix">
                         <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                            <!-- Image Box -->
                            <div class="img-box">
                               <img src="{{ asset('assets/frontend-assets/images/posting/15.jpg')}}" class="img-responsive" alt="">
                               <div class="total-images"><strong>4</strong> photos </div>
                               <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                            </div>
                            <!-- Ad Status --><span class="ad-status"> Featured </span>
                            <!-- User Preview -->
                            <div class="user-preview">
                               <a href="#"> <img src="{{ asset('assets/frontend-assets/images/users/7.jpg')}}" class="avatar avatar-small" alt=""> </a>
                            </div>
                         </div>
                         <div class="col-md-9 col-sm-7 col-xs-12">
                            <!-- Ad Content-->
                            <div class="row">
                               <div class="content-area">
                                  <div class="col-md-9 col-sm-12 col-xs-12">
                                     <!-- Ad Title -->
                                     <h3><a>Bugatti Veyron Super Sport </a></h3>
                                     <!-- Ad Meta Info -->
                                     <ul class="ad-meta-info">
                                        <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                        <li>15 minutes ago </li>
                                     </ul>
                                     <!-- Ad Description-->
                                     <div class="ad-details">
                                        <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                        <ul class="list-unstyled">
                                           <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                           <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                           <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                           <li><i class="flaticon-key"></i>Manual</li>
                                           <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                     <!-- Ad Stats -->
                                     <div class="short-info">
                                        <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                        <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                        <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                     </div>
                                     <!-- Price -->
                                     <div class="price"> <span>$350</span> </div>
                                     <!-- Ad View Button -->
                                     <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                  </div>
                               </div>
                            </div>
                            <!-- Ad Content End -->
                         </div>
                      </div>
                   </li>
                   <!-- Listing Grid -->
                   <li>
                      <div class="well ad-listing clearfix">
                         <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                            <!-- Image Box -->
                            <div class="img-box">
                               <img src="{{ asset('assets/frontend-assets/images/posting/28.jpg')}}" class="img-responsive" alt="">
                               <div class="total-images"><strong>4</strong> photos </div>
                               <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                            </div>
                            <!-- Ad Status --><span class="ad-status"> Featured </span>
                            <!-- User Preview -->
                            <div class="user-preview">
                               <a href="#"> <img src="{{ asset('assets/frontend-assets/images/users/6.jpg')}}" class="avatar avatar-small" alt=""> </a>
                            </div>
                         </div>
                         <div class="col-md-9 col-sm-7 col-xs-12">
                            <!-- Ad Content-->
                            <div class="row">
                               <div class="content-area">
                                  <div class="col-md-9 col-sm-12 col-xs-12">
                                     <!-- Ad Title -->
                                     <h3><a>Audi A4 2.0T Quattro Premium</a></h3>
                                     <!-- Ad Meta Info -->
                                     <ul class="ad-meta-info">
                                        <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                        <li>15 minutes ago </li>
                                     </ul>
                                     <!-- Ad Description-->
                                     <div class="ad-details">
                                        <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                        <ul class="list-unstyled">
                                           <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                           <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                           <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                           <li><i class="flaticon-key"></i>Manual</li>
                                           <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                     <!-- Ad Stats -->
                                     <div class="short-info">
                                        <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                        <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                        <div class="ad-stats hidden-xs"><span>Sub Category : </span>Computer & Laptops</div>
                                     </div>
                                     <!-- Price -->
                                     <div class="price"> <span>$250</span> </div>
                                     <!-- Ad View Button -->
                                     <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                  </div>
                               </div>
                            </div>
                            <!-- Ad Content End -->
                         </div>
                      </div>
                   </li>
                   <!-- Listing Grid -->
                   <li>
                      <div class="well ad-listing clearfix">
                         <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                            <!-- Image Box -->
                            <div class="img-box">
                               <img src="{{ asset('assets/frontend-assets/images/posting/13.jpg')}}" class="img-responsive" alt="">
                               <div class="total-images"><strong>4</strong> photos </div>
                               <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                            </div>
                            <!-- Ad Status --><span class="ad-status"> Featured </span>
                            <!-- User Preview -->
                            <div class="user-preview">
                               <a href="#"> <img src="{{ asset('assets/frontend-assets/images/users/7.jpg')}}" class="avatar avatar-small" alt=""> </a>
                            </div>
                         </div>
                         <div class="col-md-9 col-sm-7 col-xs-12">
                            <!-- Ad Content-->
                            <div class="row">
                               <div class="content-area">
                                  <div class="col-md-9 col-sm-12 col-xs-12">
                                     <!-- Ad Title -->
                                     <h3><a>Audi Q3 2.0T Premium Plus</a></h3>
                                     <!-- Ad Meta Info -->
                                     <ul class="ad-meta-info">
                                        <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                        <li>15 minutes ago </li>
                                     </ul>
                                     <!-- Ad Description-->
                                     <div class="ad-details">
                                        <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                        <ul class="list-unstyled">
                                           <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                           <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                           <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                           <li><i class="flaticon-key"></i>Manual</li>
                                           <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                     <!-- Ad Stats -->
                                     <div class="short-info">
                                        <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                        <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                        <div class="ad-stats hidden-xs"><span>Sub Category : </span>Laptops</div>
                                     </div>
                                     <!-- Price -->
                                     <div class="price"> <span>$440</span> </div>
                                     <!-- Ad View Button -->
                                     <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                  </div>
                               </div>
                            </div>
                            <!-- Ad Content End -->
                         </div>
                      </div>
                   </li>
                   <!-- Listing Grid -->
                   <li>
                      <div class="well ad-listing clearfix">
                         <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                            <!-- Image Box -->
                            <div class="img-box">
                               <img src="{{ asset('assets/frontend-assets/images/posting/27.jpg')}}" class="img-responsive" alt="">
                               <div class="total-images"><strong>4</strong> photos </div>
                               <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                            </div>
                            <!-- Ad Status --><span class="ad-status"> Featured </span>
                            <!-- User Preview -->
                            <div class="user-preview">
                               <a href="#"> <img src="{{ asset('assets/frontend-assets/images/users/4.jpg')}}" class="avatar avatar-small" alt=""> </a>
                            </div>
                         </div>
                         <div class="col-md-9 col-sm-7 col-xs-12">
                            <!-- Ad Content-->
                            <div class="row">
                               <div class="content-area">
                                  <div class="col-md-9 col-sm-12 col-xs-12">
                                     <!-- Ad Title -->
                                     <h3><a>2014 Ford Fusion Titanium</a></h3>
                                     <!-- Ad Meta Info -->
                                     <ul class="ad-meta-info">
                                        <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                        <li>15 minutes ago </li>
                                     </ul>
                                     <!-- Ad Description-->
                                     <div class="ad-details">
                                        <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                        <ul class="list-unstyled">
                                           <li><i class="flaticon-gas-station-1"></i>Diesel</li>
                                           <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                           <li><i class="flaticon-engine-2"></i>1800 cc</li>
                                           <li><i class="flaticon-key"></i>Manual</li>
                                           <li><i class="flaticon-calendar-2"></i>Year 2002</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="col-md-3 col-xs-12 col-sm-12">
                                     <!-- Ad Stats -->
                                     <div class="short-info">
                                        <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                        <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                        <div class="ad-stats hidden-xs"><span>Sub Category : </span>Furniture</div>
                                     </div>
                                     <!-- Price -->
                                     <div class="price"> <span>$110,50</span> </div>
                                     <!-- Ad View Button -->
                                     <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                  </div>
                               </div>
                            </div>
                            <!-- Ad Content End -->
                         </div>
                      </div>
                   </li>
                </ul>
                <!-- Advertizing -->
                <section class="advertising">
                   <a href="post-ad-1.html">
                      <div class="banner">
                         <div class="wrapper">
                            <span class="title">Do you want your property to be listed here?</span>
                            <span class="submit">Submit it now! <i class="fa fa-plus-square"></i></span>
                         </div>
                      </div>
                      <!-- /.banner-->
                   </a>
                </section>
                <!-- Advertizing End -->
                <!-- Ads Archive End -->  
                <div class="clearfix"></div>
                <!-- Pagination -->  
                <div class="col-md-12 col-xs-12 col-sm-12">
                   <ul class="pagination pagination-lg">
                      <li> <a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                      <li> <a href="#">1</a> </li>
                      <li class="active"> <a href="#">2</a> </li>
                      <li> <a href="#">3</a> </li>
                      <li> <a href="#">4</a> </li>
                      <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                   </ul>
                </div>
                <!-- Pagination End -->   
             </div>
             <!-- Middle Content Area  End -->
          </div>
       </div>
       <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    
 </div>
 <!-- Main Content Area End --> 
 <!-- Post Ad Sticky -->
 <a href="#" class="sticky-post-button hidden-xs">
    <span class="sell-icons">
    <i class="flaticon-transport-9"></i>
    </span>
    <h4>SELL</h4>
 </a>

 <!-- Product Preview Popup -->
 <div class="quick-view-modal modalopen" id="ad-preview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg ad-modal">
       <button class="close close-btn popup-cls" aria-label="Close" data-dismiss="modal" type="button"> <i class="fa-times fa"></i> </button>
       <div class="modal-content single-product">
          <div class="diblock">
             <div class="col-lg-7 col-sm-12 col-xs-12">
                <div class="clearfix"></div>
                <div id="single-slider" class="flexslider">
                   <ul class="slides">
                      <li><img alt="" src="{{ asset('assets/frontend-assets/images/single-page/1')}}.jpg" /></li>
                      <li><img alt="" src="{{ asset('assets/frontend-assets/images/single-page/2')}}.jpg" /></li>
                      <li><img alt="" src="images/single-page/3.jpg" /></li>
                      <li><img alt="" src="images/single-page/4.jpg" /></li>
                      <li><img alt="" src="images/single-page/5.jpg" /></li>
                      <li><img alt="" src="images/single-page/6.jpg" /></li>
                   </ul>
                </div>
                <div id="carousel" class="flexslider">
                   <ul class="slides">
                      <li><img alt="" src="images/single-page/1_thumb.jpg"></li>
                      <li><img alt="" src="images/single-page/2_thumb.jpg"></li>
                      <li><img alt="" src="images/single-page/3_thumb.jpg"> </li>
                      <li><img alt="" src="images/single-page/4_thumb.jpg"></li>
                      <li><img alt="" src="images/single-page/5_thumb.jpg"></li>
                      <li><img alt="" src="images/single-page/6_thumb.jpg"></li>
                   </ul>
                </div>
             </div>
             <div class=" col-sm-12 col-lg-5 col-xs-12">
                <div class="summary entry-summary">
                   <div class="ad-preview-details">
                      <a href="#">
                         <h4>Honda Civic Sports Edition 2017</h4>
                      </a>
                      <div class="overview-price">
                         <span>$36.000</span>
                      </div>
                      <div class="clearfix"></div>
                      <p>Tattooed fashion axe Blue Bottle butcher tilde. Pitchfork leggings meh Odd Future.Drinking vinegar. </p>
                      <ul class="ad-preview-info col-md-6 col-sm-6">
                         <li>
                            <span>Fabrication:</span>
                            <p>2013/2014</p>
                         </li>
                         <li>
                            <span>Speed:</span>
                            <p>160p/h</p>
                         </li>
                         <li>
                            <span>Mileage:</span>
                            <p>30.000km - 40.000km</p>
                         </li>
                         <li>
                            <span>Fuel:</span>
                            <p>Petrol</p>
                         </li>
                      </ul>
                      <ul class="ad-preview-info col-md-6 col-sm-6">
                         <li>
                            <span>Color:</span>
                            <p>Black</p>
                         </li>
                         <li>
                            <span>Transmition:</span>
                            <p>Automatic</p>
                         </li>
                         <li>
                            <span>Dors:</span>
                            <p>4/5</p>
                         </li>
                         <li>
                            <span>Engine:</span>
                            <p>2500cm3</p>
                         </li>
                      </ul>
                      <button class="btn btn-theme btn-block" type="submit">Contact Dealer</button>
                   </div>
                </div>
                <!-- .summary -->
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection