@extends('frontend.layouts.website')
@section('content')
@section('title', 'Home')

<div>
    <!-- =-=-=-=-=-=-= Home Banner  =-=-=-=-=-=-= -->
    <div id="banner" style="background: url('{{ asset('assets/backend-assets/images/'.$imagesdata->mainbannerimg) }}')">
        <div class="container">
            <div class="search-container">
                <!-- Form -->
                <h2>What are you looking for ?</h2>
                <p>Search <strong>267,241</strong> new ads -<strong> 83 </strong> added today</p>
                <a class="btn btn-theme">Post Your Ad</a>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Home Banner End =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Advanced Search =-=-=-=-=-=-= -->
    <div class="advance-search">
        <div class="section-search search-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item active">
                                <a class="nav-link" data-toggle="tab" href="#tab1">Search Car In Details </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab2">Search Car By Type</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content clearfix">
                            <div class="tab-pane fade in active" id="tab1">
                                <form>
                                    <div class="search-form pull-left">
                                        <div class="search-form-inner pull-left">
                                            <div class="col-md-3 no-padding">
                                                <div class="form-group">
                                                    <label>Keyword</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Eg Honda Civic , Audi , Ford." />
                                                </div>
                                            </div>
                                            <div class="col-md-3 no-padding">
                                                <div class="form-group">
                                                    <label>Select Make</label>
                                                    <select class=" form-control make">
                                                        <option label="Any Make"></option>
                                                        <option>BMW</option>
                                                        <option>Honda </option>
                                                        <option>Hyundai </option>
                                                        <option>Nissan </option>
                                                        <option>Mercedes Benz </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 no-padding">
                                                <div class="form-group">
                                                    <label>Select Year</label>
                                                    <select class=" form-control search-year">
                                                        <option label="Any Year"></option>
                                                        <option>Year</option>
                                                        <option>2010</option>
                                                        <option>2011</option>
                                                        <option>2012</option>
                                                        <option>2013</option>
                                                        <option>2014</option>
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 no-padding">
                                                <div class="form-group">
                                                    <label>Select Location</label>
                                                    <select class="search-loaction form-control">
                                                        <option label="location"></option>
                                                        <option value="0">America</option>
                                                        <option value="1">Australia</option>
                                                        <option value="2">Africa</option>
                                                        <option value="3">Pakistan</option>
                                                        <option value="4">Japan</option>
                                                        <option value="5">Srilanka</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group  ">
                                            <button type="submit" value="submit" class="btn btn-lg btn-theme">Search
                                                Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <form>
                                    <div class="search-form">
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Convertible"
                                                        src="{{ asset('assets/frontend-assets/images/bodytype/1.png') }}">
                                                    <h4>Convertible</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Coupe"
                                                        src="{{ asset('assets/frontend-assets/images/bodytype/2.png') }}">
                                                    <h4>Coupe</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Sedan"
                                                        src="{{ asset('assets/frontend-assets/images/bodytype/3.png') }}">
                                                    <h4>Sedan</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Van/Minivan"
                                                        src="{{ asset('assets/frontend-assets/images/bodytype/4.png') }}">
                                                    <h4>Van/Minivan</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Truck"
                                                        src="{{ asset('assets/frontend-assets/images/bodytype/5.png') }}">
                                                    <h4>Truck</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Body Type -->
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Hybrid"
                                                        src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                                    <h4>Hybrid</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-= Advanced Search End =-=-=-=-=-=-= -->

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
                                        @foreach ($matches as $data)
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Trending</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/backend-assets/images/'.$data->addimage) }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                                <div class="price"><span>$205,000</span></div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title">
                                                                <span><a href="#">Sports &
                                                                        Equipment</a></span>
                                                            </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    {{$data->brandname}} {{$data->carname}}
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. {{$data->price}}
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
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" style="margin-top: 20px;" id="popular">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class=" featured-slider owl-carousel owl-theme">
                                        @foreach ($matchespopular as $data)
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Popular</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/backend-assets/images/'.$data->addimage) }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                                <div class="price"><span>$205,000</span></div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title">
                                                                <span><a href="#">Sports &
                                                                        Equipment</a></span>
                                                            </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    {{$data->brandname}} {{$data->carname}}
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. {{$data->price}}
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
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
                                        @foreach ($matchesupcoming as $data)
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="featured-ribbon">
                                                            <span>Upcoming</span>
                                                        </div>
                                                        <div class="image">
                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/backend-assets/images/'.$data->addimage) }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                            {{-- <div class="price-tag">
                                                                <div class="price"><span>$205,000</span></div>
                                                            </div> --}}
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            {{-- <div class="category-title">
                                                                <span><a href="#">Sports &
                                                                        Equipment</a></span>
                                                            </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    {{$data->brandname}} {{$data->carname}}
                                                                </a>
                                                            </h3>
                                                            <div class="ad-price">Rs. {{$data->price}}
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
                                        @endforeach
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

    <!-- =-=-=-=-=-=-= Popular Cars Ads =-=-=-=-=-=-= -->
    <section class="custom-padding ">
        <!-- Main Container -->
        <div class="container popular-cars">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Get <span class="heading-color"> Offers</span> on Popular Cars</h1>
                    </div>
                </div>

                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class=" popular-slider container owl-carousel owl-theme">
                            @foreach ($matchesoffer as $data)
                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
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
                                                            Equipment</a></span>
                                                </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        {{$data->brandname}} {{$data->carname}}
                                                    </a>
                                                </h3>

                                                <div class="ad-price">Rs. {{$data->price}}
                                                    <span class="text-muted ps-2">onwards</span>
                                                </div>
                                                <a class="  ">
                                                    <button class="btn btn-outline btn-danger btn-sm ">
                                                        Get Offer
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Middle Content Box End -->

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Popular Cars Ads End =-=-=-=-=-=-= -->

    {{--THIS IS ALL BRANDS COMPONENET--}}
    <x-all-brands />


    {{--THIS IS FIND THE CARS BY YOUR CHOICE COMPONENET--}}
    <x-find-the-cars-by-choice/>



    <!-- =-=-=-=-=-=-= Top Cars In India  =-=-=-=-=-=-= -->
    <section class="custom-padding ">
        <!-- Main Container -->
        <div class="container popular-cars">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Top Cars <span class="heading-color"> In India</span> </h1>
                    </div>
                </div>



                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class=" popular-slider container owl-carousel owl-theme">
                            @foreach ($matchestopcarsindia as $data)
                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice"
                                                    src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}"
                                                    class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/272x153/cw/body/suv.jpg?v=1&q=80"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                                {{-- <div class="price-tag">
                                                    <div class="price"><span>$205,000</span></div>
                                                </div> --}}
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                {{-- <div class="category-title">
                                                    <span><a href="#">Sports &
                                                            Equipment</a></span>
                                                </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Top SUVs in India
                                                    </a>
                                                </h3>

                                                <p class="text-muted ps-2">
                                                    {{$data->brandname}} {{$data->carname}}
                                                </p>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Middle Content Box End -->

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Top Cars In India End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-=  On-Road Price  =-=-=-=-=-=-= -->
    <section class="section-padding-120 our-services">
        <!--Image One-->
        {{-- <div class="background-1"></div> --}}
        <!--Image Two-->
        <div class="background-2"
            style="background: url('{{ asset('assets/backend-assets/images/'.$imagesdata->checkonroadimg) }}')"></div>
        <img class="img-responsive wow slideInRight custom-img" data-wow-delay="0ms" data-wow-duration="2000ms"
            src="images/sell-1.png" alt="">
        <div class="container">
            <div class="row clearfix">
                <!--Left Column-->
                <div class="left-column col-lg-6 col-md-6 col-md-12">

                </div>
                <!--Transparent Column-->
                <div class="service-column col-lg-6 col-md-6">
                    <div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="row clearfix">
                            <!--Icon Column-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="services-grid-3">
                                    <div class="content-area">
                                        <h4>Check On-Road Price</h4>
                                        <form>
                                            <div class="search-form ">
                                                <div class="search-form-inner ">
                                                    <div class="col-md-12 no-padding">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Eg Honda Civic , Audi , Ford." />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group  ">
                                                    <button type="submit" value="submit"
                                                        class="btn btn-lg btn-theme">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                        <p>Check the on road price in your city</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =-=-=-=-=-=-=  On-Road Price end =-=-=-=-=-=-= -->


    {{--THIS IS COMPARE CAR CARDS COMPONENET--}}
    <x-compare-cars />


    <!-- =-=-=-=-=-=-= Top Cars In India  =-=-=-=-=-=-= -->
    <section class="custom-padding used-cars">
        <!-- Main Container -->
        <div class="container popular-cars">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Used cars <span class="heading-color"> In India</span> </h1>
                    </div>
                </div>



                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class=" popular-slider container owl-carousel owl-theme">
                            @foreach ($adposts as $row)
                            @php
                                $imagearray = json_decode($row->images, true);
                            @endphp
                            <div class="item">
                                <div class="grid-style-2">
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            <div class="image">
                                                <img alt="Carz Choice"
                                                    src="{{ asset($imagearray[0]['imageurl']) }}"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>
                                            </div>
                                            <div class="short-description-1 clearfix">
                                                <h3>
                                                    <a title="" href="#">
                                                        Used {{$row->brandname}} {{$row->carname}}
                                                    </a>
                                                </h3>
                                                <span class="ad-price">Rs. {{$row->price}}
                                                    <span class="text-muted ps-2">Starting Price</span>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Middle Content Box End -->

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Top Cars In India End =-=-=-=-=-=-= -->

    {{--THIS LATEST CAR UPDATES COMPONENET--}}
    <x-latest-car-updates/>


    <!-- Main Content Area End -->
</div>

@endsection
