@extends('frontend.layouts.website')
@section('content')
@section('title', 'New Car ')
<div>
    <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
    <section class="custom-padding gray p-0 pt-4">
        <!-- Main Container -->
        <div class="container ">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1> <span class="heading-color"> New</span> Cars</h1>
                        <p>Are you planning on buying a new car? Well, we know that with so many car options available
                            out there, it gets really difficult to find a good car which suits your need. Hence, we have
                            put together a complete list of new cars. Maruti Suzuki, Tata and Toyota are the 3 most
                            popular car brands. These popular car brands cater to a wide spectrum of budgets and needs,
                            offering a variety of cars from fuel-efficient hatchbacks to spacious SUVs. The 5 most
                            popular cars are Mahindra XUV 3XO, Toyota Urban Cruiser Taisor, Maruti Suzuki Fronx, Maruti
                            Suzuki Swift and Hyundai Creta. Explore the complete list of cars by exploring different
                            brands or by applying multiple filters such as budget, fuel type, body type etc. You can
                            find the car that suits you best from the list of cars below.</p>
                    </div>
                </div>
            </div>
            <!-- Main Container End -->
        </div>
    </section>


    <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->

            <x-all-brands />
    <!-- =-=-=-=-=-=-= All Brands End =-=-=-=-=-=-= -->



    {{--THIS IS FIND THE CARS BY YOUR CHOICE COMPONENET--}}
    <x-find-the-cars-by-choice/>


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
                                                                <button class="btn btn-theme rounded-4 btn-sm  ">
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
                                                                <button class="btn btn-theme rounded-4 btn-sm  ">
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
                                                                <button class="btn btn-theme rounded-4 btn-sm  ">
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
        <div class="container popular-car card">
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
                                                    <button class="btn btn-theme rounded-4 btn-sm ">
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

    {{--THIS IS COMPARE CAR CARDS COMPONENET--}}
    <x-compare-cars />


    {{--THIS IS NEW CAR FAQ COMPONENET--}}
    <x-new-car-faq />

</div>
@endsection
