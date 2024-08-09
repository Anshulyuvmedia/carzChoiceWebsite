
@extends('frontend.layouts.website')
@section('content')
@section('title', 'New Car Dealer')
<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 ">
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
                        <div class="form-group">
                            <label>Select Brand</label>
                            <select name="cartype" class="form-control make rounded-4" id="dynamicbrand">
                                <option selected>--select--</option>
                                @foreach ($brands as $data)
                                <option value="{{$data->value}}">{{$data->value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12 p-0 ms-3">
                        <div class="form-group">
                            <label>Select City</label>
                            <select name="cartype" class="form-control make rounded-4" id="dynamiccity">
                                <option selected>--select--</option>
                                @foreach ($statedata as $data)
                                <option value="{{$data->District}}">{{$data->District}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->

<section class="section-padding no-top">
    <div class="container">
        <div class="row">
            <div class="header-page mb-2">
                <h1 class="text-dark fs-3 fw-bold">Popular Dealers</h1>
            </div>
            @foreach ($dealers as $row)
            <div class="col-md-4 col-lg-4 col-sx-12">
                <div class="" id="dealersdivs">
                    <div class="ads-list-archive" >
                        <div class="no-padding">
                            <div class="ad-archive-desc">
                                <div class="d-flex justify-content-between ">
                                    <div class="">
                                        <a href="/dealer-profile">
                                            <h3>{{$row->businessname}}</h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="category-title fs-4">
                                    {{$row->district}} {{$row->state}} - {{$row->pincode}}
                                </div>
                                <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                        used cars available at dealership</span></div>
                                <div class="d-flex mt-3">
                                    <div class="me-3">
                                        <a href="{{ route('dealerprofile',['id' => $row->id])}}">
                                            <div class="btn btn-danger btn-sm rounded-3">View Detials</div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">
                                            <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                <i class="bi bi-telephone"></i>
                                                {{$row->mobilenumber}}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- THIS IS ALL BRANDS COMPONENET --}}
<x-all-brands cartype="brandfilter" />

<!-- =-=-=-=-=-=-= All Brands End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
<section class="custom-padding ">
    <div class="container featured-cars">
        <!-- Row -->
        <div class="row">
            <div class="card">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1> <span class="heading-color"> Featured</span> Cars</h1>
                    </div>
                </div>
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
                                            <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                <div class="category-grid-box-1">
                                                    <div class="featured-ribbon">
                                                        <span>Trending</span>
                                                    </div>
                                                    <div class="image">
                                                        <a class=""
                                                            href="{{ route('carlistingdetails', ['id' => $data->id]) }}">

                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/backend-assets/images/' . $data->addimage) }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                        </a>
                                                    </div>
                                                    <div class="short-description-1 clearfix">

                                                        <h3>
                                                            <a class=""
                                                                href="{{ route('carlistingdetails', ['id' => $data->id]) }}">

                                                                {{ $data->brandname }}
                                                                {{ $data->carname }}
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. {{ $data->price }}
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class=""
                                                            href="{{ route('carlistingdetails', ['id' => $data->id]) }}">
                                                            <button class="btn btn-theme rounded-4 btn-sm">
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
                                                        <a class=""
                                                            href="{{ route('carlistingdetails', ['id' => $data->id]) }}">

                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/backend-assets/images/' . $data->addimage) }}"
                                                                class="img-responsive">
                                                            <div class="ribbon popular"></div>
                                                        </a>
                                                    </div>
                                                    <div class="short-description-1 clearfix">


                                                        <h3>
                                                            <a class=""
                                                                href="{{ route('carlistingdetails', ['id' => $data->id]) }}">

                                                                {{ $data->brandname }}
                                                                {{ $data->carname }}
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. {{ $data->price }}
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class=""
                                                            href="{{ route('carlistingdetails', ['id' => $data->id]) }}">

                                                            <button class="btn btn-theme rounded-4 btn-sm  ">
                                                                Check Offers
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
                                                        <a class=""
                                                            href="{{ route('carlistingdetails', ['id' => $data->id]) }}">

                                                            <img alt="Carz Choice"
                                                                src="{{ asset('assets/backend-assets/images/' . $data->addimage) }}"
                                                                class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <div class="short-description-1 clearfix">


                                                        <h3>
                                                            <a class=""
                                                                href="{{ route('carlistingdetails', ['id' => $data->id]) }}">

                                                                {{ $data->brandname }}
                                                                {{ $data->carname }}
                                                            </a>
                                                        </h3>
                                                        <div class="ad-price">Rs. {{ $data->price }}
                                                            <span class="text-muted ps-2">onwards</span>
                                                        </div>

                                                        <p class="location">
                                                            <i class="fa fa-map-marker"></i>
                                                            On-Road Price, Delhi
                                                        </p>

                                                        <a class=""
                                                            href="{{ route('carlistingdetails', ['id' => $data->id]) }}">
                                                            <button class="btn btn-theme rounded-4 btn-sm  ">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->

<div class="modal fade" id="selectLocation" aria-hidden="true" aria-labelledby="selectLocationlabel" tabindex="-1">
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

                                        <img src="https://imgd.aeplcdn.com/0x0/n/o0ik3sa_1483600.jpg" alt="Navi Mumbai">
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
                                            <a href="#" data-bs-title="Maruti Suzuki, Fronx" data-bs-target="#selectCar"
                                                data-bs-toggle="modal" class="list-group-item list-group-item-action">
                                                Fronx
                                            </a>

                                            <a href="#" data-bs-title="Maruti Suzuki, Swift" data-bs-target="#selectCar"
                                                data-bs-toggle="modal" class="list-group-item list-group-item-action">
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
                                            <a href="#" data-bs-title="Tata, Altroz" data-bs-target="#selectCar"
                                                data-bs-toggle="modal"
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
                            <button class="btn btn-theme rounded-4 btn-block" data-bs-target="#selectCar"
                                data-bs-toggle="modal">Open second modal</button>
                        </div> --}}
                    </div>

                </form>
            </div>

            {{-- <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button class="btn btn-theme rounded-4 btn-block" data-bs-target="#selectCar"
                        data-bs-toggle="modal">Open
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
                            class="btn btn-theme rounded-4 btn-block">Select Brand</button>
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button type="button" data-bs-target="#selectBrand" data-bs-toggle="modal"
                        class="btn btn-theme rounded-4 btn-block rounded-3">Go Back</button>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>

    //This is Filter dealers by Brands
     $(document).ready(function() {
        $('#dynamicbrand').on('change', function() {
            const brand = $('#dynamicbrand').val();
            console.log(brand);

            //Here is AJAX Code...
            if (brand) {
                $.ajax({
                    url: '/filternewcardealersbybrand/' + brand,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        console.log(response);
                        $('#dealersdivs').empty();
                        response.forEach(function(row) {
                            var div = `
                             <div class="ads-list-archive" >
                             <div class="clearfix visible-xs-block"></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
                                    <div class="ad-archive-desc">
                                        <div class="d-flex justify-content-between ">
                                            <div class="">
                                                <a href="/dealer-profile">
                                                    <h3>${row.businessname}</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="category-title fs-4">
                                            ${row.district} ${row.district} - ${row.pincode}
                                        </div>
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="/dealer-profile">
                                                    <div class="btn btn-danger btn-sm rounded-3">View Detials</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:{{$data->mobilenumber}}">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        ${row.mobilenumber}
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            `;
                            $('#dealersdivs').append(div);
                        });
                    },
                });
            }
        });
    });


    //This is Filter dealers by City
     $(document).ready(function() {
        $('#dynamiccity').on('change', function() {
            const cityname = $('#dynamiccity').val();
            console.log(cityname);

            //Here is AJAX Code...
            if (cityname) {
                $.ajax({
                    url: '/filternewcardealersbycity/' + cityname,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(dealerscity) {
                        console.log(dealerscity);
                        $('#dealersdivs').empty();
                        dealerscity.forEach(function(row) {
                            var div = `
                             <div class="ads-list-archive" >
                             <div class="clearfix visible-xs-block"></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
                                    <div class="ad-archive-desc">
                                        <div class="d-flex justify-content-between ">
                                            <div class="">
                                                <a href="/dealer-profile">
                                                    <h3>${row.businessname}</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="category-title fs-4">
                                            ${row.district} ${row.district} - ${row.pincode}
                                        </div>
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="/dealer-profile">
                                                    <div class="btn btn-danger btn-sm rounded-3">View Detials</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:{{$data->mobilenumber}}">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        ${row.mobilenumber}
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            `;
                            $('#dealersdivs').append(div);
                        });
                    },
                });
            }
        });
    });
</script>
