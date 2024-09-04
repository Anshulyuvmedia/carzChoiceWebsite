<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="author" content="ScriptsBundle">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Carz Choice</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="{{ asset('assets/frontend-assets/images/logo-light.jpg') }}" type="image/x-icon" />
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/bootstrap.css') }}">
    <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/style.css') }}">
    <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/font-awesome.css') }}" type="text/css">
    <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
    <link href="{{ asset('assets/frontend-assets/css/flaticon.css') }}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/et-line-fonts.css') }}" type="text/css">
    <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/carspot-menu.css') }}" type="text/css">
    <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/animate.min.css') }}" type="text/css">
    <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
    <link href="{{ asset('assets/frontend-assets/css/select2.min.css') }}" rel="stylesheet" />
    {{--
    <link href="{{asset('assets/backend-assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    --}}

    <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
    <link href="{{ asset('assets/frontend-assets/css/nouislider.min.css') }}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
    <link href="{{ asset('assets/frontend-assets/css/slider.css') }}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend-assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend-assets/css/owl.theme.css') }}">
    <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
    <link href="{{ asset('assets/frontend-assets/skins/minimal/minimal.css') }}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= PrettyPhoto =-=-=-=-=-=-= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend-assets/css/jquery.fancybox.min.css') }}" type="text/css"
        media="screen" />
    <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
    <link href="{{ asset('assets/frontend-assets/css/responsive-media.css') }}" rel="stylesheet">
    <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
    <link rel="stylesheet" id="color" href="{{ asset('assets/frontend-assets/css/colors/defualt.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSource+Sans+Pro:400,400i,600"
        rel="stylesheet">
    <!-- JavaScripts -->
    <script src="{{ asset('assets/frontend-assets/js/modernizr.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="position-relative">
    <!-- Preloader - style you can find in spinners.css -->
    <header class="sticky-top bg-white shadow">
        <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
        <div class="preloader"></div>

        <!-- =-=-=-=-=-=-= Main Header =-=-=-=-=-=-= -->
        <div class="colored-header">
            <!-- Top Bar -->
            <div class="header-top white">
                <div class="container">
                    <div class="row">
                        <!-- Header Top Left -->
                        {{-- <div class="header-top-left col-md-6 col-sm-6 col-xs-12 hidden-xs">
                            <ul class="listnone">
                                <li><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>

                            </ul>
                        </div> --}}

                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- Navigation Menu -->

            <!-- menu start -->
            <nav id="menu-1" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items ">
                    <div class="container">
                        <div class="row ">
                            <div class=" d-flex align-items-center justify-content-between">
                                <!-- menu logo -->
                                <div class="col-md-2 col-3">
                                    <ul class="menu-logo">
                                        <li>
                                            <a href="/" class="">
                                                <img src="{{ asset('assets/frontend-assets/images/logo-light.jpg') }}"
                                                    alt="logo" width="120">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-7 d-flex align-items-center justify-content-center">

                                    <!-- menu links -->
                                    <ul class="menu-links ">
                                        <!-- active class -->
                                        <li>
                                            <a href="/">Home</a>
                                        </li>

                                        <li>
                                            <a href="javascript:void(0)">New Cars
                                                <i class="fa fa-angle-down fa-indicator"></i>
                                            </a>
                                            <div class="drop-down grid-col-12">
                                                <!--grid row-->
                                                <div class="grid-row">
                                                    <!--grid column 3-->
                                                    <div class="grid-col-3">
                                                        <h3>Explore</h3>
                                                        <ul>
                                                            <li><a href="/new-cars">Explore New Cars</a></li>
                                                            <li><a data-value="Upcoming" class="brandfilter">Upcoming
                                                                    Cars</a></li>
                                                            <li><a data-value="Newly Launched" class="brandfilter">New
                                                                    Launches </a></li>
                                                            <li><a href="/electric-car">Electric Cars </a></li>
                                                            <li><a href="/car-loan">Car Loan </a></li>
                                                            <li><a data-target="#share-ad" data-toggle="modal">EMI Calculator </a></li>
                                                            <li><a href="/dealer-showroom">Find Dealer Showroom</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="grid-col-9">
                                                        <h3>Search New Cars by Brands</h3>
                                                        @php
                                                            use App\Models\Master;
                                                            $brands = Master::where('type', 'Brand')->get();
                                                            // $bodytype = Master::where('type', 'Body Type')->get();
                                                        @endphp
                                                        <ul class="by-make list-inline">
                                                            @foreach ($brands->take(16) as $data)
                                                                <li>
                                                                    <a href="javascript:void(0);" class="brandfilter"
                                                                        data-value="{{ $data->value }}">
                                                                        <img src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}"
                                                                            class="img-responsive" alt="Brand Image">
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        {{-- Used Cars --}}
                                        <li>
                                            <a href="javascript:void(0)">Used Cars <i
                                                    class="fa fa-angle-down fa-indicator"></i></a>
                                            <div class="drop-down grid-col-12">
                                                <!--grid row-->
                                                <div class="grid-row">
                                                    <!--grid column 3-->
                                                    <div class="grid-col-3">
                                                        <h3>Explore</h3>
                                                        <ul>
                                                            <li><a href="/used-car">Explore Used Cars</a></li>
                                                            <li><a href="/usedcar-bylocation">Usedcar by location</a>
                                                            </li>
                                                            <li><a href="/find-dealer">Find Dealer </a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="grid-col-9">
                                                        <h3>Search Used Cars by Brands</h3>
                                                        <ul class="by-make list-inline">
                                                            @foreach ($brands->take(16) as $data)
                                                                <li>
                                                                    <a href="javascript:void(0);" class="brandfilter"
                                                                        data-value="{{ $data->value }}">
                                                                        <img src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}"
                                                                            class="img-responsive" alt="Brand Image">
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Reviews & News<i
                                                    class="fa fa-angle-down fa-indicator"></i></a>
                                            <div class="drop-down grid-col-12">
                                                <!--grid row-->
                                                <div class="grid-row">
                                                    <div class="grid-col-6">
                                                        <h3>Explore</h3>
                                                        <ul>
                                                            <li><a href="/news">News </a></li>
                                                            <li><a href="/happycustomers">User Reviews</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="{{ route('carinsurance') }}">Car Insurance</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 col-8 d-flex align-items-center justify-content-end logincall">

                                    <ul class="listnone d-flex justify-content-between align-items-center">
                                        @if (Auth::guard('registeruser')->user())
                                            <li class="">
                                                <a href="/addadshow" class="btn btn-theme btn-sm">Sell Your Car</a>
                                            </li>
                                            <li class="dropdown ms-3">
                                                <a href="/userprofile"
                                                    class="dropdown-toggle d-flex align-items-center"
                                                    data-toggle="dropdown" role="button" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img class="img-circle resize border border-info "
                                                        alt="user-profile"
                                                        src="{{ asset('assets/backend-assets/images/' . Auth::guard('registeruser')->user()->dp) }}">

                                                    <span class="myname hidden-xs">
                                                        {{ Auth::guard('registeruser')->user()->fullname }}
                                                    </span>
                                                </a>
                                                <ul
                                                    class="dropdown-menu dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                                    <li><a href="/userprofile">User Profile</a></li>
                                                    <li><a href="{{ route('logoutuserfront') }}"">Logout</a></li>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="me-3">
                                                <a href="/loginuser" class="btn btn-theme btn-outline">
                                                    <i class="bi bi-door-open-fill"></i> Log in
                                                </a>
                                            </li>
                                            <li class="me-3">
                                                <a href="tel:919315510156" class="btn btn-theme btn-outline">
                                                    <i class="bi bi-telephone-fill"></i> Call Now
                                                </a>
                                            </li>
                                        @endif



                                    </ul>

                                </div>
                            </div>
                        </div>
                </section>
            </nav>
            <!-- menu end -->
        </div>
        <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->

    </header>
    <button class="btn btn-theme rounded-bottom rounded-4 mycustombtn" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Book Now</button>

    <div class="main-content-area clearfix">
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        @stack('scripts')
    </div>


    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer class="footer-bg ">
        <div class="footer-top pt-5">
                <div class="container hideInMobile">
                    <div class="row">
                        <div class="col-md-2 hideInMobile col-sm-6 col-xs-12">
                            <div class="widget">
                                <h5 class="mb-0">New Cars</h5>
                                <ul class="mt-3">
                                    <li><a href="/new-cars" class="text-secondary">Explore New Cars</a></li>
                                    <li><a data-value="Upcoming" class="brandfilter text-secondary">Upcoming Cars</a></li>
                                    <li><a href="/car-loan" class="text-secondary">Car Loan </a></li>
                                    <li><a href="/electric-car" class="text-secondary">Electric Cars </a></li>
                                    <li><a data-target="#share-ad" data-toggle="modal"  class="text-secondary">EMI Calculator </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 hideInMobile col-sm-6 col-xs-12">
                            <div class="widget">
                                <h5>Old Cars</h5>
                                <ul class="mt-3">
                                    <li><a href="/used-car"  class="text-secondary">Explore Used Cars</a></li>
                                    <li><a href="/usedcar-bylocation"  class="text-secondary">Usedcar by location</a></li>
                                    <li><a href="/find-dealer"  class="text-secondary">Find Dealer</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 hideInMobile  col-sm-6 col-xs-12">
                            <div class="widget my-quicklinks">
                                <h5>Quick Links</h5>
                                <ul class="mt-3">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="/pricing">Pricing</a></li>
                                    <li><a href="/contactus">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 hideInMobile  col-sm-6 col-xs-12">
                            <div class="widget my-quicklinks">
                                <h5>Important Links</h5>
                                <ul class="mt-3">
                                    <li><a href="/privacypolicy">Privacy Policy</a></li>
                                    <li><a href="/disclaimer">Disclaimer</a></li>
                                    <li><a href="/carinsurance">Car Insurance</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 hideInMobile  col-sm-6 col-xs-12">
                            <!-- Info Widget -->
                            <div class="widget">
                                <div class="logo">
                                    <img src="{{ asset('assets/frontend-assets/images/logowhitepng.png') }}" alt="logo"
                                        width="180">
                                </div>
                                <div class="content">
                                    <p class="text-secondary fs-4">Carzchoice is your go-to platform for everything cars! From expert reviews and comparisons to the latest car listings.</p>
                                </div>
                            </div>
                            <!-- Info Widget Exit -->
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->

    {{-- Mobile nav --}}

    <div class="mobile-menu hideInDesktop">
        <nav>
            <div class="nav-box">
                <ul class="nav-container">
                    <li class="nav__item ">
                        <a href="/" class="nav__item-link">
                            <div class="nav__item-icon">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <span class="nav__item-text">Home</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="/new-cars" class="nav__item-link">
                            <div class="nav__item-icon">
                                <i class="bi bi-key"></i>
                            </div>
                            <span class="nav__item-text">New</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="/used-car" class="nav__item-link">
                            <div class="nav__item-icon">
                                <i class="bi bi-car-front"></i>
                            </div>
                            <span class="nav__item-text">Used</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="/addadshow" class="nav__item-link">
                            <div class="nav__item-icon">
                                <i class="bi bi-plus-circle"></i>
                            </div>
                            <span class="nav__item-text">Sell</span>
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="/userprofile" class="nav__item-link">
                            <div class="nav__item-icon">
                                <i class="bi bi-person-gear"></i>
                            </div>
                            <span class="nav__item-text">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    @php
        use App\Models\AddVariant;
        use App\Models\PostOffices;

        $variantdata = AddVariant::where('showhidestatus', '=', 1)->get();
        $statedata = PostOffices::select('StateName', DB::raw('COUNT(id) as count'))->groupBy('StateName')->get();

    @endphp
    <!-- Off-canvas HTML Structure -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title fw-bold fs-4" id="offcanvasWithBothOptionsLabel">Book Your Vehicle Now</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Provide your contact details for Test Drive, EMI options, Offers & Exchange Benefits</p>
            <form action="{{ route('insertlead') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="formGroupExampleInput"
                        placeholder="Enter Fullname">
                    <label for="formGroupExampleInput" class="form-label mt-3">Contact Number</label>
                    <input type="tel" class="form-control" name="mobile" id="formGroupExampleInput"
                        placeholder="Enter Mobile Number">
                    <label for="formGroupExampleInput" class="form-label mt-3">Email</label>
                    <input type="email" class="form-control" name="email" id="formGroupExampleInput"
                        placeholder="Enter Email Address">
                    <label for="formGroupExampleInput" class="form-label mt-3">Select Car</label>
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                        <option>--select-car</option>
                        @foreach ($variantdata as $data)
                        <option value="{{ $data->brandname }},{{ $data->carname }}({{ $data->carmodalname }})">
                            {{ $data->brandname }},{{ $data->carname }}({{ $data->carmodalname }})
                        </option>
                     @endforeach
                    </select>
                    <label>State <span class="color-red">*</span></label>
                    <select class="form-control" id="dynamic_selectstate" name="state" required>
                        <option value="">--select state--</option>
                        @foreach ($statedata as $row)
                            <option value="{{ $row->StateName }}">{{ $row->StateName }}</option>
                        @endforeach
                    </select>
                    <label>District <span class="color-red">*</span></label>
                    <select class="form-control" name="city" id="dynamic_district" required>
                        <option value="">--select district--</option>
                    </select>
                    <div class="form-text" id="basic-addon4">Your details are safe with us and we only ask this once
                    </div>
                    <button type="submit" class="btn btn-theme rounded-4 btn-lg btn-block">Register</button>
                </div>
            </form>
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
<!-- EMI Calculator Widget START -->
<script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js" type="text/javascript"></script>
    <!-- =-=-=-=-=-=-= All Brands End =-=-=-=-=-=-= -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //This is District Filter By State in Offcanvas
        $(function() {
            $('#dynamic_selectstate').on('change', function() {
                var state = $(this).val();
                console.log(state);
                $.ajax({
                    url: "/filterdistrictbystate/" + state,
                    type: "GET",
                    success: function(data) {
                        console.log(data);
                        var dropdown1 = $('#dynamic_district');
                        dropdown1.empty();
                        dropdown1.append($('<option selected>Choose...</option>'));
                        data.forEach(function(item) {
                            dropdown1.append($('<option value="' + item.District +
                                '">' +
                                item.District +
                                '</option>'));
                        });
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", () => {
            const list = document.querySelectorAll(".nav__item");

            // Get the current page URL
            const currentPage = window.location.pathname;

            // Set the active class based on the current page URL
            list.forEach((item) => {
                const link = item.querySelector(".nav__item-link");
                if (link.getAttribute("href") === currentPage) {
                    item.classList.add("active");
                }
            });

            list.forEach((item) => {
                const link = item.querySelector(".nav__item-link");
                link.addEventListener("click", () => {
                    list.forEach((el) => {
                        el.classList.remove("active");
                    });
                    item.classList.add("active");
                });
            });
        });

        //New Car Filter
        $(document).ready(function() {
            $(document).on('click', '.brandfilter', function() {
                var carbrand = $(this).data('value');
                console.log(carbrand);

                $.ajax({
                    url: "/filterByAttribute/" + carbrand,
                    type: 'POST',
                    data: {
                        attribute: carbrand
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.success) {
                            window.location.href = data.redirect_url;
                        } else {
                            alert("error");
                        }
                    }
                });
            });
        });

        //Used Car Filter
        $(document).ready(function() {
            $(document).on('click', '.usedfiltercar', function() {
                var carbrand = $(this).data('value');
                console.log(carbrand);

                $.ajax({
                    url: "/usedcarfilter/" + carbrand,
                    type: 'POST',
                    data: {
                        attribute: carbrand
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.success) {
                            window.location.href = data.redirect_url;
                        } else {
                            alert("error");
                        }
                    }
                });
            });
        });

        //City Filter
        $(document).ready(function() {
            $('.locationanchor').on('click', function() {
                const city = $(this).data('value');
                console.log(city);

                //Here is AJAX Code...
                if (city) {
                    $.ajax({
                        url: '/filtercarsbylocation/' + city,
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.success) {
                                window.location.href = response.redirect_url;
                            } else {
                                alert("error");
                            }
                        },
                    });

                }

            });
        });
    </script>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66adc27f1601a2195ba0466f/1i4bbvgqe';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
        Tawk_API.customStyle = {
            visibility: {
                desktop: {
                    position: 'br',
                    xOffset: '60px',
                    yOffset: 20
                },
                mobile: {
                    position: 'br',
                    xOffset: 0,
                    yOffset: 100
                },
                bubble: {
                    rotate: '0deg',
                    xOffset: -20,
                    yOffset: 0
                }
            }
        };
    </script>
    <!--End of Tawk.to Script-->


    <!-- Back To Top -->
    {{-- <a href="#0" class="cd-top">Top</a> --}}
    <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
    <script src="{{ asset('assets/frontend-assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core Css  -->
    <script src="{{ asset('assets/frontend-assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Easing -->
    <script src="{{ asset('assets/frontend-assets/js/easing.js') }}"></script>
    <!-- Menu Hover  -->
    <script src="{{ asset('assets/frontend-assets/js/carspot-menu.js') }}"></script>
    <!-- Jquery Appear Plugin -->
    <script src="{{ asset('assets/frontend-assets/js/jquery.appear.min.js') }}"></script>
    <!-- Numbers Animation   -->
    <script src="{{ asset('assets/frontend-assets/js/jquery.countTo.js') }}"></script>
    <!-- Jquery Select Options  -->
    <script src="{{ asset('assets/frontend-assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/js/pages/form-advanced.init.js') }}"></script>

    {{-- <script src="{{asset('assets/backend-assets/libs/select2/js/select2.min.js')}}"></script> --}}

    <!-- noUiSlider -->
    <script src="{{ asset('assets/frontend-assets/js/nouislider.all.min.js') }}"></script>
    <!-- Carousel Slider  -->
    <script src="{{ asset('assets/frontend-assets/js/carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/slide.js') }}"></script>
    <!-- Image Loaded  -->
    <script src="{{ asset('assets/frontend-assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/isotope.min.js') }}"></script>
    <!-- CheckBoxes  -->
    <script src="{{ asset('assets/frontend-assets/js/icheck.min.js') }}"></script>
    <!-- Jquery Migration  -->
    <script src="{{ asset('assets/frontend-assets/js/jquery-migrate.min.js') }}"></script>
    <!-- Style Switcher -->
    <script src="{{ asset('assets/frontend-assets/js/color-switcher.js') }}"></script>
    <!-- PrettyPhoto -->
    <script src="{{ asset('assets/frontend-assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- Wow Animation -->
    <script src="{{ asset('assets/frontend-assets/js/wow.js') }}"></script>
    <!-- Template Core JS -->
    <script src="{{ asset('assets/frontend-assets/js/custom.js') }}"></script>

    <script src="{{ asset('assets/frontend-assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/frontend-assets/js/form-dropzone.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/frontend-assets/js/perfect-scrollbar.min.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>


</body>

</html>
