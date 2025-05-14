@extends('frontend.layouts.website')
@section('content')
@section('title', 'Used Cars')

<!-- =-=-=-=-=-=-= Home Banner 2 =-=-=-=-=-=-= -->
<section class="main-search parallex used-cars" style="height: 410px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="main-search-title text-center">
                    <h1>Find Used Cars?</h1>
                    <p>Buy, <strong>sell and check price</strong> of used cars</p>
                </div>
                {{-- <div class="search-section">
                    <div id="form-panel">
                        <ul class="list-unstyled search-options clearfix">

                            <li>

                                <input placeholder="Select a City" type="text" class=" form-control City"
                                    data-bs-target="#selectLocation" data-bs-toggle="modal" type="button">
                                </input>
                            </li>

                            <li>
                                <div class="used-budget-box">
                                    <div id="minMaxContainer" class="form-control">
                                        <span class="leftfloat" id="budgetBtn">
                                            Choose Your Budget
                                        </span>
                                        <span id="upDownArrow" class="rightfloat fa fa-angle-down"></span>
                                        <div class="clear"></div>
                                    </div>
                                    <div id="budgetListContainer" class="budget-box__list-container hide">
                                        <div id="userBudgetInput"><input type="text" class="priceBox" id="minInput"
                                                placeholder="Min" maxlength="5"><input type="text" class="priceBox"
                                                id="maxInput" placeholder="Max" maxlength="5">
                                            <div
                                                class="cw-blackbg-tooltip cw-blackbg-tooltip-search-error text-center hide">
                                                Max budget should be greater than Min budget.
                                            </div>
                                        </div>
                                        <ul id="minPriceList" class="text-left ">
                                            <li data-min-price="Any">Any</li>
                                            <li data-min-price="1">1 Lakh</li>
                                            <li data-min-price="3">3 Lakh</li>
                                            <li data-min-price="4">4 Lakh</li>
                                            <li data-min-price="6">6 Lakh</li>
                                            <li data-min-price="8">8 Lakh</li>
                                            <li data-min-price="12">12 Lakh</li>
                                            <li data-min-price="20">20 Lakh</li>
                                        </ul>
                                        <ul id="maxPriceList" class="text-right ">
                                            <li data-max-price="1">1 Lakh</li>
                                            <li data-max-price="3">3 Lakh</li>
                                            <li data-max-price="4">4 Lakh</li>
                                            <li data-max-price="6">6 Lakh</li>
                                            <li data-max-price="8">8 Lakh</li>
                                            <li data-max-price="12">12 Lakh</li>
                                            <li data-max-price="20">20 Lakh</li>
                                            <li data-max-price="Any">Any</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <button type="submit" class="btn btn-theme rounded-4 btn-lg btn-block">Search</button>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= Home Banner 2 End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= select by city =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray used-cars">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page text-center">
                        <h1>Used Cars By City</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Delhi">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/delhi.jpg?static1fix"
                            class="card-img rounded-4" alt="Delhi">
                        <div
                            class="card-img-overlay d-flex justify-content-center align-items-center rounded-4 rounded-4">
                            <h5 class="card-title fs-1">Delhi</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Mumbai">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/mumbai.jpg?static1fix" class="card-img"
                            alt="Mumbai">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center rounded-4">
                            <h5 class="card-title fs-1">Mumbai</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Bengaluru">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/bangalore.jpg?static1fix" class="card-img"
                            alt="Bengaluru">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center rounded-4">
                            <h5 class="card-title fs-1">Bengaluru</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Chennai">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/chennai.jpg?static1fix" class="card-img"
                            alt="Chennai">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center rounded-4">
                            <h5 class="card-title fs-1">Chennai</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Hyderabad">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/hyderabad.jpg?static1fix" class="card-img"
                            alt="Hyderabad">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center rounded-4">
                            <h5 class="card-title fs-1">Hyderabad</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Kolkata">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/kolkata.jpg?static1fix" class="card-img"
                            alt="Kolkata">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center rounded-4">
                            <h5 class="card-title fs-1">Kolkata</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Chandigarh">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/chandigarh.jpg?static1fix" class="card-img"
                            alt="Chandigarh">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center rounded-4">
                            <h5 class="card-title fs-1">Chandigarh</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Pune">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/pune.jpg?static1fix" class="card-img"
                            alt="Pune">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center rounded-4">
                            <h5 class="card-title fs-1">Pune</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#" class="locationanchor" data-value="Ahmedabad">
                    <div class="card text-white p-0  mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/ahmedabad.jpg?static1fix" class="card-img"
                            alt="Ahmedabad">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center rounded-4">
                            <h5 class="card-title fs-1">Ahmedabad</h5>

                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= select by city End =-=-=-=-=-=-= -->


<!-- =-=-=-=-=-=-= select by city =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray used-cars">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page text-center">
                        <h1>TOOLS YOU MIGHT NEED</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="{{ 'assets\frontend-assets\images\moneybag-icon.png' }}" alt="">
                                </a>
                            </div>
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="{{ route('addadshow') }}">Sell your car </a>
                                </h3>
                                <div class="recent-ads-list-location">
                                    13,000 cars get sold every month. Just 3 steps and your ad is live
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="assets\frontend-assets\images\calc-icon.png" alt="">
                                </a>
                            </div>
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="/find-dealer">Find Dealer</a>
                                </h3>
                                <div class="recent-ads-list-location">
                                    Find out the best dealers
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= select by city End =-=-=-=-=-=-= -->


<!-- =-=-=-=-=-=-= select by city =-=-=-=-=-=-= -->
<div class="page-header-area-2  used-cars mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page text-center">
                        <h1>Cars you Must Explore</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <p>Popular Minivans</p>
                                </h3>
                                <div>
                                    <ul>
                                        @foreach ($minivans->take(4) as $vans)
                                            <li><a href="/carlistingdetails/{{$vans->id}}">{{$vans->brandname}} {{$vans->carname}}-{{$vans->carmodalname}}</a></li>
                                        @endforeach
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <p>Popular Compact SUV's </p>
                                </h3>
                                <div>
                                    <ul>
                                        @foreach ($compactsuvs->take(4) as $suvs)
                                            <li><a href="/carlistingdetails/{{$suvs->id}}">{{$suvs->brandname}} {{$suvs->carname}}-{{$suvs->carmodalname}}</a></li>
                                        @endforeach
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <p>Popular Sedans </p>
                                </h3>
                                <div>
                                    <ul>
                                        @foreach ($sedans->take(4) as $sedan)
                                            <li><a href="/carlistingdetails/{{$sedan->id}}">{{$sedan->brandname}} {{$sedan->carname}}-{{$sedan->carmodalname}}</a></li>
                                        @endforeach
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= select by city End =-=-=-=-=-=-= -->


{{-- THIS IS FIND THE CARS BY YOUR CHOICE COMPONENET --}}
<x-findthecarsbychoice cartype="usedfiltercar" />

<!-- =-=-=-=-=-=-= Tools You May Need =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page text-center">
                        <h1>Tools You May Need</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <!-- Ads -->
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container d-flex">
                            <div class="recent-ads-list-image">
                                <a href="/car-loan" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/car-loans-02.svg"
                                        alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="/car-loan"> Instant Car Loan</a>
                                </h3>
                                <p>Apply and Get Best Car Loan Offers within minutes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <!-- Ads -->
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container d-flex">
                            <div class="recent-ads-list-image">
                                <a href="/find-dealer" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/locate-dealer.svg"
                                        alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="/find-dealer">Locate Dealer</a>
                                </h3>
                                <p>Explore a used car dealer near you in Mumbai</p>

                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>


                </div>
            </div>

            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <!-- Ads -->
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container d-flex">
                            <div class="recent-ads-list-image">
                                <a href="/new-cars" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/car.svg" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="/new-cars">Explore New Cars</a>
                                </h3>
                                <p>Explore new cars in Mumbai Under your budget</p>

                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Tools You May Need End =-=-=-=-=-=-= -->



<!-- =-=-=-=-=-=-= Popular Second Hand Cars =-=-=-=-=-=-= -->
<section class="custom-padding ">
    <!-- Main Container -->
    <div class="container popular-cars">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1>Popular <span class="heading-color"> Second Hand</span> Cars</h1>
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
                                <!-- Listing Ad Grid -->
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

                                            <div class="ad-price">Rs. {{$row->price}}
                                                <span class="text-muted ps-2">Starting Price</span>
                                            </div>
                                            <a href="{{ route('usedcardetails', ['id' => $row->id]) }}">
                                                <button class="btn btn-theme rounded-4 btn-sm ">
                                                    View Details
                                                    <i class="bi bi-arrow-up-right"></i>
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

            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </div>
</section>
<!-- =-=-=-=-=-=-= Popular Second Hand Cars End =-=-=-=-=-=-= -->



    {{-- THIS IS ALL BRANDS COMPONENET --}}
    <x-all-brands cartype="usedfiltercar"/>



<!-- =-=-=-=-=-=-= New Car FAQs  =-=-=-=-=-=-= -->
<section class="custom-padding used-cars">
    <div class="container popular-cars">
        <div class="row">
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <h1>Used Car's<span class="heading-color">FAQs</span> </h1>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    @foreach ($usedcarfaq as $row)
                    <ul class="accordion">
                        <li>
                            <h3 class="accordion-title"><a href="#">Q: {{$row->faqlabel}}</a></h3>
                            <div class="accordion-content">
                                <p>{{$row->faqvalue}}</p>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= New Car FAQs End =-=-=-=-=-=-= -->




<div class="modal fade" id="selectLocation" aria-hidden="true" aria-labelledby="selectBrandlabel" tabindex="-1">
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
                                    <a href="#" class="switch-modal" data-bs-location="Mumbai"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">
                                        <img src="https://imgd.aeplcdn.com/0x0/n/ergk3sa_1483598.jpg" alt="Mumbai">
                                        <div class="fs-6 text-muted">Mumbai</div>
                                    </a>
                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" data-bs-location="Bangalore"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/k88k3sa_1483601.jpg" alt="Bangalore">
                                        <div class="fs-6 text-muted">Bangalore</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" data-bs-location="Delhi"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/1jnk3sa_1483607.jpg" alt="Delhi">
                                        <div class="fs-6 text-muted">Delhi</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" data-bs-location="Pune"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/53hk3sa_1483599.jpg" alt="Pune">
                                        <div class="fs-6 text-muted">Pune</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" data-bs-location="Navi M data-bs-target="
                                        #selectCity" data-bs-toggle="modal" umbai">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/o0ik3sa_1483600.jpg" alt="Navi Mumbai">
                                        <div class="mt-2 fs-6 text-muted" style="line-height: 1.3em;">Navi Mumbai
                                        </div>
                                    </a>

                                </div>
                            </div>

                            <div class="row flex-wrap justify-content-center mt-3">

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" data-bs-location="Hyderabad" data-bs-target="#selectCity"
                                        data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/sj7k3sa_1483605.jpg" alt="Hyderabad">
                                        <div class="fs-6 text-muted">Hyderabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" data-bs-location="Ahmedabad" data-bs-target="#selectCity"
                                        data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/z2fk3sa_1483597.jpg" alt="Ahmedabad">
                                        <div class="fs-6 text-muted">Ahmedabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" data-bs-location="Chennai" data-bs-target="#selectCity"
                                        data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/zhlk3sa_1483604.jpg" alt="Chennai">
                                        <div class="fs-6 text-muted">Chennai</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" data-bs-location="Kolkata" data-bs-target="#selectCity"
                                        data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/9omk3sa_1483606.jpg" alt="Kolkata">
                                        <div class="fs-6 text-muted">Kolkata</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" data-bs-location="Chandigarh" data-bs-target="#selectCity"
                                        data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/u5jk3sa_1483602.jpg" alt="Chandigarh">
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
                                <a href="#" data-bs-location="A&N Islands, Andaman Nicobar" data-bs-target="#selectCity"
                                    data-bs-toggle="modal" class="list-group-item list-group-item-action">
                                    A&N Islands, Andaman Nicobar
                                </a>

                                <a href="#" data-bs-location="Abohar, Punjab" data-bs-target="#selectCity"
                                    data-bs-toggle="modal" class="list-group-item list-group-item-action">
                                    Abohar, Punjab
                                </a>
                                <a href="#" data-bs-location="Abu, Rajasthan" data-bs-target="#selectCity"
                                    data-bs-toggle="modal" class="list-group-item list-group-item-action">
                                    Abu, Rajasthan
                                </a>
                                <a href="#" data-bs-location="Abu, Rajasthan" data-bs-target="#selectCity"
                                    data-bs-toggle="modal" class="list-group-item list-group-item-action">
                                    Abu, Rajasthan
                                </a>

                            </div>
                        </div>
                    </div>

                </form>
            </div>

            {{-- <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button class="btn btn-theme rounded-4 btn-block" data-bs-target="#selectCity"
                        data-bs-toggle="modal">Open
                        City Modal</button>
                </div>
            </div> --}}
        </div>
    </div>
</div>



<div class="modal fade" id="selectCity" aria-hidden="true" aria-labelledby="selectBrandlabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
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
                    <div class="search-form">
                        <div class="form-group col-md-12">

                            <input type="text" id="carcity" class="form-control" placeholder="Enter Your Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="pb-3 text-center">All Cities</h6>
                            <div class="list-group p-2">
                                <a href="#" data-bs-location="A&N Islands, Andaman Nicobar" data-bs-target="#selectCity"
                                    data-bs-toggle="modal" class="list-group-item list-group-item-action">
                                    A&N Islands, Andaman Nicobar
                                </a>

                                <a href="#" data-bs-location="Abohar, Punjab" data-bs-target="#selectCity"
                                    data-bs-toggle="modal" class="list-group-item list-group-item-action">
                                    Abohar, Punjab
                                </a>
                                <a href="#" data-bs-location="Abu, Rajasthan" data-bs-target="#selectCity"
                                    data-bs-toggle="modal" class="list-group-item list-group-item-action">
                                    Abu, Rajasthan
                                </a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button class="btn btn-theme rounded-4 btn-sm" data-bs-target="#selectLocation"
                        data-bs-toggle="modal">Go
                        Back</button>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', () => {
            const backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach(backdrop => backdrop.remove());
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const minMaxContainer = document.getElementById('minMaxContainer');
        const budgetListContainer = document.getElementById('budgetListContainer');
        const budgetBtn = document.getElementById("budgetBtn");
        const minPriceList = document.getElementById("minPriceList");
        const maxPriceList = document.getElementById("maxPriceList");
        const minInput = document.getElementById("minInput");
        const maxInput = document.getElementById("maxInput");
        const errorTooltip = document.querySelector(".cw-blackbg-tooltip-search-error");

        let minPrice = "Any";
        let maxPrice = "Any";

        function updateBudgetBtn() {
            let displayText = "Choose Your Budget";
            if (minPrice !== "Any" || maxPrice !== "Any") {
                displayText = `${minPrice} L - ${maxPrice} L`;
            }
            budgetBtn.textContent = displayText;
        }

        function selectMinPrice(event) {
            minPrice = event.target.getAttribute("data-min-price");
            minInput.value = ""; // Clear the manual input field
            minPriceList.classList.add("hide");
            maxPriceList.classList.remove("hide");
            updateBudgetBtn();
        }

        function selectMaxPrice(event) {
            maxPrice = event.target.getAttribute("data-max-price");
            maxInput.value = ""; // Clear the manual input field
            if (isValidBudgetRange(minPrice, maxPrice)) {
                updateBudgetBtn();
                errorTooltip.classList.add("hide");
            } else {
                errorTooltip.classList.remove("hide");
            }
        }

        function isValidBudgetRange(min, max) {
            if (min === "Any" || max === "Any") return true;
            return parseInt(min) <= parseInt(max);
        }

        function toggleMaxPriceList(show) {
            if (show) {
                maxPriceList.classList.remove("hide");
                maxPriceList.style.display = "block";
            } else {
                maxPriceList.classList.add("hide");
                maxPriceList.style.display = "none";
            }
        }

        // Add event listeners to the list items
        minPriceList.querySelectorAll("li").forEach(item => {
            item.addEventListener("click", selectMinPrice);
        });

        maxPriceList.querySelectorAll("li").forEach(item => {
            item.addEventListener("click", selectMaxPrice);
        });

        // Add event listeners to the input fields
        minInput.addEventListener("blur", function() {
            if (minInput.value) {
                minPrice = minInput.value;
                minPriceList.classList.add("hide");
                maxPriceList.classList.remove("hide");
                updateBudgetBtn();
            }
        });

        maxInput.addEventListener("blur", function() {
            if (maxInput.value) {
                maxPrice = maxInput.value;
                if (isValidBudgetRange(minPrice, maxPrice)) {
                    updateBudgetBtn();
                    errorTooltip.classList.add("hide");
                } else {
                    errorTooltip.classList.remove("hide");
                }
            }
        });

        // Toggle budget list container visibility
        minMaxContainer.addEventListener('click', function() {
            minMaxContainer.classList.toggle('open');
            budgetListContainer.classList.toggle('hide');
            // Hide max price list if container is opened again
            if (minMaxContainer.classList.contains('open')) {
                maxPriceList.classList.add('hide');
            }
        });
    });
</script>

@endsection

