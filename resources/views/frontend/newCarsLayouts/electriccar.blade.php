@extends('frontend.layouts.website')
@section('content')
@section('title', 'Electric Car ')

<div>
    <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
    <section class="custom-padding  p-0 pt-4">
        <!-- Main Container -->
        <div class="container ">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Electric <span class="heading-color">Cars</span> In India</h1>
                        <p>EV cars in India are quickly gaining popularity, thanks to their low carbon emissions,
                            reduced noise pollution, and impressive fuel efficiency. Looking for an eco-friendly mode of
                            transportation that's both affordable and efficient? Some of the popular battery-powered
                            cars include the Tata Punch EV (Rs. 12.33 Lakh), BYD Seal (Rs. 45.77 Lakh) and MG Comet EV
                            (Rs. 7.38 Lakh)..</p>
                    </div>
                </div>
            </div>
            <!-- Main Container End -->
        </div>
    </section>
    <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Electric Cars Ads =-=-=-=-=-=-= -->
    <section class="custom-padding ">
        <!-- Main Container -->
        <div class="container card popular-cars">
            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="heading-panel">
                            <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                                <!-- Main Title -->
                                <h1> <span class="heading-color">Electric</span> Cars</h1>
                            </div>
                        </div>
                        <div class=" popular-slider container owl-carousel owl-theme">
                            @foreach ($electricfinal as $row)
                            <div class="item">
                                <div class="grid-style-2">
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            <div class="image">
                                                <img alt="Carz Choice"
                                                    src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>

                                            </div>
                                            <div class="short-description-1 clearfix">

                                                <h3>
                                                    <a title="" href="#">
                                                        {{$row->brandname}} {{$row->carname}}
                                                    </a>
                                                </h3>

                                                <div class="ad-price">Rs. {{$row->price}} Lakh
                                                    <span class="text-muted ps-2">onwards</span>
                                                </div>
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
    <!-- =-=-=-=-=-=-= Electric Cars Ads End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Hybrid Cars Ads =-=-=-=-=-=-= -->
    <section class="custom-padding ">
        <!-- Main Container -->
        <div class="container card popular-cars">
            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">

                        <div class="heading-panel">
                            <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                                <h1> <span class="heading-color">Hybrid </span> Cars</h1>
                            </div>
                        </div>
                        <div class=" popular-slider container owl-carousel owl-theme">
                            @foreach ($hybridCars as $data)
                            <div class="item">
                                <div class="grid-style-2">
                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                        <div class="category-grid-box-1">
                                            <div class="image">
                                                <img alt="Carz Choice"
                                                    src="{{ asset('assets/backend-assets/images/' . $data->addimage) }}"
                                                    class="img-responsive">
                                                <div class="ribbon popular"></div>

                                            </div>
                                            <div class="short-description-1 clearfix">

                                                <h3>
                                                    <a title="" href="#">
                                                        {{$data->brandname}} {{$data->carname}}
                                                    </a>
                                                </h3>

                                                <div class="ad-price">Rs. {{$data->price}} Lakh
                                                    <span class="text-muted ps-2">onwards</span>
                                                </div>
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
    </section>
    <!-- =-=-=-=-=-=-= Hybrid Cars Cars Ads End =-=-=-=-=-=-= -->

    {{-- THIS IS COMPARE CAR CARDS COMPONENET --}}
    <x-compare-cars />


    <!-- =-=-=-=-=-=-= Latest Car Updates  Ads =-=-=-=-=-=-= -->
    <section class="custom-padding ">
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
                                href="#carnews">Featured Stories</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="popular" role="tab" data-toggle="tab"
                                href="#expertreviews">Electric Cars Videos</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                                href="#video">Electric Cars Expert Reviews</a>
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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
                                                            <a href="#"> <img class="img-responsive" alt=""
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



    <!-- =-=-=-=-=-=-= Cars Images  =-=-=-=-=-=-= -->
    <section class="custom-padding used-cars">
        <!-- Main Container -->
        <div class="container popular-cars card">
            <!-- Row -->
            <div class="row">
                <!-- Heading Area -->
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Electric <span class="heading-color"> Cars Images</span> </h1>
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
                                            <div class="row m-0">
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-5.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-2.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-4.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0">
                                                <div class=" col-md-4 p-2">
                                                    <div class="image pb-3">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-7.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-rear-three-quarter.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-side-view.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="short-description-1 clearfix">

                                                <div class="text-muted">Tata </div>
                                                <div
                                                    class=" fs-3 fw-bold d-flex justify-content-between align-content-center ">
                                                    <a title="" href="#">
                                                        Seal
                                                    </a>
                                                    <div class="o-dsiSgT o-cpnuEd">
                                                        <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-cpNAVm o-cybDoH o-fsBtSY"
                                                            viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                            focusable="false" aria-hidden="true" role="img">
                                                            <path
                                                                d="M13 15.5H3A2.48 2.48 0 01.5 13V3A2.48 2.48 0 013 .5h10A2.48 2.48 0 0115.5 3v10a2.48 2.48 0 01-2.5 2.5zM3 1.5A1.47 1.47 0 001.5 3v10A1.47 1.47 0 003 14.5h10a1.47 1.47 0 001.5-1.5V3A1.47 1.47 0 0013 1.5zm9.08 11.87H4a1 1 0 01-.81-.43 1 1 0 01-.1-.92L4.29 9a1 1 0 01.81-.61 1 1 0 01.9.46l1.06 1.62L9 5a1 1 0 01.95-.65 1 1 0 01.91.69l2.16 7a1 1 0 01-.14.87 1 1 0 01-.83.46zm-6.87-4L4 12.4h8l-2.15-7L8 10.81a1 1 0 01-.8.64 1 1 0 01-.96-.45zM3.7 8.33a.52.52 0 01-.39-.19 3.19 3.19 0 01.52-4.47 3.25 3.25 0 014.55.47.5.5 0 11-.78.62 2.23 2.23 0 00-3.14-.31 2.18 2.18 0 00-.37 3.06.51.51 0 01-.09.71.54.54 0 01-.3.11z">
                                                            </path>
                                                        </svg> 136
                                                    </div>
                                                </div>

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
                                            <div class="row m-0">
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-5.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-2.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-4.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0">
                                                <div class=" col-md-4 p-2">
                                                    <div class="image pb-3">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-7.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-rear-three-quarter.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-side-view.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="short-description-1 clearfix">

                                                <div class="text-muted">Tata </div>
                                                <div
                                                    class=" fs-3 fw-bold d-flex justify-content-between align-content-center ">
                                                    <a title="" href="#">
                                                        Seal
                                                    </a>
                                                    <div class="o-dsiSgT o-cpnuEd">
                                                        <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-cpNAVm o-cybDoH o-fsBtSY"
                                                            viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                            focusable="false" aria-hidden="true" role="img">
                                                            <path
                                                                d="M13 15.5H3A2.48 2.48 0 01.5 13V3A2.48 2.48 0 013 .5h10A2.48 2.48 0 0115.5 3v10a2.48 2.48 0 01-2.5 2.5zM3 1.5A1.47 1.47 0 001.5 3v10A1.47 1.47 0 003 14.5h10a1.47 1.47 0 001.5-1.5V3A1.47 1.47 0 0013 1.5zm9.08 11.87H4a1 1 0 01-.81-.43 1 1 0 01-.1-.92L4.29 9a1 1 0 01.81-.61 1 1 0 01.9.46l1.06 1.62L9 5a1 1 0 01.95-.65 1 1 0 01.91.69l2.16 7a1 1 0 01-.14.87 1 1 0 01-.83.46zm-6.87-4L4 12.4h8l-2.15-7L8 10.81a1 1 0 01-.8.64 1 1 0 01-.96-.45zM3.7 8.33a.52.52 0 01-.39-.19 3.19 3.19 0 01.52-4.47 3.25 3.25 0 014.55.47.5.5 0 11-.78.62 2.23 2.23 0 00-3.14-.31 2.18 2.18 0 00-.37 3.06.51.51 0 01-.09.71.54.54 0 01-.3.11z">
                                                            </path>
                                                        </svg> 136
                                                    </div>
                                                </div>

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
                                            <div class="row m-0">
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-5.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-2.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-4.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0">
                                                <div class=" col-md-4 p-2">
                                                    <div class="image pb-3">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-7.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-rear-three-quarter.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-side-view.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="short-description-1 clearfix">

                                                <div class="text-muted">Tata </div>
                                                <div
                                                    class=" fs-3 fw-bold d-flex justify-content-between align-content-center ">
                                                    <a title="" href="#">
                                                        Seal
                                                    </a>
                                                    <div class="o-dsiSgT o-cpnuEd">
                                                        <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-cpNAVm o-cybDoH o-fsBtSY"
                                                            viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                            focusable="false" aria-hidden="true" role="img">
                                                            <path
                                                                d="M13 15.5H3A2.48 2.48 0 01.5 13V3A2.48 2.48 0 013 .5h10A2.48 2.48 0 0115.5 3v10a2.48 2.48 0 01-2.5 2.5zM3 1.5A1.47 1.47 0 001.5 3v10A1.47 1.47 0 003 14.5h10a1.47 1.47 0 001.5-1.5V3A1.47 1.47 0 0013 1.5zm9.08 11.87H4a1 1 0 01-.81-.43 1 1 0 01-.1-.92L4.29 9a1 1 0 01.81-.61 1 1 0 01.9.46l1.06 1.62L9 5a1 1 0 01.95-.65 1 1 0 01.91.69l2.16 7a1 1 0 01-.14.87 1 1 0 01-.83.46zm-6.87-4L4 12.4h8l-2.15-7L8 10.81a1 1 0 01-.8.64 1 1 0 01-.96-.45zM3.7 8.33a.52.52 0 01-.39-.19 3.19 3.19 0 01.52-4.47 3.25 3.25 0 014.55.47.5.5 0 11-.78.62 2.23 2.23 0 00-3.14-.31 2.18 2.18 0 00-.37 3.06.51.51 0 01-.09.71.54.54 0 01-.3.11z">
                                                            </path>
                                                        </svg> 136
                                                    </div>
                                                </div>

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
                                            <div class="row m-0">
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-5.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-2.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-4.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row m-0">
                                                <div class=" col-md-4 p-2">
                                                    <div class="image pb-3">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-front-three-quarter-7.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-rear-three-quarter.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 p-2">
                                                    <div class="image">
                                                        <img alt="Carz Choice"
                                                            src="https://imgd.aeplcdn.com/211x211/n/cw/ec/148309/punch-ev-exterior-right-side-view.jpeg?isig=0&q=80"
                                                            class="img-responsive">
                                                        <div class="ribbon popular"></div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="short-description-1 clearfix">

                                                <div class="text-muted">Tata </div>
                                                <div
                                                    class=" fs-3 fw-bold d-flex justify-content-between align-content-center ">
                                                    <a title="" href="#">
                                                        Seal
                                                    </a>
                                                    <div class="o-dsiSgT o-cpnuEd">
                                                        <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-cpNAVm o-cybDoH o-fsBtSY"
                                                            viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                            focusable="false" aria-hidden="true" role="img">
                                                            <path
                                                                d="M13 15.5H3A2.48 2.48 0 01.5 13V3A2.48 2.48 0 013 .5h10A2.48 2.48 0 0115.5 3v10a2.48 2.48 0 01-2.5 2.5zM3 1.5A1.47 1.47 0 001.5 3v10A1.47 1.47 0 003 14.5h10a1.47 1.47 0 001.5-1.5V3A1.47 1.47 0 0013 1.5zm9.08 11.87H4a1 1 0 01-.81-.43 1 1 0 01-.1-.92L4.29 9a1 1 0 01.81-.61 1 1 0 01.9.46l1.06 1.62L9 5a1 1 0 01.95-.65 1 1 0 01.91.69l2.16 7a1 1 0 01-.14.87 1 1 0 01-.83.46zm-6.87-4L4 12.4h8l-2.15-7L8 10.81a1 1 0 01-.8.64 1 1 0 01-.96-.45zM3.7 8.33a.52.52 0 01-.39-.19 3.19 3.19 0 01.52-4.47 3.25 3.25 0 014.55.47.5.5 0 11-.78.62 2.23 2.23 0 00-3.14-.31 2.18 2.18 0 00-.37 3.06.51.51 0 01-.09.71.54.54 0 01-.3.11z">
                                                            </path>
                                                        </svg> 136
                                                    </div>
                                                </div>

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
    <!-- =-=-=-=-=-=-= Cars Images End =-=-=-=-=-=-= -->


    <!-- =-=-=-=-=-=-= New Car FAQs  =-=-=-=-=-=-= -->
    <x-electric-car-faq />
    <!-- =-=-=-=-=-=-= New Car FAQs End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= All Brands Component  =-=-=-=-=-=-= -->
    <x-all-brands cartype="brandfilter" />
</div>
@endsection
