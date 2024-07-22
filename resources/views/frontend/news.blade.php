@extends('frontend.layouts.website')
@section('content')
@section('title', 'News')


<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Latest News & Trends</h1>
                    </div>
                </div>
                <!-- Nav tabs -->
                <div class="card border-0  shadow-none mb-0 " style="background-color: #f6f6f6">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="nav-item active">
                            <a class="nav-link" aria-controls="All" href="/news">NEWS
                            </a>
                        </li>
                        <li role="presentation" class="nav-item">
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
<div class="main-content-area clearfix">
    <section class="section-padding no-top gray ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="posts-masonry">
                            @foreach ($blogdata as $data)
                                <div class="col-md-3 col-sm-6 col-xs-12">

                                    <div class="blog-post">
                                        <div class="post-img">
                                            @if ($data->blogimg)
                                                <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                    <img class="img-responsive"
                                                        src="{{ asset('assets/backend-assets/images/' . $data->blogimg) }}"
                                                        alt="Thumbnail" />
                                                </a>
                                            @endif

                                        </div>
                                        <div class="post-info">
                                            <h3 class="post-title text-black">
                                                <a
                                                    href={{ route('newsdetails', ['id' => $data->id]) }}>{{ $data->blogtitle }}</a>
                                            </h3>
                                            <div>

                                                <span class="post-excerpt">
                                                    By Admin
                                                </span>
                                                <span
                                                    class="pull-right ">{{ $data->created_at->format('F d, Y') }}</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="justify-content-around">
                            {{ $blogdata->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
