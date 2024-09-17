@extends('frontend.layouts.website')
@section('content')
@section('title', 'Reviews')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 ">
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

            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding no-top reviews  ">
        <!-- Main Container -->
        <div class="container card">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-12 col-xs-12 col-sm-12 news">
                    <!-- Nav tabs -->
                    <div class="card border-0  shadow-none mb-0 ">
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="nav-item ">
                                <a class="nav-link" aria-controls="All" href="/news">NEWS
                                </a>
                            </li>
                            <li role="presentation" class="nav-item active">
                                <a class="nav-link" aria-controls="Exterior" href="/reviews">REVIEWS</a>
                            </li>
                            <li role="presentation" class="nav-item ">
                                <a class="nav-link" aria-controls="Colours" href="/car-images">IMAGES</a>
                            </li>
                            <li role="presentation" class="nav-item">
                                <a class="nav-link" aria-controls="Colours" href="/car-videos">VIDEOS</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <!-- Review Archive -->
                    <div class="posts-masonrys">
                        <!-- Review Post-->
                        @foreach ($reviewdata as $data)
                            <!-- Review Post-->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="mainimage">
                                    <span
                                        class="badge text-uppercase badge-overlay badge-tech">{{ $data->carname }}</span>

                                    <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                        @if ($data->blogimg)
                                            <img class="img-responsive"
                                                src="{{ asset('assets/backend-assets/images/' . $data->blogimg) }}"
                                                alt="Thumbnail" />
                                        @endif
                                        <div class="overlay small-font">
                                            <h2>{{ $data->blogtitle }}</h2>
                                        </div>
                                    </a>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- Review Post-->
                        @endforeach
                    </div>
                </div>
                <div class="justify-content-around">
                    {{ $reviewdata->links('pagination::bootstrap-5') }}
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
