@extends('frontend.layouts.website')
@section('content')
@section('title', 'User Active Ads')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="small-breadcrumb">
                <div class=" breadcrumb-link">
                   <ul>
                      <li><a href="/">Home </a></li>
                      <li><a class="active" href="#">Profile</a></li>
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
                     <li >
                        <a href="/userprofile">
                           <div class="menu-name"> Profile </div>
                        </a>
                     </li>
                     <li>
                        <a href="/userarchive">
                           <div class="menu-name">Archives</div>
                        </a>
                     </li>
                     <li class="active">
                        <a href="/useractiveads">
                           <div class="menu-name">My Ads</div>
                        </a>
                     </li>
                     <li>
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
          <div class="row margin-top-40 grid-style-2 ">
             <!-- Middle Content Area -->
             <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="category-grid-box-1">
                   <div class="featured-ribbon">
                      <span>Featured</span>
                   </div>
                   <div class="image">
                      <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/10.jpg')}}" class="img-responsive">
                      <div class="ribbon popular"></div>
                      <div class="price-tag">
                         <div class="price"><span>$45,00</span></div>
                      </div>
                      <div class="notification msgs" >
                         <a class="round-btn" href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a>
                         <span>7</span>
                      </div>
                   </div>
                   <div class="short-description-1 clearfix">
                      <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                      <h3><a title="" href="#">Honda Civic 2017 Sports Edition</a></h3>
                      <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                      <ul class="list-unstyled">
                         <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                      </ul>
                   </div>
                   <div class="ad-info-1">
                      <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                      <ul class="pull-right">
                         <li> <a data-toggle="tooltip" data-placement="top" title="Edit this Ad" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                         <li> <a data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="#"><i class="fa fa-times delete"></i></a></li>
                      </ul>
                   </div>
                </div>
                <!-- Listing Ad Grid -->
             </div>
             <!-- /col -->
             <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="category-grid-box-1">
                   <div class="image">
                      <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/7.jpg')}}" class="img-responsive">
                      <div class="ribbon popular"></div>
                      <div class="price-tag">
                         <div class="price"><span>$77,000</span></div>
                      </div>
                      <div class="notification msgs" >
                         <a class="round-btn" href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a>
                         <span>2</span>
                      </div>
                   </div>
                   <div class="short-description-1 clearfix">
                      <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                      <h3><a title="" href="#">2015 Lamborghini Huracan</a></h3>
                      <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                      <ul class="list-unstyled">
                         <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                      </ul>
                   </div>
                   <div class="ad-info-1">
                      <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                      <ul class="pull-right">
                         <li> <a data-toggle="tooltip" data-placement="top" title="Edit this Ad" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                         <li> <a data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="#"><i class="fa fa-times delete"></i></a></li>
                      </ul>
                   </div>
                </div>
                <!-- Listing Ad Grid -->
             </div>
             <!-- /col -->
             <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="category-grid-box-1">
                   <div class="featured-ribbon">
                      <span>Featured</span>
                   </div>
                   <div class="image">
                      <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/12.jpg')}}" class="img-responsive">
                      <div class="ribbon popular"></div>
                      <div class="price-tag">
                         <div class="price"><span>$23,000</span></div>
                      </div>
                   </div>
                   <div class="short-description-1 clearfix">
                      <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                      <h3><a title="" href="#">BMW I8 1.5 Auto 4X4 2dr </a></h3>
                      <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                      <ul class="list-unstyled">
                         <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                      </ul>
                   </div>
                   <div class="ad-info-1">
                      <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                      <ul class="pull-right">
                         <li> <a data-toggle="tooltip" data-placement="top" title="Edit this Ad" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                         <li> <a data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="#"><i class="fa fa-times delete"></i></a></li>
                      </ul>
                   </div>
                </div>
                <!-- Listing Ad Grid -->
             </div>
             <!-- /col -->
             <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="category-grid-box-1">
                   <div class="image">
                      <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/13.jpg')}}" class="img-responsive">
                      <div class="ribbon popular"></div>
                      <div class="price-tag">
                         <div class="price"><span>$77,000</span></div>
                      </div>
                   </div>
                   <div class="short-description-1 clearfix">
                      <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                      <h3><a title="" href="#">2017 Audi A4 sport Auto MY17</a></h3>
                      <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                      <ul class="list-unstyled">
                         <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                      </ul>
                   </div>
                   <div class="ad-info-1">
                      <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                      <ul class="pull-right">
                         <li> <a data-toggle="tooltip" data-placement="top" title="Edit this Ad" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                         <li> <a data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="#"><i class="fa fa-times delete"></i></a></li>
                      </ul>
                   </div>
                </div>
                <!-- Listing Ad Grid -->
             </div>
             <!-- /col -->
             <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="category-grid-box-1">
                   <div class="featured-ribbon">
                      <span>Featured</span>
                   </div>
                   <div class="image">
                      <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/2.jpg')}}" class="img-responsive">
                      <div class="ribbon popular"></div>
                      <div class="price-tag">
                         <div class="price"><span>$22,000</span></div>
                      </div>
                      <div class="notification msgs">
                         <a class="round-btn" href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a>
                         <span >12</span>
                      </div>
                   </div>
                   <div class="short-description-1 clearfix">
                      <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                      <h3><a title="" href="#">2015 Ferrari 458 Italia Convertibleo</a></h3>
                      <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                      <ul class="list-unstyled">
                         <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                      </ul>
                   </div>
                   <div class="ad-info-1">
                      <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                      <ul class="pull-right">
                         <li> <a data-toggle="tooltip" data-placement="top" title="Edit this Ad" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                         <li> <a data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="#"><i class="fa fa-times delete"></i></a></li>
                      </ul>
                   </div>
                </div>
                <!-- Listing Ad Grid -->
             </div>
             <!-- /col -->
             <div class="col-md-4 col-xs-12 col-sm-6">
                <div class="category-grid-box-1">
                   <div class="image">
                      <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/3.jpg')}}" class="img-responsive">
                      <div class="ribbon popular"></div>
                      <div class="price-tag">
                         <div class="price"><span>$205,000</span></div>
                      </div>
                   </div>
                   <div class="short-description-1 clearfix">
                      <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                      <h3><a title="" href="#">Ford Focus 1.6 TDCi Edge 5dr</a></h3>
                      <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                      <ul class="list-unstyled">
                         <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                         <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                      </ul>
                   </div>
                   <div class="ad-info-1">
                      <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                      <ul class="pull-right">
                         <li> <a data-toggle="tooltip" data-placement="top" title="Edit this Ad" data-original-title="Edit this Ad" href="#"><i class="fa fa-pencil edit"></i></a> </li>
                         <li> <a data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete" href="#"><i class="fa fa-times delete"></i></a></li>
                      </ul>
                   </div>
                </div>
                <!-- Listing Ad Grid -->
             </div>
             <!-- /col -->
             <!-- Middle Content Area  End -->
          </div>
       </div>
       <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    
 </div>
 <!-- Main Content Area End --> 

@endsection