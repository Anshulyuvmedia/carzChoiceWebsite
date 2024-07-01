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
                      <li><a href="/">Home </a></li>
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
 <div class="main-content-area clearfix">
    <section class="section-padding no-top gray">
       <div class="container">
          <!-- Row -->
          <div class="row">
             <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="form-grid">
                   <form action="{{ route('loginuser') }}" method="POST">
                    @csrf
                      <div class="form-group">
                         <label>Email</label>
                         <input placeholder="Your Email" name="email" class="form-control" type="email">
                      </div>
                      <div class="form-group">
                         <label>Password</label>
                         <input placeholder="Your Password" name="password" class="form-control" type="password">
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
                      <button type="submit" class="btn btn-theme btn-lg btn-block">Login With Us</button>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
 </div>
@endsection
