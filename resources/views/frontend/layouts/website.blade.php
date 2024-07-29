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

    <title>@yield('title') | Carz Choice</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
    <link rel="icon" href="{{ asset('assets/frontend-assets/images/favicon.ico') }}" type="image/x-icon" />
    <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
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

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <header>
        <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
        {{-- <div class="preloader"></div> --}}

        <!-- =-=-=-=-=-=-= Main Header =-=-=-=-=-=-= -->
        <div class="colored-header">
            <!-- Top Bar -->
            <div class="header-top dark">
                <div class="container">
                    <div class="row">
                        <!-- Header Top Left -->
                        <div class="header-top-left col-md-6 col-sm-6 col-xs-12 hidden-xs">
                            <ul class="listnone">
                                {{-- <li><a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li> --}}

                            </ul>
                        </div>
                        <!-- Header Top Right Social -->
                        <div class="header-right col-md-6 col-sm-6 col-xs-12 ">
                            <div class="pull-right">
                                <ul class="listnone">
                                    <li><a href="/loginuser"><i class="fa fa-sign-in"></i> Log in</a></li>
                                    <li class="hidden-xs hidden-sm"><a href="/registration"><i class="fa fa-unlock"
                                                aria-hidden="true"></i> Register</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false"><img class="img-circle resize"
                                                alt=""
                                                src="{{ asset('assets/frontend-assets/images/users/3.jpg') }}">
                                            <span class="myname hidden-xs"> Admin </span> <span
                                                class=""></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/userprofile">User Profile</a></li>
                                            <li><a href="/userarchive">Archives</a></li>
                                            <li><a href="/useractiveads">Active Ads</a></li>
                                            <li><a href="/userfavourites">Favourite Ads</a></li>
                                            <li><a href="/usermessages">Message Panel</a></li>
                                            <li><a href="/userdeactive">Account Deactivation</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="postyourad" class="btn btn-theme rounded-4">Sell Your Car</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- Navigation Menu -->
            <div class="clearfix"></div>
            <!-- menu start -->
            <nav id="menu-1" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <!-- menu logo -->
                                <ul class="menu-logo">
                                    <li>
                                        <a href="/" class="">
                                            <img src="{{ asset('assets/frontend-assets/images/logo-light.jpg') }}"
                                                alt="logo" width="120">
                                        </a>
                                    </li>
                                </ul>
                                <!-- menu links -->
                                <ul class="menu-links">
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
                                                    <h3>Condition</h3>
                                                    <ul>
                                                        <li><a href="/new-cars">Explore New Cars</a></li>
                                                        <li><a  data-value="Upcoming" class="brandfilter">Upcoming Cars</a></li>
                                                        <li><a data-value="Newly Launched" class="brandfilter">New Launches </a></li>
                                                        <li><a href="/electric-car">Electric Cars </a></li>
                                                        <li><a href="/car-loan">Car Loan </a></li>
                                                    </ul>
                                                </div>

                                                <div class="grid-col-3">
                                                    <ul>
                                                        <li><a href="/car-images">Car Images </a></li>
                                                        <li><a href="/dealer-showroom">Find Dealer Showroom</a></li>
                                                        <li><a href="/dealer-location">Find Dealer By Location</a></li>
                                                    </ul>
                                                </div>

                                                <div class="grid-col-6">
                                                    <h3>Brands</h3>
                                                    @php
                                                        use App\Models\Master;
                                                        $brands = Master::where('type', 'Brand')->get();
                                                        // $bodytype = Master::where('type', 'Body Type')->get();
                                                    @endphp
                                                    <ul class="by-make list-inline">
                                                        @foreach ($brands->take(12) as $data)
                                                            <li>
                                                                <a href="javascript:void(0);" class="brandfilter" data-value="{{ $data->value }}">
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
                                                <div class="grid-col-2">
                                                    <h3>Condition</h3>
                                                    <ul>
                                                        <li><a href="/used-car">Explore Used Cars</a></li>
                                                        <li><a href="/usedcar-bylocation">Usedcar by location</a></li>
                                                        <li><a href="/find-dealer">Find Dealer </a></li>
                                                        <li><a href="/dealer-profile">Dealer Profile</a></li>
                                                    </ul>
                                                </div>

                                                <div class="grid-col-10">
                                                    <h3>Search Used Cars by Brands</h3>
                                                    <ul class="by-make list-inline">
                                                        @foreach ($brands->take(14) as $data)
                                                            <li>
                                                                <a href="javascript:void(0);" class="brandfilter" data-value="{{ $data->value }}">
                                                                    <img src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}"
                                                                        class="img-responsive" alt="Brand Image">
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                {{-- <div class="grid-col-4">
                                                    <h3>Search Used Cars by Body Type</h3>
                                                    <ul class="list-inline by-category ">
                                                        @foreach ($bodytype->take(6) as $row)
                                                        <li>
                                                            <a href="#">
                                                                <img alt="Hybrid" src="{{ asset('assets/backend-assets/images/'.$row->iconimage) }}">
                                                                {{$row->value}}
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="/news">News </a>
                                    </li>




                                </ul>
                                
                                <ul class="menu-search-bar">
                                    <li>
                                        <a>
                                            <div class="contact-in-header clearfix">
                                                <i class="flaticon-customer-service"></i>
                                                <span>
                                                    Call Us Now
                                                    <br>
                                                    <strong>111 222 333 444</strong>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
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


    <div class="main-content-area clearfix">
        @yield('content')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        @stack('scripts')
    </div>


    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
    <footer class="footer-bg">
        <!-- Footer Content -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Info Widget -->
                        <div class="widget">
                            <div class="logo">
                                <img src="{{ asset('assets/frontend-assets/images/logo-light.jpg') }}" alt="logo"
                                    width="120">

                            </div>

                            <ul class="apps-donwloads">
                                <li><img src="{{ asset('assets/frontend-assets/images/googleplay.png') }}"
                                        alt=""></li>
                                <li><img src="{{ asset('assets/frontend-assets/images/appstore.png') }}"
                                        alt=""></li>
                            </ul>
                        </div>
                        <!-- Info Widget Exit -->
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget socail-icons">
                            <h5>Follow Us</h5>
                            <ul>
                                <li><a class="Facebook"><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                                <li><a class="Twitter" href="#"><i
                                            class="fa fa-twitter"></i></a><span>Twitter</span>
                                </li>
                                <span><a class="Linkedin" href="#"><i
                                            class="fa fa-linkedin"></i></a><span>Linkedin</span>
                                    </li>
                                    <li><a class="Google" href="#"><i
                                                class="fa fa-google-plus"></i></a><span>Google+</span>
                                    </li>
                            </ul>
                        </div>
                        <!-- Follow Us End -->
                    </div>
                    <div class="col-md-2  col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget my-quicklinks">
                            <h5>Quick Links</h5>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="/services">Services</a></li>
                                <li><a href="/pricing">Pricing</a></li>
                                <li><a href="/contactus">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- Follow Us End -->
                    </div>
                    <div class="col-md-5  col-sm-6 col-xs-12">
                        <!-- Newslatter -->
                        <div class="widget widget-newsletter">
                            <h5>Singup for Weekly Newsletter</h5>
                            <div class="fieldset">
                                <p>We may send you information about related events, webinars, products and services
                                    which we believe.</p>
                                <form>
                                    <input class="" value="Enter your email address" type="text">
                                    <input class="submit-btn" name="submit" value="Submit" type="submit">
                                </form>
                            </div>
                        </div>
                        <div class="copyright">
                            <p>© 2024 Car Choice All rights reserved. Design by <a href="http://yuvmedia.in"
                                    target="_blank">Yuvmedia</a> </p>
                        </div>
                        <!-- Newslatter -->
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= All Brands End =-=-=-=-=-=-= -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.brandfilter', function() {
            var carbrand = $(this).data('value');
            console.log(carbrand);

            $.ajax({
                url: "/filterByAttribute/" + carbrand,
                type: 'POST',
                data: { attribute: carbrand },
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
</script>


    <!-- Back To Top -->
    <a href="#0" class="cd-top">Top</a>
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


</body>

</html>
