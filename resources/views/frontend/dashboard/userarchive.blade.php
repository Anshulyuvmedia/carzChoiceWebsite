@extends('frontend.layouts.website')
@section('content')
@section('title', 'User Archive')

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
                     <li class="active">
                        <a href="/userarchive">
                           <div class="menu-name">Archives</div>
                        </a>
                     </li>
                     <li >
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
          
          <div class="row margin-top-40">
             <!-- Ads Archive -->
             <div class="grid-style-4">
                <div class="posts-masonry">
                   <div class="col-md-4  col-xs-12 col-sm-6">
                      <!-- Ad Box -->
                      <div class="white category-grid-box-1 ">
                         <!-- Image Box -->
                         <div class="image">
                            <div class="ribbon status_active">Active</div>
                            <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/4.jpg')}}" class="img-responsive">
                            <div class="notification msgs">
                               <a class="round-btn" href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a>
                               <span>7</span>
                            </div>
                         </div>
                         <!-- Short Description -->
                         <div class="short-description-1 ">
                            <!-- Category Title -->
                            <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                            <!-- Ad Title -->
                            <h3>
                               <a title="" href="#">2016 BMW 3 Series 328i</a>
                            </h3>
                            <!-- Location -->
                            <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                            <!-- Price -->
                            <span class="ad-price">$11,000</span>
                         </div>
                         <!-- Ad Meta Stats -->
                         <div class="ad-info-1">
                            <!-- Ad Status -->
                            <label>
                               Change Ad Status
                               <select class="form-control ad-post-status">
                                  <option value="expired">Expired</option>
                                  <option value="sold">Sold</option>
                                  <option value="active" selected="">Active</option>
                               </select>
                            </label>
                            <ul class="pull-right ">
                               <li><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Ad" href="javascript:void(0);"><i class="fa fa-pencil edit"></i></a> </li>
                               <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-times delete"></i></a></li>
                            </ul>
                         </div>
                      </div>
                      <!-- Ad Box End -->
                   </div>
                   <div class="col-md-4  col-xs-12 col-sm-6">
                      <!-- Ad Box -->
                      <div class="white category-grid-box-1 ">
                         <!-- Image Box -->
                         <div class="image">
                            <div class="ribbon status_active">Active</div>
                            <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/3.jpg')}}" class="img-responsive">
                         </div>
                         <!-- Short Description -->
                         <div class="short-description-1 ">
                            <!-- Category Title -->
                            <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                            <!-- Ad Title -->
                            <h3>
                               <a title="" href="#">2014 Ford Shelby GT500 Coupe</a>
                            </h3>
                            <!-- Location -->
                            <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                            <!-- Price -->
                            <span class="ad-price">$21,000</span> 
                         </div>
                         <!-- Ad Meta Stats -->
                         <div class="ad-info-1">
                            <!-- Ad Status -->
                            <label>
                               Change Ad Status
                               <select class="form-control ad-post-status">
                                  <option value="expired">Expired</option>
                                  <option value="sold">Sold</option>
                                  <option value="active" selected="">Active</option>
                               </select>
                            </label>
                            <ul class="pull-right ">
                               <li><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Ad" href="javascript:void(0);"><i class="fa fa-pencil edit"></i></a> </li>
                               <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-times delete"></i></a></li>
                            </ul>
                         </div>
                      </div>
                      <!-- Ad Box End -->
                   </div>
                   <div class="col-md-4  col-xs-12 col-sm-6">
                      <!-- Ad Box -->
                      <div class="white category-grid-box-1 ">
                         <!-- Image Box -->
                         <div class="image">
                            <div class="ribbon status_sold">Sold</div>
                            <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/2.jpg')}}" class="img-responsive">
                         </div>
                         <!-- Short Description -->
                         <div class="short-description-1 ">
                            <!-- Category Title -->
                            <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                            <!-- Ad Title -->
                            <h3>
                               <a title="" href="#">Porsche 911 Carrera 2017 </a>
                            </h3>
                            <!-- Location -->
                            <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                            <!-- Price -->
                            <span class="ad-price">$77,000</span> 
                         </div>
                         <!-- Ad Meta Stats -->
                         <div class="ad-info-1">
                            <!-- Ad Status -->
                            <label>
                               Change Ad Status
                               <select class="form-control ad-post-status">
                                  <option value="expired">Expired</option>
                                  <option value="sold" selected="selected">Sold</option>
                                  <option value="active">Active</option>
                               </select>
                            </label>
                            <ul class="pull-right ">
                               <li><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Ad" href="javascript:void(0);"><i class="fa fa-pencil edit"></i></a> </li>
                               <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-times delete"></i></a></li>
                            </ul>
                         </div>
                      </div>
                      <!-- Ad Box End -->
                   </div>
                   <div class="col-md-4  col-xs-12 col-sm-6">
                      <!-- Ad Box -->
                      <div class="white category-grid-box-1 ">
                         <!-- Image Box -->
                         <div class="image">
                            <div class="ribbon status_sold">Sold</div>
                            <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/1.jpg')}}" class="img-responsive">
                         </div>
                         <!-- Short Description -->
                         <div class="short-description-1 ">
                            <!-- Category Title -->
                            <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                            <!-- Ad Title -->
                            <h3>
                               <a title="" href="#">2017 Audi A4 quattro Premium</a>
                            </h3>
                            <!-- Location -->
                            <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                            <!-- Price -->
                            <span class="ad-price">$370</span> 
                         </div>
                         <!-- Ad Meta Stats -->
                         <div class="ad-info-1">
                            <!-- Ad Status -->
                            <label>
                               Change Ad Status
                               <select class="form-control ad-post-status">
                                  <option value="sold" selected="">Sold</option>
                                  <option value="expired">Expired</option>
                                  <option value="active">Sold</option>
                               </select>
                            </label>
                            <ul class="pull-right ">
                               <li><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Ad" href="javascript:void(0);"><i class="fa fa-pencil edit"></i></a> </li>
                               <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-times delete"></i></a></li>
                            </ul>
                         </div>
                      </div>
                      <!-- Ad Box End -->
                   </div>
                   <div class="col-md-4  col-xs-12 col-sm-6">
                      <!-- Ad Box -->
                      <div class="white category-grid-box-1 ">
                         <!-- Image Box -->
                         <div class="image">
                            <div class="ribbon status_expired">Expired</div>
                            <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/6.jpg')}}" class="img-responsive">
                         </div>
                         <!-- Short Description -->
                         <div class="short-description-1 ">
                            <!-- Category Title -->
                            <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                            <!-- Ad Title -->
                            <h3>
                               <a title="" href="#">McLaren F1 Sports Car</a>
                            </h3>
                            <!-- Location -->
                            <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                            <!-- Price -->
                            <span class="ad-price">$370</span> 
                         </div>
                         <!-- Ad Meta Stats -->
                         <div class="ad-info-1">
                            <!-- Ad Status -->
                            <label>
                               Change Ad Status
                               <select class="form-control ad-post-status">
                                  <option value="expired" selected="">Expired</option>
                                  <option value="sold">Sold</option>
                                  <option value="active" >Active</option>
                               </select>
                            </label>
                            <ul class="pull-right ">
                               <li><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Ad" href="javascript:void(0);"><i class="fa fa-pencil edit"></i></a> </li>
                               <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-times delete"></i></a></li>
                            </ul>
                         </div>
                      </div>
                      <!-- Ad Box End -->
                   </div>
                   <div class="col-md-4  col-xs-12 col-sm-6">
                      <!-- Ad Box -->
                      <div class="white category-grid-box-1 ">
                         <!-- Image Box -->
                         <div class="image">
                            <div class="ribbon status_expired">Expired</div>
                            <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/7.jpg')}}" class="img-responsive">
                         </div>
                         <!-- Short Description -->
                         <div class="short-description-1 ">
                            <!-- Category Title -->
                            <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                            <!-- Ad Title -->
                            <h3>
                               <a title="" href="#">Lamborghini Gallardo 5.0 V10 2dr</a>
                            </h3>
                            <!-- Location -->
                            <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                            <!-- Price -->
                            <span class="ad-price">$370</span> 
                         </div>
                         <!-- Ad Meta Stats -->
                         <div class="ad-info-1">
                            <!-- Ad Status -->
                            <label>
                               Change Ad Status
                               <select class="form-control ad-post-status">
                                  <option value="expired" selected="">Expired</option>
                                  <option value="sold">Sold</option>
                                  <option value="active" >Active</option>
                               </select>
                            </label>
                            <ul class="pull-right ">
                               <li><a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Ad" href="javascript:void(0);"><i class="fa fa-pencil edit"></i></a> </li>
                               <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-times delete"></i></a></li>
                            </ul>
                         </div>
                      </div>
                      <!-- Ad Box End -->
                   </div>
                </div>
             </div>
             <!-- Ads Archive End -->  
          </div>
       </div>
       <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    
 </div>
 <!-- Main Content Area End --> 

@endsection