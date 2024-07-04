@extends('frontend.layouts.website')
@section('content')
@section('title', 'User Active Ads')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">Profile</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>User Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-area clearfix">
    <section class="custom-padding no-top gray">
        <div class="container">
            <!--This is Main Card Profile-->
            @include('components.main-profile-card')
            <div class="row margin-top-40 grid-style-2 ">
                <div class="col-md-12 col-sm-12 col-xs-12 text-right mb-5">
                    <a href="{{ route('addadshow') }}">
                        <button type="submit" class="btn btn-theme btn-sm"><i class="fa fa-plus"></i>&nbsp;Add Ad
                            Post</button>
                    </a>
                </div>
                @foreach ($adposts as $data)
                @php
                $imagearray = json_decode($data->images, true);
                @endphp
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="category-grid-box-1">
                        <div class="featured-ribbon">
                            <span>{{$data->created_at->format('d/m/y')}}</span>
                        </div>
                        <div class="image">
                            <img alt="Carz Choice" src="{{ asset($imagearray[0]['imageurl']) }}" class="img-responsive" style=" aspect-ratio: 16/9;">
                            <div class="ribbon popular"></div>
                            <div class="price-tag">
                                <div class="price"><span>{{$data->price}}</span></div>
                            </div>
                            <div class="notification msgs">
                                <a class="round-btn" href="javascript:void(0);"><i class="fa fa-envelope-o"></i></a>
                                <span>7</span>
                            </div>
                        </div>
                        <div class="short-description-1 clearfix">
                            <div class="category-title"> <span><a href="#">{{$data->brandname}}</a></span> </div>
                            <h3><a title="" class="fs-3" href="#">{{$data->carname}}</a></h3>
                            <p class="location"><i class="fa fa-map-marker"></i>{{$data->modalname}}</p>
                            <ul class="list-unstyled">
                                <li><a href="javascript:void(0)" class="fs-4"><i
                                            class="flaticon-gas-station-1"></i>{{$data->fueltype}}</a></li>
                                <li><a href="javascript:void(0)" class="fs-4"><i
                                            class="flaticon-dashboard"></i>{{$data->kilometersdriven}} km</a></li>
                                <li><a href="javascript:void(0)" class="fs-4"><i
                                            class="flaticon-engine-2"></i>{{$data->transmissiontype}}</a></li>
                                <li><a href="javascript:void(0)" class="fs-4"><i class="flaticon-car-2"></i>{{$data->insurance}}</a>
                                </li>
                                <li><a href="javascript:void(0)" class="fs-4"><i
                                            class="flaticon-cogwheel-outline"></i>{{$data->color}}</a></li>
                            </ul>
                        </div>
                        <div class="ad-info-1">
                            <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                            <ul class="pull-right">
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="Add Features" data-original-title="Add Features" href="#"><i class="fa fa-plus text-success"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tooltip" data-placement="top" title="Edit this Ad"
                                        data-original-title="Edit this Ad" href="{{ route('editadshow', ['id' => $data->id]) }}"><i
                                            class="fa fa-pencil  text-primary"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tooltip" onclick="confirmDelete('{{ $data->id }}')" data-placement="top" title="Delete" data-original-title="Delete" href="#"><i class="fa fa-times delete"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
<script>
    function confirmDelete(id) {
        let smiley = '😊';
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = "/deleteadpost/" + id;
            }else {
                swal("Great Decision....!! Your data is safe! " + smiley);
            }
        });
    }
</script>
@endsection
