@extends('frontend.layouts.website')
@section('content')
@section('title', 'News Details')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">{{ $blogdata->categorytype }} </a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>{{ $blogdata->blogtitle }}</h1>
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
    <section class="section-padding no-top gray ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Middle Content Area -->
                <div class="col-md-8 col-xs-12 col-sm-12">

                    <div class="comment-info">
                        {{-- <img class="pull-left hidden-xs img-circle" width="40"
                            src="{{ asset('assets/backend-assets/images/' . $blogdata->blogimg) }}" alt="author"> --}}
                        <div class="author-desc ms-0">
                            <div class="author-title">
                                <strong>By Carz Choice</strong>
                                <ul class="list-inline pull-right">
                                    <li> <i class="bi bi-eye"></i></li>
                                    <li>19,371 Views</li>
                                </ul>
                            </div>
                            <small>{{ $blogdata->formatted_date }}</small>
                        </div>
                    </div>
                    <div class="blog-detial">
                        <!-- Blog Archive -->
                        <div class="blog-post">
                            <div class="post-img">
                                <a href="{{ asset('assets/backend-assets/images/' . $blogdata->blogimg) }}"
                                    data-fancybox="group">
                                    <img class="img-responsive large-img" alt={{ $blogdata->carname }}
                                        src="{{ asset('assets/backend-assets/images/' . $blogdata->blogimg) }}">
                                </a>


                            </div>
                            
                            <h3 class="post-title fs-3"> {{ $blogdata->blogtitle }}
                            </h3>
                            <div class="post-excerpt">
                                <p>
                                    {{ $blogdata->description }}
                                </p>
                                <p>
                                    {!! $blogdata->blogpost !!}
                                </p>
                            </div>
                            <div class="post-info">Tag: {{ $blogdata->carname }} </div>
                        </div>
                        <!-- Blog Grid -->
                    </div>
                </div>
                <!-- Right Sidebar -->
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <!-- Sidebar Widgets -->
                    <div class="blog-sidebar shadow-none">

                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-fill border-0" role="tablist">
                                <li role="presentation" class="nav-item active">
                                    <a class="nav-link" aria-controls="cars" role="tab" data-toggle="tab"
                                        href="#cars">Cars </a>
                                </li>
                                <li role="presentation" class="nav-item">
                                    <a class="nav-link" aria-controls="brands" role="tab" data-toggle="tab"
                                        href="#brands">Brands</a>
                                </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content clearfix px-2">
                                <div class="tab-pane fade in active p-0" id="cars">
                                    <!-- Middle Content Box -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 p-0">
                                        <div class="px-0 blog-slider container owl-carousel owl-theme">


                                            @foreach ($variantdata as $data)
                                                <div class="item">
                                                    <div class="grid-style-2">
                                                        <div class="col-md-12 col-xs-12 col-sm-12 pe-2">
                                                            <div class="category-grid-box-1">
                                                                <div class="featured-ribbon">
                                                                    <span>Trending</span>
                                                                </div>
                                                                <div class="image">
                                                                    <img alt="Carz Choice"
                                                                        src="{{ asset('assets/backend-assets/images/' . $imagesdata[0]) }}"
                                                                        class="img-responsive">
                                                                    <div class="ribbon popular"></div>

                                                                </div>
                                                                <div class="short-description-1 clearfix">

                                                                    <h3>
                                                                        <a title="" href="#">
                                                                            {{ $data->brandname }}
                                                                            {{ $data->carname }}
                                                                        </a>
                                                                    </h3>
                                                                    <div class="ad-price">Rs. {{ $data->price }}
                                                                        <span class="text-muted ps-2">onwards</span>
                                                                    </div>

                                                                    <p class="location">
                                                                        <i class="fa fa-map-marker"></i>
                                                                        On-Road Price, Delhi
                                                                    </p>

                                                                    <a class=""
                                                                        href="{{ route('carlistingdetails', ['id' => $data->id]) }}">
                                                                        <button
                                                                            class="btn btn-theme rounded-4 btn-sm  ">
                                                                            <i class="fa fa-phone"></i>
                                                                            View Details.
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
                                <div class="tab-pane fade in  p-0" id="brands">
                                    <!-- Middle Content Box -->
                                    <div class="col-md-12 col-xs-12 col-sm-12 p-0">
                                        @php
                                            use App\Models\Master;
                                            $brands = Master::where('type', 'Brand')->get();
                                            // $bodytype = Master::where('type', 'Body Type')->get();
                                        @endphp
                                        <ul class="by-make d-flex flex-wrap justify-content-evenly">
                                            @foreach ($brands->take(12) as $data)
                                                <li class="border m-2">
                                                    <a href="javascript:void(0);" class="brandfilter" data-value="{{ $data->value }}">
                                                        <img src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}"
                                                            class="img-responsive" alt="Brand Image" width="100">
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Tags -->
                            <div class="widget border-0">
                                <div class="widget-heading">
                                    <h4 class="panel-title"><a>Sign up for our Newsletter
                                        </a></h4>
                                </div>
                                <div class="widget-content">
                                    Get all the latest updates from the automobile universe
                                    <div class="col-md-12 mb-3 px-0">
                                        <input class="form-control rounded-3" placeholder="Enter Your Email ID"
                                            type="text">
                                    </div>
                                    <button class="btn btn-theme rounded-4 rounded-3 w-100">Submit</button>
                                </div>
                            </div>

                            @if ($blogdata->embed_url)
                                <div class="widget">


                                    <div class="widget-heading">
                                        <h4 class="panel-title"><a>Popular Videos</a></h4>
                                    </div>
                                    <div class="widget-content recent-ads">
                                        <div>
                                            <iframe width="560" height="315" src="{{ $blogdata->embed_url }}"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            
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

@endsection
