@extends('frontend.layouts.website')
@section('content')
@section('title', 'Dealer Profile')


<!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
<section class="section-padding no-top gray pt-5">
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


                    <div class="ads-list-archive">
                        <div class="clearfix visible-xs-block"></div>
                        <!-- Content Block -->
                        <div class="col-lg-12 col-md-12 col-sm-12 no-padding">

                            <div class="ad-archive-desc">
                                <!-- Title -->
                                <div class="border-bottom mb-4">
                                    <h1 class="text-dark fw-bold">{{$dealerdetails->businessname}}</h1>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis doloremque nulla unde praesentium soluta ab, officia distinctio quia totam enim itaque inventore saepe veritatis maiores. Dignissimos ab reiciendis reprehenderit odio?</p>
                                </div>
                                <!-- Details -->
                                <div>
                                    <h3 class="fw-bold">
                                        Contact Details
                                    </h3>
                                    <div class=" fs-4  my-4 text-black">
                                        <i class="bi bi-geo-alt"></i>
                                        {{$dealerdetails->district}} {{$dealerdetails->state}} - {{$dealerdetails->pincode}}
                                    </div>
                                    <div class=" fs-4  my-4 text-black">
                                        <i class="bi bi-envelope"></i>
                                        Email: {{$dealerdetails->email}}
                                    </div>
                                    <div class=" fs-4  my-4 text-black">
                                        <i class="bi bi-key"></i>
                                        Cars Available: 55+ used cars available
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
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
                            <h1 class="text-dark fs-3 fw-bold">Used Car Dealers in Popular Cities</h1>
                        </div>

                        <div class="list-group ">
                            <a data-city="Mumbai" class="list-group-item list-group-item-action popularecityfilter">
                                Mumbai <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Bangalore" class="list-group-item list-group-item-action popularecityfilter">
                                Bangalore <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Delhi" class="list-group-item list-group-item-action popularecityfilter">
                                Delhi <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Pune" class="list-group-item list-group-item-action popularecityfilter">
                                Pune <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Navi Mumbai" class="list-group-item list-group-item-action popularecityfilter">
                                Navi Mumbai <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Hyderabad" class="list-group-item list-group-item-action popularecityfilter">
                                Hyderabad <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Ahmedabad" class="list-group-item list-group-item-action popularecityfilter">
                                Ahmedabad <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Chennai" class="list-group-item list-group-item-action popularecityfilter">
                                Chennai <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Kolkata" class="list-group-item list-group-item-action popularecityfilter">
                                Kolkata <span class="pull-right"><i class="bi bi-chevron-right"></i></span>
                            </a>
                            <a data-city="Chandigarh" class="list-group-item list-group-item-action popularecityfilter">
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
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/icons/svg/tools/sell-car.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Sell Car</a>
                                                </h3>
                                                <div class="recent-ads-list-location">
                                                    Sell your car at the best price, quickly and hassle free way
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Ads -->
                                    <div class="recent-ads-list">
                                        <div class="recent-ads-container">
                                            <div class="recent-ads-list-image">
                                                <a href="#" class="recent-ads-list-image-inner">
                                                    <img src="https://imgd.aeplcdn.com/0x0/cw/static/used_car_valuation.svg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <!-- /.recent-ads-list-image -->
                                            <div class="recent-ads-list-content">
                                                <h3 class="recent-ads-list-title">
                                                    <a href="#">Used Car Valuation</a>
                                                </h3>

                                                <div class="recent-ads-list-location">
                                                    Check the price of a used car with our calculator
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                                                    <a href="#">Explore Used Cars</a>
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
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
     $(document).ready(function() {
        $('.popularecityfilter').on('click', function() {
            const city = $(this).data('city');
            console.log(city);

            //Here is AJAX Code...
            if (city) {
                $.ajax({
                    url: '/filterdealersbycity/' + city,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        console.log(response);
                        $('#dealersdiv').empty();
                        response.forEach(function(row) {
                            var div = `
                             <div class="ads-list-archive" >
                             <div class="clearfix visible-xs-block"></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
                                    <div class="ad-archive-desc">
                                        <div class="d-flex justify-content-between ">
                                            <div class="">
                                                <a href="/dealer-profile">
                                                    <h3>${row.businessname}</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="category-title fs-4">
                                            ${row.district} ${row.district} - ${row.pincode}
                                        </div>
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="/dealer-profile/${row.id}">
                                                    <div class="btn btn-danger btn-sm rounded-3">View Detials</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        ${row.mobilenumber}
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            `;
                            $('#dealersdiv').append(div);
                        });
                    },
                });
            }
        });
    });
</script>
