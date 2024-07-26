<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend-assets/images/logowhite.jpg') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/backend-assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/backend-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend-assets/css/line.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/backend-assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">

    <!-- DataTables -->
    <link href="{{ asset('assets/backend-assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend-assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('assets/backend-assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/backend-assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    @stack('styles')

</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="uil-search"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="uil-search"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            data-bs-toggle="fullscreen">
                            <i class="uil-minus-path"></i>
                        </button>
                    </div>


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('assets/backend-assets/images/defaultuser.png') }}" alt="Header Avatar">
                            @if (Auth::user())
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Welcome
                                {{ Auth::user()->name }}</span>
                            @else
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">Guest User</span>
                            @endif
                            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="/adminprofile"><i
                                    class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span
                                    class="align-middle">View Profile</span></a>
                            {{-- <a class="dropdown-item" href="#"><i
                                    class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">My Wallet</span></a>
                            <a class="dropdown-item d-block" href="#"><i
                                    class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Settings</span> <span
                                    class="badge bg-success-subtle text-success rounded-pill mt-1 ms-2">03</span></a>
                            <a class="dropdown-item" href="#"><i
                                    class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span
                                    class="align-middle">Lock screen</span></a> --}}
                            <form method="POST" action="{{ route('logoutuser') }}" x-data>
                                <a class="dropdown-item" href="{{ route('logoutuser') }}"><i
                                        class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
                                    <span class="align-middle">Log out</span></a>
                            </form>
                        </div>
                    </div>

                    {{-- <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                            <i class="uil-cog"></i>
                        </button>
                    </div> --}}

                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('Admindashboard') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        {{-- <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22"> --}}
                        <h1 class="text-black fw-bold mt-4 me-2">C</h1>
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/backend-assets/images/logowhite.jpg')}}" alt="" height="80">
                        {{-- <h1 class="text-black fw-bold fs-2 mt-4 me-2">Car Choice</h1> --}}
                    </span>
                </a>

                <a href="{{ route('Admindashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        {{-- <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22"> --}}
                        <h1 class="text-black fw-bold mt-4 me-2">C</h1>
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/backend-assets/images/logowhite.jpg')}}" alt="" height="80">
                        {{-- //<h1 class="text-black fw-bold fs-2 mt-4 me-2">Car Choice</h1> --}}
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Menu</li>

                        <li>
                            <a href="{{ route('Admindashboard') }}">
                                <i class="uil-home-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('adminprofile') }}">
                                <i class="uil-user-square"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('companyprofile') }}">
                                <i class="uil-users-alt"></i>
                                <span>Company Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-blogger-alt"></i>
                                <span>Blog</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('addblog') }}">Add Blog</a></li>
                                <li><a href="{{ route('bloglist') }}">Blogs List</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-setting"></i>
                                <span>Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('master') }}">Master</a></li>
                                <li><a href="{{ route('submaster') }}">Sub-Master</a></li>
                                <li><a href="{{ route('formattributes')}}">Add Form Attributes</a></li>
                                <li><a href="{{ route('faqs')}}">FAQ's</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-book-alt"></i>
                                <span>Lead</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('leadmanagement') }}">Lead Management</a></li>
                                <li><a href="{{ route('allenquiriessite')}}">Enquiries from Website</a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="{{ route('vehicleimages') }}">
                                <i class="uil-comment-image"></i>
                                <span>Add Vehicle Images</span>
                            </a>
                        </li> --}}
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-car-sideview"></i>
                                <span>Cars</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('addcarlist') }}">Add Car List</a></li>
                                <li><a href="{{ route('addvariant') }}">Add Variant</a></li>
                                <li><a href="{{ route('variantslist') }}">Variants List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('userslist') }}">
                                <i class="uil-list-ul"></i>
                                <span>Users List</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="uil-setting"></i>
                                <span>Home Page Settings</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('addbannerimmages') }}">Add Banner Images</a></li>
                                <li><a href="{{ route('displaysettings')}}">Display Settings</a></li>
                                <li><a href="{{ route('comparecars')}}">Compare Cars</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <div class="main-content">
            @yield('main-section')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
            <script src="{{ asset('assets/backend-assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
            <script src="{{ asset('assets/backend-assets/js/pages/form-editor.init.js') }}"></script>
            <script src="{{asset('assets/backend-assets/libs/flatpickr/flatpickr.min.js')}}">
            <script src="{{ asset('assets/backend-assets/js/pages/form-editor.init.js') }}"></script>
            @stack('scripts')
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Carz Choice
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Developed by <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://yuvmedia.in/" target="_blank" class="text-reset">YUVMEDIA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- END layout-wrapper -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <!-- JAVASCRIPTS -->
    <script src="{{ asset('assets/backend-assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('assets/backend-assets/js/app.js') }}"></script>




    <script src="{{asset('assets/backend-assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/backend-assets/libs/%40chenfengyuan/datepicker/datepicker.min.js')}}"></script>
    <script src="{{asset('assets/backend-assets/libs/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend-assets/js/pages/form-advanced.init.js')}}"></script>


     <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>

</body>

</html>
