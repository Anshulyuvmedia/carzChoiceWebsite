@extends('frontend.layouts.website')
@section('content')
@section('title', 'Reviews')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Latest Reviews & Ratings</h1>
                    </div>
                </div>
                <!-- Nav tabs -->
                <div class="card border-0  shadow-none mb-0 " style="background-color: #f6f6f6">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="nav-item ">
                            <a class="nav-link" aria-controls="All" href="/news">NEWS
                            </a>
                        </li>
                        <li role="presentation" class="nav-item active">
                            <a class="nav-link" aria-controls="Exterior" href="/reviews">REVIEWS</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="Interior" href="#SPECIALREPORTS">SPECIAL REPORTS</a>
                        </li>
                        <li role="presentation" class="nav-item ">
                            <a class="nav-link" aria-controls="Colours" href="/car-images">IMAGES</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" aria-controls="Colours" href="#VIDEOS">VIDEOS</a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding no-top reviews gray ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-12 col-xs-12 col-sm-12 news">
                    <div class="row">
                        <!-- Review Archive -->
                        <div class="posts-masonrys">
                            <!-- Review Post-->

                            <!-- Review Post-->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="mainimage">
                                    <span class="badge text-uppercase badge-overlay badge-tech">Road Test</span>
                                    <a>
                                        <img alt="" class="img-responsive"
                                            src="{{ asset('assets/frontend-assets/images/posting/9.jpg') }}">
                                        <div class="overlay small-font">
                                            <h2>2017 Audi A4 Allroad review: Skip the SUV, get a wagon</h2>
                                        </div>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- Review Post-->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="mainimage">
                                    <span class="badge text-uppercase badge-overlay badge-tech">Road Test</span>
                                    <a>
                                        <img alt="" class="img-responsive"
                                            src="{{ asset('assets/frontend-assets/images/posting/11.jpg') }}">
                                        <div class="overlay small-font">
                                            <h2>Mercedes-Benz SLK used review | 2004 - 2015</h2>
                                        </div>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- Review Post-->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="mainimage">
                                    <span class="badge text-uppercase badge-overlay badge-tech">Road Test</span>
                                    <a>
                                        <img alt="" class="img-responsive"
                                            src="{{ asset('assets/frontend-assets/images/posting/12.jpg') }}">
                                        <div class="overlay small-font">
                                            <h2>2016 BMW 330i GT review, test drive and performance </h2>
                                        </div>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- Review Post-->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="mainimage">
                                    <span class="badge text-uppercase badge-overlay badge-tech">Road Test</span>
                                    <a>
                                        <img alt="" class="img-responsive"
                                            src="{{ asset('assets/frontend-assets/images/posting/10.jpg') }}">
                                        <div class="overlay small-font">
                                            <h2>Honda HR-V VTi-L 2017 review long term video</h2>
                                        </div>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <ul class="pagination pagination-lg">
                                <li> <a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                                <li> <a href="#">1</a> </li>
                                <li class="active"> <a href="#">2</a> </li>
                                <li> <a href="#">3</a> </li>
                                <li> <a href="#">4</a> </li>
                                <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Row End -->
        </div>
        <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->

</div>
<!-- Main Content Area End -->

@endsection
