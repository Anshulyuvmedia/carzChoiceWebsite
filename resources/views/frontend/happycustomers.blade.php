@extends('frontend.layouts.website')
@section('content')
@section('title', 'Happy Customers')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">Happy Customers</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>Happy Customers</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="main-content-area clearfix">
    <section class="section-padding no-top gray ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="well alert-box-container margin-top-20">
                        <h3> All Reviews ({{ $countofreviews }})</h3>
                        @foreach ($allreviews as $rew)
                        <div class="row mx-1">
                            <div class="border shadow-sm rounded-3 p-4 pb-5 mt-3">
                            <div class="col-md-4">
                                <img src="{{asset('/assets/backend-assets/images/'.$rew->reviewimg)}}" alt="">
                            </div>
                            <div class="col-md-8">
                                    <div class="p-2">
                                        <h3>{{ $rew->vehicle }}</h3>
                                        <div class="d-flex">
                                            @for ($n = 1; $n <= 5; $n++) @if ($n <=$rew->ratings)
                                                <i class="bi bi-star-fill text-success"></i>
                                                @else
                                                <i class="bi bi-star text-secondary"></i>
                                                @endif
                                                @endfor
                                        </div>
                                        <div class="fs-5">
                                            <span class="me-2">{{ $rew->created_at->diffForHumans() }}</span>
                                            |
                                            <span class="ms-2">{{ $rew->customerfullname }}</span>
                                        </div>
                                        <div>
                                            <p>{{ $rew->discription }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="justify-content-around">
                            {{ $allreviews->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection

