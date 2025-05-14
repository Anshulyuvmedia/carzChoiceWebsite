@extends('frontend.layouts.website')
@section('content')
@section('title', $cardetails->carname. $cardetails->modalname.'Details')
<section class="section-padding no-top gray pt-5">
    <div class="container">
        <div class="row">
            <div class="pricing-area">
                <div class="col-md-8 col-xs-12 col-sm-8">
                    <div>
                        <h1 class="fw-bolder text-black fs-1">{{ $cardetails->carname }} ({{
                                $cardetails->modalname }})</h1>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-sm-4 col-xs-12">
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
                    </div> --}}
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
                                <a class="nav-link" href="#keyfeaturesections">Key Features & Specifications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#similarcars">Similar Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#faqs">Questions & Answers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#proscons">Pros & Cons</a>
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
                                    @foreach (json_decode($cardetails->images, true) as $row)
                                    <li>
                                        <a href="{{ asset($row['imageurl']) }}" data-fancybox="gallery">
                                            <img alt="" src="{{ asset($row['imageurl']) }}" />
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider p-2 mb-0">
                                <ul class="slides">
                                    @foreach (json_decode($cardetails->images, true) as $row)
                                    <li>
                                        <img alt="" src="{{ asset($row['imageurl']) }}">
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12 ">
                        <div class="row ">
                            <div class="col-md-12 col-xs-12 col-sm-12 p-4 ">
                                <div class="fs-1 fw-bold text-dark">
                                    {{ $cardetails->carname }} ({{
                                $cardetails->modalname }})
                                </div>
                                <div class="fs-4 fw-bold text-muted mt-2 mb-2">
                                    ( {{ $cardetails->kilometersdriven }}Kms) | {{ $cardetails->fueltype }} | {{ $cardetails->district }},{{ $cardetails->pincode }}
                                </div>
                                <div class="fs-2 fw-bold text-dark">
                                    Rs. {{ $cardetails->price }} Lakh
                                </div>
                                <div class="my-3 p-3 rounded-3 shadow-sm d-flex justify-content-between" style="background-color: #F9F9F9">
                                    <div>
                                        <div>
                                            Caculate EMI
                                        </div>
                                        <div>
                                            <a href="#" data-target="#share-ad" data-toggle="modal">
                                                EMI Calculator
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <a href="#" class="btn btn-theme btn-block rounded-3" data-carname="{{ $cardetails->brandname }},{{ $cardetails->carname }}({{ $cardetails->carmodalname }})">Get
                                        Offer</a>
                                </div>
                                <div class="mt-5">

                                    <div class="d-flex justify-content-between p-3 shadow-sm rounded-3">
                                        <a href="#" id="copy-link" class="text-secondary text-center" title="Copy to Clipboard">
                                            <svg class="" style="width: 7%; float: inline-start;" viewBox="0 0 24 24" fill="currentColor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                                <path d="M18 16.08V13a5.01 5.01 0 00-1.27-3.5l4.37-4.37a1 1 0 00-1.41-1.41l-4.37 4.37A5.01 5.01 0 0013 5v3.08a4.992 4.992 0 00-2 .46V4a1 1 0 00-1-1H4a1 1 0 00-1 1v9a1 1 0 001 1h6.58a4.992 4.992 0 002 .46v3.08a5.01 5.01 0 00-3.5 1.27l-4.37-4.37a1 1 0 00-1.41 1.41l4.37 4.37A5.01 5.01 0 0011 21v-3.08a4.992 4.992 0 002-.46V20a1 1 0 001 1h9a1 1 0 001-1v-6.58a4.992 4.992 0 00.46-2zm-4.46 2.94V20H7v-1.58a5.002 5.002 0 001.47-1.47H14.54zM6 13V4h6v9H6zm9-6a3 3 0 110-6 3 3 0 010 6zm0 12a3 3 0 110-6 3 3 0 010 6z" />
                                            </svg>
                                            <span id="copy-feedback" class="float-start"> Copy to Share</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="well alert-box-container margin-top-20" id="specificaitonssections">
                    <h3>{{ $cardetails->brandname }} {{ $cardetails->carname }} Overview</h3>
                    <table class="table table-light border rounded-3 table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm" viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                        <path d="M13.25 16H3.5a1 1 0 01-1-1v-2.12H3a.75.75 0 000-1.5h-.5V1a1 1 0 011-1h9.75a1 1 0 011 1v10.38h-.5a.75.75 0 000 1.5h.5V15a1 1 0 01-1 1zM3.5 13.8V15h9.75v-1.2a1.75 1.75 0 010-3.35V1H3.5v9.45a1.75 1.75 0 010 3.35zm8.27-1.42h-.68v-.75h.68zm-1.68 0h-1v-.75h1zm-2 0h-1v-.75h1zm-2 0h-1v-.75h1zm3.67-2.76a.39.39 0 000-.53l-2.62-2.6h1a.77.77 0 00.76-.77V5h1.5a.37.37 0 00.37-.37.38.38 0 00-.37-.38H8.88v-.61h1.5a.38.38 0 000-.75H6.25a.38.38 0 000 .75h1.88v.6H6.25a.37.37 0 00-.37.38.36.36 0 00.37.38h1.87v.73H6.4A.44.44 0 006 6a.49.49 0 000 .42l3.22 3.2a.38.38 0 00.26.11.4.4 0 00.28-.11z">

                                        </path>
                                    </svg>
                                    Price
                                </td>
                                <th>Rs. {{ $cardetails->price }} Lakh onwards</th>
                            </tr>
                            <tr>
                                <td>
                                    <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm" viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                        <path d="M11.86 12.56H4.59a.75.75 0 01-.68-.42l-.31-.62H2.51a.76.76 0 01-.76-.76V9h-.49v1.25a.55.55 0 01-.5.52c-.45 0-.5-.52-.5-.52V6.61a.5.5 0 01.5-.5.5.5 0 01.5.5V8h.49V6.09a.76.76 0 01.76-.76h.28v-.28a.76.76 0 01.76-.76h2.08V3.12H3.55V3c-.49-.07-.5-.19-.5-.41a.5.5 0 01.48-.51h5.22a.5.5 0 01.5.5.51.51 0 01-.5.5H6.63v1.21h2.12a.76.76 0 01.76.76v.28h1.31a.74.74 0 01.66.38l.82 1.44h.86V6.09a.76.76 0 01.76-.76H15a.76.76 0 01.76.76v5.19A.76.76 0 0115 12h-1.08a.76.76 0 01-.76-.76v-1.02h-.54v1.58a.76.76 0 01-.76.76zm-7.12-1h6.88V9.72a.51.51 0 01.5-.5h1.54a.5.5 0 01.5.5V11h.58V6.33h-.58v1.32a.5.5 0 01-.5.5H12a.51.51 0 01-.43-.26l-.89-1.56H9a.5.5 0 01-.5-.5v-.54H3.79v.54a.5.5 0 01-.5.5h-.54v4.19h1.16a.51.51 0 01.45.28zM3.57 3z">
                                        </path>
                                    </svg>
                                    Engine
                                </td>
                                <th>{{ $cardetails->engine }} cc</th>
                            </tr>
                            <tr>
                                <td>
                                    <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm" viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                        <path d="M13.88 8.21h-.27a1 1 0 01-1-1V4.59l.5 1.09v1.5a.53.53 0 00.53.53h.28zM10.68 7H4.59a.26.26 0 01-.26-.26V2.82a1.3 1.3 0 011.3-1.3h4a1.3 1.3 0 011.3 1.3v3.94a.26.26 0 01-.25.24zm-5.85-.5h5.61V2.82a.8.8 0 00-.8-.8h-4a.8.8 0 00-.8.8zm7.62 9.42h-10a1.22 1.22 0 010-2.44h.26V2.09a2 2 0 012-2h5.64a2 2 0 012 2v.07l2.29 5a.58.58 0 010 .18v4.23a.88.88 0 11-1.75 0v-.89a.45.45 0 00-.45-.44h-.13v3.25a1.22 1.22 0 010 2.44zm-10-1.59a.37.37 0 100 .74h10a.37.37 0 100-.74h-10zm1.11-.84h8V2.09A1.16 1.16 0 0010.39.93H4.75a1.16 1.16 0 00-1.16 1.16zm8.85-4.09h.13a1.3 1.3 0 011.3 1.29v.89l.05-4.14-1.48-3.24z">
                                        </path>
                                    </svg>
                                    Fuel Type
                                </td>
                                <th>{{ $cardetails->fueltype }}</th>
                            </tr>
                            <tr>
                                <td>
                                    <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm" viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                        <path d="M8.17 15.91a1.72 1.72 0 01-.5-3.36v-4H2.22v4a1.72 1.72 0 11-1 0V3.46A1.74 1.74 0 010 1.81a1.72 1.72 0 112.22 1.65v4.13h5.45V3.46a1.74 1.74 0 01-1.22-1.65 1.73 1.73 0 013.45 0 1.74 1.74 0 01-1.23 1.65v4.13h4.91a.2.2 0 00.2-.2V3.46a1.72 1.72 0 111 0v3.93a1.2 1.2 0 01-1.2 1.2H8.67v4a1.72 1.72 0 01-.5 3.36zm0-2.44a.72.72 0 10.73.72.72.72 0 00-.73-.72zm-6.45 0a.72.72 0 10.72.72.72.72 0 00-.72-.72zM14.28 1.09a.72.72 0 10.72.72.72.72 0 00-.72-.72zm-6.11 0a.72.72 0 10.73.72.72.72 0 00-.73-.72zm-6.45 0a.72.72 0 10.72.72.72.72 0 00-.72-.72z">
                                        </path>
                                    </svg>
                                    Transmission
                                </td>
                                <th>{{$cardetails->transmissiontype }}</th>
                            </tr>
                            <tr>
                                <td>
                                    <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm" viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                        <path d="M8.88 14.53a23.14 23.14 0 01-4.11-.46c-.73-.12-1.48-.49-2-2.34a28.16 28.16 0 01-1.3-6.48.49.49 0 01.45-.54.51.51 0 01.54.46 27.92 27.92 0 001.22 6.21c.47 1.62.94 1.62 1.26 1.71a18.47 18.47 0 005.4.37.5.5 0 11.1 1 14.56 14.56 0 01-1.56.07zm5.62 1.09a1.41 1.41 0 00.39-1.19v-.54c-.07-1.79-.12-3-1.85-3.7a9 9 0 00-2.81-.54A4.53 4.53 0 018 9.13c-.8-.61-1-1.27-1.32-2.6l-.27-1a1.45 1.45 0 00-1-1.08 2.2 2.2 0 10-.8.08 1.45 1.45 0 00-.61.66c-.39.76-.34 3.25 1.13 5.49a3.28 3.28 0 001.07 1.11 7.93 7.93 0 003.84.75 9.55 9.55 0 011.26.07c.78.13.93.73 1.06 1.7.1.64.21 1.45 1 1.56a2.05 2.05 0 00.37 0 1.16 1.16 0 00.77-.25zM5.13 5.39c.09 0 .21.13.28.39.11.36.19.7.27 1 .37 1.4.61 2.33 1.69 3.15a5.14 5.14 0 002.75.71 8.08 8.08 0 012.5.47c1.1.46 1.17 1 1.24 2.82v.55a.67.67 0 01-.06.4h-.31a2.8 2.8 0 01-.17-.74c-.12-.85-.32-2.28-1.89-2.54a9 9 0 00-1.41-.09 7 7 0 01-3.39-.64 2.3 2.3 0 01-.75-.77 6.11 6.11 0 01-1.04-4.46c.09-.17.2-.25.28-.25zM6 2.31A1.21 1.21 0 114.79 1.1 1.21 1.21 0 016 2.31z">
                                        </path>
                                    </svg>
                                    Seating Capacity
                                </td>
                                <th> {{ $cardetails->seatingcapacity }} Seater</th>
                            </tr>
                            <tr>
                                <td>
                                    <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm" viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                        <path d="M8 2a6 6 0 00-6 6c0 3.31 2.69 6 6 6s6-2.69 6-6a6 6 0 00-6-6zm0 1a5 5 0 015 5c0 1.1-.36 2.11-.97 2.93l-3.5-3.5A1 1 0 008 7a1 1 0 00-1 .97l-3.5 3.5A5 5 0 013 8a5 5 0 015-5zm0 9a1 1 0 100-2 1 1 0 000 2z" />
                                        <path d="M8 6a1 1 0 011 1v2a1 1 0 01-2 0V7a1 1 0 011-1z" />
                                    </svg>
                                    Kilometers Driven
                                </td>
                                <th> {{ $cardetails->kilometersdriven }}Kms</th>
                            </tr>
                            <tr>
                                <td>
                                    <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm" viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                        <path d="M8 4a2 2 0 100-4 2 2 0 000 4zm-3 4a1 1 0 00-1 1v3a1 1 0 001 1h6a1 1 0 001-1V9a1 1 0 00-1-1H5zm7 3a2 2 0 114 0 2 2 0 01-4 0zm-1.5-1h-2v2h2v-2z" />
                                    </svg>
                                    No. of Owners
                                </td>
                                <th> {{ $cardetails->ownernumbers }}</th>
                            </tr>
                            <tr>
                                <td>
                                    <svg class="o-dlrcWp o-eoatGj o-cqgkZn o-euTeMg o-bUlUGg o-emJYLF o-fzpibr o-cpNAVm" viewBox="0 0 16 16" fill="currentcolor" tabindex="-1" focusable="false" aria-hidden="true" role="img">
                                        <path d="M8 4a2 2 0 100-4 2 2 0 000 4zm-3 4a1 1 0 00-1 1v3a1 1 0 001 1h6a1 1 0 001-1V9a1 1 0 00-1-1H5zm7 3a2 2 0 114 0 2 2 0 01-4 0zm-1.5-1h-2v2h2v-2z" />
                                    </svg>
                                    Insurance
                                </td>
                                <th> {{ $cardetails->insurance }}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="header-page mb-2">
                    <h1 class="text-dark fs-3 fw-bold">Car Buyer's Tools</h1>
                </div>
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
                                                <a href="{{ route('finddealer') }}" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/locate-dealer.svg" alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="{{ route('finddealer') }}">Locate Dealer </a>
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
                                                <a href="/used-car" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/used-car.svg" alt="">
                                                </a>
                                            </div>
                                            <!-- /.recent-ads-list-image -->
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
        <div class="row">
            <div class="col-md-8">
                <h3 class="text-dark fw-bold">{{ $cardetails->brandname }} {{ $cardetails->carname }} Key Features & Specifications</h3>
                <div class="well alert-box-container margin-top-20" id="keyfeaturesections">
                    <ul class="accordion">
                        <li>
                            <h3 class="accordion-title"><a href="#">Features</a></h3>
                            <div class="accordion-content p-3 bg-light rounded">
                                @php
                                $features = json_decode($cardetails->features[0], true);
                                @endphp
                                @if (!empty($features))
                                @foreach ($features as $category)
                                @if (isset($category['type']) && isset($category['label']) && isset($category['value']))
                                <div class="feature-category mb-3">
                                    <h4 class="category-title text-primary fw-bold mb-2">{{ $category['type'] }}</h4>
                                    <ul class="list-unstyled">
                                        <div class="row">
                                            @foreach ($category['label'] as $index => $label)
                                            @if ($category['value'][$index] == '1')
                                            <div class="col-md-6">
                                                <li class="mb-2">
                                                    <i class="bi bi-check-circle-fill text-success me-2"></i>{{ $label }}
                                                </li>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </ul>
                                </div>
                                @endif
                                @endforeach
                                @else
                                <p class="text-muted">No features available.</p>
                                @endif
                            </div>
                        </li>
                        <li>
                            <h3 class="accordion-title"><a href="#">Specifications</a></h3>
                            <div class="accordion-content">
                                @php
                                $json = json_decode($cardetails->specifications[0], true);
                                @endphp
                                @if (!empty($json))
                                @foreach (array_unique(array_column($json, 'type')) as $type)
                                <h4 class="category-title text-primary fw-bold mb-2">{{ $type }}</h4>
                                <table class="table table-bordered">
                                    <tbody>
                                        @foreach ($json as $item)
                                        @if ($item['type'] == $type && $item['value'] !== null)
                                        <tr>
                                            <th>{{ $item['label'] }}</th>
                                            <td>{{ $item['value'] }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                @endforeach
                                @else
                                <p class="text-muted">No specifications available.</p>
                                @endif
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="well alert-box-container margin-top-20" id="faqs">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="heading-panel">
                        <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                            <h1>Having Questions about <span class="heading-color">{{ $cardetails->carname }} ({{$cardetails->modalname }})</span> ? </h1>
                        </div>
                    </div>
                    @foreach ($faqs as $row)
                    <ul class="accordion">
                        <li>
                            <h3 class="accordion-title"><a href="#">Q: {{ $row->faqlabel }}</a></h3>
                            <div class="accordion-content">
                                <p>{{ $row->faqvalue }}</p>
                            </div>
                        </li>
                    </ul>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="row">
            <div class="well  margin-top-20" id="proscons">
                <div class="col-md-3 shadow-sm  p-3 me-3 rounded-3 border">
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
                <div class="col-md-3 shadow-sm p-3 rounded-3 border">
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
        </div>
    </div>
</section>
<section class="custom-padding" id="similarcars">
    <!-- Main Container -->
    <div class="container popular-cars">
        <!-- Row -->
        <div class="row">
            <!-- Heading Area -->
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1>Similar Cars</h1>
                </div>
            </div>
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class=" popular-slider container owl-carousel owl-theme">
                        @foreach ($similarcars as $row)
                        @php
                        $imagearray = json_decode($row->images, true);
                        @endphp
                        <div class="item">
                            <div class="grid-style-2">
                                <!-- Listing Ad Grid -->
                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                    <div class="category-grid-box-1">
                                        <div class="image">
                                            <img alt="Carz Choice" src="{{ asset($imagearray[0]['imageurl']) }}" class="img-responsive">
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
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
@endsection
