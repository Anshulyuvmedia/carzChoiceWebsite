@extends('frontend.layouts.website')
@section('content')
@section('title', 'User Login')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="small-breadcrumb">
                <div class=" breadcrumb-link">
                   <ul>
                      <li><a href="index-2.html">Home Page</a></li>
                      <li><a class="active" href="#">Login</a></li>
                   </ul>
                </div>
                <div class="header-page">
                   <h1>Sign In to your account </h1>
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
    <section class="section-padding no-top gray">
       <!-- Main Container -->
       <div class="container">
          <!-- Row -->
          <div class="row">
             <!-- Middle Content Area -->
             <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <!--  Form -->
                <div class="form-grid">
                   <form>
                   
                     <a class="btn btn-lg btn-block btn-social btn-facebook">
                           <span class="fa fa-facebook"></span> Sign in with Facebook
                       </a>
                     
                     <a class="btn btn-lg btn-block btn-social btn-google">
                           <span class="fa fa-google"></span> Sign in with Facebook
                       </a>
                     
                     <h2 class="no-span"><b>(OR)</b></h2>
                   
                      <div class="form-group">
                         <label>Email</label>
                         <input placeholder="Your Email" class="form-control" type="email">
                      </div>
                      <div class="form-group">
                         <label>Password</label>
                         <input placeholder="Your Password" class="form-control" type="password">
                      </div>
                      <div class="form-group">
                         <div class="row">
                            <div class="col-xs-12">
                               <div class="skin-minimal">
                                  <ul class="list">
                                     <li>
                                        <input  type="checkbox" id="minimal-checkbox-1">
                                        <label for="minimal-checkbox-1">Remember Me</label>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </div>
                      </div>
                      <button class="btn btn-theme btn-lg btn-block">Login With Us</button>
                   </form>
                </div>
                <!-- Form -->
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

@endsection