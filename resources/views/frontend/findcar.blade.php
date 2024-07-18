@extends('frontend.layouts.website')
@section('content')
@section('title', 'New Car Finder')


<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="header-page">
                        <h1>Cars</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->

<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
<section class="section-padding no-top gray">
    <!-- Main Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Sorting Filters -->

            <!-- Middle Content Area -->
            <div class="col-md-8 col-lg-8 col-sx-12">
                <div class="header-page mb-2">
                    <h1 class="text-dark fs-3 fw-bold">Upcoming Cars in India 2024</h1>
                </div>
                <!-- Row -->
                <div class="row">

                    <div class="clearfix"></div>
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                        <div class="clearfix"></div>
                        <div class="listingTopFilterBar">

                            <div class="col-md-6 col-xs-12 col-sm-5 ">
                                <div class="header-listing">
                                    <h6>Filter by :</h6>

                                    <div class="custom-select-box mt-3">
                                        <button class="btn btn-theme" data-bs-target="#carfilter"
                                            data-bs-toggle="modal"> Make</button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-5 ">
                                <div class="header-listing">
                                    <h6>Sort by :</h6>
                                    <div class="custom-select-box">
                                        <select name="order" class="custom-select">
                                            <option value="0">Most popular</option>
                                            <option value="1">The latest</option>
                                            <option value="2">The best rating</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sorting Filters End-->
                    <div class="clearfix"></div>
                    <!-- Ads Archive -->
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        @if($variants->isNotEmpty())
                            <div class="posts-masonry">
                                @foreach ($variants as $row)
                                <div class="ads-list-archive">
                                    <div class="col-lg-4 col-md-4 col-sm-4 no-padding">
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <img class="img-responsive" src="{{ asset('assets/backend-assets/images/'.$row->addimage) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-xs-block"></div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 no-padding">
                                        <div class="ad-archive-desc">
                                            <a href="">
                                                <h3>{{$row->brandname}}, {{$row->carname}}({{$row->carmodalname}})</h3>
                                            </a>
                                            <div class="ad-price-simple fs-3">Rs. {{$row->price}} Lakh <span
                                                    class="fs-5 text-dark">Estimated Price </span></div>
                                            <div class="category-title">Expected launch - June 2025 (Tentative)</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @else
                            <h5 class="text-center">No vehicles are availabel in this type</h5>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                    <!-- Pagination -->
                    <div class="text-center margin-top-30">
                        <ul class="pagination ">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Middle Content Area  End -->
            <!-- Left Sidebar -->
            <div class="col-md-4 col-sx-12">

                <div class="header-page mb-2">
                    <h1 class="text-dark fs-3 fw-bold">Car Buyer's Tools</h1>
                </div>
                <!-- Sidebar Widgets -->
                <div class="sidebar">
                    <!-- Panel group -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- Latest Ads Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            {{-- <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a>
                                        Recent Ads
                                    </a>
                                </h4>
                            </div> --}}
                            <!-- Content -->
                            <div class="panel-collapse">
                                <div class="panel-body recent-ads">
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/locate-dealer.svg"
                                                        alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Locate Dealer </a>
                                                </h3>
                                                <div class="recent-ads-list-location">
                                                    Find a dealer near your current location
                                                </div>

                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/used-car.svg"
                                                        alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Used Cars</a>
                                                </h3>

                                                <div class="recent-ads-list-location">
                                                    Explore best priced used cars in good conditions near you
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
                        <!-- Latest Ads Panel End -->
                    </div>
                    <!-- panel-group end -->
                </div>
                <!-- Sidebar Widgets End -->
            </div>
            <!-- Left Sidebar End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->





<div class="modal fade" id="carfilter" aria-hidden="true" aria-labelledby="selectBrandlabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="selectBrandlabel">Filter By:</h3>
                <div class="header-bg"></div>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
            </div>

            <div class="modal-body" style="height: 350px; overflow-y: auto;">
                <!-- Panel group -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                    <!-- Pricing Panel -->
                    <div class="panel panel-default">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="headingfour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Budget
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingfour">
                            <div class="panel-body mb-2">
                                <span class="price-slider-value">Upto <span id="price-min"></span> - <span
                                        id="price-max"></span></span>
                                <div id="price-slider"></div>
                                {{-- <a class="btn btn-theme btn-sm margin-top-20">Search</a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Panel End -->


                    <!-- Body Type Panel -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading7">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Body Type
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="collapse7" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading7">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox">
                                                <img class="img-responsive" src="https://imgd.aeplcdn.com/0x0/cw/body/svg/suv_clr.svg" />
                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">SUV</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/body/svg/sedan_clr.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Sedan</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/body/svg/hatchback_clr.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Hatchback</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/body/svg/suv_clr.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Compact SUV</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/body/svg/suv_clr.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">MUV</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/body/svg/van_clr.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Minivan/Van</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/body/svg/coupe_clr.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Coupe</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/body/svg/wagon_clr.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Station Wagon</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/body/svg/truck_clr.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Truck</div>
                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Condition Panel End -->


                    <!-- Transmission Panel -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Transmission Type
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="collapse9" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox">
                                                <img class="img-responsive" src="https://imgd.aeplcdn.com/0x0/cw/transmission/svg/automatic_clr.svg?v3.0" />
                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Automatic</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/transmission/svg/manual_clr.svg?v3.0" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Manual</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/transmission/svg/imt_clr.svg?v3.0" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Clutchless Manual</div>
                                            </label>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Transmission Panel End -->

                    <!-- fuel Panel -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#fuelcollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Fuel Type
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="fuelcollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox">
                                                <img class="img-responsive" src="https://imgd.aeplcdn.com/0x0/cw/fuel/svg/h-filter-without-background.svg?v=2" />
                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Hybrid</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/fuel/svg/petrol.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Petrol</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/fuel/svg/diesel.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Diesel</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/fuel/svg/cng.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">CNG</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox ">
                                                <img class="img-responsive"
                                                    src="https://imgd.aeplcdn.com/0x0/cw/fuel/svg/electric.svg" />
                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="fs-6">Electric</div>
                                            </label>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fuel Panel End -->


                    <!-- seating Panel -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#seatingcollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Seating Capacity
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="seatingcollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0">

                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">5 Seater</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">6 Seater</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">7 Seater</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">8 Seater</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">8+ Seater</div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- seating Panel End -->


                    <!-- Mileage Panel -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#Mileagecollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Mileage
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="Mileagecollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0">

                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Upto 10 kmpl</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">10 kmpl - 15 kmpl</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">15 kmpl - 20 kmpl</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Above 20 kmpl</div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mileage Panel End -->



                    <!-- Additional Feature  -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#Additionalcollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Additional features
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="Additionalcollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0">

                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Sunroof</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Sunroof</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Touchscreen Display</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Alloy Wheels</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Music System</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Rear AC Vents</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Central Locking</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Cruise Control</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Hill Hold Control</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Four Wheel Drive</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Ventilated Seats</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Wireless Charging</div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional Panel End -->

                    <!-- Safety Panel -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#Safetycollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Safety Ratings
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="Safetycollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0">

                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">1 Star</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">2 Star</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">3 Star</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">4 Star</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">5 Star</div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- seating Panel End -->


                    <!-- Engine Feature  -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#Enginecollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Engine Capacity
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="Enginecollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0">

                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Upto 800cc</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">800cc - 1000cc</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">1000cc - 1200cc</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">1200cc - 1500cc</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">1500cc - 2000cc</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">2000cc - 3000cc</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">3000cc - 4000cc</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Above 4000cc</div>
                                            </label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Engine Panel End -->


                    <!-- Power Feature  -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#Powercollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Power
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="Powercollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0">

                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Upto 70 bhp</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">70 bhp - 100 bhp</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">100 bhp - 140 bhp</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">140 bhp - 200 bhp</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">200 bhp - 350 bhp</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Above 350 bhp</div>
                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Power Panel End -->


                    <!-- Torque Feature  -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#Torquecollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Torque
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="Torquecollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0">

                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Upto 90 Nm</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">90 Nm - 140 Nm</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">140 Nm - 200 Nm</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">200 Nm - 350 Nm</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">350 Nm - 550 Nm</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-6 col-sm-3 col-md-4 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Above 550 Nm</div>
                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Torque Panel End -->


                    <!-- Colours Feature  -->
                    <div class="panel panel-default carbodytype">
                        <!-- Heading -->
                        <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#Colourscollapsed" aria-expanded="false" aria-controls="collapse9">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Colours
                                </a>
                            </h4>
                        </div>
                        <!-- Content -->
                        <div id="Colourscollapsed" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="heading9">
                            <div class="panel-body">
                                <div class="">
                                    <ul class="list row">

                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0">

                                                <input type="checkbox" name="image[]" value="1" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">White</div>
                                            </label>
                                        </li>

                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Silver</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Grey</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Red</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Blue</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Green</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Black</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Yellow</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Brown</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Orange</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Beige</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Bold</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Bronze</div>
                                            </label>
                                        </li>
                                        <li class="col-xs-4 col-sm-3 col-md-2 nopad text-center">
                                            <label class="image-checkbox p-0 ">

                                                <input type="checkbox" name="image[]" value="" />
                                                <i class="fa fa-check hidden"></i>
                                                <div class="">Copper</div>
                                            </label>
                                        </li>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Torque Panel End -->





                </div>
                <!-- panel-group end -->
            </div>
            <div class="modal-footer">
                <div class="col-md-12 my-3 text-center">
                    <button class="btn btn-theme rounded-3" data-bs-target="#selectLocation"
                        data-bs-toggle="modal">Apply Changes</button>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $(".image-checkbox").each(function() {
        var $checkbox = $(this).find('input[type="checkbox"]').first();
        if ($checkbox.is(":checked")) {
            $(this).addClass('image-checkbox-checked');
        } else {
            $(this).removeClass('image-checkbox-checked');
        }
    });

    // sync the state to the input
    $(".image-checkbox").on("click", function(e) {
        var $checkbox = $(this).find('input[type="checkbox"]');
        $checkbox.prop("checked", !$checkbox.prop("checked"));
        $(this).toggleClass('image-checkbox-checked');

        e.preventDefault();
    });

    // Debugging: Check the checkbox state on page load
    $(".image-checkbox").each(function() {
        var $checkbox = $(this).find('input[type="checkbox"]').first();
        console.log("Checkbox checked state on load: ", $checkbox.prop("checked"));
    });
});


</script>

<script>
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', () => {
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
        });
    });
</script>


@endsection
