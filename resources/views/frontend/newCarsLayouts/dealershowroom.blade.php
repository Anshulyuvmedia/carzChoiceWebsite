@extends('frontend.layouts.website')
@section('content')
@section('title', 'New Car Dealer')


<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">

                    <div class="header-page">
                        <h1>New Car Dealer</h1>
                        <p>
                            Looking to buy a car? CarWale helps you locate authorized dealers for 35 brands across
                            India. We have listed over 7995 dealer showrooms located in 892 cities in India. Choose the
                            brand and city of your choice and get contact information and full address of dealers near
                            you.
                        </p>
                    </div>
                </div>
                <div class="header-listing">
                    <div class="col-md-3  col-xs-12 col-sm-12 p-0">
                        <div class="custom-select-box">

                            <label class="control-label">Brand </label>
                            <input placeholder="Select Your Brand" type="text" class=" form-control Car"
                                data-bs-target="#selectBrand" data-bs-toggle="modal" type="button">
                            </input>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12 p-0">

                        <div class="custom-select-box">
                            <label for="selectLocation">City:</label>
                            <input placeholder="Select a City" type="text" class=" form-control City"
                                data-bs-target="#selectLocation" data-bs-toggle="modal" type="button">
                            </input>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= All Brands =-=-=-=-=-=-= -->
<section class="client-section py-5 gray">
    <div class="container">
        <div class="row">
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1>Explore dealer <span class="heading-color">showrooms by brand</span> </h1>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="brand-logo-area clients-bg">
                    <div class="client-brand-list">
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/1.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/2.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/3.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/4.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/5.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/6.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/7.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/8.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/9.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="sigle-clients-brand">
                            <a href="#"><img src="{{ asset('assets/frontend-assets/images/brands/11.png') }}"
                                    alt=""></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= All Brands End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Feature and Benefits =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page">
                        <h1>Tools You May Need</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="panel-body recent-ads ">
                    <!-- Ads -->
                    <div class="recent-ads-list">
                        <div class="recent-ads-container d-flex align-items-center  ">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/user-reviews-2.svg"
                                        alt="" style="width: 40px;">
                                </a>
                            </div>
                           
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">User Reviews </a>
                                </h3>
                                <p>Read reviews shared by car users</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 ">
                <div class="panel-body recent-ads ">
                    <!-- Ads -->
                    <div class="recent-ads-list">
                        <div class="recent-ads-container d-flex align-items-center  ">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/used-car.svg"
                                        alt="" style="width: 40px;">
                                </a>
                            </div>
                           
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Used Cars in Navi Mumbai</a>
                                </h3>
                                <p>6271 Used Cars in Navi Mumbai</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Feature and Benefits  End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
<section class="custom-padding gray">
    <!-- Main Container -->
    <div class="container featured-cars">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1> <span class="heading-color"> Featured</span> Cars</h1>
                </div>
            </div>

            <div class="card">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="nav-item active">
                        <a class="nav-link" aria-controls="trending" role="tab" data-toggle="tab"
                            href="#trending">Trending </a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="popular" role="tab" data-toggle="tab"
                            href="#popular">Popular</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                            href="#upcoming">Upcoming</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content clearfix">
                    <div class="tab-pane fade in active" style="margin-top: 20px;" id="trending">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class=" featured-slider owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>

                    <div class="tab-pane fade" style="margin-top: 20px;" id="popular">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class=" featured-slider owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>

                    <div class="tab-pane fade" style="margin-top: 20px;" id="upcoming">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class=" featured-slider owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Featured</span>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                        {{-- <div class="price-tag">
                                                            <div class="price"><span>$205,000</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        {{-- <div class="category-title"> 
                                                            <span><a href="#">Sports &
                                                                    Equipment</a></span> </div> --}}

                                                        <h3>
                                                            <a title="" href="#">
                                                                Mahindra XUV 3XO
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class="" href="#">
                                                            <button class="btn btn-outline btn-danger btn-sm  ">
                                                                <i class="fa fa-phone"></i>
                                                                View Details.
                                                            </button>
                                                        </a>

                                                    </div>
                                                </div>
                                                <!-- Listing Ad Grid -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>
                </div>
                <!-- Row End -->
            </div>
        </div>
        <!-- Main Container End -->
    </div>
</section>
<!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->








<div class="modal fade" id="selectLocation" aria-hidden="true" aria-labelledby="selectLocationlabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title " id="selectBrandlabel">Select Your City </h3>
                <div class="header-bg"></div>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>

            <div class="modal-body">
                <!-- content goes here -->
                <form>
                    <div class=" text-center">
                        <a href="#">
                            <i class="bi bi-crosshair"></i>
                            Detect my location
                        </a>
                    </div>
                    <div class="form-group col-md-12">

                        <input type="text" id="carLocation" class="form-control" placeholder="Enter Your Name">
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h6 class="pb-3 text-center">Popular Cities</h6>

                            <div class="row flex-wrap justify-content-center">
                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal">
                                        <img src="https://imgd.aeplcdn.com/0x0/n/ergk3sa_1483598.jpg" alt="Mumbai">
                                        <div class="fs-6 text-muted">Mumbai</div>
                                    </a>
                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/k88k3sa_1483601.jpg" alt="Bangalore">
                                        <div class="fs-6 text-muted">Bangalore</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/1jnk3sa_1483607.jpg" alt="Delhi">
                                        <div class="fs-6 text-muted">Delhi</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/53hk3sa_1483599.jpg" alt="Pune">
                                        <div class="fs-6 text-muted">Pune</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" umbai">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/o0ik3sa_1483600.jpg"
                                            alt="Navi Mumbai">
                                        <div class="mt-2 fs-6 text-muted" style="line-height: 1.3em;">Navi Mumbai
                                        </div>
                                    </a>

                                </div>
                            </div>

                            <div class="row flex-wrap justify-content-center mt-3">

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/sj7k3sa_1483605.jpg" alt="Hyderabad">
                                        <div class="fs-6 text-muted">Hyderabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/z2fk3sa_1483597.jpg" alt="Ahmedabad">
                                        <div class="fs-6 text-muted">Ahmedabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/zhlk3sa_1483604.jpg" alt="Chennai">
                                        <div class="fs-6 text-muted">Chennai</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/9omk3sa_1483606.jpg" alt="Kolkata">
                                        <div class="fs-6 text-muted">Kolkata</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/u5jk3sa_1483602.jpg"
                                            alt="Chandigarh">
                                        <div class="fs-6 text-muted">Chandigarh</div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="py-3 fs-3 text-center">All Cities</h6>
                            <div class="list-group " style="height: 150px; overflow-y: auto;">
                                <a href="#" class="list-group-item list-group-item-action">
                                    A&N Islands, Andaman Nicobar
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    Abohar, Punjab
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Abu, Rajasthan
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Abu, Rajasthan
                                </a>

                            </div>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>



<div class="modal fade" id="selectBrand" aria-hidden="true" aria-labelledby="selectBrandlabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="selectBrandlabel">Select Your Brand </h3>
                <div class="header-bg"></div>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>

            <div class="modal-body">
                <!-- content goes here -->
                <form>
                    <div class="form-group col-md-12">
                        <label>Your Car</label>
                        <input type="text" id="carBrand" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h6 class="pb-3">POPULAR BRANDS</h6>
                            <ul class="accordion">
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#" data-bs-title="Maruti Suzuki">
                                            <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/10/brands/logos/maruti-suzuki1647009823420.jpg?v=1647009823707"
                                                alt="Maruti Suzuki Logo" class="img-fluid" width="50" />
                                            <span>Maruti Suzuki</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            <a href="#" data-bs-title="Maruti Suzuki, Fronx"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">
                                                Fronx
                                            </a>

                                            <a href="#" data-bs-title="Maruti Suzuki, Swift"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">
                                                Swift
                                            </a>
                                            <a href="#" data-bs-title="Maruti Suzuki, Grand Vitara"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">
                                                Grand Vitara
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#" data-bs-title="Tata">
                                            <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/16/brands/logos/tata.jpg?v=1629973276336"
                                                alt="Tata" class="img-fluid" width="50" />
                                            <span>Tata</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            <a href="#" data-bs-title="Tata, Nexon" data-bs-target="#selectCar"
                                                data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">Nexon</a>
                                            <a href="#" data-bs-title="Tata, Punch" data-bs-target="#selectCar"
                                                data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">Punch</a>
                                            <a href="#" data-bs-title="Tata, Altroz"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">Altroz</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#">
                                            <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/17/brands/logos/toyota.jpg?v=1630055705330"
                                                alt="Toyota Logo" class="img-fluid" width="50" />
                                            <span>Toyota</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                second link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                third link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                fourth link item</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#">
                                            <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/8/brands/logos/hyundai.jpg?v=1629973193722"
                                                alt="Hyundai Logo" class="img-fluid" width="50" />
                                            <span>Hyundai</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                second link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                third link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                fourth link item</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-md-12 margin-bottom-20 margin-top-20">
                            <button class="btn btn-theme btn-block" data-bs-target="#selectCar" data-bs-toggle="modal">Open second modal</button>
                        </div> --}}
                    </div>

                </form>
            </div>

            {{-- <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button class="btn btn-theme btn-block" data-bs-target="#selectCar" data-bs-toggle="modal">Open
                        second modal</button>
                </div>
            </div> --}}
        </div>
    </div>
</div>

{{-- second modal --}}
<div class="modal fade" id="selectCar" aria-hidden="true" aria-labelledby="selectedCarlabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="selectedCarlabel">Select Car Model</h3>
                <div class="header-bg"></div>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form>
                    <div class="form-group col-md-12">
                        <label>Your Car</label>
                        <input type="text" id="CarrName" class="form-control" placeholder="Enter Your Car Name">
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="d-flex pb-3" style=" overflow-x: auto;">
                                <div class="me-3">
                                    <input type="checkbox" class="btn-check " id="btn-check-1-outlined"
                                        autocomplete="off">
                                    <label class="btn btn-outline-success border rounded-3"
                                        for="btn-check-1-outlined">Petrol</label>

                                </div>
                                <div class="me-3">
                                    <input type="checkbox" class="btn-check " id="btn-check-2-outlined"
                                        autocomplete="off">
                                    <label class="btn btn-outline-success border rounded-3"
                                        for="btn-check-2-outlined">CNG</label>

                                </div>
                                <div class="me-3">
                                    <input type="checkbox" class="btn-check " id="btn-check-3-outlined"
                                        autocomplete="off">
                                    <label class="btn btn-outline-success border rounded-3"
                                        for="btn-check-3-outlined">Manual</label>

                                </div>
                                <div class="me-3">
                                    <input type="checkbox" class="btn-check " id="btn-check-4-outlined"
                                        autocomplete="off">
                                    <label class="btn btn-outline-success border rounded-3"
                                        for="btn-check-4-outlined">Automatic</label>

                                </div>
                            </div>

                            <h6 class="pb-3">Select a variant</h6>
                            <div>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 fw-bold text-danger">Sigma 1.2L MT</h5>
                                        <small class="text-body-secondary fw-bold ">Rs. 8.71 Lakh</small>
                                    </div>
                                    <div class="d-flex w-100 justify-content-between">
                                        <div class="mb-1">
                                            <ul class="d-flex">
                                                <li class="me-2">
                                                    Petrol
                                                </li>
                                                <li class="me-2">
                                                    Manual
                                                </li>
                                            </ul>
                                        </div>
                                        <small class="text-body-secondary">On-Road</small>
                                    </div>

                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 fw-bold text-danger">Sigma 1.2L MT</h5>
                                        <small class="text-body-secondary fw-bold ">Rs. 8.71 Lakh</small>
                                    </div>
                                    <div class="d-flex w-100 justify-content-between">
                                        <div class="mb-1">
                                            <ul class="d-flex">
                                                <li class="me-2">
                                                    Petrol
                                                </li>
                                                <li class="me-2">
                                                    Manual
                                                </li>
                                            </ul>
                                        </div>
                                        <small class="text-body-secondary">On-Road</small>
                                    </div>

                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 fw-bold text-danger">Sigma 1.2L MT</h5>
                                        <small class="text-body-secondary fw-bold ">Rs. 8.71 Lakh</small>
                                    </div>
                                    <div class="d-flex w-100 justify-content-between">
                                        <div class="mb-1">
                                            <ul class="d-flex">
                                                <li class="me-2">
                                                    Petrol
                                                </li>
                                                <li class="me-2">
                                                    Manual
                                                </li>
                                            </ul>
                                        </div>
                                        <small class="text-body-secondary">On-Road</small>
                                    </div>

                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 margin-bottom-20 margin-top-20">
                        <button type="button" data-bs-target="#selectBrand" data-bs-toggle="modal"
                            class="btn btn-theme btn-block">Select Brand</button>
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button type="button" data-bs-target="#selectBrand" data-bs-toggle="modal"
                        class="btn btn-theme btn-block rounded-3">Go Back</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.querySelectorAll('.accordion-title a').forEach(item => {
        item.addEventListener('click', event => {
            event.preventDefault(); // Prevent the default action of the anchor tag
            const carBrandTitle = event.currentTarget.getAttribute('data-bs-title');
            const modalBodyInput = document.querySelector('#carBrand');
            modalBodyInput.value = carBrandTitle;
        });
    });

    const selectCarModal = document.getElementById('selectCar')
    if (selectCarModal) {
        selectCarModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget
            const carModelTitle = button.getAttribute('data-bs-title')
            const modalBodyInput = selectCarModal.querySelector('.modal-body #CarrName')

            modalBodyInput.value = carModelTitle
        })
    }
</script>

<script>
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', () => {
            const backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach(backdrop => backdrop.remove());
        });
    });
</script>


@endsection
