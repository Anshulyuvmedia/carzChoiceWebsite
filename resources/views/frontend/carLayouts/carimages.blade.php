@extends('frontend.layouts.website')
@section('content')
@section('title', ' Car Images ')

<!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
<section class="page-header-area-2 gray">
    <!-- Main Container -->
    <div class="container featured-cars">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>Images</h1>
                    <p>
                        View car images of all models in India. All latest cars have hundreds of photos of their
                        interior, exterior and 360-degree views.
                    </p>
                </div>
            </div>

            <div class="card">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li role="presentation" class="nav-item ">
                        <a class="nav-link" aria-controls="All" href="/news">NEWS
                        </a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="Exterior" href="/reviews">REVIEWS</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="Interior" href="#SPECIALREPORTS">SPECIAL REPORTS</a>
                    </li>
                    <li role="presentation" class="nav-item active">
                        <a class="nav-link" aria-controls="Colours" href="/car-images">IMAGES</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="Colours" href="#VIDEOS">VIDEOS</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content clearfix">
                    <div class="tab-pane fade in active" style="margin-top: 20px;" id="All">

                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">

                                <div class=" featured-slider owl-carousel owl-theme">
                                    @foreach ($carimagedata as $data)
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <!-- Listing Ad Grid -->
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="image">
                                                            @if ($data->addimage)
                                                                <a  href="/car-view-images/{{$data->vehicle}}?type=All">
                                                                    <img class="img-responsive"
                                                                        src="{{ asset('assets/backend-assets/images/' . $data->addimage) }}"
                                                                        alt="Thumbnail" />
                                                                </a>
                                                            @endif
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            <h3>
                                                                <a href="/car-view-images/{{$data->vehicle}}?type=All">
                                                                    {{$data->brandname}} {{$data->vehicle}}
                                                                </a>
                                                            </h3>
                                                            <div
                                                                class=" fs-3 fw-bold d-flex justify-content-between align-content-center ">
                                                                <a  href="/car-view-images/{{$data->vehicle}}?type=All">

                                                                    <div class="o-dsiSgT o-cpnuEd ">
                                                                        <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-cpNAVm o-cybDoH o-fsBtSY"
                                                                            viewBox="0 0 16 16" fill="currentcolor"
                                                                            tabindex="-1" focusable="false"
                                                                            aria-hidden="true" role="img">
                                                                            <path
                                                                                d="M13 15.5H3A2.48 2.48 0 01.5 13V3A2.48 2.48 0 013 .5h10A2.48 2.48 0 0115.5 3v10a2.48 2.48 0 01-2.5 2.5zM3 1.5A1.47 1.47 0 001.5 3v10A1.47 1.47 0 003 14.5h10a1.47 1.47 0 001.5-1.5V3A1.47 1.47 0 0013 1.5zm9.08 11.87H4a1 1 0 01-.81-.43 1 1 0 01-.1-.92L4.29 9a1 1 0 01.81-.61 1 1 0 01.9.46l1.06 1.62L9 5a1 1 0 01.95-.65 1 1 0 01.91.69l2.16 7a1 1 0 01-.14.87 1 1 0 01-.83.46zm-6.87-4L4 12.4h8l-2.15-7L8 10.81a1 1 0 01-.8.64 1 1 0 01-.96-.45zM3.7 8.33a.52.52 0 01-.39-.19 3.19 3.19 0 01.52-4.47 3.25 3.25 0 014.55.47.5.5 0 11-.78.62 2.23 2.23 0 00-3.14-.31 2.18 2.18 0 00-.37 3.06.51.51 0 01-.09.71.54.54 0 01-.3.11z">
                                                                            </path>
                                                                        </svg>
                                                                        <span class="text-muted fs-5">
                                                                            {{$data->vehicle_count}} Images
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>

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

                    <div class="tab-pane fade" style="margin-top: 20px;" id="Exterior">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row my-3">
                                <div class="d-flex  pb-4" style="width: 100%; overflow-x: auto;">
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Outer
                                        view</button>
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Outer
                                        lights</button>
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Outer
                                        Parts </button>
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Doors
                                        and Mirrors</button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">Roof</button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">Logo</button>
                                </div>

                            </div>
                        </div>
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <h4 class="mb-3 fw-bold">Outer view (30 Images)</h4>
                                <div class=" featured-slider owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                <div class="category-grid-box-1">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/370x208/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-33.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Right Front Three Quarter
                                                            </a>
                                                        </h3>

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
                                                            src="https://imgd.aeplcdn.com/370x208/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Right Front Three Quarter
                                                            </a>
                                                        </h3>

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
                                                            src="https://imgd.aeplcdn.com/370x208/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-3.png?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Right Front Three Quarter
                                                            </a>
                                                        </h3>

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

                    <div class="tab-pane fade" style="margin-top: 20px;" id="Interior">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row my-3">
                                <div class="d-flex  pb-4" style="width: 100%; overflow-x: auto;">
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Seat &
                                        seat adjustments</button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">Dashboard</button>
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Gears,
                                        Pedals and Stalks </button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">Storage and Cup
                                        holders</button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">Entertainment
                                        systems</button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">Ac</button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">Interior lights</button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">Charging points</button>
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Doors
                                        & Controls</button>
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Hooks
                                        and Handles</button>
                                    <button type="button"
                                        class="btn btn-theme rounded-4 rounded-pill mx-3">AirBags</button>
                                    <button type="button" class="btn btn-theme rounded-4 rounded-pill mx-3">Other
                                        (interior)</button>


                                </div>

                            </div>
                        </div>
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <h4 class="mb-3 fw-bold">Seat & seat adjustments (10 Images)</h4>
                                <div class=" featured-slider owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                <div class="category-grid-box-1">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/370x208/n/cw/ec/156405/xuv-3xo-interior-front-row-seats.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Front Row Seats
                                                            </a>
                                                        </h3>

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
                                                            src="https://imgd.aeplcdn.com/370x208/n/cw/ec/156405/xuv-3xo-interior-seat-adjustment-manual-for-driver.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Seat Adjustment Manual for Driver
                                                            </a>
                                                        </h3>

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
                                                            src="https://imgd.aeplcdn.com/370x208/n/cw/ec/156405/xuv-3xo-interior-seat-adjustment-manual-for-front-passenger.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Seat Adjustment Manual for Front Passenger
                                                            </a>
                                                        </h3>

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

                    <div class="tab-pane fade" style="margin-top: 20px;" id="Colours">

                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">

                                <div class=" featured-slider owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="grid-style-2">
                                            <!-- Listing Ad Grid -->
                                            <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                <div class="category-grid-box-1">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/370x208/n/cw/ec/156405/xuv-3xo-exterior-right-front-three-quarter-33.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Citrine Yellow
                                                            </a>
                                                        </h3>

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
                                                            src="https://imgd.aeplcdn.com/370x208/n/74u5gdb_1735917.jpg?q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Deep Forest
                                                            </a>
                                                        </h3>

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
                                                            src="https://imgd.aeplcdn.com/370x208/n/4qasgdb_1735921.jpg?q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="short-description-1 clearfix">
                                                        <h3>
                                                            <a href="#" href="#">
                                                                Dune Beige
                                                            </a>
                                                        </h3>

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

@endsection
