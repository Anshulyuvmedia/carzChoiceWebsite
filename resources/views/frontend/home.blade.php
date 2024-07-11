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
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    {{$data->brandname}}  {{$data->carname}}
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
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    {{$data->brandname}}  {{$data->carname}}
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
                                                                    Equipment</a></span> </div> --}}

                                                            <h3>
                                                                <a title="" href="#">
                                                                    {{$data->brandname}}  {{$data->carname}}
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
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        {{$data->brandname}}  {{$data->carname}}
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

    <!-- =-=-=-=-=-=-= All Brands =-=-=-=-=-=-= -->
    <section class="client-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="">
                        <h2>All Brands</h2>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="brand-logo-area clients-bg">
                        <div class="clients-list">
                            @foreach ($brands as $data)
                            <div class="client-logo">
                                <a href="#">
                                <img src="{{ asset('assets/backend-assets/images/'.$data->iconimage) }}"
                                    class="img-responsive" alt="Brand Image" width="150" />
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =-=-=-=-=-=-= All Brands End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Cars Of Your Choice =-=-=-=-=-=-= -->
    <section class="custom-padding featured-cars rounded-3">
        <!-- Main Container -->
        <div class="container ">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Find The Cars Of <span class="heading-color"> Your Choice</span> </h1>
                    </div>
                </div>

                <div class="card">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item active">
                            <a class="nav-link" aria-controls="budget" role="tab" data-toggle="tab"
                                href="#budget">Budget </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="bodytype" role="tab" data-toggle="tab"
                                href="#bodytype">Body Type</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                                href="#fueltype">Fuel Type</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="transmission" role="tab" data-toggle="tab"
                                href="#transmission">Transmission</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="seatingcapacity" role="tab" data-toggle="tab"
                                href="#seatingcapacity">Seating Capacity</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content clearfix py-5 ">
                        <div class="tab-pane fade in active" id="budget">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class="d-flex flex-row flex-wrap">
                                        @foreach ($budgets as $data)
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">{{$data->value}}</button>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>

                        <div class="tab-pane fade" id="bodytype">
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    @foreach ($bodytypes as $data)
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Convertible" width="100" src="{{ asset('assets/backend-assets/images/'.$data->iconimage) }}">
                                                <h4>{{$data->value}}</h4>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="fueltype">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class="row">
                                        @foreach ($fueltypes as $data)
                                        <div class="col-md-2 col-sm-3 col-xs-4">
                                            <div class="box">
                                                <a href="#">
                                                    <img alt="Petrol" width="75" src="{{ asset('assets/backend-assets/images/'.$data->iconimage) }}">
                                                    <h4>{{$data->value}}</h4>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>
                        <div class="tab-pane fade" id="transmission">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    @foreach ($transmissions as $data)
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Automatic" width="50"
                                                    src="{{ asset('assets/backend-assets/images/'.$data->iconimage) }}">
                                                <h4>{{$data->value}}</h4>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="seatingcapacity">
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class="d-flex flex-row flex-wrap">
                                        @foreach ($seatings as $data)
                                        <a class="me-3 mb-3" href="#" role="button">
                                            <button type="button" class="btn btn-default btn-sm rounded-pill">{{$data->value}}</button>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Cars Of Your Choice End =-=-=-=-=-=-= -->


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
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
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
                                                                Equipment</a></span> </div> --}}

                                                <h3>
                                                    <a title="" href="#">
                                                        Top SUVs in India
                                                    </a>
                                                </h3>

                                                <p class="text-muted ps-2">
                                                    {{$data->brandname}}  {{$data->carname}}
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
        <div class="background-2" style="background: url('{{ asset('assets/backend-assets/images/'.$imagesdata->checkonroadimg) }}')"></div>
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


    <!-- =-=-=-=-=-=-= Compare Cars =-=-=-=-=-=-= -->
    <section class="custom-padding ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Compare <span class="heading-color"> Cars</span> </h1>
                    </div>
                </div>



                <!-- Middle Content Box -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class=" comapare-slider container owl-carousel owl-theme">
                            <div class="item">
                                <div class="grid-style-2">

                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="comparison-box">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-33.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Mahindra </div>
                                                        <div class=""><a href="#">XUV 3XO</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="vsbox">vs</div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/141867/nexon-exterior-right-front-three-quarter-71.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Tata </div>
                                                        <div class=""><a href="#">Nexon</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="#">
                                                <button
                                                    class="btn btn-outline btn-danger btn-lg btn-block margin-bottom-10">Compare
                                                    Now</button>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">

                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="comparison-box">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-33.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Mahindra </div>
                                                        <div class=""><a href="#">XUV 3XO</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="vsbox">vs</div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/141867/nexon-exterior-right-front-three-quarter-71.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Tata </div>
                                                        <div class=""><a href="#">Nexon</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="#">
                                                <button
                                                    class="btn btn-outline btn-danger btn-lg btn-block margin-bottom-10">Compare
                                                    Now</button>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">

                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="comparison-box">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-33.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Mahindra </div>
                                                        <div class=""><a href="#">XUV 3XO</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="vsbox">vs</div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <div class="compare-grid">
                                                    <a href="#" class="">
                                                        <img src="https://imgd.aeplcdn.com/227x128/n/cw/ec/141867/nexon-exterior-right-front-three-quarter-71.jpeg?isig=0&q=80"
                                                            alt="" class="img-responsive">
                                                    </a>
                                                    <div>
                                                        <div class="text-muted">Tata </div>
                                                        <div class=""><a href="#">Nexon</a></div>
                                                        <span class="ad-price">Rs. 110,000
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="#">
                                                <button
                                                    class="btn btn-outline btn-danger btn-lg btn-block margin-bottom-10">Compare
                                                    Now</button>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/compareresult" class=" margin-bottom-10">
                            Compare Cars of Your Choice >
                        </a>
                    </div>
                </div>
                <!-- Middle Content Box End -->

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Compare Cars End =-=-=-=-=-=-= -->


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
                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/134287/city-exterior-right-front-three-quarter-76.jpeg?isig=0"
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
                                                        Used Honda City
                                                    </a>
                                                </h3>

                                                <span class="ad-price">Rs. 1.2 Lakh
                                                    <span class="text-muted ps-2">Starting Price</span>
                                                </span>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/102663/baleno-exterior-right-front-three-quarter-66.jpeg?isig=0"
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
                                                        Used Hyundai Creta
                                                    </a>
                                                </h3>

                                                <span class="ad-price">Rs. 4.9 Lakh
                                                    <span class="text-muted ps-2">Starting Price</span>
                                                </span>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/112947/wagon-r-2022-exterior-right-front-three-quarter-3.jpeg?isig=0"
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
                                                        Used Maruti Suzuki Baleno
                                                    </a>
                                                </h3>

                                                <span class="ad-price">Rs. 3.5 Lakh
                                                    <span class="text-muted ps-2">Starting Price</span>
                                                </span>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/141115/creta-exterior-right-front-three-quarter-16.jpeg?isig=0"
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
                                                        Used Maruti Suzuki Wagon R
                                                    </a>
                                                </h3>

                                                <span class="ad-price">Rs. 75,000
                                                    <span class="text-muted ps-2">Starting Price</span>
                                                </span>

                                            </div>
                                        </div>
                                        <!-- Listing Ad Grid -->
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="grid-style-2">
                                    <!-- Listing Ad Grid -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            {{-- <div class="featured-ribbon">
                                                <span>Featured</span>
                                            </div> --}}
                                            <div class="image">
                                                {{-- <img alt="Carz Choice" src="{{ asset('assets/frontend-assets/images/posting/15.jpg') }}" class="img-responsive"> --}}
                                                <img alt="Carz Choice"
                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/159099/swift-exterior-right-front-three-quarter.jpeg?isig=0"
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
                                                        Used Maruti Suzuki Swift
                                                    </a>
                                                </h3>

                                                <span class="ad-price">Rs. 1 Lakh
                                                    <span class="text-muted ps-2">Starting Price</span>
                                                </span>

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

                <!-- Row End -->
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Top Cars In India End =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= Latest Car Updates  Ads =-=-=-=-=-=-= -->
    <section class="custom-padding gray">
        <!-- Main Container -->
        <div class="container featured-cars">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Latest Car <span class="heading-color"> Updates</span> </h1>
                    </div>
                </div>

                <div class="card">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item active">
                            <a class="nav-link" aria-controls="trending" role="tab" data-toggle="tab"
                                href="#carnews">Car News </a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="popular" role="tab" data-toggle="tab"
                                href="#expertreviews">Expert Reviews</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                                href="#video">Video</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content clearfix">
                        <div class="tab-pane fade in active" style="margin-top: 20px;" id="carnews">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class=" featured-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>

                        <div class="tab-pane fade" style="margin-top: 20px;" id="expertreviews">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class=" featured-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- Middle Content Box End -->
                        </div>

                        <div class="tab-pane fade" style="margin-top: 20px;" id="video">
                            <!-- Middle Content Box -->
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <div class="row">
                                    <div class=" featured-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <a href="#"> <img class="img-responsive"
                                                                    alt=""
                                                                    src="https://imgd.aeplcdn.com/370x208/n/cw/ec/179813/force-motors-gurkha-right-front-three-quarter2.jpeg?isig=0&q=80">
                                                            </a>

                                                        </div>
                                                        <h5 class="post-title"> <a href="#"> 2024 Force Gurkha
                                                                deliveries commence across India</a> </h3>
                                                            <div class="post-info"> <a href="#">By Car
                                                                    Choice</a> <a href="#">Aug 30, 2017</a>
                                                            </div>
                                                            <p class="post-excerpt"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit.
                                                                <a href="#"><strong>Read More</strong></a>
                                                            </p>
                                                    </div>
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
    <!-- =-=-=-=-=-=-= Latest Car Updates End =-=-=-=-=-=-= -->

    <!-- Main Content Area End -->
</div>

@endsection
