@extends('frontend.layouts.website')
@section('content')
@section('title', 'User Profile')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
   <div class="container">
      <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="small-breadcrumb">
                  {{-- <div class=" breadcrumb-link">
                        <ul>
                           <li><a href="#">Home </a></li>
                           <li><a class="active" href="#">Profile</a></li>
                        </ul>
                  </div> --}}
                  <div class="header-page">
                        <h1>User Dashboard</h1>
                  </div>
               </div>
            </div>
      </div>
   </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
   <section class="section-padding no-top gray">
      <div class="container">

            <!-- Profile Card Component -->
            @include('components.main-profile-card')


            <!-- Tab Section Component -->
            @include('components.tab-section-user-profile')
      </div>
   </section>
</div>
@endsection
