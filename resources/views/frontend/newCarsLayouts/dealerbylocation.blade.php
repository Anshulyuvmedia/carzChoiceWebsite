@extends('frontend.layouts.website')
@section('content')
@section('title', 'New Car Dealer')


<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">

                    <div class="header-page">
                        <h1>Tata Showrooms in Navi Mumbai</h1>
                        <p>Find Tata showrooms in Navi Mumbai. Locate 3 dealers of Tata in Navi Mumbai, find addresses
                            and contact numbers, or get assistance from CarWale in contacting the showroom directly for
                            more information on Tata car prices, offers, EMI options and test drive.</p>
                    </div>
                </div>
                <div class="header-listing">
                    <div class="col-md-3  col-xs-12 col-sm-12 p-0">
                        <div class="custom-select-box">

                            <label class="control-label">Brand </label>
                            <input placeholder="Select Your Brand" type="text" class=" form-control Car"
                                data-bs-target="#selectBrand" data-bs-toggle="modal" type="button">
                            </input>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12 p-0">

                        <div class="custom-select-box">
                            <label for="selectLocation">City:</label>
                            <input placeholder="Select a City" type="text" class=" form-control City"
                                data-bs-target="#selectLocation" data-bs-toggle="modal" type="button">
                            </input>
                        </div>
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

                <!-- Row -->
                <div class="row">

                    <!-- Sorting Filters End-->
                    <div class="clearfix"></div>
                    <!-- Ads Archive -->
                    <div class="">

                        <div class="header-page mb-2">
                            <h1 class="text-dark fs-3 fw-bold">Premium Dealers</h1>
                        </div>

                        <div class="">

                            <div class="ads-list-archive">
                                <div class="clearfix visible-xs-block"></div>
                                <!-- Content Block -->
                                <div class="col-lg-12 col-md-12 col-sm-12 no-padding">

                                    <div class="ad-archive-desc">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between ">
                                            <div class="">
                                                <a href="/dealer-profile">
                                                    <h3>Auto Havenn </h3>
                                                </a>
                                            </div>
                                            <div style="width:70px;height:34px">
                                                <img src="https://static.cartradeexchange.com/certprogs_images/autohavenn_1655465675428.jpg"
                                                    alt="Auto Havenn">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="category-title fs-4">
                                            Auto Haven, Shop No.272, 1st Floor, Raghuleela Mall, Near Poisar Depot,
                                            Kandiwali West, Mumbai - 400067
                                        </div>
                                        <!-- Details -->
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">
                                                    <div class="btn btn-danger btn-sm rounded-3">Get Best Offers</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:9876543211">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        9876543211
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ads-list-archive">
                                <div class="clearfix visible-xs-block"></div>
                                <!-- Content Block -->
                                <div class="col-lg-12 col-md-12 col-sm-12 no-padding">

                                    <div class="ad-archive-desc">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between ">
                                            <div class="">
                                                <a href="/dealer-profile">
                                                    <h3>Auto Havenn </h3>
                                                </a>
                                            </div>
                                            <div style="width:70px;height:34px">
                                                <img src="https://static.cartradeexchange.com/certprogs_images/autohavenn_1655465675428.jpg"
                                                    alt="Auto Havenn">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="category-title fs-4">
                                            Auto Haven, Shop No.272, 1st Floor, Raghuleela Mall, Near Poisar Depot,
                                            Kandiwali West, Mumbai - 400067
                                        </div>
                                        <!-- Details -->
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">
                                                    <div class="btn btn-danger btn-sm rounded-3">Get Best Offers</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:9876543211">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        9876543211
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Ads Archive End -->
                    </div>


                    <div class=" ">

                        <div class="header-page mb-2">
                            <h1 class="text-dark fs-3 fw-bold">Popular Dealers</h1>
                        </div>
                        <div class="grid-style-4">
                            <div class="posts-masonry">
                                <div class="col-md-6 col-xs-12 col-sm-6 px-2">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box p-3">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between ">
                                            <div class="short-description p-0 border-0">
                                                <h3>
                                                    <a href="/dealer-profile">
                                                        Auto Havenn
                                                    </a>
                                                </h3>
                                            </div>
                                            <div style="width:70px;height:34px">
                                                <img src="https://static.cartradeexchange.com/certprogs_images/autohavenn_1655465675428.jpg"
                                                    alt="Auto Havenn">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="category-title fs-4">
                                            Auto Haven, Shop No.272, 1st Floor, Raghuleela Mall, Near Poisar Depot,
                                            Kandiwali West, Mumbai - 400067
                                        </div>
                                        <!-- Details -->
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">
                                                    <div class="btn btn-danger btn-sm rounded-3">Get Best Offers</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:9876543211">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        9876543211
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6 px-2">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box p-3">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between ">
                                            <div class="short-description p-0 border-0">
                                                <h3>
                                                    <a href="/dealer-profile">
                                                        Auto Havenn
                                                    </a>
                                                </h3>
                                            </div>
                                            <div style="width:70px;height:34px">
                                                <img src="https://static.cartradeexchange.com/certprogs_images/autohavenn_1655465675428.jpg"
                                                    alt="Auto Havenn">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="category-title fs-4">
                                            Auto Haven, Shop No.272, 1st Floor, Raghuleela Mall, Near Poisar Depot,
                                            Kandiwali West, Mumbai - 400067
                                        </div>
                                        <!-- Details -->
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">
                                                    <div class="btn btn-danger btn-sm rounded-3">Get Best Offers</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:9876543211">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        9876543211
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6 px-2">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box p-3">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between ">
                                            <div class="short-description p-0 border-0">
                                                <h3>
                                                    <a href="/dealer-profile">
                                                        Auto Havenn
                                                    </a>
                                                </h3>
                                            </div>
                                            <div style="width:70px;height:34px">
                                                <img src="https://static.cartradeexchange.com/certprogs_images/autohavenn_1655465675428.jpg"
                                                    alt="Auto Havenn">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="category-title fs-4">
                                            Auto Haven, Shop No.272, 1st Floor, Raghuleela Mall, Near Poisar Depot,
                                            Kandiwali West, Mumbai - 400067
                                        </div>
                                        <!-- Details -->
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">
                                                    <div class="btn btn-danger btn-sm rounded-3">Get Best Offers</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:9876543211">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        9876543211
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                                <div class="col-md-6 col-xs-12 col-sm-6 px-2">
                                    <!-- Ad Box -->
                                    <div class="category-grid-box p-3">
                                        <!-- Title -->
                                        <div class="d-flex justify-content-between ">
                                            <div class="short-description p-0 border-0">
                                                <h3>
                                                    <a href="/dealer-profile">
                                                        Auto Havenn
                                                    </a>
                                                </h3>
                                            </div>
                                            <div style="width:70px;height:34px">
                                                <img src="https://static.cartradeexchange.com/certprogs_images/autohavenn_1655465675428.jpg"
                                                    alt="Auto Havenn">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="category-title fs-4">
                                            Auto Haven, Shop No.272, 1st Floor, Raghuleela Mall, Near Poisar Depot,
                                            Kandiwali West, Mumbai - 400067
                                        </div>
                                        <!-- Details -->
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="#" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasWithBothOptions"
                                                aria-controls="offcanvasWithBothOptions">
                                                    <div class="btn btn-danger btn-sm rounded-3">Get Best Offers</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:9876543211">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        9876543211
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ad Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Pagination -->
                    <div class="text-center margin-top-30">
                        <ul class="pagination ">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination End -->
                </div>
                <!-- Row End -->



            </div>
            <!-- Middle Content Area  End -->
            <!-- Left Sidebar -->
            <div class="col-md-4 col-sx-12">


                <!-- Sidebar Widgets -->
                <div class="sidebar">
                    <!-- Panel group -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="header-page mb-2">
                            <h1 class="text-dark fs-3 fw-bold">Used Car Dealers in Cities near You</h1>
                        </div>

                        <div class="list-group ">
                            <a href="#" class="list-group-item list-group-item-action">
                                Mumbai <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Bangalore <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Delhi <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Pune <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Navi Mumbai <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>

                        </div>
                        <div class="header-page mb-2">
                            <h1 class="text-dark fs-3 fw-bold">Used Car Dealers in Popular Cities</h1>
                        </div>

                        <div class="list-group ">
                            <a href="#" class="list-group-item list-group-item-action">
                                Mumbai <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Bangalore <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Delhi <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Pune <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Navi Mumbai <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Hyderabad <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Ahmedabad <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Chennai <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Kolkata <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                Chandigarh <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>

                        </div>

                        <div class="header-page mb-2">
                            <h1 class="text-dark fs-3 fw-bold">Tools You May Need</h1>
                        </div>
                        <!-- Latest Ads Panel -->
                        <div class="panel panel-default">

                            <!-- Content -->
                            <div class="panel-collapse">
                                <div class="panel-body recent-ads">


                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <a href="/car-loan">
                                                <div class="recent-ads-list-image">
                                                    <div href="#" class="recent-ads-list-image-inner">
                                                        <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/car-loans-02.svg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <div>Instant Car Loan</div>
                                                    </h3>
                                                    <div class="recent-ads-list-location text-muted">
                                                        Apply and Get Best Car Loan Offers within minutes
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <a href="#">
                                                <div class="recent-ads-list-image">
                                                    <div href="#" class="recent-ads-list-image-inner">
                                                        <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/user-reviews-2.svg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <div>User Reviews</div>
                                                    </h3>
                                                    <div class="recent-ads-list-location text-muted">
                                                        Read reviews shared by car users
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <a href="/find-dealer">
                                                <div class="recent-ads-list-image">
                                                    <div href="#" class="recent-ads-list-image-inner">
                                                        <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/key.svg"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <!-- /.recent-ads-list-image -->
                                                <div class="recent-ads-list-content">
                                                    <h3 class="recent-ads-list-title">
                                                        <div>Used Maruti Suzuki Cars</div>
                                                    </h3>
                                                    <div class="recent-ads-list-location text-muted">
                                                        1256 Used Maruti Suzuki cars in Navi Mumbai
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <!-- Latest Ads Panel End -->
                    </div>
                    <!-- panel-group end -->
                </div>
                <!-- Sidebar Widgets End -->
            </div>
            <!-- Left Sidebar End -->
        </div>
        <!-- Row End -->
    </div>
    <!-- Main Container End -->
</section>
<!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->



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
                                    <a href="#" class="switch-modal">
                                        <img src="https://imgd.aeplcdn.com/0x0/n/ergk3sa_1483598.jpg" alt="Mumbai">
                                        <div class="fs-6 text-muted">Mumbai</div>
                                    </a>
                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/k88k3sa_1483601.jpg" alt="Bangalore">
                                        <div class="fs-6 text-muted">Bangalore</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/1jnk3sa_1483607.jpg" alt="Delhi">
                                        <div class="fs-6 text-muted">Delhi</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/53hk3sa_1483599.jpg" alt="Pune">
                                        <div class="fs-6 text-muted">Pune</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#" class="switch-modal" umbai">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/o0ik3sa_1483600.jpg"
                                            alt="Navi Mumbai">
                                        <div class="mt-2 fs-6 text-muted" style="line-height: 1.3em;">Navi Mumbai
                                        </div>
                                    </a>

                                </div>
                            </div>

                            <div class="row flex-wrap justify-content-center mt-3">

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/sj7k3sa_1483605.jpg" alt="Hyderabad">
                                        <div class="fs-6 text-muted">Hyderabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/z2fk3sa_1483597.jpg" alt="Ahmedabad">
                                        <div class="fs-6 text-muted">Ahmedabad</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/zhlk3sa_1483604.jpg" alt="Chennai">
                                        <div class="fs-6 text-muted">Chennai</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

                                        <img src="https://imgd.aeplcdn.com/0x0/n/9omk3sa_1483606.jpg" alt="Kolkata">
                                        <div class="fs-6 text-muted">Kolkata</div>
                                    </a>

                                </div>

                                <div class="col-md-2 col-2 d-flex flex-column text-center px-2">
                                    <a href="#">

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
                                <a href="#" class="list-group-item list-group-item-action">
                                    A&N Islands, Andaman Nicobar
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    Abohar, Punjab
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Abu, Rajasthan
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    Abu, Rajasthan
                                </a>

                            </div>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>


<div class="modal fade" id="selectBrand" aria-hidden="true" aria-labelledby="selectBrandlabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered ">
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
                        <input type="text" id="carBrand" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h6 class="pb-3">POPULAR BRANDS</h6>
                            <ul class="accordion">
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#" data-bs-title="Maruti Suzuki">
                                            <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/10/brands/logos/maruti-suzuki1647009823420.jpg?v=1647009823707"
                                                alt="Maruti Suzuki Logo" class="img-fluid" width="50" />
                                            <span>Maruti Suzuki</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            <a href="#" data-bs-title="Maruti Suzuki, Fronx"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">
                                                Fronx
                                            </a>

                                            <a href="#" data-bs-title="Maruti Suzuki, Swift"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">
                                                Swift
                                            </a>
                                            <a href="#" data-bs-title="Maruti Suzuki, Grand Vitara"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">
                                                Grand Vitara
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#" data-bs-title="Tata">
                                            <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/16/brands/logos/tata.jpg?v=1629973276336"
                                                alt="Tata" class="img-fluid" width="50" />
                                            <span>Tata</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            <a href="#" data-bs-title="Tata, Nexon" data-bs-target="#selectCar"
                                                data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">Nexon</a>
                                            <a href="#" data-bs-title="Tata, Punch" data-bs-target="#selectCar"
                                                data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">Punch</a>
                                            <a href="#" data-bs-title="Tata, Altroz"
                                                data-bs-target="#selectCar" data-bs-toggle="modal"
                                                class="list-group-item list-group-item-action">Altroz</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#">
                                            <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/17/brands/logos/toyota.jpg?v=1630055705330"
                                                alt="Toyota Logo" class="img-fluid" width="50" />
                                            <span>Toyota</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                second link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                third link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                fourth link item</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h3 class="accordion-title">
                                        <a href="#">
                                            <img src="https://imgd.aeplcdn.com/0x0/n/cw/ec/8/brands/logos/hyundai.jpg?v=1629973193722"
                                                alt="Hyundai Logo" class="img-fluid" width="50" />
                                            <span>Hyundai</span>
                                        </a>
                                    </h3>
                                    <div class="accordion-content">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                second link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                third link item</a>
                                            <a href="#" class="list-group-item list-group-item-action">A
                                                fourth link item</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-md-12 margin-bottom-20 margin-top-20">
                            <button class="btn btn-theme rounded-4 btn-block" data-bs-target="#selectCar" data-bs-toggle="modal">Open second modal</button>
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
    <div class="modal-dialog modal-dialog-centered ">
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
            <div class="modal-footer">
                <div class="col-md-12 margin-bottom-20 margin-top-20">
                    <button type="button" data-bs-target="#selectBrand" data-bs-toggle="modal"
                        class="btn btn-theme rounded-4 btn-block rounded-3">Go Back</button>
                </div>
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
            <button class="btn btn-theme rounded-4 btn-lg btn-block">Register</button>
        </div>

    </div>
</div>





<script>
    document.querySelectorAll('.accordion-title a').forEach(item => {
        item.addEventListener('click', event => {
            event.preventDefault(); // Prevent the default action of the anchor tag
            const carBrandTitle = event.currentTarget.getAttribute('data-bs-title');
            const modalBodyInput = document.querySelector('#carBrand');
            modalBodyInput.value = carBrandTitle;
        });
    });

    const selectCarModal = document.getElementById('selectCar')
    if (selectCarModal) {
        selectCarModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget
            const carModelTitle = button.getAttribute('data-bs-title')
            const modalBodyInput = selectCarModal.querySelector('.modal-body #CarrName')

            modalBodyInput.value = carModelTitle
        })
    }
</script>

<script>
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('hidden.bs.modal', () => {
            const backdrops = document.querySelectorAll('.modal-backdrop');
            backdrops.forEach(backdrop => backdrop.remove());
        });
    });
</script>


@endsection
