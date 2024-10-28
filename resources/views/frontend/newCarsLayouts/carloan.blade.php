@extends('frontend.layouts.website')
@section('content')
@section('title', 'Car Loan')

<!-- =-=-=-=-=-=-= Home Banner 2 =-=-=-=-=-=-= -->
<section class="main-search parallex used-cars" style="height: 410px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="main-search-title text-center">
                    <h1>Car Loan-EMI, Compare Interest Rates for Auto Loans</h1>
                    <p>Get instant car loan eligibility with upto 100% financing from leading banks at best Interest
                        Rates, EMI for your new car and used car purchase. Car Choice brings car finance at your finger
                        tips with attractive bank offers for your dream car. Car Loan DetailsNew Car Interest Rate 8%
                        Onwards New Car Loan Tenure 1 to 7 years Used Car Interest Rate 12.5% Onwards Used Car Loan
                        Tenure 1 to 4 years Processing Fees Varies with bank Collateral/Security Requirement None
                        Interest
                        rates applicable on monthly reducing balance.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= Home Banner 2 End =-=-=-=-=-=-= -->


<!-- =-=-=-=-=-=-= Looking for a Car Loan? =-=-=-=-=-=-= -->
<div class="page-header-area-2  ">
    <div class="container">
        <div class="row">


            <div class="card shadow-none">
                <div class="small-breadcrumb">
                    <div class="header-page">
                        <h1>Looking for a Car Loan?</h1>
                        <p>Carz Choice makes applying for a car loan online quick and simple. All you need to do is
                            furnish some details on the website and submit your application. Once this is done, the bank
                            automatically takes over and you have your loan quotes ready.</p>
                    </div>
                </div>
            </div>

            <div class="card shadow-none mt-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="nav-item active">
                        <a class="nav-link tabtype" data-value="newcar" aria-controls="trending" role="tab"
                            data-toggle="tab" href="#newcar">
                            New Car Loan
                        </a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link tabtype" data-value="usedcar" aria-controls="popular" role="tab"
                            data-toggle="tab" href="#usedcar">
                            Used Car Loan
                        </a>
                    </li>
                </ul>
                <div class="tab-content clearfix p-0">
                    <div class="tab-pane fade in active" id="newcar">

                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row pb-3">
                                @if ($mymess = Session::get('success'))
                                <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                                    <strong>{{ $mymess }}</strong>
                                </div>
                                @endif
                                @if ($mymess = Session::get('error'))
                                <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                                    <strong>{{ $mymess }}</strong>
                                </div>
                                @endif
                                <div class="col-md-6   rounded-3">
                                    <div class=" postdetails p-0 ">
                                        <form action="{{ route('insertcarloanenquiry') }}" method="POST"
                                            class="submit-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                    <label class="control-label">Car </label>
                                                    <input placeholder="Select A Car" type="text"
                                                        class="form-control car-details" data-bs-target="#selectBrand"
                                                        data-bs-toggle="modal" name="carname" value="" id="carvalue"
                                                        type="button">
                                                    </input>
                                                    <input type="hidden" name="enquirytype" value="newcar">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                    <label class="control-label">City </label>
                                                    <input placeholder="Select a City" type="text"
                                                        class="form-control City" data-bs-target="#selectLocation"
                                                        data-bs-toggle="modal" name="cityname" value="" id="cityvalue"
                                                        type="button">
                                                    </input>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                    <label class="control-label">Full Name<sup
                                                            class="text-danger">*</sup></label>
                                                    <input class="form-control" placeholder="Full Name as per PAN Card"
                                                        name="fullname" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                    <label class="control-label">Mobile Number</label>
                                                    <input class="form-control" placeholder="eg +92-0321-123-456"
                                                        type="text" name="mobileno">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-theme rounded-4 btn-block ">
                                                Get Loan Offers
                                            </button>
                                            <div class="mb-3">
                                                <i class="text-muted  fs-5">
                                                    By proceeding ahead you agree to Carz Choice Visitor Agreement,
                                                    Privacy Policy and Terms and Conditions. This site is protected by
                                                    reCAPTCHA and Google Terms of Service apply
                                                </i>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="fw-bold">Our Lending Partners</h3>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/axis-bank-logo-2x.png"
                                                                alt="Axis Bank" title="Axis Bank">
                                                            <p>Axis Bank</p>
                                                        </td>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/chola.svg"
                                                                alt="Cholamandalam Finance"
                                                                title="Cholamandalam Finance">
                                                            <p>Cholamandalam Finance</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/hdb-bank-02.png"
                                                                alt="HDB Financial Services"
                                                                title="HDB Financial Services">
                                                            <p>HDB Financial Services</p>
                                                        </td>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/icici-bank-logo-with-bg-v2.png"
                                                                alt="ICICI Bank" title="ICICI Bank">
                                                            <p>ICICI Bank</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bank-container" colspan="2">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/yes-bank-v2.svg"
                                                                alt="Yes Bank" title="Yes Bank">
                                                            <p>Yes Bank</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <h3 class="fw-bold">Interest rate Comparison</h3>
                                    <div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>Bank Name</th>
                                                <th>Car Loan Interest Rate</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ICICI Bank</td>
                                                    <td>9% p.a. onwards</td>
                                                </tr>
                                                <tr>
                                                    <td>Yes Bank</td>
                                                    <td>9.75% p.a. onwards</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->

                    </div>

                    <div class="tab-pane fade" id="usedcar">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row pb-3">
                                <div class="col-md-6   rounded-3  ">
                                    <div class=" postdetails p-0 ">
                                         <form action="{{ route('insertcarloanenquiry') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                    <label class="control-label">City </label>
                                                    <input placeholder="Select a City" id="usecarcity" type="text"
                                                        class=" form-control City" data-bs-target="#selectLocation"
                                                        data-bs-toggle="modal" name="cityname" type="button">
                                                    </input>
                                                    <input type="hidden" name="enquirytype" value="oldcar">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                    <label class="control-label">Full Name<sup
                                                            class="text-danger">*</sup></label>
                                                    <input class="form-control" name="fullname" placeholder="Full Name as per PAN Card"
                                                        type="text">
                                                </div>
                                            </div>

                                            <!-- end row -->
                                            <div class="row">
                                                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                    <label class="control-label">Mobile Number</label>
                                                    <input class="form-control" name="mobileno" placeholder="eg +92-0321-123-456"
                                                        type="text">
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-theme rounded-4 btn-block mt-3">
                                                Get Loan Offers
                                            </button>
                                            <div class="mb-3">
                                                <i class="text-muted  fs-5">
                                                    By proceeding ahead you agree to Carz Choice Visitor Agreement,
                                                    Privacy Policy and Terms and Conditions. This site is protected by
                                                    reCAPTCHA and Google Terms of Service apply
                                                </i>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h3 class="fw-bold">Our Lending Partners</h3>
                                    <div>

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/axis-bank-logo-2x.png"
                                                                alt="Axis Bank" title="Axis Bank">
                                                            <p>Axis Bank</p>
                                                        </td>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/hdb-bank-02.png"
                                                                alt="HDB Financial Services"
                                                                title="HDB Financial Services">
                                                            <p>HDB Financial Services</p>
                                                        </td>
                                                    </tr>
                                                    <tr>

                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/icici-bank-logo-with-bg-v2.png"
                                                                alt="ICICI Bank" title="ICICI Bank">
                                                            <p>ICICI Bank</p>
                                                        </td>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/idfc-first-updated.svg"
                                                                alt="HDB Financial Services"
                                                                title="HDB Financial Services">
                                                            <p>IDFC First Bank</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/tvs-credit.png"
                                                                alt="Yes Bank" title="Yes Bank">
                                                            <p>TVS Credit Finance</p>
                                                        </td>
                                                        <td class="bank-container">
                                                            <img class="bank-logo"
                                                                src="https://imgd.aeplcdn.com/0x0/cw/static/icons/bank-logos/yes-bank-v2.svg"
                                                                alt="Yes Bank" title="Yes Bank">
                                                            <p>Yes Bank</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <h3 class="fw-bold">Interest rate Comparison</h3>
                                    <div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <th>Bank Name</th>
                                                <th>Car Loan Interest Rate</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ICICI Bank</td>
                                                    <td>12.5% p.a. onwards</td>
                                                </tr>
                                                <tr>
                                                    <td>IDFC First Bank</td>
                                                    <td>13.5% p.a. onwards</td>
                                                </tr>
                                                <tr>
                                                    <td>Yes Bank</td>
                                                    <td>14% p.a. onwards</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Looking for a Car Loan? End =-=-=-=-=-=-= -->


<!-- =-=-=-=-=-=-= Car Loan EMI Calculator =-=-=-=-=-=-= -->
<div class="page-header-area-2   ">
    <div class="container card">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page">
                        <h1>Car Loan EMI Calculator</h1>
                        <p>EMIs make your loan repayment much easier and a peaceful process but a car loan EMI is
                            somewhat capable of making a dent in your monthly budget. Therefore, you need to calculate
                            the EMI amount ahead of time to ensure that you can actually afford to take a loan for the
                            desired amount. Our user-friendly Carz Choice car loan EMI calculator instantly provides you
                            with the monthly amount you would be required to pay based on the loan amount, term and
                            interest rate provided by you.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">


            <div id="ecww-widgetwrapper" style="min-width:250px;width:100%; ">
                <div id="ecww-widget"
                    style="position:relative; padding-top:0; padding-bottom:280px; height:0; overflow:hidden;">
                </div>
            </div>


        </div>
    </div>
</div>

<!-- =-=-=-=-=-=-= Car Loan EMI Calculator End =-=-=-=-=-=-= -->


<div class="page-header-area-2  used-cars mt-5 mb-0 py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page text-center">
                        <h1>Cars you Must Explore</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list">
                        <div class="recent-ads-container">
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <p>Popular Minivans</p>
                                </h3>
                                <div>
                                    <ul>
                                        @foreach ($minivans->take(4) as $vans)
                                            <li><a href="/carlistingdetails/{{$vans->id}}">{{$vans->brandname}} {{$vans->carname}}-{{$vans->carmodalname}}</a></li>
                                        @endforeach
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
                                    <p>Popular Compact SUV's </p>
                                </h3>
                                <div>
                                    <ul>
                                        @foreach ($compactsuvs->take(4) as $suvs)
                                            <li><a href="/carlistingdetails/{{$suvs->id}}">{{$suvs->brandname}} {{$suvs->carname}}-{{$suvs->carmodalname}}</a></li>
                                        @endforeach
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
                                    <p>Popular Sedans </p>
                                </h3>
                                <div>
                                    <ul>
                                        @foreach ($sedans->take(4) as $sedan)
                                            <li><a href="/carlistingdetails/{{$sedan->id}}">{{$sedan->brandname}} {{$sedan->carname}}-{{$sedan->carmodalname}}</a></li>
                                        @endforeach
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

{{-- THIS IS CAR LOAN BLOG SINGLE COMPONENT --}}
<x-car-loan-blog-single />

<!-- =-=-=-=-=-=-= Tools You May Need =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                <div class="small-breadcrumb">
                    <div class="header-page text-center">
                        <h1>Tools You May Need</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container d-flex">
                            <div class="recent-ads-list-image">
                                <a href="/car-loan" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/car-loans-02.svg"
                                        alt="">
                                </a>
                            </div>
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="/car-loan"> Instant Car Loan</a>
                                </h3>
                                <p>Apply and Get Best Car Loan Offers within minutes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container d-flex">
                            <div class="recent-ads-list-image">
                                <a href="/find-dealer" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/locate-dealer.svg"
                                        alt="">
                                </a>
                            </div>
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="/find-dealer">Locate Dealer</a>
                                </h3>
                                <p>Explore a used car dealer near you in Mumbai</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-md-4">
                <div class="panel-body recent-ads d-flex">
                    <div class="recent-ads-list  ">
                        <div class="recent-ads-container d-flex">
                            <div class="recent-ads-list-image">
                                <a href="/new-cars" class="recent-ads-list-image-inner">
                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/car.svg" alt="">
                                </a>
                            </div>
                            <div class="recent-ads-list-content">
                                <h3 class="recent-ads-list-title">
                                    <a href="/new-cars">Explore New Cars</a>
                                </h3>
                                <p>Explore new cars in Mumbai Under your budget</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Tools You May Need End =-=-=-=-=-=-= -->

{{-- THIS IS NEW CAR LOAN FAQ COMPONENET --}}
<x-car-loan-faq />


{{-- First modal --}}
<div class="modal fade" id="selectBrand" aria-hidden="true" aria-labelledby="selectBrandlabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
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
                        <input type="text" id="carBrand" class="form-control rounded-4" placeholder="Enter Your Name">
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h6 class="pb-3">POPULAR BRANDS</h6>
                            <ul class="accordion" style="height: 300px; overflow-y: auto; scrollbar-width: thin;">
                                @foreach ($vehiclesByBrand as $brandData)
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#">
                                            <img src="{{ asset('assets/backend-assets/images/' . $brandData['brand_image']) }}"
                                                alt="" class="img-fluid" width="40" />
                                            <span>{{ $brandData['brandname'] }}</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            @if (count($brandData['vehicles']) > 0)
                                            @foreach ($brandData['vehicles'] as $vehicle)
                                            <a href="#"
                                                data-bs-title="{{ $brandData['brandname'] }} ,{{ $vehicle->carname }}"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action uniqueanchor">
                                                <span>{{ $vehicle->carname }}</span>
                                            </a>
                                            @endforeach
                                            @else
                                            <p>No vehicles available for this brand.</p>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                @endforeach
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
                    <button class="btn btn-theme rounded-4 btn-block" data-bs-target="#selectCar" data-bs-toggle="modal">Open
                        second modal</button>
                </div>
            </div> --}}
        </div>
    </div>
</div>

{{-- second modal --}}
<div class="modal fade" id="selectCar" aria-hidden="true" aria-labelledby="selectedCarlabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="selectedCarlabel">Select Car Model</h3>
                <div class="header-bg"></div>
            </div>
            <div class="modal-body">
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

                            <h6 class="pb-3">Select a variant</h6>
                            <div id="variantlistdiv" style="height: 300px; overflow-y: auto; scrollbar-width: thin;">

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.querySelectorAll('.uniqueanchor').forEach(item => {
        item.addEventListener('click', event => {
            const carBrandTitle = event.currentTarget.getAttribute('data-bs-title');
            const modalBodyInput = document.querySelector('#CarrName');

            if (modalBodyInput) {
                modalBodyInput.value = carBrandTitle;
                console.log("Value set to: " + carBrandTitle);

                // Splitting the value based on comma
                const finalvalue = modalBodyInput.value;
                const valuesArray = finalvalue.split(',');

                console.log("Split values:", valuesArray);

                // AJAX request
                $.ajax({
                    url: '/filtervariants/' + valuesArray[1].trim(),
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        $('#variantlistdiv').empty();

                        response.forEach(function(item) {
                            //Parse fueltype and transmission if they are JSON strings
                            var fuelTypesArray = JSON.parse(item.fueltype);
                            var transmissionsArray = JSON.parse(item.transmission);


                            var fuelTypes = fuelTypesArray.map(function(fuel) {
                                return `<li class="me-2">${fuel},</li>`;
                            }).join('');

                            var transmissions = transmissionsArray.map(function(
                                trans) {
                                return `<li class="me-2">${trans},</li>`;
                            }).join('');

                            // Create the new div
                            var newdiv = `
                            <a  class="list-group-item list-group-item-action modalnumbergo">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 fw-bold text-danger" data-car="${item.brandname}${item.carname}....,${item.carmodalname}">${item.carmodalname}</h5>
                                    <small class="text-body-secondary fw-bold">Rs. ${item.price}</small>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <div class="mb-1">
                                        <ul class="d-flex" style="column-count : 4;">
                                            ${fuelTypes} |&nbsp;&nbsp;${transmissions}
                                        </ul>
                                    </div>
                                    <small class="text-body-secondary">On-Road</small>
                                </div>
                            </a>
                        `;
                            $('#variantlistdiv').append(newdiv);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX request error:', error);
                        // Handle error here
                    }
                });

            } else {
                console.error('Input field with ID "CarrName" not found.');
            }
        });
    });



    $(document).ready(function() {
        $(document).on('click', '.modalnumbergo', function() {
            var h5Element = $(this).find('h5');
            var car = h5Element.data('car');
            console.log('Car Data:', car);
            $('#carvalue').val(car);
            $('#selectCar').modal('hide');
        });
    });

    // Sending Location Value
    $(document).ready(function() {
        $(document).on('click', '#locationid', function() {
            selectedlocation = $(this).data('value');
            console.log(selectedlocation);
            $('#cityvalue').val(selectedlocation);
            $('#usecarcity').val(selectedlocation);
            $('#selectLocation').modal('hide');
        });
    });

    //Sending Fueltype and Transmission for filter Variants
    $(document).ready(function() {
        $('.btn-check').on('change', function() {

            const modalinput = document.querySelector('#CarrName').value.split(',');
            console.log(modalinput[1]);

            var checkedValues = [];
            $('.btn-check:checked').each(function() {
                checkedValues.push($(this).val());
            });
            console.log('Checked values:', checkedValues);

            $.ajax({
                url: '/filterbyfueltypesandtras',
                method: 'POST',
                data: {
                    'checkboxes': checkedValues,
                    'carname': modalinput[1],
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    $('#variantlistdiv').empty();

                    response.forEach(function(item) {
                        //Parse fueltype and transmission if they are JSON strings
                        var fuelTypesArray = JSON.parse(item.fueltype);
                        var transmissionsArray = JSON.parse(item.transmission);


                        var fuelTypes = fuelTypesArray.map(function(fuel) {
                            return `<li class="me-2">${fuel},</li>`;
                        }).join('');

                        var transmissions = transmissionsArray.map(function(
                            trans) {
                            return `<li class="me-2">${trans},</li>`;
                        }).join('');

                        // Create the new div
                        var newdiv = `
                            <a  class="list-group-item list-group-item-action modalnumbergo">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 fw-bold text-danger" data-car="${item.brandname}, ${item.carname}, ${item.carmodalname}">${item.carmodalname}</h5>
                                    <small class="text-body-secondary fw-bold">Rs. ${item.price}</small>
                                </div>
                                <div class="d-flex w-100 justify-content-between">
                                    <div class="mb-1">
                                        <ul class="d-flex" style="column-count : 4;">
                                            ${fuelTypes} |&nbsp;&nbsp;${transmissions}
                                        </ul>
                                    </div>
                                    <small class="text-body-secondary">On-Road</small>
                                </div>
                            </a>
                        `;
                        $('#variantlistdiv').append(newdiv);
                    });
                }
            })
        });
    });
</script>

<!-- EMI Calculator Widget START -->
<script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script>


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
                    {{-- <div class=" text-center">
                        <a href="#">
                            <i class="bi bi-crosshair"></i>
                            Detect my location
                        </a>
                    </div> --}}
                    <div class="form-group col-md-12">

                        <input type="text" id="carLocation" class="form-control" placeholder="Enter Your Name">
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h6 class="pb-3 text-center">Popular Cities</h6>

                            <div class="row flex-wrap justify-content-center">
                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Mumbai"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">
                                        <img src="https://imgd.aeplcdn.com/0x0/n/ergk3sa_1483598.jpg" alt="Mumbai">
                                        <div class="fs-6 text-muted">Mumbai</div>
                                    </a>
                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Bangalore"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/k88k3sa_1483601.jpg" alt="Bangalore">
                                        <div class="fs-6 text-muted">Bangalore</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Delhi"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/1jnk3sa_1483607.jpg" alt="Delhi">
                                        <div class="fs-6 text-muted">Delhi</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Pune"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/53hk3sa_1483599.jpg" alt="Pune">
                                        <div class="fs-6 text-muted">Pune</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor"
                                        data-bs-location="Navi M data-bs-target=" #selectCity" data-bs-toggle="modal"
                                        umbai">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/o0ik3sa_1483600.jpg" alt="Navi Mumbai">
                                        <div class="mt-2 fs-6 text-muted" style="line-height: 1.3em;">Navi Mumbai
                                        </div>
                                    </a>

                                </div>
                            </div>

                            <div class="row flex-wrap justify-content-center mt-3">

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Hyderabad"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/sj7k3sa_1483605.jpg" alt="Hyderabad">
                                        <div class="fs-6 text-muted">Hyderabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Ahmedabad"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/z2fk3sa_1483597.jpg" alt="Ahmedabad">
                                        <div class="fs-6 text-muted">Ahmedabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Chennai"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/zhlk3sa_1483604.jpg" alt="Chennai">
                                        <div class="fs-6 text-muted">Chennai</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Kolkata"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/9omk3sa_1483606.jpg" alt="Kolkata">
                                        <div class="fs-6 text-muted">Kolkata</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal cityanchor" data-bs-location="Chandigarh"
                                        data-bs-target="#selectCity" data-bs-toggle="modal">

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
                                @foreach ($pincodedata->take(50) as $row)
                                <a id="locationid" data-value="{{ $row->City }}, {{ $row->State }}"
                                    class="list-group-item list-group-item-action">
                                    {{ $row->City }}, {{ $row->State }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            {{-- <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button class="btn btn-theme rounded-4 btn-block" data-bs-target="#selectCity" data-bs-toggle="modal">Open
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
                            <input type="text" id="selectedloaction" value="" class="form-control"
                                placeholder="Enter Your Name">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="pb-3 text-center">All Cities</h6>
                            <div class="list-group p-2" id="locationdiv"
                                style="height: 300px; overflow-y: auto; scrollbar-width: thin;">

                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button class="btn btn-theme rounded-4 btn-sm" data-bs-target="#selectLocation" data-bs-toggle="modal">Go
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
    document.querySelectorAll('.cityanchor').forEach(item => {
        item.addEventListener('click', event => {
            const location = event.currentTarget.getAttribute('data-bs-location');
            console.log(location);
            $('#selectedloaction').val(location);

            $.ajax({
                url: '/filtercities/' + location,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(responsehaibhai) {
                    console.log(responsehaibhai);
                    $('#locationdiv').empty();
                    responsehaibhai.forEach(function(item) {
                        var newdiv = `
                         <a id="fulllocation" data-fulllocation="${item.PostOfficeName} - ${item.City}, ${item.Pincode}"
                                    data-bs-target="#selectCity" data-bs-toggle="modal"
                                    class="list-group-item list-group-item-action">
                                   ${item.PostOfficeName} - ${item.City}, ${item.Pincode}
                                </a>
                    `;
                        $('#locationdiv').append(newdiv);
                    });

                }
            });
            $(document).ready(function() {
                $(document).on('click', '#fulllocation', function() {
                    loc = $(this).data('fulllocation');
                    console.log(loc);
                    $('#cityvalue').val(loc);
                    $('#usecarcity').val(loc);
                    $('#selectLocation').modal('hide');

                });
            });
        });
    });

    setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
</script>

@endsection
