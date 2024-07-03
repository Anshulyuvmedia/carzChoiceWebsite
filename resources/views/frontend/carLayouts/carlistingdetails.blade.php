@extends('frontend.layouts.website')
@section('content')
@section('title', 'Car Details')


<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="">

    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding no-top gray pt-5">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="pricing-area">
                    <div class="col-md-8 col-xs-12 col-sm-8">
                        <div>
                            <h1 class="fw-bolder text-black fs-1">Mahindra Scorpio N</h1>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="border border-1 rounded-3 fs-5 p-2 text-black">
                            <span class="text-bg-success p-2 rounded-3">
                                <i class="bi bi-star-fill"></i>
                            </span>
                            <span class="text-success mx-2">3.8</span> Expert Rating |<span
                                class="text-success mx-2">4.7</span> User Rating (698)
                            <a href="#">
                                <span class="text-success ms-3">Rate & Win</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-8 mt-3">

                        <p>
                            The Scorpio N is a premium, large three-row SUV. It feels rugged, spacious in the first two
                            rows, and is feature-loaded, with a commanding appearance. Its big engines, seamlessly
                            shifting auto gearboxes, and absorbent ride make it great for both city driving and long
                            distances.
                        </p>
                    </div>

                    <div class="col-md-12 col-xs-12 col-sm-12 ">
                        <div class="row my-3">

                            <ul class="nav nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">360° View</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Variants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Offers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Variants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Key Specs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Expert Opinion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Similar Cars</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Colours</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Brochure</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Mileage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">User Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Expert Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Images</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FAQs</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12 col-sm-12 ">
                    <div class="row my-3 border">

                        <div class="col-md-6 col-xs-12 col-sm-12 p-0">
                            <div class="singlepage-detail">
                                <div class="featured-ribbon">
                                    <span>Featured</span>
                                </div>
                                <div id="single-slider" class="flexslider p-2 mb-0 pb-0">
                                    <ul class="slides">
                                        <li><a href="images/single-page/1.jpg" data-fancybox="group"><img alt=""
                                                    src="{{ asset('assets/frontend-assets/images/single-page/1.jpg') }}" /></a>
                                        </li>
                                        <li><a href="images/single-page/2.jpg" data-fancybox="group"><img alt=""
                                                    src="{{ asset('assets/frontend-assets/images/single-page/2.jpg') }}" /></a>
                                        </li>
                                        <li><a href="images/single-page/3.jpg" data-fancybox="group"><img alt=""
                                                    src="{{ asset('assets/frontend-assets/images/single-page/3.jpg') }}" /></a>
                                        </li>
                                        <li><a href="images/single-page/4.jpg" data-fancybox="group"><img alt=""
                                                    src="{{ asset('assets/frontend-assets/images/single-page/4.jpg') }}" /></a>
                                        </li>
                                        <li><a href="images/single-page/5.jpg" data-fancybox="group"><img alt=""
                                                    src="{{ asset('assets/frontend-assets/images/single-page/5.jpg') }}" /></a>
                                        </li>
                                        <li><a href="images/single-page/6.jpg" data-fancybox="group"><img
                                                    alt=""
                                                    src="{{ asset('assets/frontend-assets/images/single-page/6.jpg') }}" /></a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider p-2 mb-0">
                                    <ul class="slides">
                                        <li><img alt=""
                                                src="{{ asset('assets/frontend-assets/images/single-page/1_thumb.jpg') }}">
                                        </li>
                                        <li><img alt=""
                                                src="{{ asset('assets/frontend-assets/images/single-page/2_thumb.jpg') }}">
                                        </li>
                                        <li><img alt=""
                                                src="{{ asset('assets/frontend-assets/images/single-page/3_thumb.jpg') }}">
                                        </li>
                                        <li><img alt=""
                                                src="{{ asset('assets/frontend-assets/images/single-page/4_thumb.jpg') }}">
                                        </li>
                                        <li><img alt=""
                                                src="{{ asset('assets/frontend-assets/images/single-page/5_thumb.jpg') }}">
                                        </li>
                                        <li><img alt=""
                                                src="{{ asset('assets/frontend-assets/images/single-page/6_thumb.jpg') }}">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-12 ">
                            <div class="row border ">
                                <div class="col-md-6 col-xs-12 col-sm-12 border-end">
                                    <a href="#" data-target="#selectCar" data-toggle="modal">
                                        <div class="d-flex justify-content-between align-items-center p-2">
                                            <div>
                                                <small>Varient</small>
                                                <div class="fw-bold fs-4 text-black">Select Varient</div>
                                            </div>
                                            <div>
                                                <i class="bi bi-chevron-compact-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-12 ">
                                    <a href="#" data-target="#selectLocation" data-toggle="modal">
                                        <div class="d-flex justify-content-between align-items-center p-2">
                                            <div>
                                                <small>City</small>
                                                <div class="fw-bold fs-4 text-black">City Name</div>
                                            </div>
                                            <div>
                                                <i class="bi bi-chevron-compact-right"></i>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-12 col-xs-12 col-sm-12 p-4 ">
                                    <div class="fs-1 fw-bold text-dark">
                                        Rs. 16.62 - 29.92 Lakh
                                        <span><a class="text-danger fs-5"> View Price Breakup</a></span>
                                    </div>
                                    <div>
                                        On-Road Price, Panvel
                                    </div>
                                    <div class="my-3 p-3 rounded-3 shadow-sm d-flex justify-content-between"
                                        style="background-color: #F9F9F9">
                                        <div>
                                            EMI Rs. 26,488
                                            <i class="bi bi-info-circle" data-bs-toggle="tooltip" data-bs-html="true"
                                                data-bs-title="<span class='text-start'>EMI Calculated basis <br />
                                                Down Payment - Rs. 2,06,853,<br />
                                                Interest Rate - 10% p.a.,<br />
                                                Tenure - 5 Years.<br />
                                                For exact EMI quotes please get in touch Authorized Dealer<br />
                                                Fill in your details and get best loan deals visit Carz Choice Car Loan page    </span>">
                                            </i>
                                            <span class="ms-2">For 5 Years</span>
                                            <div>
                                                <a href="#" data-target="#share-ad" data-toggle="modal">EMI
                                                    Calculator</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-outline btn-danger btn-sm rounded-3"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">
                                                Get EMI Offers
                                            </a>
                                        </div>

                                    </div>
                                    <div>
                                        <i class="bi bi-clock"></i> Waiting Period: 7-14 Weeks
                                    </div>
                                    <div class="mt-5">
                                        <a href="#" class="btn btn-danger btn-block rounded-3"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                                            aria-controls="offcanvasWithBothOptions">Get Offer</a>
                                    </div>
                                    <div class="mt-5">

                                        <div class="d-flex justify-content-between p-3 shadow-sm rounded-3">
                                            <a class="text-secondary text-center" title="Scorpio N Colour Images"
                                                href="">
                                                <svg class="" style="width: 15%;" viewBox="0 0 16 16"
                                                    fill="currentcolor" tabindex="-1" focusable="false"
                                                    aria-hidden="true" role="img">
                                                    <path
                                                        d="M8.08 15.9a6.76 6.76 0 01-2.3-.4 4.65 4.65 0 01-2.54-2.06A3.76 3.76 0 013 10.58 4.16 4.16 0 015 8.5c.54-.33.86-.54.85-.77a.79.79 0 00-.58-.65c-.12 0-.34.39-.49.66a2.62 2.62 0 01-1.52 1.51 2.51 2.51 0 01-2.52-1C-.12 7 0 5.34 1.19 3.52A7 7 0 014.8.69a8.27 8.27 0 016.33.09 8.14 8.14 0 014.39 5.06 8.23 8.23 0 01-1 6.5 7.92 7.92 0 01-3.58 3 7.91 7.91 0 01-2.86.56zM5.31 6.08a1.75 1.75 0 011.58 1.63c0 .81-.66 1.23-1.33 1.64A3.32 3.32 0 004 10.92 2.84 2.84 0 004.13 13a3.69 3.69 0 002 1.57 6.48 6.48 0 004.48-.15 7 7 0 003.12-2.61 7.22 7.22 0 00.84-5.68 7.12 7.12 0 00-3.84-4.43 7.32 7.32 0 00-5.56-.07A6 6 0 002.07 4c-.57.9-1.34 2.49-.51 3.66A1.55 1.55 0 003 8.28c.42-.1.67-.55.94-1s.64-1.16 1.34-1.17zm0 .5zm3.6 6.74a2.05 2.05 0 112-2.05 2.05 2.05 0 01-2.01 2.05zm0-3.1a1 1 0 101 1 1 1 0 00-1.01-1zM12 10a2 2 0 112-2 2 2 0 01-2 2zm0-3.09a1 1 0 101 1.05 1 1 0 00-1-1.07zM8.9 5.69a2 2 0 112-2.05 2.05 2.05 0 01-2 2.05zm0-3.09a1 1 0 101 1 1 1 0 00-1-1z">
                                                    </path>
                                                </svg>
                                                <span class="">Colours</span>
                                            </a>
                                            <a class="text-secondary text-center" title="Scorpio N Images"
                                                href="#">
                                                <svg class="" style="width: 15%;" viewBox="0 0 16 16"
                                                    fill="currentcolor" tabindex="-1" focusable="false"
                                                    aria-hidden="true" role="img">
                                                    <path
                                                        d="M13 15.5H3A2.48 2.48 0 01.5 13V3A2.48 2.48 0 013 .5h10A2.48 2.48 0 0115.5 3v10a2.48 2.48 0 01-2.5 2.5zM3 1.5A1.47 1.47 0 001.5 3v10A1.47 1.47 0 003 14.5h10a1.47 1.47 0 001.5-1.5V3A1.47 1.47 0 0013 1.5zm9.08 11.87H4a1 1 0 01-.81-.43 1 1 0 01-.1-.92L4.29 9a1 1 0 01.81-.61 1 1 0 01.9.46l1.06 1.62L9 5a1 1 0 01.95-.65 1 1 0 01.91.69l2.16 7a1 1 0 01-.14.87 1 1 0 01-.83.46zm-6.87-4L4 12.4h8l-2.15-7L8 10.81a1 1 0 01-.8.64 1 1 0 01-.96-.45zM3.7 8.33a.52.52 0 01-.39-.19 3.19 3.19 0 01.52-4.47 3.25 3.25 0 014.55.47.5.5 0 11-.78.62 2.23 2.23 0 00-3.14-.31 2.18 2.18 0 00-.37 3.06.51.51 0 01-.09.71.54.54 0 01-.3.11z">
                                                    </path>
                                                </svg>
                                                <span class="">Images</span>
                                            </a>
                                            <a href="#" class="text-secondary text-center" title="">
                                                <svg class="" style="width: 15%;" viewBox="0 0 16 16"
                                                    fill="currentcolor" tabindex="-1" focusable="false"
                                                    aria-hidden="true" role="img">
                                                    <path
                                                        d="M7.67 6.1l-.18.22a1.73 1.73 0 01.32-.11 1.5 1.5 0 01.37 0 1.82 1.82 0 01.56.09 1.33 1.33 0 01.47.29 1.48 1.48 0 01.46 1.13 1.69 1.69 0 01-.49 1.21 1.85 1.85 0 01-1.3.49 1.72 1.72 0 01-1.27-.49 1.74 1.74 0 01-.47-1.28 2.2 2.2 0 01.14-.74 16.9 16.9 0 011.66-2.4.44.44 0 01.18-.14.64.64 0 01.28-.06h.77zm.2 2.58a1.22 1.22 0 00.38-.07 1 1 0 00.49-.49 1.16 1.16 0 00.07-.37.94.94 0 00-.26-.69.79.79 0 00-.29-.18 1.07 1.07 0 00-.75 0 .84.84 0 00-.51.49 1.2 1.2 0 000 .75.77.77 0 00.46.49.94.94 0 00.41.07zm5.92-1.88a4.36 4.36 0 01-.14 1.2 1.89 1.89 0 01-1 1.28 1.88 1.88 0 01-1.47 0 1.89 1.89 0 01-1-1.28 5 5 0 010-2.3 1.84 1.84 0 011-1.28 1.77 1.77 0 011.47 0 1.87 1.87 0 011 1.28 4.25 4.25 0 01.14 1.1zm-.89 0a3.82 3.82 0 00-.09-.91 1.18 1.18 0 00-.52-.89.83.83 0 00-.72 0 1.23 1.23 0 00-.52.88 5.56 5.56 0 000 1.82 1.16 1.16 0 00.52.87.76.76 0 00.72 0 1.24 1.24 0 00.52-.87 3.82 3.82 0 00.09-.9zM7 14.86a.61.61 0 01-.32-.08.63.63 0 01-.31-.54v-2.42a.63.63 0 01.31-.54.64.64 0 01.63 0l2.11 1.21a.63.63 0 010 1.08l-2.1 1.21a.6.6 0 01-.32.08zm.27-2.56v1.46L8.56 13zm1.7 1zm-3.39.26C2.11 13.2 0 12 0 10.33a2 2 0 01.82-1.54.45.45 0 01.63.06.46.46 0 01-.06.64 1.13 1.13 0 00-.52.84c0 .89 1.49 2 4.77 2.3a.45.45 0 01.4.49.45.45 0 01-.45.41zm4.82-.06a.45.45 0 01-.05-.9c3.19-.37 4.65-1.4 4.65-2.27a1.23 1.23 0 00-.56-.87.48.48 0 01-.09-.65.44.44 0 01.61-.1 2 2 0 01.92 1.59c0 1.6-2 2.78-5.42 3.14zm3.32-9.2a1.2 1.2 0 111.2-1.2 1.2 1.2 0 01-1.19 1.17zm0-1.5a.3.3 0 00-.3.3.29.29 0 00.3.3.3.3 0 00.3-.3.31.31 0 00-.29-.33zm-11 3c.16 0 .27 0 .37-.29a1.09 1.09 0 01.33-.43 1 1 0 01.91 0c.42.28.22.91.22.91-.22.56-1 .45-1 .45v.62a1.24 1.24 0 01.88.16c.46.27.23.93.23.93a.85.85 0 01-.82.52A1 1 0 012.85 8c-.09-.17-.37-.11-.37-.11L2 8a2 2 0 00.6 1 2.11 2.11 0 002.3 0 1.46 1.46 0 00.59-1.21 1.21 1.21 0 00-.9-1.18 1.1 1.1 0 00.81-1.07 1.37 1.37 0 00-1.51-1.33 1.71 1.71 0 00-1.76 1.47 4 4 0 00.56.09z">
                                                    </path>
                                                </svg>
                                                <span class="">View</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Middle Content Area -->
                <div class="col-md-8 col-xs-12 col-sm-12 p-0">
                    <!-- Single Ad -->
                    <div class="singlepage-detail ">

                        <!-- Heading Area -->
                        <div class="heading-panel">
                            <h3 class="main-title text-left">
                                5 Things to Know About Scorpio N
                            </h3>
                        </div>
                        <div class="row">

                            <div class=" comapare-slider container owl-carousel owl-theme">
                                <div class="item">
                                    <div class="grid-style-2">
                                        <!-- Listing Ad Grid -->
                                        <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                            <div class="category-grid-box-1">
                                                <div class="image">
                                                    <img alt="Carz Choice"
                                                        src="https://imgd.aeplcdn.com/310x174/n/cw/ec/40432/scorpio-n-exterior-left-rear-three-quarter-3.jpeg?isig=0&q=80&q=80"
                                                        class="img-responsive">
                                                    <div class="ribbon popular"></div>
                                                </div>
                                                <div class="short-description-1 clearfix">
                                                    <a title="" href="#">
                                                        <p class="fs-5">
                                                            The Mahindra Scorpio N is slightly tall for igress or
                                                            egress.
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
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
                                                        src="https://imgd.aeplcdn.com/310x174/n/cw/ec/40432/scorpio-n-exterior-front-view-2.jpeg?isig=0&q=80&q=80"
                                                        class="img-responsive">
                                                    <div class="ribbon popular"></div>
                                                </div>
                                                <div class="short-description-1 clearfix">
                                                    <a title="" href="#">
                                                        <p class="fs-5">
                                                            The ride quality is quite flat and absorbent.
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
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
                                                        src="https://imgd.aeplcdn.com/310x174/n/cw/ec/40432/scorpio-n-interior-bootspace-rear-seat-folded.jpeg?isig=0&q=80"
                                                        class="img-responsive">
                                                    <div class="ribbon popular"></div>
                                                </div>
                                                <div class="short-description-1 clearfix">
                                                    <a title="" href="#">
                                                        <p class="fs-5">
                                                            Fold the second and third rows for up to 786 litres of boot
                                                            space.
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
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
                                                        src="https://imgd.aeplcdn.com/310x174/n/cw/ec/40432/scorpio-n-interior-second-row-seats-2.jpeg?isig=0&q=80"
                                                        class="img-responsive">
                                                    <div class="ribbon popular"></div>
                                                </div>
                                                <div class="short-description-1 clearfix">
                                                    <a title="" href="#">
                                                        <p class="fs-5">
                                                            The third-row seats hardly have any knee room and are best
                                                            for children.
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content-box-grid">
                            <!-- Heading Area -->
                            <div class="short-features">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        Mahindra Scorpio N Price
                                    </h3>
                                </div>
                                <p>
                                    Mahindra Scorpio N price for the base model starts at Rs. 16.62 Lakh and the top
                                    model price goes upto Rs. 29.92 Lakh (on-road Navi Mumbai). Scorpio N price for 34
                                    variants is listed below.
                                </p>
                                <div>
                                    <i class="bi bi-funnel"></i> Filter By Fuel type & Transmission
                                </div>
                                <div>
                                    {{-- filters --}}
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
                                    {{-- table --}}
                                    <table class="table table-light border rounded-3 table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-muted">Variants</th>
                                                <th scope="col" class="text-muted">On-Road Price</th>
                                                <th scope="col" class="text-end text-muted">Compare</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        Scorpio N Z2 Petrol MT 7 STR
                                                    </div>
                                                    <div class="text-muted fs-4">
                                                        1997 cc, Petrol, Manual, 200 bhp
                                                    </div>
                                                </td>
                                                <td class="fw-bold">Rs. 16.62 Lakh</td>
                                                <td>
                                                    <div class="form-check form-check-reverse">
                                                        <label class="form-check-label" for="flexCheckDefault1">
                                                            Add to compare
                                                        </label>
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault1">
                                                    </div>
                                                    <div class="text-end">
                                                        <span>
                                                            <a href="#" class="text-danger fs-5">
                                                                View Price Breakup
                                                            </a>
                                                        </span> |
                                                        <span>
                                                            <a href="#" class="text-danger fs-5"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasWithBothOptions"
                                                                aria-controls="offcanvasWithBothOptions">
                                                                Get Offers
                                                            </a>
                                                        </span>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        Scorpio N Z2 Petrol MT 7 STR
                                                    </div>
                                                    <div class="text-muted fs-4">
                                                        1997 cc, Petrol, Manual, 200 bhp
                                                    </div>
                                                </td>
                                                <td class="fw-bold">Rs. 16.62 Lakh</td>
                                                <td>
                                                    <div class="form-check form-check-reverse">
                                                        <label class="form-check-label" for="flexCheckDefault2">
                                                            Add to compare
                                                        </label>
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault2">
                                                    </div>
                                                    <div class="text-end">
                                                        <span>
                                                            <a href="#" class="text-danger fs-5">
                                                                View Price Breakup
                                                            </a>
                                                        </span> |
                                                        <span>
                                                            <a href="#" class="text-danger fs-5"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasWithBothOptions"
                                                                aria-controls="offcanvasWithBothOptions">
                                                                Get Offers
                                                            </a>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div>
                                                        Scorpio N Z2 Petrol MT 7 STR
                                                    </div>
                                                    <div class="text-muted fs-4">
                                                        1997 cc, Petrol, Manual, 200 bhp
                                                    </div>
                                                </td>
                                                <td class="fw-bold">Rs. 16.62 Lakh</td>
                                                <td>
                                                    <div class="form-check form-check-reverse">
                                                        <label class="form-check-label" for="flexCheckDefault3">
                                                            Add to compare
                                                        </label>
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault3">
                                                    </div>
                                                    <div class="text-end">
                                                        <span>
                                                            <a href="#" class="text-danger fs-5">
                                                                View Price
                                                                Breakup
                                                            </a>
                                                        </span> |
                                                        <span>
                                                            <a href="#" class="text-danger fs-5"
                                                                data-bs-toggle="offcanvas"
                                                                data-bs-target="#offcanvasWithBothOptions"
                                                                aria-controls="offcanvasWithBothOptions">
                                                                Get
                                                                Offers
                                                            </a>
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="float-end">
                                        <a href="#" class="btn btn-outline btn-danger btn-sm rounded-3"
                                            data-bs-toggle="offcanvas" data-bs-target="#compareOffcanvas"
                                            aria-controls="offcanvasBottom">
                                            Compare Cars
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Price Alert -->
                        <div class="alert-box-container margin-top-30">
                            <div class="d-flex justify-content-between well align-items-center rounded-3">
                                <div>
                                    <h3>Contact Mahindra</h3>
                                    <p>Get in touch for the best buying option from your authorized dealer</p>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-12">
                                    <a class="btn btn-theme btn-block rounded-3 " data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasWithBothOptions"
                                        aria-controls="offcanvasWithBothOptions">Get Assistance</a>
                                </div>
                            </div>
                        </div>


                        <div class="well alert-box-container margin-top-20">
                            <h3>Mahindra Scorpio N Car Specifications</h3>
                            <table class="table table-light border rounded-3 table-hover">

                                <tbody>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                focusable="false" aria-hidden="true" role="img">
                                                <path
                                                    d="M13.25 16H3.5a1 1 0 01-1-1v-2.12H3a.75.75 0 000-1.5h-.5V1a1 1 0 011-1h9.75a1 1 0 011 1v10.38h-.5a.75.75 0 000 1.5h.5V15a1 1 0 01-1 1zM3.5 13.8V15h9.75v-1.2a1.75 1.75 0 010-3.35V1H3.5v9.45a1.75 1.75 0 010 3.35zm8.27-1.42h-.68v-.75h.68zm-1.68 0h-1v-.75h1zm-2 0h-1v-.75h1zm-2 0h-1v-.75h1zm3.67-2.76a.39.39 0 000-.53l-2.62-2.6h1a.77.77 0 00.76-.77V5h1.5a.37.37 0 00.37-.37.38.38 0 00-.37-.38H8.88v-.61h1.5a.38.38 0 000-.75H6.25a.38.38 0 000 .75h1.88v.6H6.25a.37.37 0 00-.37.38.36.36 0 00.37.38h1.87v.73H6.4A.44.44 0 006 6a.49.49 0 000 .42l3.22 3.2a.38.38 0 00.26.11.4.4 0 00.28-.11z">

                                                </path>
                                            </svg>
                                            Price
                                        </td>
                                        <th>Rs. 16.62 Lakh onwards</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                focusable="false" aria-hidden="true" role="img">
                                                <path
                                                    d="M11.86 12.56H4.59a.75.75 0 01-.68-.42l-.31-.62H2.51a.76.76 0 01-.76-.76V9h-.49v1.25a.55.55 0 01-.5.52c-.45 0-.5-.52-.5-.52V6.61a.5.5 0 01.5-.5.5.5 0 01.5.5V8h.49V6.09a.76.76 0 01.76-.76h.28v-.28a.76.76 0 01.76-.76h2.08V3.12H3.55V3c-.49-.07-.5-.19-.5-.41a.5.5 0 01.48-.51h5.22a.5.5 0 01.5.5.51.51 0 01-.5.5H6.63v1.21h2.12a.76.76 0 01.76.76v.28h1.31a.74.74 0 01.66.38l.82 1.44h.86V6.09a.76.76 0 01.76-.76H15a.76.76 0 01.76.76v5.19A.76.76 0 0115 12h-1.08a.76.76 0 01-.76-.76v-1.02h-.54v1.58a.76.76 0 01-.76.76zm-7.12-1h6.88V9.72a.51.51 0 01.5-.5h1.54a.5.5 0 01.5.5V11h.58V6.33h-.58v1.32a.5.5 0 01-.5.5H12a.51.51 0 01-.43-.26l-.89-1.56H9a.5.5 0 01-.5-.5v-.54H3.79v.54a.5.5 0 01-.5.5h-.54v4.19h1.16a.51.51 0 01.45.28zM3.57 3z">
                                                </path>
                                            </svg>
                                            Engine
                                        </td>
                                        <th>1997 cc & 2184 cc</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                focusable="false" aria-hidden="true" role="img">
                                                <path
                                                    d="M8 16l-.23-.11a10.78 10.78 0 01-5.88-9.61v-4.6L8 .05l6.12 1.63v4.6a10.78 10.78 0 01-5.89 9.58zM2.89 2.45v3.83A9.76 9.76 0 008 14.85a9.76 9.76 0 005.12-8.57V2.45L8 1.09zm3.22 8.17a.8.8 0 01-.79-.93L5.61 8 4.38 6.78a.8.8 0 01.44-1.36l1.71-.25.76-1.55a.83.83 0 011.44 0l.76 1.55 1.71.25a.8.8 0 01.44 1.36L10.41 8l.29 1.7a.8.8 0 01-1.16.84L8 9.73l-1.53.8a.78.78 0 01-.36.09zm1.75-1zm.3 0zm-2.8-3.3l1.07 1a.7.7 0 01.2.6l-.25 1.54 1.31-.69a.66.66 0 01.64 0l1.32.69L9.39 8a.7.7 0 01.2-.6l1.07-1-1.48-.27a.68.68 0 01-.51-.37L8 4.43l-.65 1.33a.66.66 0 01-.51.37zm1.1-1zm1.37-1.26z">
                                                </path>
                                            </svg>
                                            Safety
                                        </td>
                                        <th> 5 Star (Global NCAP)</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                focusable="false" aria-hidden="true" role="img">
                                                <path
                                                    d="M13.88 8.21h-.27a1 1 0 01-1-1V4.59l.5 1.09v1.5a.53.53 0 00.53.53h.28zM10.68 7H4.59a.26.26 0 01-.26-.26V2.82a1.3 1.3 0 011.3-1.3h4a1.3 1.3 0 011.3 1.3v3.94a.26.26 0 01-.25.24zm-5.85-.5h5.61V2.82a.8.8 0 00-.8-.8h-4a.8.8 0 00-.8.8zm7.62 9.42h-10a1.22 1.22 0 010-2.44h.26V2.09a2 2 0 012-2h5.64a2 2 0 012 2v.07l2.29 5a.58.58 0 010 .18v4.23a.88.88 0 11-1.75 0v-.89a.45.45 0 00-.45-.44h-.13v3.25a1.22 1.22 0 010 2.44zm-10-1.59a.37.37 0 100 .74h10a.37.37 0 100-.74h-10zm1.11-.84h8V2.09A1.16 1.16 0 0010.39.93H4.75a1.16 1.16 0 00-1.16 1.16zm8.85-4.09h.13a1.3 1.3 0 011.3 1.29v.89l.05-4.14-1.48-3.24z">
                                                </path>
                                            </svg>
                                            Fuel Type
                                        </td>
                                        <th> Petrol & Diesel</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                focusable="false" aria-hidden="true" role="img">
                                                <path
                                                    d="M8.17 15.91a1.72 1.72 0 01-.5-3.36v-4H2.22v4a1.72 1.72 0 11-1 0V3.46A1.74 1.74 0 010 1.81a1.72 1.72 0 112.22 1.65v4.13h5.45V3.46a1.74 1.74 0 01-1.22-1.65 1.73 1.73 0 013.45 0 1.74 1.74 0 01-1.23 1.65v4.13h4.91a.2.2 0 00.2-.2V3.46a1.72 1.72 0 111 0v3.93a1.2 1.2 0 01-1.2 1.2H8.67v4a1.72 1.72 0 01-.5 3.36zm0-2.44a.72.72 0 10.73.72.72.72 0 00-.73-.72zm-6.45 0a.72.72 0 10.72.72.72.72 0 00-.72-.72zM14.28 1.09a.72.72 0 10.72.72.72.72 0 00-.72-.72zm-6.11 0a.72.72 0 10.73.72.72.72 0 00-.73-.72zm-6.45 0a.72.72 0 10.72.72.72.72 0 00-.72-.72z">
                                                </path>
                                            </svg>
                                            Transmission
                                        </td>
                                        <th>Manual & Automatic</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1"
                                                focusable="false" aria-hidden="true" role="img">
                                                <path
                                                    d="M8.88 14.53a23.14 23.14 0 01-4.11-.46c-.73-.12-1.48-.49-2-2.34a28.16 28.16 0 01-1.3-6.48.49.49 0 01.45-.54.51.51 0 01.54.46 27.92 27.92 0 001.22 6.21c.47 1.62.94 1.62 1.26 1.71a18.47 18.47 0 005.4.37.5.5 0 11.1 1 14.56 14.56 0 01-1.56.07zm5.62 1.09a1.41 1.41 0 00.39-1.19v-.54c-.07-1.79-.12-3-1.85-3.7a9 9 0 00-2.81-.54A4.53 4.53 0 018 9.13c-.8-.61-1-1.27-1.32-2.6l-.27-1a1.45 1.45 0 00-1-1.08 2.2 2.2 0 10-.8.08 1.45 1.45 0 00-.61.66c-.39.76-.34 3.25 1.13 5.49a3.28 3.28 0 001.07 1.11 7.93 7.93 0 003.84.75 9.55 9.55 0 011.26.07c.78.13.93.73 1.06 1.7.1.64.21 1.45 1 1.56a2.05 2.05 0 00.37 0 1.16 1.16 0 00.77-.25zM5.13 5.39c.09 0 .21.13.28.39.11.36.19.7.27 1 .37 1.4.61 2.33 1.69 3.15a5.14 5.14 0 002.75.71 8.08 8.08 0 012.5.47c1.1.46 1.17 1 1.24 2.82v.55a.67.67 0 01-.06.4h-.31a2.8 2.8 0 01-.17-.74c-.12-.85-.32-2.28-1.89-2.54a9 9 0 00-1.41-.09 7 7 0 01-3.39-.64 2.3 2.3 0 01-.75-.77 6.11 6.11 0 01-1.04-4.46c.09-.17.2-.25.28-.25zM6 2.31A1.21 1.21 0 114.79 1.1 1.21 1.21 0 016 2.31z">
                                                </path>
                                            </svg>
                                            Seating Capacity
                                        </td>
                                        <th> 6 & 7 Seater</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                        <!-- Collapsible content -->
                        <div class="well alert-box-container margin-top-20">
                            <h3>Mahindra Scorpio N Key Features</h3>
                            <ul class="">
                                <li>LED projector headlamps</li>
                                <li>Electric sunroof</li>
                                <li>Push Start/Stop button</li>
                                <li>Front and rear camera</li>
                                <li>Digital driver display</li>
                            </ul>

                            <ul class="collapse" id="featureList">

                                <li>Touchscreen infotainment</li>
                                <li>Cooled glove box</li>
                                <li>Dual-zone climate control</li>
                                <li>Built-in Alexa</li>
                                <li>Wireless charging</li>
                                <li>Power OVRMs</li>
                                <li>Auto headlamps</li>
                                <li>Auto wipers</li>
                                <li>6-way driver power adjustable seat</li>
                                <li>Leather wrapped steering and gear lever</li>
                                <li>Power steering with tilt function</li>
                                <li>USB Charge C port</li>
                                <li>Leatherette interior</li>
                                <li>Cruise control</li>
                                <li>18-inch diamond cut alloy wheels</li>
                                <li>LED DRLs</li>
                                <li>Steering mounted controls</li>
                                <li>Sony 12-speakers with sub-woofer</li>
                            </ul>
                            <span class="pull-right">
                                <a data-toggle="collapse" data-target="#featureList" aria-expanded="false"
                                    aria-controls="featureList"> Read More</a>
                            </span>
                        </div>

                        <!-- Collapsible content -->
                        <div class="well alert-box-container margin-top-20">
                            <h3>Mahindra Scorpio N Summary</h3>
                            <div>
                                <h5 class="fw-bold text-dark">Price </h5>
                                <p>
                                    Mahindra Scorpio N price ranges between Rs. 16.62 Lakh - Rs. 29.92 Lakh depending on
                                    the variant selected.
                                </p>
                            </div>
                            <div class="collapse" id="Summary">
                                <h4>When was the Scorpio N launched? </h4>
                                <p>
                                    When was the Scorpio N launched?

                                    Mahindra launched the BS6 Phase 2-compliant Scorpio N in India on 14 April, 2023.

                                    What variants does it get?

                                    Mahindra offers the Scorpio N in various variants, namely Z2, Z4, Z6, Z8 and Z8L.

                                    What features are available in the Scorpio N?

                                    The Scorpio N's nose features a signature chrome grille that splits the LED
                                    projector headlamps apart. Then, there are C-shaped LED DRLs and fog lights. Other
                                    highlights include new dual-tone alloy wheels, vertically stacked LED taillamps, and
                                    an integrated spoiler. Inside, the Scorpio N features a new touchscreen infotainment
                                    system and a Sony music player with AdrenoX-connected car technology. Other
                                    equipment includes an electric sunroof, dual-zone climate control, and different
                                    drive modes. Besides, customers can choose from six- and seven-seat configurations
                                    with captain seats in the second row.

                                    What are the engine, performance, and specifications of the Scorpio N?

                                    Engine duties in this SUV are carried out by either a 2.0-litre mStallion
                                    turbo-petrol engine producing 200bhp and 370Nm of torque or the 2.0-litre mHawk
                                    diesel motor. The latter is offered in two power outputs, 130bhp/300Nm and
                                    172bhp/370Nm. Both can be had with a six-speed manual or automatic transmission.
                                    However, the 4x4 system called 4Xplor is exclusive to some diesel versions.

                                    Is the Scorpio N a safe car?

                                    The Global NCAP has awarded the Mahindra Scorpio N a five-star rating.

                                    What are the rivals to the Scorpio N?

                                    The Scorpio N competes with the Hyundai Creta, Kia Seltos, MG Astor, Skoda Kushaq,
                                    and the Volkswagen Taigun.

                                    Last updated on 24 June, 2024.
                                </p>
                            </div>

                            <span class="pull-right">
                                <a data-toggle="collapse" data-target="#Summary" aria-expanded="false"
                                    aria-controls="Summary1"> Read More</a>
                            </span>
                        </div>

                        <!-- Collapsible content -->
                        <div class="well alert-box-container margin-top-20 p-5">
                            <h3>How is the Mahindra Scorpio N car?</h3>
                            <div class="row mt-3 px-3">
                                <div class="col-md-5 shadow-sm  p-3 me-3 rounded-3" style="background-color: #f3f3f3">
                                    <h5 class="fw-bold text-dark">
                                        <i class="bi bi-hand-thumbs-up text-success fs-3"></i>
                                        Pros
                                    </h5>
                                    <ul class="text-dark">
                                        <li>Ride quality remains relatively flat overall.</li>
                                        <li>Impressive quick and smooth automatic gearbox.</li>
                                        <li>Tall upright seating, space-saving slim layered dashboard.</li>
                                        <li>Exceptional pulling power/effortless overall performance.</li>
                                        <li>Unbeatable road presence, ruggedness, and rich heritage.</li>
                                    </ul>
                                </div>
                                <div class="col-md-5 shadow-sm p-3 rounded-3" style="background-color: #f3f3f3">
                                    <h5 class="fw-bold text-dark">
                                        <i class="bi bi-hand-thumbs-down text-warning fs-3"></i>
                                        Cons
                                    </h5>
                                    <ul class="text-dark">
                                        <li>Cramped third-row seating (good for children).</li>
                                        <li>Lacks some essential features.</li>
                                        <li>Top-end models are costly.</li>
                                    </ul>
                                </div>

                            </div>

                            <h3 class="mt-5">Mahindra Scorpio N 2024 Verdict</h3>
                            <p>
                                If you are looking for a tough ladder-frame SUV which is easy to drive in the city and
                                at the same time, can take on bad roads with ease, the Scorpio-N is certainly a good
                                choice.
                            </p>
                            <h3 class="mt-5">Mahindra Scorpio N 2024 Verdict</h3>
                            <p>
                                The Mahindra Scorpio (N) is also available with a petrol engine.
                            </p>
                            <ul class="accordion">
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#">
                                            What is it?
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <p>
                                            It is yet another version of the new Mahindra Scorpio N that we have driven
                                            and tested. The engine in question is the TGDi mStallion which can be had
                                            with a six-speed manual or a six-speed torque converter automatic. It's the
                                            latter that we are driving here. The 2.0-litre four-cylinder has an output
                                            of 200bhp at 5,000rpm and a torque supply of 380Nm accessible from 1,750rpm.
                                            After the diesel automatic, we have sampled this powertrain extensively as
                                            well. Here’s what we found out.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title"><a href="#">What’s new inside and what's on the
                                            feature list?</a></h3>
                                    <div class="accordion-content">
                                        <p>
                                            On the surface, there’s no difference between the Scorpio N oil burner and
                                            this petrol counterpart. You sit tall and towering over the other road
                                            users, thanks to its commanding position. There’s a large and meaty steering
                                            placed over the characteristic upright dashboard. The steering wheel is
                                            taken from the XUV700 but the large floating panel which integrates the
                                            instrument cluster and infotainment screen in the XUV is given a miss here.
                                            Instead, you get the old-school circular dials with a digital screen stacked
                                            in the middle. We love the large and supportive seats of the new Scorpio N,
                                            especially for the front passengers. They offer the right amount of support
                                            and electric adjustment, plus have an added level of leeway which will
                                            surely add to the comfort for long-distance touring. Ergonomically, the
                                            front row also scores well, thanks to the large armrest, cascading centre
                                            console with easy reach to the buttons, and a good sense of space and
                                            visibility all around. On the flip side, the buttons and knobs could have
                                            done better with a tactile feel to them. Mahindra has surely worked towards
                                            improving the quality of the cabin and it shows. There are soft-touch
                                            materials used all around and even the plastic looks more premium rather
                                            than sturdy and utilitarian. The use of dark brown and black combination in
                                            the cabin makes it look much more affluent as well, especially when compared
                                            to the older Scorpio. Add to it the piano black inserts and brushed metal
                                            garnishes and it looks like a good place to be in.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title"><a href="#">What’s it like to drive?</a></h3>
                                    <div class="accordion-content">
                                        <p>
                                            If the diesel-powered Scorpio N felt silent, vibration-free, and refined,
                                            this mStallion-powered one is many notches higher. There’s barely any
                                            indication that the engine is idling inside the cabin. Get going and there’s
                                            a good surge in power delivery right from the word go. In terms of numbers,
                                            the petrol engine is just 20Nm shy of what you get from the diesel. So, this
                                            petrol engine has no troubles whatsoever while propelling the 2-tonne
                                            ladder-on-frame SUV. It never feels underpowered and can maintain highway
                                            speeds as easily as it can plod around in city traffic.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title"><a href="#">How does it compare and what’s the
                                            price?</a></h3>
                                    <div class="accordion-content">
                                        <p>
                                            For an SUV its size, diesel is the preferred fuel thanks to its
                                            freight-train-like torque delivery. It also adds a bit of a rugged feel and
                                            since big cars do more cross country, the diesel engine is always reasonable
                                            on your pocket. So, the Scorpio with its not-so-frugal petrol engine isn’t
                                            for everyone. But those who want the Scorpio for its size (read road
                                            presence) and cabin space, and won’t be doing many miles outside the city,
                                            can surely look at the petrol powertrain. Moreover, there’s a surge in
                                            petrol-powered SUVs in the market of late as diesel has become as expensive
                                            as petrol in the recent past. Feature-wise, there aren’t any differences
                                            between the oil burner and this, except you don’t get drive modes here. But
                                            the petrol-powered N is around Rs1 lakh cheaper than the diesel. So, if you
                                            have a yearly usage of fewer than 15,000 kilometres, this petrol-powered
                                            Scorpio N would make more sense.
                                        </p>
                                    </div>
                                </li>


                            </ul>



                        </div>





                    </div>

                    <!-- =-=-=-=-=-=-= Compare section =-=-=-=-=-=-= -->

                    <div class="grid-panel margin-top-30">
                        <div class="heading-panel">
                            <div class="col-xs-12 col-md-12 col-sm-12">
                                <h3 class="main-title text-left">
                                    Compare Scorpio N with Similar Cars
                                </h3>
                            </div>
                            <div class="col-xs-12 col-md-12 col-sm-12">
                                <table class="table table-striped compare-table">
                                    <tbody class="compare-body">
                                        {{-- <tr class="compare-tablerow"></tr> --}}
                                        <tr class="imagebox">
                                            <td class="stickydivision">
                                                <div>
                                                    <div class="">
                                                        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/40432/scorpio-n-exterior-right-front-three-quarter-75.jpeg?isig=0&q=80"
                                                            alt="scorpio-n">
                                                    </div>
                                                    <div class="text-center">
                                                        Mahindra Scorpio N
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="comparedivision">
                                                <div>
                                                    <div class="">
                                                        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/42355/xuv700-exterior-right-front-three-quarter-3.jpeg?isig=0&q=80"
                                                            alt="scorpio-n">
                                                    </div>
                                                    <div>
                                                        Mahindra XUV700
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="comparedivision">
                                                <div>
                                                    <div class="">
                                                        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/128413/scorpio-exterior-right-front-three-quarter-47.jpeg?isig=0&q=80"
                                                            alt="scorpio-n">
                                                    </div>
                                                    <div>
                                                        Mahindra Scorpio
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="comparedivision">
                                                <div>
                                                    <div class="">
                                                        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/138895/safari-facelift-exterior-right-front-three-quarter-39.jpeg?isig=0&q=80"
                                                            alt="scorpio-n">
                                                    </div>
                                                    <div>
                                                        Tata Safari
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="comparedivision">
                                                <div>
                                                    <div class="">
                                                        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/139139/harrier-facelift-exterior-right-front-three-quarter-5.jpeg?isig=0&q=80"
                                                            alt="scorpio-n">
                                                    </div>
                                                    <div>
                                                        Tata Harrier
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div class="text-muted">
                                                    On-Road Price, Navi Mumbai
                                                </div>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Engine (cc)
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    1997 to 2184
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Fuel Type
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Petrol & Diesel
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Transmission
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Manual & Automatic
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Safety
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    5 Star (Global NCAP)
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Power (bhp)
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    130 to 200 
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Compare
                                                </div>

                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Mahindra Scorpio N
                                                </div>

                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>






                    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
                    <div class="grid-panel margin-top-30">
                        <div class="heading-panel">
                            <div class="col-xs-12 col-md-12 col-sm-12">
                                <h3 class="main-title text-left">
                                    Related Ads
                                </h3>
                            </div>
                        </div>
                        <!-- Ads Archive -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="posts-masonry">
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <img class="img-responsive"
                                                    src="{{ asset('assets/frontend-assets/images/posting/10.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$387,000</div>
                                            <!-- Title -->
                                            <h3>2014 Honda Accord VTi-S Auto</h3>
                                            <!-- Category -->
                                            <div class="category-title"> <span><a href="#">Car &amp;
                                                        Bikes</a></span> </div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s1.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s1.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s1.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s1.jpg') }}"
                                                            alt=""></a></li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"> <a class="btn save-ad"><i
                                                            class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                        class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a> </div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <img class="img-responsive"
                                                    src="{{ asset('assets/frontend-assets/images/posting/14.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$190,000</div>
                                            <!-- Title -->
                                            <h3>Bugatti Veyron Super Sport </h3>
                                            <!-- Category -->
                                            <div class="category-title"> <span><a href="#">Car &amp;
                                                        Bikes</a></span> </div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s2.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s1.jpg') }}"
                                                            alt=""></a></li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"> <a class="btn save-ad"><i
                                                            class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                        class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a> </div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <img class="img-responsive"
                                                    src="{{ asset('assets/frontend-assets/images/posting/6.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$130,000</div>
                                            <!-- Title -->
                                            <h3>2016 McLaren 570S Coupe </h3>
                                            <!-- Category -->
                                            <div class="category-title"> <span><a href="#">Car &amp;
                                                        Bikes</a></span> </div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s3.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s2.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s1.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s4.jpg') }}"
                                                            alt=""></a></li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"> <a class="btn save-ad"><i
                                                            class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                        class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a> </div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <img class="img-responsive"
                                                    src="{{ asset('assets/frontend-assets/images/posting/2.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$77,000</div>
                                            <!-- Title -->
                                            <h3>Porsche 911 Carrera 2017 </h3>
                                            <!-- Category -->
                                            <div class="category-title"> <span><a href="#">Car &amp;
                                                        Bikes</a></span> </div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s1.jpg') }}"
                                                            alt=""></a></li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"> <a class="btn save-ad"><i
                                                            class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                        class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a> </div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                                <div class="ads-list-archive">
                                    <!-- Image Block -->
                                    <div class="col-lg-5 col-md-5 col-sm-5 no-padding">
                                        <!-- Img Block -->
                                        <div class="ad-archive-img">
                                            <a href="#">
                                                <img class="img-responsive"
                                                    src="{{ asset('assets/frontend-assets/images/posting/13.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <!-- Img Block -->
                                    </div>
                                    <!-- Ads Listing -->
                                    <div class="clearfix visible-xs-block"></div>
                                    <!-- Content Block -->
                                    <div class="col-lg-7 col-md-7 col-sm-7 no-padding">
                                        <!-- Ad Desc -->
                                        <div class="ad-archive-desc">
                                            <!-- Price -->
                                            <div class="ad-price">$45,000</div>
                                            <!-- Title -->
                                            <h3>2017 Audi A4 quattro Premium </h3>
                                            <!-- Category -->
                                            <div class="category-title"> <span><a href="#">Car &amp;
                                                        Bikes</a></span> </div>
                                            <!-- Short Description -->
                                            <div class="clearfix visible-xs-block"></div>
                                            <p class="hidden-sm">Lorem ipsum dolor sit amet, quem convenire interesset
                                                ut vix, maiestatis inciderint no, eos in elit dicat.....</p>
                                            <!-- Ad Features -->
                                            <ul class="add_info">
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s4.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s2.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s1.jpg') }}"
                                                            alt=""></a></li>
                                                <li><a href="#"><img
                                                            src="{{ asset('assets/frontend-assets/images/blog/s3.jpg') }}"
                                                            alt=""></a></li>
                                            </ul>
                                            <!-- Ad History -->
                                            <div class="clearfix archive-history">
                                                <div class="last-updated">Last Updated: 1 day ago</div>
                                                <div class="ad-meta"> <a class="btn save-ad"><i
                                                            class="fa fa-heart-o"></i> Save Ad.</a> <a
                                                        class="btn btn-success"><i class="fa fa-phone"></i> View
                                                        Details.</a> </div>
                                            </div>
                                        </div>
                                        <!-- Ad Desc End -->
                                    </div>
                                    <!-- Content Block End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- =-=-=-=-=-=-= Latest Ads End =-=-=-=-=-=-= -->





                </div>



                <!-- Right Sidebar -->
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <!-- Sidebar Widgets -->
                    <div class="sidebar">
                        <!-- Price info block -->
                        <div class="category-list-icon">
                            <i class="green flaticon-mail-1"></i>
                            <div class="category-list-title">
                                <h5><a href="#" data-toggle="modal" data-target=".price-quote">Contact Seller
                                        Via Email</a></h5>
                            </div>
                        </div>
                        <div class="category-list-icon">
                            <i class="purple flaticon-smartphone"></i>
                            <div class="category-list-title">
                                <h5><a href="javascript:void(0)" class="number"
                                        data-last="111111X">0320<span>XXXXXXX</span></a></h5>
                            </div>
                        </div>


                        <!-- User Info -->
                        <div class="white-bg user-contact-info">
                            <div class="user-info-card">
                                <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                    <img class="img-circle"
                                        src="{{ asset('assets/frontend-assets/images/users/3.jpg') }}"
                                        alt="">
                                </div>
                                <div class="user-information  col-md-8 col-sm-9 col-xs-8">
                                    <span class="user-name"><a class="hover-color" href="profile.html">Sonu
                                            Monu</a></span>
                                    <div class="item-date">
                                        <span class="ad-pub">Published on: 10 Dec 2017</span><br>
                                        <a href="#" class="link">More Ads</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div id="itemMap"></div>

                        <!-- Recent Ads -->
                        <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Recent Ads</a></h4>
                            </div>
                            <div class="widget-content recent-ads">
                                <!-- Ads -->
                                <div class="recent-ads-list">
                                    <div class="recent-ads-container">
                                        <div class="recent-ads-list-image">
                                            <a href="#" class="recent-ads-list-image-inner">
                                                <img src="{{ asset('assets/frontend-assets/images/posting/thumb-1.jpg') }}"
                                                    alt="">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="#">2010 Audi A5 Auto Premium quattro MY10</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="#">New York</a>,</li>
                                                <li><a href="#">Brooklyn</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                $ 17,000
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
                                                <img src="{{ asset('assets/frontend-assets/images/posting/thumb-2.jpg') }}"
                                                    alt="">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="#">Honda Civic 2017 Sports Edition With Turbo</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="#">New York</a>,</li>
                                                <li><a href="#">Brooklyn</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                $ 66,000
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
                                                <img src="{{ asset('assets/frontend-assets/images/posting/thumb-3.jpg') }}"
                                                    alt="">
                                            </a><!-- /.recent-ads-list-image-inner -->
                                        </div>
                                        <!-- /.recent-ads-list-image -->
                                        <div class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                <a href="#">Ford Mustang EcoBoost Premium Convertible</a>
                                            </h3>
                                            <ul class="recent-ads-list-location">
                                                <li><a href="#">New York</a>,</li>
                                                <li><a href="#">Brooklyn</a></li>
                                            </ul>
                                            <div class="recent-ads-list-price">
                                                $ 37,000
                                            </div>
                                            <!-- /.recent-ads-list-price -->
                                        </div>
                                        <!-- /.recent-ads-list-content -->
                                    </div>
                                    <!-- /.recent-ads-container -->
                                </div>

                            </div>
                        </div>
                        <!--  Financing calculator  -->
                        <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Financing Calculator</a></h4>
                            </div>
                            <div class="widget-content ">
                                <div class="finance-calculator">
                                    <form>
                                        <ul>
                                            <li>
                                                <label>Vehicle price</label>
                                                <select>
                                                    <option>$30,000</option>
                                                    <option>$35,000</option>
                                                    <option>$45,000</option>
                                                    <option>$55,000</option>
                                                </select>
                                            </li>
                                            <li>
                                                <label>Interest rate</label>
                                                <select>
                                                    <option>30%</option>
                                                    <option>35%</option>
                                                    <option>45%</option>
                                                    <option>55%</option>
                                                </select>
                                            </li>
                                            <li>
                                                <label>Period (month</label>
                                                <span class="price-slider-value"><span id="month-min"></span>
                                                    Months</span>
                                                <div id="month-slider"></div>
                                            </li>
                                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="auto-field">
                                                    <label>Down Payment</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="$326,500">
                                                </div>
                                            </li>
                                            <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="auto-field">
                                                    <input class="btn btn-theme btn-sm margin-bottom-20"
                                                        type="submit" value="Calculate">
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Saftey Tips  -->
                        <div class="widget">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Safety tips for deal</a></h4>
                            </div>
                            <div class="widget-content saftey">
                                <ol>
                                    <li>Use a safe location to meet seller</li>
                                    <li>Avoid cash transactions</li>
                                    <li>Beware of unrealistic offers</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Widgets End -->
                </div>
                <!-- Middle Content Area  End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->

</div>
<!-- Main Content Area End -->


<!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
<div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                        class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Email for Price</h3>
            </div>
            <div class="modal-body">
                <div class="recent-ads">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="images/single-page/4_thumb.jpg" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                                </h3>
                                <ul class="recent-ads-list-location">
                                    <li><a href="#">New York</a>,</li>
                                    <li><a href="#">Brooklyn</a></li>
                                </ul>
                                <div class="recent-ads-list-price">
                                    $ 17,000
                                </div>
                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>
                </div>
                <!-- content goes here -->
                <form>
                    <div class="form-group  col-md-6  col-sm-6">
                        <label>Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group  col-md-6  col-sm-6">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group  col-md-12  col-sm-12">
                        <label>Contact No</label>
                        <input type="text" class="form-control" placeholder="Contact No">
                    </div>
                    <div class="form-group  col-md-12  col-sm-12">
                        <label>Comments</label>
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3"
                            class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                    </div>
                    <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt=""
                            class="img-responsive"> </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
<div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                        class="sr-only">Close</span></button>
                <h3 class="modal-title">Share</h3>
            </div>
            <div class="modal-body">
                <div class="recent-ads">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-image">
                                <a href="#" class="recent-ads-list-image-inner">
                                    <img src="images/single-page/4_thumb.jpg" alt="">
                                </a><!-- /.recent-ads-list-image-inner -->
                            </div>
                            <!-- /.recent-ads-list-image -->
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                                </h3>
                                <ul class="recent-ads-list-location">
                                    <li><a href="#">New York</a>,</li>
                                    <li><a href="#">Brooklyn</a></li>
                                </ul>
                                <div class="recent-ads-list-price">
                                    $ 17,000
                                </div>
                                <!-- /.recent-ads-list-price -->
                            </div>
                            <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                    </div>
                </div>
                <h3>Key Features</h3>
                <p>Alarm, Alloy Wheels, Anti-Lock Brakes, Automatic Air Conditioning, Bluetooth Interface Telephone
                    Equipment, Body Coloured Bumpers, Centre Console, Centre Rear Seat Belt, Cloth interior, Cruise
                    Control, Driver Information System</p>
                <h3>Link</h3>
                <p><a
                        href="https://themeforest.net/user/scriptsbundle/portfolio">https://themeforest.net/user/scriptsbundle/portfolio</a>
                </p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-fb btn-md"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-twitter btn-md"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-gplus btn-md"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
<div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                        class="sr-only">Close</span></button>
                <h3 class="modal-title">Why are you reporting this ad?</h3>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form>
                    <div class="skin-minimal">
                        <div class="form-group col-md-6 col-sm-6">
                            <ul class="list">
                                <li>
                                    <input type="radio" id="spam" name="minimal-radio">
                                    <label for="spam">Spam</label>
                                </li>
                                <li>
                                    <input type="radio" id="duplicated" name="minimal-radio">
                                    <label for="duplicated">Duplicated</label>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group  col-md-6 col-sm-6">
                            <ul class="list">
                                <li>
                                    <input type="radio" id="offensive" name="minimal-radio">
                                    <label for="offensive">Offensive</label>
                                </li>
                                <li>
                                    <input type="radio" id="expired" name="minimal-radio" checked>
                                    <label for="expired">Expired</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group  col-md-12 col-sm-12">
                        <label>Comments</label>
                        <textarea placeholder="This ad not belong to me" rows="3" class="form-control">This ad not belong to me</textarea>
                    </div>
                    <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt=""
                            class="img-responsive"> </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- get offer offcanvas --}}

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-bold fs-4" id="offcanvasWithBothOptionsLabel">Mahindra Scorpio N</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>Provide your contact details for Test Drive, EMI options, Offers & Exchange Benefits</p>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Contact Number</label>
            <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="Enter Mobile Number">
            <div class="form-text" id="basic-addon4">Your details are safe with us and we only ask this once</div>
            <button class="btn btn-theme btn-lg btn-block">Register</button>
        </div>

    </div>
</div>


{{-- emi calc modal --}}
<div class="modal fade share-ad" id="share-ad" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Car EMI Calculator</h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <div class="modal-body emi-calc">
                <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                    <div id="ecww-widget"
                        style="position:relative;padding-top:0;padding-bottom:0px;height:0;overflow:hidden;">
                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>


{{-- car variant --}}

<div class="modal fade" id="selectCar" aria-hidden="true" aria-labelledby="selectedCarlabel" tabindex="-1">
    <div class="modal-dialog  ">
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
                            class="btn btn-theme btn-block">Select Brand</button>
                    </div> --}}
                </form>
            </div>
            {{-- <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button type="button" data-bs-target="#selectBrand" data-bs-toggle="modal"
                        class="btn btn-theme btn-block rounded-3">Go Back</button>
                </div>
            </div> --}}
        </div>
    </div>
</div>


{{-- car selectLocation --}}

<div class="modal fade selectLocation" id="selectLocation" aria-hidden="true" aria-labelledby="selectBrandlabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
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

                        <input type="text" id="carLocation" class="form-control"
                            placeholder="Enter Your Name">
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h6 class="pb-3 text-center">Popular Cities</h6>

                            <div class="row flex-wrap justify-content-center">
                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" data-bs-location="Mumbai"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">
                                        <img src="https://imgd.aeplcdn.com/0x0/n/ergk3sa_1483598.jpg"
                                            alt="Mumbai">
                                        <div class="fs-6 text-muted">Mumbai</div>
                                    </a>
                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" data-bs-location="Bangalore"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/k88k3sa_1483601.jpg"
                                            alt="Bangalore">
                                        <div class="fs-6 text-muted">Bangalore</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" data-bs-location="Delhi"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/1jnk3sa_1483607.jpg"
                                            alt="Delhi">
                                        <div class="fs-6 text-muted">Delhi</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" data-bs-location="Pune"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/53hk3sa_1483599.jpg"
                                            alt="Pune">
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

                                        <img src="https://imgd.aeplcdn.com/0x0/n/sj7k3sa_1483605.jpg"
                                            alt="Hyderabad">
                                        <div class="fs-6 text-muted">Hyderabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" data-bs-location="Ahmedabad" data-bs-target="#selectCity"
                                        data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/z2fk3sa_1483597.jpg"
                                            alt="Ahmedabad">
                                        <div class="fs-6 text-muted">Ahmedabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" data-bs-location="Chennai" data-bs-target="#selectCity"
                                        data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/zhlk3sa_1483604.jpg"
                                            alt="Chennai">
                                        <div class="fs-6 text-muted">Chennai</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" data-bs-location="Kolkata" data-bs-target="#selectCity"
                                        data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/9omk3sa_1483606.jpg"
                                            alt="Kolkata">
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


<div class="offcanvas offcanvas-bottom" tabindex="-1" id="compareOffcanvas"
    aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header ">
        <div class="d-grid justify-content-center w-100 border-bottom pb-3">
            <h5 class="offcanvas-title fw-bold" id="offcanvasBottomLabel">Compare Cars</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0">
        <div class="container">
            <div class="row d-flex " style="overflow: auto; flex-wrap: nowrap">

                <div class="col-md-2 col-xs-6 col-sm-6 px-2">
                    <span class="vs-compare">VS</span>

                    <div class="category-grid-box-1">
                        <button type="button" class="btn-close compare-close"></button>
                        <div class="image">
                            <img alt="Carz Choice"
                                src="https://imgd.aeplcdn.com/272x153/n/cw/ec/40432/scorpio-n-exterior-right-front-three-quarter-75.jpeg?isig=0&q=80"
                                class="img-responsive">
                            <div class="ribbon popular"></div>
                        </div>
                        <div class="short-description-1 clearfix">

                            <a title="" href="#">
                                <h3 class="fs-5">
                                    Mahindra XUV 3XO
                                </h3>
                            </a>
                            <div class="category-title">
                                <span><a href="#">Z2 Petrol MT 7 STR</a></span>
                            </div>
                            <div class="ad-price fs-5">Rs. 110,000
                                <span class="text-muted ps-2">onwards</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6 col-sm-6 px-2">
                    <span class="vs-compare">VS</span>
                    <div class="category-grid-box-1">
                        <button type="button" class="btn-close compare-close"></button>

                        <div class="image">
                            <img alt="Carz Choice"
                                src="https://imgd.aeplcdn.com/272x153/n/cw/ec/40432/scorpio-n-exterior-right-front-three-quarter-75.jpeg?isig=0&q=80"
                                class="img-responsive">
                            <div class="ribbon popular"></div>
                        </div>
                        <div class="short-description-1 clearfix">

                            <a title="" href="#">
                                <h3 class="fs-5">
                                    Mahindra XUV 3XO
                                </h3>
                            </a>
                            <div class="category-title">
                                <span><a href="#">Z2 Petrol MT 7 STR</a></span>
                            </div>
                            <div class="ad-price fs-5">Rs. 110,000
                                <span class="text-muted ps-2">onwards</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6 col-sm-6 px-2">
                    <span class="vs-compare">VS</span>

                    <div class="category-grid-box-1">
                        <button type="button" class="btn-close compare-close"></button>

                        <div class="image">
                            <img alt="Carz Choice"
                                src="https://imgd.aeplcdn.com/272x153/n/cw/ec/40432/scorpio-n-exterior-right-front-three-quarter-75.jpeg?isig=0&q=80"
                                class="img-responsive">
                            <div class="ribbon popular"></div>
                        </div>
                        <div class="short-description-1 clearfix">

                            <a title="" href="#">
                                <h3 class="fs-5">
                                    Mahindra XUV 3XO
                                </h3>
                            </a>
                            <div class="category-title">
                                <span><a href="#">Z2 Petrol MT 7 STR</a></span>
                            </div>
                            <div class="ad-price fs-5">Rs. 110,000
                                <span class="text-muted ps-2">onwards</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6 col-sm-6 px-2">
                    <div class="category-grid-box-1">
                        <button type="button" class="btn-close compare-close"></button>

                        <div class="image">
                            <img alt="Carz Choice"
                                src="https://imgd.aeplcdn.com/272x153/n/cw/ec/40432/scorpio-n-exterior-right-front-three-quarter-75.jpeg?isig=0&q=80"
                                class="img-responsive">
                            <div class="ribbon popular"></div>
                        </div>
                        <div class="short-description-1 clearfix">

                            <a title="" href="#">
                                <h3 class="fs-5">
                                    Mahindra XUV 3XO
                                </h3>
                            </a>
                            <div class="category-title">
                                <span><a href="#">Z2 Petrol MT 7 STR</a></span>
                            </div>
                            <div class="ad-price fs-5">Rs. 110,000
                                <span class="text-muted ps-2">onwards</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-sm-12 px-2 text-center my-auto">
                    <a href="/compare">
                        <button class="btn btn-theme btn-block rounded-3">Compare</button>
                    </a>

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

<!-- EMI Calculator Widget START -->

<script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script>

<!-- For This Page Only -->
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZSlJlfrrEUkTRY-6Vn0LmV-gRy8LwT6E&amp;sensor=false"></script>

<script type="text/javascript">
    (function($) {
        "use strict";
        /* ======= Show Number ======= */
        $('.number').click(function() {
            $(this).find('span').text($(this).data('last'));
        });

        /* ======= Ad Location ======= */
        var map = "";
        var latlng = new google.maps.LatLng(47.550259, -122.264847);
        var myOptions = {
            zoom: 13,
            center: latlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            size: new google.maps.Size(480, 240)
        }
        map = new google.maps.Map(document.getElementById("itemMap"), myOptions);
        var marker = new google.maps.Marker({
            map: map,
            position: latlng
        });
    })(jQuery);
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    });
</script>



@endsection
