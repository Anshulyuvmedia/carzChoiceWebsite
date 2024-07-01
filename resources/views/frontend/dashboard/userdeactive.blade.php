@extends('frontend.layouts.website')
@section('content')
@section('title', 'Accound Deactive')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="small-breadcrumb">
                <div class=" breadcrumb-link">
                   <ul>
                      <li><a href="/">Home </a></li>
                      <li><a class="active" href="#">Acount Deactivation</a></li>
                   </ul>
                </div>
                <div class="header-page">
                   <h1>Delete Your Account </h1>
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
                     <li>
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
                     <li class="active">
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
          <!-- Row -->
          <div class="row margin-top-40">
             <!-- Middle Content Area -->
             <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="grid-card">
                   
                   <div class="row">
                      <form>
                         <div class="col-md-12 col-sm-12">
                            <div class="alert alert-dismissible alert-info"> You can reactive your account anytime with your username and password</div>
                         </div>
                         <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                               <label>Give Breif Description Here <span class="required">*</span></label>
                               <textarea cols="6" rows="8" placeholder="Are you sure, you want to delete your account?" class="form-control"></textarea>
                            </div>
                         </div>
                         <div class="col-md-12 col-sm-12">
                            <button class="btn btn-theme pull-right margin-bottom-20"><i class="fa fa-close"></i> Clsoe Now </button>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
             <!-- Middle Content Area  End -->
          </div>
          <!-- Row End -->
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
 <!-- Back To Top -->
 <a href="#0" class="cd-top">Top</a>
 <!-- Product Preview Popup -->
 <div class="quick-view-modal modalopen" id="ad-preview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg ad-modal">
       <button class="close close-btn popup-cls" aria-label="Close" data-dismiss="modal" type="button"> <i class="fa-times fa"></i> </button>
       <div class="modal-content single-product">
          <div class="diblock">
             <div class="col-lg-7 col-sm-12 col-xs-12">
                <div class="clearfix"></div>
                <div class="flexslider single-page-slider">
                   <div class="flex-viewport">
                      <ul class="slides slide-main">
                         <li class=""><img alt="" src="{{ asset('assets/frontend-assets/images/single-page/1')}}.jpg" title=""></li>
                         <li><img alt="" src="{{ asset('assets/frontend-assets/images/single-page/2')}}.jpg" title=""></li>
                         <li class="flex-active-slide"><img alt="" src="{{ asset('assets/frontend-assets/images/single-page/3')}}.jpg" title=""></li>
                         <li><img alt="" src="{{ asset('assets/frontend-assets/images/single-page/4')}}.jpg" title=""></li>
                         <li><img alt="" src="{{ asset('assets/frontend-assets/images/single-page/5')}}.jpg" title=""></li>
                         <li><img alt="" src="{{ asset('assets/frontend-assets/images/single-page/6')}}.jpg" title=""></li>
                      </ul>
                   </div>
                </div>
                <div class="flexslider" id="carousels">
                   <div class="flex-viewport">
                      <ul class="slides slide-thumbnail">
                         <li><img alt="" draggable="false" src="{{ asset('assets/frontend-assets/images/single-page/1_thumb')}}.jpg"></li>
                         <li><img alt="" draggable="false" src="{{ asset('assets/frontend-assets/images/single-page/2_thumb')}}.jpg"></li>
                         <li class="flex-active-slide"><img alt="" draggable="false" src="{{ asset('assets/frontend-assets/images/single-page/3_thumb')}}.jpg"> </li>
                         <li><img alt="" draggable="false" src="{{ asset('assets/frontend-assets/images/single-page/4_thumb')}}.jpg"></li>
                         <li><img alt="" draggable="false" src="{{ asset('assets/frontend-assets/images/single-page/5_thumb')}}.jpg"></li>
                         <li><img alt="" draggable="false" src="{{ asset('assets/frontend-assets/images/single-page/6_thumb')}}.jpg"></li>
                         <!-- items mirrored twice, total of 12 -->
                      </ul>
                   </div>
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