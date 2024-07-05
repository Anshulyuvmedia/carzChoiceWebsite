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
                <div class="search-section">
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
                                <button type="submit" class="btn btn-theme btn-lg btn-block">Search</button>
                            </li>
                        </ul>
                    </div>
                </div>
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
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/delhi.jpg?static1fix" class="card-img"
                            alt="Delhi">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Delhi</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/mumbai.jpg?static1fix" class="card-img"
                            alt="Mumbai">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Mumbai</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/bangalore.jpg?static1fix" class="card-img"
                            alt="Bengaluru">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Bengaluru</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/chennai.jpg?static1fix" class="card-img"
                            alt="Chennai">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Chennai</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/hyderabad.jpg?static1fix" class="card-img"
                            alt="Hyderabad">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Hyderabad</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/kolkata.jpg?static1fix" class="card-img"
                            alt="Kolkata">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Kolkata</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/chandigarh.jpg?static1fix" class="card-img"
                            alt="Chandigarh">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Chandigarh</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/pune.jpg?static1fix" class="card-img"
                            alt="Pune">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h5 class="card-title fs-1">Pune</h5>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6 px-3">
                <a href="#">
                    <div class="card text-bg-dark mb-3">
                        <img src="https://imgd.aeplcdn.com/0x0/cw/design15/ahmedabad.jpg?static1fix" class="card-img"
                            alt="Ahmedabad">
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
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
                    <!-- Ads -->
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="{{ 'assets\frontend-assets\images\moneybag-icon.png' }}" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Sell your car </a>
                                </h3>
                                <div class="recent-ads-list-location">
                                    13,000 cars get sold every month. Just 3 steps and your ad is live
                                </div>
                                <div>
                                    <a href="#">Know more</a>
                                </div>
                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-body recent-ads d-flex">
                    <!-- Ads -->
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="assets\frontend-assets\images\calc-icon.png" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Check car value</a>
                                </h3>

                                <div class="recent-ads-list-location">
                                    Find out the true market value of a used car
                                </div>
                                <div>
                                    <a href="#">Know more</a>
                                </div>
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

            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Popular Hatchbacks </a>
                                </h3>
                                <div>
                                    <ul>
                                        <li><a href="#">Maruti Swift</a></li>
                                        <li><a href="#">Hyundai i10t</a></li>
                                        <li><a href="#">Ford Figo</a></li>
                                        <li><a href="#">View All Hatchbacks</a></li>
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
                                    <a href="#">Popular Sedans </a>
                                </h3>
                                <div>
                                    <ul>
                                        <li><a href="#">Maruti Dzire</a></li>
                                        <li><a href="#">Honda City</a></li>
                                        <li><a href="#">Hyundai Verna</a></li>
                                        <li><a href="#">View All Sedans</a></li>
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
                                    <a href="#">Popular SUVs </a>
                                </h3>
                                <div>
                                    <ul>
                                        <li><a href="#">Toyota Innova</a></li>
                                        <li><a href="#">Mahindra Scorpio</a></li>
                                        <li><a href="#">Maruti Ertiga</a></li>
                                        <li><a href="#">View All SUVs</a></li>
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


<!-- =-=-=-=-=-=-= Cars Of Your Choice =-=-=-=-=-=-= -->
<section class="custom-padding gray featured-cars rounded-3">
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

            <div class="card ">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="nav-item active">
                        <a class="nav-link" aria-controls="bodytype" role="tab" data-toggle="tab"
                            href="#bodytype">Body Type</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                            href="#fueltype">Fuel Type</a>
                    </li>

                </ul>
                <!-- Tab panes -->
                <div class="tab-content clearfix py-5 ">

                    <div class="tab-pane fade in active" id="bodytype">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
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
                                            <img alt="SUV"
                                                src="https://img.freepik.com/free-psd/white-car-isolated_176382-1481.jpg?t=st=1719488398~exp=1719491998~hmac=8ff8c46fb2f183cc45dce56db266b9767d04828dde95c32cfb706b11ea582c95&w=996">
                                            <h4>SUV</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                            <img alt="Hatchback"
                                                src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                            <h4>Hatchback</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                            <img alt="Compact SUV"
                                                src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                            <h4>Compact SUV</h4>
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                            <img alt="Compact Sedan"
                                                src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                            <h4>Compact Sedan</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                            <img alt="Station Wagon"
                                                src="{{ asset('assets/frontend-assets/images/bodytype/6.png') }}">
                                            <h4>Station Wagon</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                            <img alt="MUV"
                                                src="{{ asset('assets/frontend-assets/images/bodytype/MUV2.png') }}">
                                            <h4>MUV</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>

                    <div class="tab-pane fade" id="fueltype">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class="row">
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Petrol" width="75"
                                                    src="{{ asset('assets/frontend-assets/images/fueltype/petrol.svg') }}">
                                                <h4>Petrol</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Diesel" width="75"
                                                    src="{{ asset('assets/frontend-assets/images/fueltype/diesel.svg') }}">
                                                <h4>Diesel</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="CNG" width="75"
                                                    src="{{ asset('assets/frontend-assets/images/fueltype/cng.svg') }}">
                                                <h4>CNG</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Electric" width="75"
                                                    src="{{ asset('assets/frontend-assets/images/fueltype/electric.svg') }}">
                                                <h4>Electric</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Body Type -->
                                    <div class="col-md-2 col-sm-3 col-xs-4">
                                        <div class="box">
                                            <a href="#">
                                                <img alt="Hybrid" width="75"
                                                    src="{{ asset('assets/frontend-assets/images/fueltype/h-filter-without-background.svg') }}">
                                                <h4>Hybrid</h4>
                                            </a>
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
<!-- =-=-=-=-=-=-= Cars Of Your Choice End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Tools You May Need =-=-=-=-=-=-= -->
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

            <div class="col-md-4">
                <div class="panel-body recent-ads ">
                    <!-- Ads -->
                    <div class="recent-ads-list">
                        <div class="recent-ads-container d-flex ">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/car-valuation.svg"
                                        alt="Valuation">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Used Car Valuation </a>
                                </h3>
                                <p>Find out the true value of a car</p>

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
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/car-loans-02.svg"
                                        alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#"> Instant Car Loan</a>
                                </h3>
                                <p>Apply and Get Best Car Loan Offers within minutes</p>

                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>


                </div>
            </div>

            <div class="col-md-4 ">
                <div class="panel-body recent-ads d-flex">
                    <!-- Ads -->
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container d-flex">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/used-car.svg"
                                        alt="">
                                </a>
                            </div>
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Explore Used Cars</a>
                                </h3>
                                <p>Explore 8043 second hand cars in Mumbai at best prices</p>
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
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/locate-dealer.svg"
                                        alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Locate Dealer</a>
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
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/car.svg"
                                        alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Explore New Cars</a>
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
                    <h1>Popular Cars <span class="heading-color"> Second Hand</span> Cars</h1>
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
                                            <img alt="Carz Choice"
                                                src="https://imgd.aeplcdn.com/370x208/n/cw/ec/134287/city-exterior-right-front-three-quarter-76.jpeg?isig=0"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" href="#">
                                                    Used Honda City
                                                </a>
                                            </h3>

                                            <div class="ad-price">Rs. 80,000
                                                <span class="text-muted ps-2">Starting Price</span>
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
                                                src="https://imgd.aeplcdn.com/370x208/n/cw/ec/141115/creta-exterior-right-front-three-quarter-16.jpeg?isig=0"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" href="#">
                                                    Used Hyundai Creta
                                                </a>
                                            </h3>

                                            <div class="ad-price">Rs. 6.5 Lakh <span class="text-muted ps-2">Starting
                                                    Price</span></div>
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

                        <div class="item">
                            <div class="grid-style-2">
                                <!-- Listing Ad Grid -->
                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                    <div class="category-grid-box-1">

                                        <div class="image">
                                            <img alt="Carz Choice"
                                                src="https://imgd.aeplcdn.com/370x208/n/cw/ec/112947/wagon-r-2022-exterior-right-front-three-quarter-3.jpeg?isig=0"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" href="#">
                                                    Used Maruti Suzuki Wagon R
                                                </a>
                                            </h3>

                                            <div class="ad-price">Rs. 70,000 <span class="text-muted ps-2">Starting
                                                    Price</span></div>
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

                        <div class="item">
                            <div class="grid-style-2">
                                <!-- Listing Ad Grid -->
                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                    <div class="category-grid-box-1">

                                        <div class="image">
                                            <img alt="Carz Choice"
                                                src="https://imgd.aeplcdn.com/370x208/n/cw/ec/115777/ertiga-exterior-right-front-three-quarter-5.jpeg?isig=0"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" href="#">
                                                    Used Maruti Suzuki Ertiga
                                                </a>
                                            </h3>

                                            <div class="ad-price">Rs. 4 Lakh <span class="text-muted ps-2">Starting
                                                    Price</span></div>
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
                                                src="https://imgd.aeplcdn.com/370x208/n/cw/ec/98399/amg-e63-exterior-right-front-three-quarter-3.jpeg?isig=0"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" href="#">
                                                    Used Mercedes-Benz E-Class
                                                </a>
                                            </h3>

                                            <div class="ad-price">Rs. 5 Lakh<span class="text-muted ps-2">Starting
                                                    Price</span></div>
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


<!-- =-=-=-=-=-=-= Popular Second Hand Car Brands =-=-=-=-=-=-= -->
<section class="client-section py-5 gray">
    <div class="container">
        <div class="row">
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1>Popular<span class="heading-color"> Second Hand </span>Car Brands </h1>
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
<!-- =-=-=-=-=-=-= Popular Second Hand Car Brands =-=-=-=-=-=-= -->


<!-- =-=-=-=-=-=-= Best Matched Second Hand Cars  =-=-=-=-=-=-= -->
<section class="custom-padding ">
    <!-- Main Container -->
    <div class="container popular-cars">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1>Popular Cars <span class="heading-color"> Second Hand</span> Cars</h1>
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

                                        <div class="image">
                                            <img alt="Carz Choice"
                                                src="https://imgd.aeplcdn.com/640X480/cw/ucp/stockApiImg/NWMXQ72_h33k2093_1_42894654.jpg"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" class="text-truncate col-2"
                                                    href="#">
                                                    <?php
                                                    echo substr('Used Mercedes-Benz GLS 400d 4MATIC [2020-2023]', 0, 20);
                                                    ?>
                                                    ...
                                                </a>
                                            </h3>
                                            <div class="fs-5 text-muted">13,500 km | Mumbai | Diesel</div>
                                            <div class="ad-price">Rs. 1.41 Crore</div>

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

                                        <div class="image">
                                            <img alt="Carz Choice"
                                                src="https://imgd.aeplcdn.com/640X480/cw/ucp/stockApiImg/NWMXQ72_h33k2093_1_42894654.jpg"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" class="text-truncate col-2"
                                                    href="#">
                                                    <?php
                                                    echo substr('Used Mercedes-Benz GLS 400d 4MATIC [2020-2023]', 0, 20);
                                                    ?>
                                                    ...
                                                </a>
                                            </h3>
                                            <div class="fs-5 text-muted">13,500 km | Mumbai | Diesel</div>
                                            <div class="ad-price">Rs. 1.41 Crore</div>

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

                                        <div class="image">
                                            <img alt="Carz Choice"
                                                src="https://imgd.aeplcdn.com/640X480/cw/ucp/stockApiImg/NWMXQ72_h33k2093_1_42894654.jpg"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" class="text-truncate col-2"
                                                    href="#">
                                                    <?php
                                                    echo substr('Used Mercedes-Benz GLS 400d 4MATIC [2020-2023]', 0, 20);
                                                    ?>
                                                    ...
                                                </a>
                                            </h3>
                                            <div class="fs-5 text-muted">13,500 km | Mumbai | Diesel</div>
                                            <div class="ad-price">Rs. 1.41 Crore</div>

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

                                        <div class="image">
                                            <img alt="Carz Choice"
                                                src="https://imgd.aeplcdn.com/640X480/cw/ucp/stockApiImg/NWMXQ72_h33k2093_1_42894654.jpg"
                                                class="img-responsive">
                                            <div class="ribbon popular"></div>

                                        </div>
                                        <div class="short-description-1 clearfix">


                                            <h3>
                                                <a title="" class="text-truncate col-2"
                                                    href="#">
                                                    <?php
                                                    echo substr('Used Mercedes-Benz GLS 400d 4MATIC [2020-2023]', 0, 20);
                                                    ?>
                                                    ...
                                                </a>
                                            </h3>
                                            <div class="fs-5 text-muted">13,500 km | Mumbai | Diesel</div>
                                            <div class="ad-price">Rs. 1.41 Crore</div>

                                        </div>
                                    </div>
                                    <!-- Listing Ad Grid -->
                                </div>
                            </div>
                        </div>


                    </div>
                    <a href="/used-car" class="  ">
                        View All Used Cars <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
            <!-- Middle Content Box End -->

            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </div>
</section>
<!-- =-=-=-=-=-=-= Best Matched Second Hand Cars ends =-=-=-=-=-=-= -->


<!-- =-=-=-=-=-=-= New Car FAQs  =-=-=-=-=-=-= -->
<section class="custom-padding used-cars">
    <!-- Main Container -->
    <div class="container popular-cars">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1>FAQs on <span class="heading-color">Electric Cars</span> </h1>
                </div>
            </div>



            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">

                    <ul class="accordion">
                        <li>
                            <h3 class="accordion-title"><a href="#">Q: Which are the popular electric cars in
                                    India</a></h3>
                            <div class="accordion-content">
                                <p>Top 3 popular electric cars in India are Tata Punch EV, BYD Seal and MG Comet EV. To
                                    checkout the complete list of electric cars, click here</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="accordion-title"><a href="#">Q: Are there any hybrid cars available in
                                    India</a></h3>
                            <div class="accordion-content">
                                <p>Yes. There are hybrid cars available in India. Top 3 hybrid cars are Maruti Suzuki
                                    Grand Vitara, Toyota Urban Cruiser Hyryder and Toyota Innova Hycross. To checkout
                                    the complete list of hybrid cars.</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="accordion-title"><a href="#">Q: Are there any upcoming electric cars in
                                    India</a></h3>
                            <div class="accordion-content">
                                <p> Yes. There are upcoming electric cars in India. Tata Harrier EV, Fisker Ocean EV and
                                    Tata Altroz EV are the upcoming electric cars which are planned to launch soon in
                                    India. To checkout the complete list of all electric cars.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- Middle Content Box End -->

            <!-- Row End -->
        </div>
        <!-- Main Container End -->
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
                                    <a href="#" class="switch-modal"
                                        data-bs-location="Navi M data-bs-target="#selectCity"
                                        data-bs-toggle="modal"umbai">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/o0ik3sa_1483600.jpg"
                                            alt="Navi Mumbai">
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
                                <a href="#" data-bs-location="A&N Islands, Andaman Nicobar"
                                    data-bs-target="#selectCity" data-bs-toggle="modal"
                                    class="list-group-item list-group-item-action">
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
                    <button class="btn btn-theme btn-block" data-bs-target="#selectCity" data-bs-toggle="modal">Open
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
                                <a href="#" data-bs-location="A&N Islands, Andaman Nicobar"
                                    data-bs-target="#selectCity" data-bs-toggle="modal"
                                    class="list-group-item list-group-item-action">
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
                    <button class="btn btn-theme btn-sm" data-bs-target="#selectLocation" data-bs-toggle="modal">Go
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
