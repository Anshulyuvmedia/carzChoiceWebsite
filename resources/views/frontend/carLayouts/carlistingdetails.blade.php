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
                            <h1 class="fw-bolder text-black fs-1">{{ $cardetails->carname }}</h1>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="border border-1 rounded-3 fs-5 p-2 text-black">
                            <span class="text-bg-success p-2 rounded-3">
                                <i class="bi bi-star-fill"></i>
                            </span>
                            <span class="text-success mx-2">3.8</span> Expert Rating |<span
                                class="text-success mx-2">4.7</span> User Rating (698)
                            <span class="text-success mx-2">3.8</span> Expert Rating |<span
                                class="text-success mx-2">4.7</span> User Rating (698)
                            <a href="#">
                                <span class="text-success ms-3">Rate & Win</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 col-sm-8 mt-3">
                        {!! $cardetails->summary !!}
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
                    <div class="row my-3 border rounded-4">

                        <div class="col-md-6 col-xs-12 col-sm-12 p-3">
                            <div class="singlepage-detail rounded-4">
                                <div id="single-slider" class="flexslider p-2 mb-0 pb-0">
                                    <ul class="slides">
                                        @foreach ($cardetails['images'] as $row)
                                        <li>
                                            <a href="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                data-fancybox="gallery">
                                                <img alt=""
                                                    src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}" /></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div id="carousel" class="flexslider p-2 mb-0">
                                    <ul class="slides">
                                        @foreach ($cardetails['images'] as $row)
                                        <li>
                                            <img alt=""
                                                src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}">
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-12 ">
                            <div class="row p-3 ">
                                <div class="col-md-6 col-xs-12 col-sm-12 border rounded-start-4 bg-white">
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
                                <div class="col-md-6 col-xs-12 col-sm-12 border rounded-end-4 bg-white">
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
                                        Rs. {{ $cardetails->price }} Lakh
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
                                                data-bs-title='EMI Calculated basis <br />
                                                                Down Payment - Rs. 2,06,853,<br />
                                                                Interest Rate - 10% p.a.,<br />
                                                                Tenure - 5 Years.<br />
                                                                For exact EMI quotes please get in touch Authorized Dealer<br />
                                                                Fill in your details and get best loan deals visit Carz Choice Car Loan page'>
                                            </i>

                                            <span class="ms-2">For 5 Years</span>
                                            <div>
                                                <a href="#" data-target="#share-ad" data-toggle="modal">
                                                    EMI Calculator
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-theme rounded-4 btn-sm rounded-3"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions2"
                                                aria-controls="offcanvasWithBothOptions2">
                                                Get EMI Offers
                                            </a>
                                        </div>

                                    </div>
                                    <div>
                                        <i class="bi bi-clock"></i> Waiting Period: 7-14 Weeks
                                    </div>
                                    <div class="mt-5">
                                        <a href="#" class="btn btn-theme btn-block rounded-3" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasWithBothOptions3"
                                            aria-controls="offcanvasWithBothOptions3">Get Offer</a>
                                    </div>
                                    <div class="mt-5">

                                        <div class="d-flex justify-content-between p-3 shadow-sm rounded-3">
                                            <a class="text-secondary text-center"
                                                href="/car-view-images/{{ $cardetails->carname }}?type=Colours">

                                                <svg class="" style="width: 15%;" viewBox="0 0 16 16"
                                                    fill="currentcolor" tabindex="-1" focusable="false"
                                                    aria-hidden="true" role="img">
                                                    <path
                                                        d="M8.08 15.9a6.76 6.76 0 01-2.3-.4 4.65 4.65 0 01-2.54-2.06A3.76 3.76 0 013 10.58 4.16 4.16 0 015 8.5c.54-.33.86-.54.85-.77a.79.79 0 00-.58-.65c-.12 0-.34.39-.49.66a2.62 2.62 0 01-1.52 1.51 2.51 2.51 0 01-2.52-1C-.12 7 0 5.34 1.19 3.52A7 7 0 014.8.69a8.27 8.27 0 016.33.09 8.14 8.14 0 014.39 5.06 8.23 8.23 0 01-1 6.5 7.92 7.92 0 01-3.58 3 7.91 7.91 0 01-2.86.56zM5.31 6.08a1.75 1.75 0 011.58 1.63c0 .81-.66 1.23-1.33 1.64A3.32 3.32 0 004 10.92 2.84 2.84 0 004.13 13a3.69 3.69 0 002 1.57 6.48 6.48 0 004.48-.15 7 7 0 003.12-2.61 7.22 7.22 0 00.84-5.68 7.12 7.12 0 00-3.84-4.43 7.32 7.32 0 00-5.56-.07A6 6 0 002.07 4c-.57.9-1.34 2.49-.51 3.66A1.55 1.55 0 003 8.28c.42-.1.67-.55.94-1s.64-1.16 1.34-1.17zm0 .5zm3.6 6.74a2.05 2.05 0 112-2.05 2.05 2.05 0 01-2.01 2.05zm0-3.1a1 1 0 101 1 1 1 0 00-1.01-1zM12 10a2 2 0 112-2 2 2 0 01-2 2zm0-3.09a1 1 0 101 1.05 1 1 0 00-1-1.07zM8.9 5.69a2 2 0 112-2.05 2.05 2.05 0 01-2 2.05zm0-3.09a1 1 0 101 1 1 1 0 00-1-1z">
                                                    </path>
                                                </svg>
                                                <span class="">Colours</span>
                                            </a>

                                            <a class="text-secondary text-center"
                                                href="/car-view-images/{{ $cardetails->carname }}?type=All">
                                                <svg class="" style="width: 15%;" viewBox="0 0 16 16"
                                                    fill="currentcolor" tabindex="-1" focusable="false"
                                                    aria-hidden="true" role="img">
                                                    <path
                                                        d="M13 15.5H3A2.48 2.48 0 01.5 13V3A2.48 2.48 0 013 .5h10A2.48 2.48 0 0115.5 3v10a2.48 2.48 0 01-2.5 2.5zM3 1.5A1.47 1.47 0 001.5 3v10A1.47 1.47 0 003 14.5h10a1.47 1.47 0 001.5-1.5V3A1.47 1.47 0 0013 1.5zm9.08 11.87H4a1 1 0 01-.81-.43 1 1 0 01-.1-.92L4.29 9a1 1 0 01.81-.61 1 1 0 01.9.46l1.06 1.62L9 5a1 1 0 01.95-.65 1 1 0 01.91.69l2.16 7a1 1 0 01-.14.87 1 1 0 01-.83.46zm-6.87-4L4 12.4h8l-2.15-7L8 10.81a1 1 0 01-.8.64 1 1 0 01-.96-.45zM3.7 8.33a.52.52 0 01-.39-.19 3.19 3.19 0 01.52-4.47 3.25 3.25 0 014.55.47.5.5 0 11-.78.62 2.23 2.23 0 00-3.14-.31 2.18 2.18 0 00-.37 3.06.51.51 0 01-.09.71.54.54 0 01-.3.11z">
                                                    </path>
                                                </svg>
                                                <span class="">Images</span>
                                            </a>
                                            <a href="#" id="copy-link" class="text-secondary text-center"
                                                title="Copy to Clipboard">
                                                <svg class="" style="width: 15%;" viewBox="0 0 24 24"
                                                    fill="currentColor" tabindex="-1" focusable="false"
                                                    aria-hidden="true" role="img">
                                                    <path
                                                        d="M18 16.08V13a5.01 5.01 0 00-1.27-3.5l4.37-4.37a1 1 0 00-1.41-1.41l-4.37 4.37A5.01 5.01 0 0013 5v3.08a4.992 4.992 0 00-2 .46V4a1 1 0 00-1-1H4a1 1 0 00-1 1v9a1 1 0 001 1h6.58a4.992 4.992 0 002 .46v3.08a5.01 5.01 0 00-3.5 1.27l-4.37-4.37a1 1 0 00-1.41 1.41l4.37 4.37A5.01 5.01 0 0011 21v-3.08a4.992 4.992 0 002-.46V20a1 1 0 001 1h9a1 1 0 001-1v-6.58a4.992 4.992 0 00.46-2zm-4.46 2.94V20H7v-1.58a5.002 5.002 0 001.47-1.47H14.54zM6 13V4h6v9H6zm9-6a3 3 0 110-6 3 3 0 010 6zm0 12a3 3 0 110-6 3 3 0 010 6z" />
                                                </svg>
                                                <span id="copy-feedback">Copy to Share</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Middle Content Area -->
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <!-- Single Ad -->
                    <div class="singlepage-detail ">
                        <div class="content-box-grid rounded-4">
                            <!-- Heading Area -->
                            <div class="short-features">
                                <!-- Heading Area -->
                                <div class="heading-panel">
                                    <h3 class="main-title text-left">
                                        {{ $cardetails->brandname }} {{ $cardetails->carname }} N Price
                                    </h3>
                                </div>
                                {!! $cardetails->summary !!}
                                <div>
                                    <i class="bi bi-funnel"></i> Filter By Fuel type & Transmission
                                </div>
                                <div>
                                    <div class="d-flex pb-3" style=" overflow-x: auto;">
                                        <div class="me-3">
                                            <input type="checkbox" class="btn-check " id="btn-check-1-outlined"
                                                autocomplete="off" value="Petrol">
                                            <label class="btn btn-outline-success border rounded-3"
                                                for="btn-check-1-outlined">Petrol</label>

                                        </div>
                                        <div class="me-3">
                                            <input type="checkbox" class="btn-check " id="btn-check-2-outlined"
                                                autocomplete="off" value="CNG">
                                            <label class="btn btn-outline-success border rounded-3"
                                                for="btn-check-2-outlined">CNG</label>

                                        </div>
                                        <div class="me-3">
                                            <input type="checkbox" class="btn-check " id="btn-check-3-outlined"
                                                autocomplete="off" value="Manual">
                                            <label class="btn btn-outline-success border rounded-3"
                                                for="btn-check-3-outlined">Manual</label>

                                        </div>
                                        <div class="me-3">
                                            <input type="checkbox" class="btn-check " id="btn-check-4-outlined"
                                                autocomplete="off" value="Automatic">
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
                                        <tbody id="table-body">
                                            @foreach ($cardetails['variants'] as $rowqqqq)
                                            <tr>
                                                <input type="hidden" name="" id="CarrName"
                                                    value="{{ $rowqqqq->carname }}">
                                                <td>
                                                    <div>
                                                        {{ $rowqqqq->carname }}, ({{ $rowqqqq->carmodalname }})
                                                    </div>
                                                    <div class="text-muted fs-4">
                                                        {{ $rowqqqq->engine }} cc,
                                                        {{ implode(', ', json_decode($rowqqqq->fueltype)) }}
                                                    </div>
                                                </td>
                                                <td class="fw-bold">Rs. {{ $rowqqqq->price }} Lakh</td>
                                                <td>
                                                    <div class="form-check form-check-reverse">
                                                        <label class="form-check-label" for="flexCheckDefault1">
                                                            Add to compare
                                                        </label>
                                                        <input class="form-check-input comparecheck" type="checkbox"
                                                            value='{{ json_encode($rowqqqq) }}' id=""
                                                            data-value='@json($rowqqqq)'>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="float-end">
                                        <a href="#" class="btn btn-theme rounded-4 btn-sm rounded-3"
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
                            <div class="d-flex justify-content-between well align-items-center rounded-4">
                                <div>
                                    <h3>Contact Mahindra</h3>
                                    <p>Get in touch for the best buying option from your authorized dealer</p>
                                </div>
                                <div class="col-md-3 col-xs-12 col-sm-12">
                                    <a class="btn btn-theme rounded-4 btn-block rounded-3 " data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasWithBothOptions"
                                        aria-controls="offcanvasWithBothOptions">Get Assistance</a>
                                </div>
                            </div>
                        </div>


                        <div class="well alert-box-container margin-top-20">
                            <h3>{{ $cardetails->brandname }} {{ $cardetails->carname }} Car Specifications</h3>
                            <table class="table table-light border rounded-3 table-hover">

                                <tbody>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false"
                                                aria-hidden="true" role="img">
                                                <path
                                                    d="M13.25 16H3.5a1 1 0 01-1-1v-2.12H3a.75.75 0 000-1.5h-.5V1a1 1 0 011-1h9.75a1 1 0 011 1v10.38h-.5a.75.75 0 000 1.5h.5V15a1 1 0 01-1 1zM3.5 13.8V15h9.75v-1.2a1.75 1.75 0 010-3.35V1H3.5v9.45a1.75 1.75 0 010 3.35zm8.27-1.42h-.68v-.75h.68zm-1.68 0h-1v-.75h1zm-2 0h-1v-.75h1zm-2 0h-1v-.75h1zm3.67-2.76a.39.39 0 000-.53l-2.62-2.6h1a.77.77 0 00.76-.77V5h1.5a.37.37 0 00.37-.37.38.38 0 00-.37-.38H8.88v-.61h1.5a.38.38 0 000-.75H6.25a.38.38 0 000 .75h1.88v.6H6.25a.37.37 0 00-.37.38.36.36 0 00.37.38h1.87v.73H6.4A.44.44 0 006 6a.49.49 0 000 .42l3.22 3.2a.38.38 0 00.26.11.4.4 0 00.28-.11z">

                                                </path>
                                            </svg>
                                            Price
                                        </td>
                                        <th>Rs. {{ $cardetails->price }} Lakh onwards</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false"
                                                aria-hidden="true" role="img">
                                                <path
                                                    d="M11.86 12.56H4.59a.75.75 0 01-.68-.42l-.31-.62H2.51a.76.76 0 01-.76-.76V9h-.49v1.25a.55.55 0 01-.5.52c-.45 0-.5-.52-.5-.52V6.61a.5.5 0 01.5-.5.5.5 0 01.5.5V8h.49V6.09a.76.76 0 01.76-.76h.28v-.28a.76.76 0 01.76-.76h2.08V3.12H3.55V3c-.49-.07-.5-.19-.5-.41a.5.5 0 01.48-.51h5.22a.5.5 0 01.5.5.51.51 0 01-.5.5H6.63v1.21h2.12a.76.76 0 01.76.76v.28h1.31a.74.74 0 01.66.38l.82 1.44h.86V6.09a.76.76 0 01.76-.76H15a.76.76 0 01.76.76v5.19A.76.76 0 0115 12h-1.08a.76.76 0 01-.76-.76v-1.02h-.54v1.58a.76.76 0 01-.76.76zm-7.12-1h6.88V9.72a.51.51 0 01.5-.5h1.54a.5.5 0 01.5.5V11h.58V6.33h-.58v1.32a.5.5 0 01-.5.5H12a.51.51 0 01-.43-.26l-.89-1.56H9a.5.5 0 01-.5-.5v-.54H3.79v.54a.5.5 0 01-.5.5h-.54v4.19h1.16a.51.51 0 01.45.28zM3.57 3z">
                                                </path>
                                            </svg>
                                            Engine
                                        </td>
                                        <th>{{ $cardetails->engine }} cc</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false"
                                                aria-hidden="true" role="img">
                                                <path
                                                    d="M13.88 8.21h-.27a1 1 0 01-1-1V4.59l.5 1.09v1.5a.53.53 0 00.53.53h.28zM10.68 7H4.59a.26.26 0 01-.26-.26V2.82a1.3 1.3 0 011.3-1.3h4a1.3 1.3 0 011.3 1.3v3.94a.26.26 0 01-.25.24zm-5.85-.5h5.61V2.82a.8.8 0 00-.8-.8h-4a.8.8 0 00-.8.8zm7.62 9.42h-10a1.22 1.22 0 010-2.44h.26V2.09a2 2 0 012-2h5.64a2 2 0 012 2v.07l2.29 5a.58.58 0 010 .18v4.23a.88.88 0 11-1.75 0v-.89a.45.45 0 00-.45-.44h-.13v3.25a1.22 1.22 0 010 2.44zm-10-1.59a.37.37 0 100 .74h10a.37.37 0 100-.74h-10zm1.11-.84h8V2.09A1.16 1.16 0 0010.39.93H4.75a1.16 1.16 0 00-1.16 1.16zm8.85-4.09h.13a1.3 1.3 0 011.3 1.29v.89l.05-4.14-1.48-3.24z">
                                                </path>
                                            </svg>
                                            Fuel Type
                                        </td>
                                        <th>{{ implode(', ', json_decode($cardetails->fueltype)) }}</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false"
                                                aria-hidden="true" role="img">
                                                <path
                                                    d="M8.17 15.91a1.72 1.72 0 01-.5-3.36v-4H2.22v4a1.72 1.72 0 11-1 0V3.46A1.74 1.74 0 010 1.81a1.72 1.72 0 112.22 1.65v4.13h5.45V3.46a1.74 1.74 0 01-1.22-1.65 1.73 1.73 0 013.45 0 1.74 1.74 0 01-1.23 1.65v4.13h4.91a.2.2 0 00.2-.2V3.46a1.72 1.72 0 111 0v3.93a1.2 1.2 0 01-1.2 1.2H8.67v4a1.72 1.72 0 01-.5 3.36zm0-2.44a.72.72 0 10.73.72.72.72 0 00-.73-.72zm-6.45 0a.72.72 0 10.72.72.72.72 0 00-.72-.72zM14.28 1.09a.72.72 0 10.72.72.72.72 0 00-.72-.72zm-6.11 0a.72.72 0 10.73.72.72.72 0 00-.73-.72zm-6.45 0a.72.72 0 10.72.72.72.72 0 00-.72-.72z">
                                                </path>
                                            </svg>
                                            Transmission
                                        </td>
                                        <th>{{ implode(', ', json_decode($cardetails->transmission)) }}</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm"
                                                viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false"
                                                aria-hidden="true" role="img">
                                                <path
                                                    d="M8.88 14.53a23.14 23.14 0 01-4.11-.46c-.73-.12-1.48-.49-2-2.34a28.16 28.16 0 01-1.3-6.48.49.49 0 01.45-.54.51.51 0 01.54.46 27.92 27.92 0 001.22 6.21c.47 1.62.94 1.62 1.26 1.71a18.47 18.47 0 005.4.37.5.5 0 11.1 1 14.56 14.56 0 01-1.56.07zm5.62 1.09a1.41 1.41 0 00.39-1.19v-.54c-.07-1.79-.12-3-1.85-3.7a9 9 0 00-2.81-.54A4.53 4.53 0 018 9.13c-.8-.61-1-1.27-1.32-2.6l-.27-1a1.45 1.45 0 00-1-1.08 2.2 2.2 0 10-.8.08 1.45 1.45 0 00-.61.66c-.39.76-.34 3.25 1.13 5.49a3.28 3.28 0 001.07 1.11 7.93 7.93 0 003.84.75 9.55 9.55 0 011.26.07c.78.13.93.73 1.06 1.7.1.64.21 1.45 1 1.56a2.05 2.05 0 00.37 0 1.16 1.16 0 00.77-.25zM5.13 5.39c.09 0 .21.13.28.39.11.36.19.7.27 1 .37 1.4.61 2.33 1.69 3.15a5.14 5.14 0 002.75.71 8.08 8.08 0 012.5.47c1.1.46 1.17 1 1.24 2.82v.55a.67.67 0 01-.06.4h-.31a2.8 2.8 0 01-.17-.74c-.12-.85-.32-2.28-1.89-2.54a9 9 0 00-1.41-.09 7 7 0 01-3.39-.64 2.3 2.3 0 01-.75-.77 6.11 6.11 0 01-1.04-4.46c.09-.17.2-.25.28-.25zM6 2.31A1.21 1.21 0 114.79 1.1 1.21 1.21 0 016 2.31z">
                                                </path>
                                            </svg>
                                            Seating Capacity
                                        </td>
                                        <th> {{ $cardetails->seatingcapacity }} Seater</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                        <!-- Collapsible content -->

                        <h3>{{ $cardetails->brandname }} {{ $cardetails->carname }} Key Features</h3>
                        <div class="well alert-box-container margin-top-20">
                            <ul class="accordion">
                                <li>
                                    <h3 class="accordion-title"><a href="#">Features</a></h3>
                                    <div class="accordion-content">
                                        <ul>
                                            @foreach ($cardetails->features as $feature)
                                            @php
                                            $json = json_decode($feature->features);
                                            @endphp

                                            @foreach (array_slice($json[0]->label, 0, count($json[0]->label)) as $index
                                            => $item)
                                            @if ($json[0]->value[$index] == 1)
                                            <li>{{ $item }}</li>
                                            @endif
                                            @endforeach
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title"><a href="#">Specifications</a></h3>
                                    <div class="accordion-content">
                                        <table class="table table-bordered">

                                            @foreach ($cardetails->specificaitons as $index => $specs)
                                            @php
                                            $json = json_decode($specs->specifications);
                                            @endphp
                                            @foreach ($json as $index => $item)
                                            @if ($json[$index]->value != null)
                                            <tr>
                                                <th>{{ $item->label }}</th>
                                                <td>{{ $item->value }}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                            @endforeach
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Collapsible content -->
                        <div class="well alert-box-container margin-top-20">
                            <h3>{{ $cardetails->brandname }} {{ $cardetails->carname }} Summary</h3>
                            <div>
                                <p>
                                    {!! substr($cardetails->summary, 0, 100) !!}...
                                </p>
                            </div>
                            <div class="collapse" id="Summary">
                                <h4>Detailed Summary </h4>
                                <p>
                                    {!! substr($cardetails->summary, 100) !!}
                                </p>
                            </div>

                            <span class="pull-right">
                                <a data-toggle="collapse" data-target="#Summary" aria-expanded="false"
                                    aria-controls="Summary1"> Read More</a>
                            </span>
                        </div>


                        <div class="well alert-box-container pro-cons margin-top-20 p-5">
                            <h3>How is the {{ $cardetails->brandname }} {{ $cardetails->carname }} car?</h3>
                            <div class="row mt-3 px-3">
                                <div class="col-md-5 shadow-sm  p-3 me-3 rounded-3 border">
                                    <h5 class="fw-bold text-dark  fs-3">
                                        <i class="bi bi-hand-thumbs-up text-success fs-1"></i>
                                        Pros
                                    </h5>
                                    <ul class="text-secondary">
                                        @foreach ($pros as $row)
                                        <li>{{ $row }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-md-5 shadow-sm p-3 rounded-3 border">
                                    <h5 class="fw-bold text-dark fs-3">
                                        <i class="bi bi-hand-thumbs-down text-warning fs-1"></i>
                                        Cons
                                    </h5>
                                    <ul class="text-secondary">
                                        @foreach ($cons as $row)
                                        <li>{{ $row }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                            <h3 class="mt-5">{{ $cardetails->brandname }} {{ $cardetails->carname }} Verdict</h3>
                            <p>
                                {{ $cardetails->brandname }} {{ $cardetails->carname }} FAQ's
                            </p>
                            <ul class="accordion">
                                @foreach ($variantsfaqs as $data)
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#">
                                            {{ $data->faqlabel }}
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <p>
                                            {{ $data->faqvalue }}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- =-=-=-=-=-=-= Compare section =-=-=-=-=-=-= -->

                    <div class="grid-panel margin-top-30">
                        <div class="heading-panel">
                            <div class="col-xs-12 col-md-12 col-sm-12">
                                <h3 class="main-title text-left">
                                    Compare {{ $cardetails->brandname }} {{ $cardetails->carname }} with Similar Cars
                                </h3>
                            </div>
                            <div class="col-xs-12 col-md-12 col-sm-12">
                                <table class="table table-striped compare-table table-borderless compare-body">
                                    <tbody class="">
                                        <tr class="compare-tablerow"></tr>
                                        <tr class="imagebox">
                                            <td class="stickydivision">
                                                <div>
                                                    @foreach ($cardetails['images'] as $row)
                                                    <div class="">
                                                        <img src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                            alt="scorpio-n">
                                                    </div>
                                                    @endforeach
                                                    <div class="text-center">
                                                        {{ $cardetails->brandname }} {{ $cardetails->carname }}
                                                    </div>
                                                </div>
                                            </td>
                                            @foreach ($similarcars as $simi)
                                            <td class="comparedivision">
                                                <div>
                                                    <div class="">
                                                        <img src="{{ asset('assets/backend-assets/images/' . $simi->addimage) }}"
                                                            alt="scorpsssio-n">
                                                    </div>
                                                    <div>
                                                        {{ $simi->brandname }} {{ $simi->carname }}
                                                    </div>
                                                </div>
                                            </td>
                                            @endforeach

                                        </tr>
                                        <tr>
                                            <td class="stickydivision" style="background-color: #F2F2F2">
                                                <div class="text-muted fs-5">
                                                    On-Road Price, Navi Mumbai
                                                </div>
                                            </td>
                                            <td class="comparedivision"></td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    Rs. {{ $cardetails->price }} <span
                                                        class="text-muted fs-5">onwards</span>
                                                </div>
                                            </td>
                                            @foreach ($similarcars as $simi)
                                            <td class="comparedivision">
                                                <div>
                                                    Rs. {{ $simi->price }} <span class="text-muted fs-5">onwards</span>
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td class="stickydivision" style="background-color: #F2F2F2">
                                                <div class="text-muted fs-5">
                                                    Engine (cc)
                                                </div>

                                            </td>
                                            <td class="comparedivision"></td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    {{ $cardetails->engine }}
                                                </div>
                                            </td>
                                            @foreach ($similarcars as $simi)
                                            <td class="comparedivision">
                                                <div>
                                                    {{ $simi->engine }}
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td class="stickydivision" style="background-color: #F2F2F2">
                                                <div class="text-muted fs-5">
                                                    Fuel Type
                                                </div>

                                            </td>
                                            <td class="comparedivision"></td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    {{ implode(', ', json_decode($cardetails->fueltype)) }}
                                                </div>

                                            </td>
                                            @foreach ($similarcars as $simi)
                                            <td class="comparedivision">
                                                <div>
                                                    {{ implode(', ', json_decode($simi->fueltype)) }}
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                    <tbody class=" collapse" id="comparetablecollapse">
                                        <tr>
                                            <td class="stickydivision" style="background-color: #F2F2F2">
                                                <div class="text-muted fs-5">
                                                    Transmission
                                                </div>

                                            </td>
                                            <td class="comparedivision"></td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    {{ implode(', ', json_decode($cardetails->transmission)) }}
                                                </div>

                                            </td>
                                            @foreach ($similarcars as $simi)
                                            <td class="comparedivision">
                                                <div>
                                                    {{ implode(', ', json_decode($simi->transmission)) }}
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td class="stickydivision" style="background-color: #F2F2F2">
                                                <div class="text-muted fs-5">
                                                    Seating Capacity
                                                </div>

                                            </td>
                                            <td class="comparedivision"></td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    {{ $cardetails->seatingcapacity }}
                                                </div>

                                            </td>
                                            @foreach ($similarcars as $simi)
                                            <td class="comparedivision">
                                                <div>
                                                    {{ $simi->seatingcapacity }}
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td class="stickydivision" style="background-color: #F2F2F2">
                                                <div class="text-muted fs-5">
                                                    Body Type
                                                </div>

                                            </td>
                                            <td class="comparedivision"></td>

                                        </tr>
                                        <tr>
                                            <td class="stickydivision">
                                                <div>
                                                    {{ $cardetails->bodytype }}
                                                </div>
                                            </td>
                                            @foreach ($similarcars as $simi)
                                            <td class="comparedivision">
                                                <div>
                                                    {{ $simi->bodytype }}
                                                </div>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>

                                </table>
                                <span class="pull-right">
                                    <a data-toggle="collapse" data-target="#comparetablecollapse" aria-expanded="false"
                                        aria-controls="comparetablecollapse"> View More</a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Price Alert -->
                    <div class="alert-box-container margin-top-30">

                        <div class="panel-body recent-ads ">
                            <!-- Ads -->
                            <div class="recent-ads-list  ">
                                <div class="recent-ads-container d-flex align-items-center justify-content-between">
                                    <div>
                                        <span class="recent-ads-list-image">
                                            <a href="#" class="recent-ads-list-image-inner">
                                                <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/download-2.svg"
                                                    alt="">
                                            </a>
                                        </span>
                                        <span class="recent-ads-list-content">
                                            <h3 class="recent-ads-list-title">
                                                Attractive Interest Rates
                                            </h3>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-xs-12 col-sm-12 ">
                                        <a class="btn btn-theme rounded-4 btn-sm rounded-3 pull-left">Download
                                            Brochure</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="well alert-box-container margin-top-20">
                        <h3>{{ $cardetails->carname }} Colours</h3>
                        <p>
                            {{ $cardetails->carname }} is available/sold in the following colours in India.
                        </p>

                        <div class="col-md-12 col-xs-12 col-sm-12 p-0">
                            <div class="singlepage-detail">
                                <div id="single-color-slider" class="flexslider p-2 mb-0 pb-0">
                                    <ul class="slides">
                                        @foreach ($cardetails->images as $image)
                                        @php
                                        // Decode JSON into an associative array
                                        $color = json_decode($image->color, true);
                                        @endphp
                                        <li>
                                            <a href="{{asset('assets/backend-assets/images/' . $image->addimage) }}"
                                                data-fancybox="group">
                                                <img alt="{{ $image->title }}"
                                                    src="{{ asset('assets/backend-assets/images/' . $image->addimage) }}" />
                                            </a>
                                            <p class="flex-caption text-capitalize"> {{ $color['label'] }}</p>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div id="carousel-color" class="flexslider p-2 mb-0">
                                    <ul class="slides">
                                        @foreach ($cardetails->images as $image)
                                        @php
                                        // Decode JSON into an associative array
                                        $color = json_decode($image->color, true);
                                        @endphp
                                        @if (json_last_error() === JSON_ERROR_NONE && isset($color['value']))
                                        <li>
                                            <div class="border shadow-sm m-1 p-2 text-center fw-bold text-dark"
                                                style="background-color: {{ $color['value'] }}">
                                            </div>
                                        </li>
                                        @else
                                        <li>
                                            <div class="border shadow-sm m-1 p-2 text-center fw-bold text-dark">
                                                Invalid color data
                                            </div>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="well alert-box-container margin-top-20">
                        <h3>{{ $cardetails->brandname }} {{ $cardetails->carname }} N Mileage</h3>
                        <p>
                            {{ $cardetails->brandname }} {{ $cardetails->carname }} N mileage claimed by owners is
                            {{ $cardetails->userreportedmilage }} kmpl.
                        </p>
                        <div>
                            <table class="table border rounded-3 table-hover">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col">Powertrain</th>
                                        <th scope="col">User Reported Mileage <i class="bi bi-info-circle"
                                                data-bs-toggle="tooltip" data-bs-html="true"
                                                data-bs-title="<span class='text-start'>Carz Choice collects mileage information from car owners to provide you with the actual mileage that you might get</span>">
                                            </i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $mileages = json_decode($cardetails->mileage, true);
                                    @endphp
                                    @foreach ($mileages as $fuelType => $mileage)
                                    <tr>
                                        <td>{{ $fuelType }} ({{ $cardetails->engine }})cc</td>
                                        <td>{{ $mileage }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- <a href="#" class="">
                                Check Scorpio N Mileage Details
                                <i class="bi bi-chevron-right"></i>
                            </a> --}}
                        </div>
                    </div>
                </div>



                <!-- Right Sidebar -->
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <!-- Sidebar Widgets -->
                    <div class="sidebar">
                        <!-- Price info block -->
                        <div class="p-3 bg-primary rounded-4 ">
                            <div class="bg-light p-3 rounded-4">
                                <h4 class="text-black fw-bold"> {{ $cardetails->brandname }} {{ $cardetails->carname }}
                                    Authorized Dealer</h4>
                                @foreach ($matchingDealers as $dealer)
                                {{-- @php
                                dd($dealer);
                                @endphp --}}
                                <div>
                                    <div class="category-list-icon ">
                                        <i class="bi bi-geo-alt text-black"></i>
                                        <div class="category-list-title">
                                            {{$dealer['dealers']->businessname}}, {{ $dealer['dealers']->state}} -
                                            {{$dealer['dealers']->district}}, {{$dealer['dealers']->pincode}}
                                        </div>
                                    </div>
                                    <div class="category-list-icon ">
                                        <i class="bi bi-telephone text-black"></i>
                                        <div class="category-list-title ">
                                            <a href="tel:7894561233" class="fs-4 text-black">
                                                {{$dealer['dealers']->mobilenumber}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @break
                                @endforeach
                                <div class="border-top pt-3 border-1 fw-light fs-4 text-black lh-sm">
                                    Get in touch with Authorized Mahindra Dealership on call for best buying options
                                    like:
                                    <div class="d-flex flex-wrap fs-5 ">
                                        <div class="col-6 col-md-6 p-2 text-secondary">
                                            Doorstep Demo
                                        </div>
                                        <div class="col-6 col-md-6 p-2 text-secondary">
                                            Offers & Discounts
                                        </div>
                                        <div class="col-6 col-md-6 p-2 text-secondary">
                                            Lowest EMI
                                        </div>
                                        <div class="col-6 col-md-6 p-2 text-secondary">
                                            Exchange Benefits
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <!-- Recent Ads -->
                        <div class="widget my-3">
                            <div class="widget-heading">
                                <h4 class="panel-title"><a>Mahindra XUV 3XO Price in cities near Hyderabad</a></h4>
                            </div>
                            <div class="widget-content ">
                                <table class="table table-hover border rounded-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">City</th>
                                            <th scope="col">On-Road Prices</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row"><a href="#">Khairtabad</a></td>
                                            <td>Rs. 9.02 Lakh onwards</td>

                                        </tr>
                                        <tr>
                                            <td scope="row"><a href="#">Secunderabad</td>
                                            <td>Rs. 9.02 Lakh onwards</td>

                                        </tr>
                                        <tr>
                                            <td scope="row"><a href="#">Trimulgherry</a></td>
                                            <td colspan="2">Rs. 9.02 Lakh onwards</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
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
                                                        </a>
                                                    </div>
                                                    <!-- /.recent-ads-list-image -->
                                                    <div class="recent-ads-list-content">
                                                        <h3 class="recent-ads-list-title">
                                                            <a href="#">Used Cars</a>
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
                    <!-- Sidebar Widgets End -->
                </div>
            </div>
        </div>
    </div>
    </section>

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
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?"
                            rows="3"
                            class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                    </div>
                    <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme rounded-4 btn-block">Submit</button>
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
                        <textarea placeholder="This ad not belong to me" rows="3"
                            class="form-control">This ad not belong to me</textarea>
                    </div>
                    <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme rounded-4 btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- get offer offcanvas --}}

<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions33"
    aria-labelledby="offcanvasWithBothOptionsLabel33">
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
            <button class="btn btn-theme rounded-4 btn-lg btn-block">Register</button>
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
                            class="btn btn-theme rounded-4 btn-block">Select Brand</button>
                    </div> --}}
                </form>
            </div>
            {{-- <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button type="button" data-bs-target="#selectBrand" data-bs-toggle="modal"
                        class="btn btn-theme rounded-4 btn-block rounded-3">Go Back</button>
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


<div class="offcanvas offcanvas-bottom" tabindex="-1" id="compareOffcanvas" aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header ">
        <div class="d-grid justify-content-center w-100 border-bottom pb-3">
            <h5 class="offcanvas-title fw-bold" id="offcanvasBottomLabel">Compare Cars</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body pt-0">
        <form action="{{ route('insertcompareoffcanvas') }}" method="post">
            @csrf
            <div class="container  d-flex">
                <div class="row d-flex " style="overflow: auto; flex-wrap: nowrap" id="comparecard">
                    {{-- Compare card appends here --}}
                </div>
                <div class="col-md-2 col-xs-12 col-sm-12 px-2 text-center my-auto">
                    <a href="#" class="comparebtnclass">
                        <button type="submit" class="btn btn-theme rounded-4 btn-block rounded-3">Compare</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>



<script>
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', () => {
            const backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach(backdrop => backdrop.remove());
        });
    });

    //Copy to Clipboard
    document.getElementById('copy-link').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior

        // Define the URL you want to copy
        var urlToCopy = window.location.href;

        // Create a temporary textarea to use for copying the text
        var textarea = document.createElement('textarea');
        textarea.value = urlToCopy;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);

        // Change text content temporarily
        var feedback = document.getElementById('copy-feedback');
        feedback.textContent = 'Link copied!';
        setTimeout(function() {
            feedback.textContent = 'Copy to Share';
        }, 3000);
    });
</script>

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Retrieve images array from backend
        var images = @json($cardetails['images']);
        console.log('Images Array:', images);

        // Function to find the first image for a specific vehicle
        function getFirstCarImage(vehicleName) {
            var carImages = images.filter(function(image) {
                return image.vehicle === vehicleName;
            });
            return carImages.length > 0 ? carImages[0] : null;
        }

        // Handle checkbox changes for filtering
        $('.btn-check').on('change', function() {
            const carname = document.querySelector('#CarrName').value;
            console.log(carname);

            // Checkboxes values that are checked
            var checkedValues = [];
            $('.btn-check:checked').each(function() {
                checkedValues.push($(this).val());
            });
            console.log('Checked values:', checkedValues);

            // AJAX Request
            $.ajax({
                url: '/filterbyfuelcardetails',
                method: 'POST',
                data: {
                    'checkboxes': checkedValues,
                    'carname': carname,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    $('#table-body').empty();

                    response.forEach(function(item) {
                        // Initialize fuelTypesArray and transmissionsArray as empty arrays
                        var fuelTypesArray = [];
                        var transmissionsArray = [];

                        if (item.fueltype) {
                            try {
                                fuelTypesArray = JSON.parse(item.fueltype);
                            } catch (e) {
                                console.error('Invalid fueltype JSON:', item
                                    .fueltype);
                            }
                        }

                        if (item.transmission) {
                            try {
                                transmissionsArray = JSON.parse(item.transmission);
                            } catch (e) {
                                console.error('Invalid transmission JSON:', item
                                    .transmission);
                            }
                        }

                        // Ensure they are arrays before mapping
                        fuelTypesArray = Array.isArray(fuelTypesArray) ?
                            fuelTypesArray : [];
                        transmissionsArray = Array.isArray(transmissionsArray) ?
                            transmissionsArray : [];

                        var fuelTypes = fuelTypesArray.map(function(fuel) {
                            return `<li class="me-2">${fuel},</li>`;
                        }).join('');

                        var transmissions = transmissionsArray.map(function(trans) {
                            return `<li class="me-2">${trans},</li>`;
                        }).join('');

                        // Create the new tr
                        var newbody = `
                    <tr>
                        <input type="hidden" name="" id="CarrName" value="${item.carname}">
                        <td>
                            <div>
                                ${item.carname}, (${item.carmodalname})
                            </div>
                            <div class="text-muted fs-6">
                                <ul class="d-flex" style="column-count : 4;">
                                    ${fuelTypes} |&nbsp;&nbsp;${transmissions}
                                </ul>
                            </div>
                        </td>
                        <td class="fw-bold">Rs. ${item.price} Lakh</td>
                        <td>
                            <div class="form-check form-check-reverse">
                                <label class="form-check-label" for="comparecheck-${item.id}">
                                    Add to compare
                                </label>
                                <input class="form-check-input comparecheck" type="checkbox" value='{"carname": "${item.carname}","brandname": "${item.brandname}", "fueltype": ${JSON.stringify(fuelTypesArray)},  "model": "${item.carmodalname}", "price": "${item.price}", "id": "${item.id}"}' data-value='{"id": "${item.id}","brandname": "${item.brandname}", "fueltype": ${JSON.stringify(fuelTypesArray)}, "carname": "${item.carname}", "model": "${item.carmodalname}", "price": "${item.price}"}' />
                            </div>
                        </td>
                    </tr>
                `;
                        $('#table-body').append(newbody);
                    });
                }
            });
        });

        // Add to compare offcanvas functionality
        $(document).on('change', '.comparecheck', function() {
            var ids = [];
            var checkedValues = [];
            $('.comparecheck:checked').each(function() {
                var item = $(this).data('value');
                checkedValues.push(item);
                ids.push(item.id);
            });
            console.log('Checked values:', checkedValues);
            console.log('IDs values:', ids);

            $('#comparecard').empty();
            checkedValues.forEach(function(item) {
                var carData = item;
                console.log('Car Data:', carData);

                // Initialize fuelTypesArray and transmissionsArray as empty arrays
                var fuelTypesArray = carData.fueltype || [];
                var transmissionsArray = carData.transmission || [];

                // Ensure they are arrays before mapping
                fuelTypesArray = Array.isArray(fuelTypesArray) ? fuelTypesArray : [];
                transmissionsArray = Array.isArray(transmissionsArray) ? transmissionsArray :
            [];

                var fuelTypes = fuelTypesArray.map(function(fuel) {
                    return `${fuel}`;
                }).join(', ');

                var transmissions = transmissionsArray.map(function(trans) {
                    return `${trans}`;
                }).join(', ');

                var carImage = getFirstCarImage(carData.carname);
                console.log('Car Image:', carImage);
                var imageHtml = '';
                if (carImage) {
                    var imagePath =
                        `{{ asset('assets/backend-assets/images/') }}/${carImage.addimage}`;
                    console.log('Image Path:', imagePath);
                    imageHtml = `<img alt="" src="${imagePath}">`;
                } else {
                    console.log('No image found for vehicle:', carData.carname);
                }

                // Create the new div
                var newcard = `
                <div class="col-md-3 col-xs-6 col-sm-6 px-2">
                     <input type="hidden" value="${item.id}" name="compareid[]" id="compareid" placeholder="">
                    <span class="vs-compare">VS</span>
                    <div class="category-grid-box-1">
                        <button type="button" class="btn-close compare-close"></button>
                        <div class="image">
                            <div>${imageHtml}</div>
                            <div class="ribbon popular"></div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <a title="" href="#">
                                <div class="fs-5 fw-bold">
                                    ${carData.brandname} ${carData.carname}, ${carData.model}
                                </div>
                            </a>
                            <div class="text-muted fs-5">
                                <div class="d-flex">
                                    ${fuelTypes}
                                </div>
                            </div>
                            <div class="ad-price fs-5">Rs. ${carData.price}
                                <span class="text-muted ps-2">onwards</span>
                            </div>
                        </div>
                    </div>
                </div>
            `;
                $('#comparecard').append(newcard);
            });
        });
    });
</script>
@endsection
