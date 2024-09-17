@extends('frontend.layouts.website')
@section('content')
@section('title', $filtertypenew )


<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="header-page">
                        <h1>{{$filtertypenew}} Cars</h1>
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
                    <h1 class="text-dark fs-3 fw-bold">{{$filtertypenew}} Cars in India 2024</h1>
                </div>
                <!-- Row -->
                <div class="row">

                    <div class="clearfix"></div>
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                        <div class="clearfix"></div>
                        <div class="listingTopFilterBar rounded-4">

                            <div class="col-md-6 col-xs-4 col-sm-5 ">
                                <div class="header-listing">
                                    <div class=" mt-3">
                                        <button class="btn btn-outline btn-theme rounded-4" data-bs-target="#carfilter"
                                            data-bs-toggle="modal"> Filter by: </button>

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 col-xs-6 col-sm-5 ">
                                <div class="header-listing">
                                    <div class="custom-select-box">
                                        <select name="order" class="custom-select  form-control rounded-4">
                                            <option value="0">Most popular</option>
                                            <option value="1">The latest</option>
                                            <option value="2">The best rating</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Sorting Filters End-->
                    <div class="clearfix"></div>
                    <!-- Ads Archive -->
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        @if ($variants->isNotEmpty())
                            <div class="posts-masonry" >
                                <div id="makecarddiv">
                                @foreach ($variants as $row)
                                    {{-- @php
                                    dd($row);
                                        @endphp --}}
                                        <div class="ads-list-archive">
                                            <div class="col-lg-4 col-md-4 col-sm-4 no-padding">
                                                <div class="ad-archive-img">
                                                    <a href="#">
                                                        <img class="img-responsive"
                                                            src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clearfix visible-xs-block"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 no-padding">
                                                <div class="ad-archive-desc">
                                                    <a class=""
                                                        href="{{ route('carlistingdetails', ['id' => $row->id]) }}">
                                                        <h3>{{ $row->brandname }},
                                                            {{ $row->carname }} {{ $row->carmodalname }}</h3>
                                                    </a>
                                                    <div class="ad-price-simple fs-3">Rs. {{ $row->price }} Lakh <span
                                                            class="fs-5 text-dark">Estimated Price </span></div>
                                                    <div class="category-title">Expected launch - June 2025 (Tentative)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            </div>
                        @else
                            <h5 class="text-center">No vehicles are availabel in this type</h5>
                        @endif
                    </div>
                    <div class="clearfix"></div>
                    <!-- Pagination -->
                    {{-- <div class="text-center margin-top-30">
                        <ul class="pagination ">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4 col-sx-12">

                <div class="header-page mb-2">
                    <h1 class="text-dark fs-3 fw-bold">Car Buyer's Tools</h1>
                </div>
                <div class="sidebar">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- Latest Ads Panel -->
                        <div class="panel panel-default rounded-4">

                            <!-- Content -->
                            <div class="panel-collapse">
                                <div class="panel-body recent-ads">
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="/find-dealer" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/locate-dealer.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="/find-dealer">Locate Dealer </a>
                                                </h3>
                                                <div class="recent-ads-list-location">
                                                    Find a dealer near your current location
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="/used-car" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/used-car.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="/used-car">Used Cars</a>
                                                </h3>

                                                <div class="recent-ads-list-location">
                                                    Explore best priced used cars in good conditions near you
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <form action="" id="makeformid">
                <div class="modal-body" style="height: 350px; overflow-y: auto;">
                    <!-- Panel group -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- Pricing Panel -->
                        <div class="panel panel-default">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="headingfour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapsefour" aria-expanded="false"
                                        aria-controls="collapsefour">
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
                                    {{-- <a class="btn btn-theme rounded-4 btn-sm margin-top-20">Search</a> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Pricing Panel End -->


                        <!-- Body Type Panel -->
                        <div class="panel panel-default carbodytype">
                            <!-- Heading -->
                            <div class="panel-heading" role="tab" id="heading7">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse7" aria-expanded="false"
                                        aria-controls="collapse7">
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
                                            @foreach ($results->where('type', 'Body Type') as $bodyType)
                                                <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                                    <label class="image-checkbox">
                                                        <img
                                                            src="{{ asset('assets/backend-assets/images/' . $bodyType->iconimage) }}" />
                                                        <input type="checkbox" name="bodytypes[]"
                                                            value="{{ $bodyType->value }}" />
                                                        <i class="fa fa-check hidden"></i>
                                                        <div class="fs-6">{{ $bodyType->value }}</div>
                                                    </label>
                                                </li>
                                            @endforeach
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
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse9" aria-expanded="false"
                                        aria-controls="collapse9">
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
                                            @foreach ($results->where('type', 'Transmission') as $Transmission)
                                                <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                                    <label class="image-checkbox">
                                                        <img
                                                            src="{{ asset('assets/backend-assets/images/' . $Transmission->iconimage) }}" />
                                                        <input type="checkbox" name="transmissions[]"
                                                            value="{{ $Transmission->value }}" />
                                                        <i class="fa fa-check hidden"></i>
                                                        <div class="fs-6">{{ $Transmission->value }}</div>
                                                    </label>
                                                </li>
                                            @endforeach
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
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#fuelcollapsed" aria-expanded="false"
                                        aria-controls="collapse9">
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
                                            @foreach ($results->where('type', 'Fuel Type') as $fueltype)
                                                <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                                    <label class="image-checkbox">
                                                        <img
                                                            src="{{ asset('assets/backend-assets/images/' . $fueltype->iconimage) }}" />
                                                        <input type="checkbox" name="fueltypes[]"
                                                            value="{{ $fueltype->value }}" />
                                                        <i class="fa fa-check hidden"></i>
                                                        <div class="fs-6">{{ $fueltype->value }}</div>
                                                    </label>
                                                </li>
                                            @endforeach
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
                                    <a class="collapsed" role="button" data-toggle="collapse"
                                        data-parent="#accordion" href="#seatingcollapsed" aria-expanded="false"
                                        aria-controls="collapse9">
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
                                            @foreach ($results->where('type', 'Seating Capacity') as $seater)
                                                <li class="col-xs-4 col-sm-3 col-md-3 nopad text-center">
                                                    <label class="image-checkbox p-0">
                                                        <input type="checkbox" name="seatingcaps[]"
                                                            value="{{ $seater->value }}" />
                                                        <i class="fa fa-check hidden"></i>
                                                        <div class="">{{ $seater->value }}</div>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- seating Panel End -->


                        <!-- Mileage Panel -->
                        {{-- <div class="panel panel-default carbodytype">
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
                        </div> --}}
                        <!-- Mileage Panel End -->


                        <!-- Safety Panel -->
                        {{-- <div class="panel panel-default carbodytype">
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
                        </div> --}}
                        <!-- seating Panel End -->


                        <!-- Engine Feature  -->
                        {{-- <div class="panel panel-default carbodytype">
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
                        </div> --}}
                        <!-- Engine Panel End -->


                        <!-- Power Feature  -->
                        {{-- <div class="panel panel-default carbodytype">
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
                        </div> --}}
                        <!-- Power Panel End -->


                        <!-- Torque Feature  -->
                        {{-- <div class="panel panel-default carbodytype">
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
                        </div> --}}
                        <!-- Torque Panel End -->


                        <!-- Colours Feature  -->
                        {{-- <div class="panel panel-default carbodytype">
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
                        </div> --}}
                        <!-- Torque Panel End -->

                    </div>
                    <!-- panel-group end -->
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 my-3 text-center">
                        <button type="submit" class="btn btn-theme rounded-4 rounded-3"
                            data-bs-target="#selectLocation" data-bs-toggle="modal">Apply Changes</button>
                    </div>
                </div>
            </form>
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

<script>
    //This is Make Filter
    jQuery('#makeformid').submit(function(e) {
        e.preventDefault();

        var priceMin = document.getElementById('price-min').innerText;
        var priceMax = document.getElementById('price-max').innerText;
        console.log(priceMin, priceMax);

        var formdata = jQuery('#makeformid').serialize();
        formdata += `&minprice=${priceMin}&maxprice=${priceMax}`;
        // console.log(formdata);

        jQuery.ajax({
            url: "{{ route('makefilterfindcar') }}",
            data: {
                formdata
            },
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                console.log(data);
                $('#makecarddiv').empty();
                data.forEach(function(item) {
                    var newdiv = `
                        <div class="ads-list-archive">
                            <div class="col-lg-4 col-md-4 col-sm-4 no-padding">
                                <div class="ad-archive-img">
                                    <a href="#">
                                        <img class="img-responsive"
                                            src="{{ asset('assets/backend-assets/images/') }}/${item.addimage}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 no-padding">
                                <div class="ad-archive-desc">
                                    <a class="" href="{{ route('carlistingdetails', ['id' => ':id']) }}".replace(':id', item.id)>
                                        <h3>${item.brandname}, ${item.carname} (${item.carmodalname})</h3>
                                    </a>
                                    <div class="ad-price-simple fs-3">Rs. ${item.price} Lakh <span
                                            class="fs-5 text-dark">Estimated Price </span></div>
                                    <div class="category-title">Expected launch - June 2025 (Tentative)</div>
                                </div>
                            </div>
                        </div>
                    `;
                    $('#makecarddiv').append(newdiv);
                });
            }
        });
    });
</script>
@endsection
