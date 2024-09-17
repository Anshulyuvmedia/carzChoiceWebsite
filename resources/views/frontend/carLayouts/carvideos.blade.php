@extends('frontend.layouts.website')
@section('content')
@section('title', 'Car Videos')

<!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
<section class="page-header-area-2 ">
    <!-- Main Container -->
    <div class="container featured-cars">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    <h1>Images</h1>
                    <p>
                        View car images of all models in India. All latest cars have hundreds of photos of their
                        interior, exterior and 360-degree views.
                    </p>
                </div>
            </div>

            <div class="card ">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li role="presentation" class="nav-item ">
                        <a class="nav-link" aria-controls="All" href="/news">NEWS
                        </a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="Exterior" href="/reviews">REVIEWS</a>
                    </li>
                    <li role="presentation" class="nav-item ">
                        <a class="nav-link" aria-controls="Colours" href="/car-images">IMAGES</a>
                    </li>
                    <li role="presentation" class="nav-item active">
                        <a class="nav-link" aria-controls="Colours" href="/car-videos">VIDEOS</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content clearfix">
                    <div class="tab-pane fade in active" style="margin-top: 20px;" id="All">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class=" featured-slider owl-carousel owl-theme">
                                    @foreach ($allcarvideos as $data)
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="category-grid-box-1">
                                                        <div class="image">
                                                            @if ($data->videourl)
                                                                {{-- <a  href="/car-view-images/{{$data->vehicle}}?type=All"> --}}
                                                                    <iframe width="560" height="200" src="{{$data->videourl}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                                {{-- </a> --}}
                                                            @endif
                                                        </div>
                                                        <div class="short-description-1 clearfix">
                                                            <h3>
                                                                <a href="/car-view-images/{{$data->vehicle}}?type=All">
                                                                    {{$data->brandname}} {{$data->vehicle}}
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="justify-content-around">
                                    {{ $allcarvideos->links('pagination::bootstrap-5') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
