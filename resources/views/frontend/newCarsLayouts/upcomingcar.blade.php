@extends('frontend.layouts.website')
@section('content')
@section('title', 'Upcoming Car ')


<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">

                    <div class="header-page">
                        <h1>Upcoming Cars</h1>
                        <p>More than 75 upcoming cars that will launch in India are covered here. All these new upcoming
                            cars are listed with their expected launch date and estimated launch price. The popular
                            upcoming car is Kia Carnival whereas the most recent upcoming electric car is Tata Harrier
                            EV.</p>
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
            <div class="col-md-8 col-lg-8 col-sx-12 ">
                <div class="header-page mb-2">
                    <h1 class="text-dark fs-3 fw-bold">Upcoming Cars in India 2024</h1>
                </div>
                <!-- Row -->
                <div class="row">

                    <div class="clearfix"></div>
                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 ">
                        <div class="clearfix"></div>
                        <div class="listingTopFilterBar rounded-4 shadow-sm ">
                            <div class="col-md-6 col-xs-12 col-sm-5 ">
                                <div class="header-listing">
                                    <h6>Filter by :</h6>
                                    <div class="custom-select-box">
                                        <select class="form-control rounded-4 " id="brandselect" name="brandname">
                                            <option value=""> Select brand name</option>
                                            @foreach ($brands as $row)
                                            <option value="{{ $row->label }}">{{ $row->label }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 col-sm-5 ">
                                <div class="header-listing">
                                    <h6>Sort by :</h6>
                                    <div class="custom-select-box">
                                        <select name="order" class="custom-select form-control rounded-4">
                                            <option value="0">Most popular</option>
                                            <option value="1">The latest</option>
                                            <option value="2">The best rating</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sorting Filters End-->
                    <div class="clearfix"></div>
                    <!-- Ads Archive -->
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        <div class="posts-masonry" id="upcomingcardsdiv">
                            @foreach ($matchesupcoming as $data)
                            <div class="ads-list-archive card">
                                <div class="col-lg-4 col-md-4 col-sm-4 no-padding">
                                    <div class="ad-archive-img">
                                        <a href="#">
                                            <img class="img-responsive"
                                                src="{{ asset('assets/backend-assets/images/'.$data->addimage) }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-lg-8 col-md-8 col-sm-8 no-padding">
                                    <div class="ad-archive-desc ">
                                        <!-- Title -->
                                        <a href="#">
                                            <h3> {{$data->brandname}} {{$data->carname}}</h3>
                                        </a>

                                        <!-- Price -->
                                        <div class="ad-price-simple fs-3">Rs. {{$data->price}}<span
                                                class="fs-5 text-dark"> Estimated Price </span></div>
                                        <!-- Ad History -->
                                        <div class="category-title">Expected launch - June 2025 (Tentative)</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Pagination -->
                    {{-- <div class="justify-content-around">
                        {{ $matchesupcoming->links('pagination::bootstrap-5') }}
                    </div> --}}
                    <!-- Pagination End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Middle Content Area  End -->
            <!-- Left Sidebar -->
            <div class="col-md-4 col-sx-12">

                <div class="header-page mb-2">
                    <h1 class="text-dark fs-3 fw-bold">Car Buyer's Tools</h1>
                </div>
                <!-- Sidebar Widgets -->
                <div class="sidebar">
                    <!-- Panel group -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- Latest Ads Panel -->
                        <div class="panel panel-default rounded-4">
                           
                            <!-- Content -->
                            <div class="panel-collapse">
                                <div class="panel-body recent-ads">
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/locate-dealer.svg"
                                                        alt="">
                                                </a><!-- /.recent-ads-list-image-inner -->
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Locate Dealer </a>
                                                </h3>
                                                <div class="recent-ads-list-location">
                                                    Find a dealer near your current location
                                                </div>

                                                <!-- /.recent-ads-list-price -->
                                            </div>
                                            <!-- /.recent-ads-list-content -->
                                        </div>
                                        <!-- /.recent-ads-container -->
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/used-car.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Used Cars</a>
                                                </h3>

                                                <div class="recent-ads-list-location">
                                                    Explore best priced used cars in good conditions near you
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('#brandselect').on('change', function() {
    var selectedbrand = $(this).val();
    console.log(selectedbrand);
    $.ajax({
        type: 'GET',
        url: '/getupcomingvehiclebybrands/' + selectedbrand,
        success: function(response) {
            console.log(response);
            var data = response.data;
            $('#upcomingcardsdiv').empty();
            data.forEach(function(item) {
                var newdiv = `
                    <div class="ads-list-archive">
                        <div class="col-lg-4 col-md-4 col-sm-4 no-padding">
                            <div class="ad-archive-img">
                                <a href="#">
                                    <img class="img-responsive"
                                        src="{{ asset('assets/backend-assets/images/${item.addimage}') }}"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-8 col-md-8 col-sm-8 no-padding">
                            <div class="ad-archive-desc">
                                <!-- Title -->
                                <a href="">
                                    <h3> ${item.brandname} ${item.carname}</h3>
                                </a>
                                <!-- Price -->
                                <div class="ad-price-simple fs-3">Rs. ${item.price}<span
                                        class="fs-5 text-dark">Estimated Price </span></div>
                                <!-- Ad History -->
                                <div class="category-title">Expected launch - June 2025 (Tentative)</div>
                            </div>
                        </div>
                    </div>
                `;
                $('#upcomingcardsdiv').append(newdiv);
            });
        }
    });
});
</script>
@endsection
