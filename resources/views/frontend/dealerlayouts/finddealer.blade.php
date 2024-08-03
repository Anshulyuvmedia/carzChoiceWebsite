@extends('frontend.layouts.website')
@section('content')
@section('title', 'Find Dealer')


<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">

                    <div class="header-page">
                        <h1>Find Dealer</h1>
                        <p>Explore 4499+ best priced used cars near you in Mumbai at Carz Choice. Also, explore emi
                            options and other services on used cars with 156+ used car dealers in Mumbai. Carz Choice
                            simplifies your second hand car buying process by helping you choose best used car dealers
                            for your used car need.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group p-2">
                    <label>Select City to Filter : </label>
                    <select name="cartype" class="form-control make" id="filterdealercity">
                        @foreach ($statedata as $row)
                        <option value="{{ $row->District }}">{{ $row->District }}</option>
                        @endforeach
                    </select>
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

                        <div class="" id="dealersdiv">
                            @foreach ($dealers as $data)
                            <div class="ads-list-archive" >
                                <div class="col-lg-12 col-md-12 col-sm-12 no-padding">
                                    <div class="ad-archive-desc">
                                        <div class="d-flex justify-content-between ">
                                            <div class="">
                                                <a href="/dealer-profile">
                                                    <h3>{{$data->businessname}}</h3>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="category-title fs-4">
                                            {{$data->district}} {{$data->state}} - {{$data->pincode}}
                                        </div>
                                        <div class="fw-bold fs-4 text-dark">Cars Available: <span class=""> 31+
                                                used cars available at dealership</span></div>
                                        <div class="d-flex mt-3">
                                            <div class="me-3">
                                                <a href="{{ route('dealerprofile',['id' => $data->id])}}">
                                                    <div class="btn btn-danger btn-sm rounded-3">View Detials</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="#">
                                                    <div class="btn btn-theme rounded-4 btn-sm  rounded-3">
                                                        <i class="bi bi-telephone"></i>
                                                        {{$data->mobilenumber}}
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
{{--
<div class="modal fade" id="selectLocation" aria-hidden="true" aria-labelledby="selectBrandlabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title " id="selectBrandlabel">Select Your City </h3>
                <div class="header-bg"></div>
            </div>

            <div class="modal-body">
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

                                        <img src="https://imgd.aeplcdn.com/0x0/n/o0ik3sa_1483600.jpg" alt="Navi Mumbai">
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

                                        <img src="https://imgd.aeplcdn.com/0x0/n/u5jk3sa_1483602.jpg" alt="Chandigarh">
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
</div> --}}
@endsection
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
{{-- Dealers by City Filter --}}
<script>
    $(document).ready(function() {
        $('#filterdealercity').on('change', function() {
            const city = $('#filterdealercity').val();
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
                                                <a href="/dealer-profile">
                                                    <div class="btn btn-danger btn-sm rounded-3">View Detials</div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="tel:{{$data->mobilenumber}}">
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
                                                <a href="tel:{{$data->mobilenumber}}">
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
