@extends('frontend.layouts.website')
@section('content')
@section('title', 'Buy Car Insurance')

<!-- =-=-=-=-=-=-= Home Banner 2 =-=-=-=-=-=-= -->
<section class="main-search parallex used-cars" style="height: 300px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="main-search-title text-center">
                    <h1>Buy or Renew your Car Insurance</h1>
                    <p>Fill <strong> your </strong>car details</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= Home Banner 2 End =-=-=-=-=-=-= -->

<section>
    <div class="main-content-area clearfix p-5 m-5">
        <div class="container">
            @if ($mymess = Session::get('success'))
            <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                <strong>{{ $mymess }}</strong>
            </div>
            @endif
            @if ($mymess = Session::get('error'))
            <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                <strong>{{ $mymess }}</strong>
            </div>
            @endif
            <form action="{{ route('requestinsurance') }}" method="POST">
                @csrf
                <div class="card p-5">
                    <div class="form-card">
                        <h2 class="text-center fw-bold" style="color: #037cef;">ENTER CAR DETAILS FOR BUY OR RENEW
                            INSURANCE
                        </h2>
                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <label>Brand Name <span class="color-red">*</span></label>
                                <select class="form-control rounded-0" id="dynamic_selectbrandname" name="brandname"
                                    required>
                                    <option value="">--select brand name--</option>
                                    @foreach ($brands as $row)
                                    <option value="{{ $row->label }}">
                                        {{ $row->label }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Car Name <span class="color-red">*</span></label>
                                <select class="form-control  rounded-0" name="carname" id="carnamelabel" required>
                                    <option value="">--select car name--</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label>Modal Name <span class="color-red">*</span></label>
                                <select class="form-control  rounded-0" name="modalname" id="carmodal" required>
                                    <option value="">--select modal name--</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <div class="form-group">
                                    <label>Select City</label>
                                    <select name="city" class="form-control  rounded-0 make">
                                        @foreach ($statedata as $row)
                                        <option value="{{ $row->District }}">{{ $row->District }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label>Registration Date<span class="color-red">*</span></label>
                                <input class="form-control  rounded-0" type="date" value="" name="registerdate"
                                    placeholder="registration date" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-card mt-5">
                        <h4 class="text-center fw-bold">Please provide your details so our insurance partner can reach
                            out to you about your inquiry.
                        </h4>
                        <div class="row">
                            <div class="col-lg-4 mt-3">
                                <label>Full Name<span class="text-danger">*</span></label>
                                <input class="form-control  rounded-0" type="text" value="" name="fullname"
                                    placeholder="enter your name" required />
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label>Email<span class="text-danger">*</span></label>
                                <input class="form-control  rounded-0" type="email" value="" name="emailaddress"
                                    placeholder="enter your email" required />
                            </div>
                            <div class="col-lg-4 mt-3">
                                <label>Phone Number<span class="text-danger">*</span></label>
                                <input class="form-control  rounded-0" type="text" value="" name="phonenumber"
                                    placeholder="enter your mobile number" required />
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-theme rounded-4">
                                Request a Callback
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(function() {
        $('#dynamic_selectbrandname').on('change', function() {
            var selectedbrandname = $(this).val();
            console.log(selectedbrandname);
            $.ajax({
                url: "/filterbrandname/" + selectedbrandname,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    var dropdown1 = $('#carnamelabel');
                    dropdown1.empty();
                    dropdown1.append($('<option selected>Choose...</option>'));
                    data.forEach(function(item) {
                        dropdown1.append($('<option value="' + item.carname + '">' +
                            item.carname +
                            '</option>'));
                    });
                }
            });
        });
    });

    $(function() {
        $('#carnamelabel').on('change', function() {
            var selectedcar = $(this).val();
            console.log(selectedcar);
            $.ajax({
                url: "/filtermodalname/" + selectedcar,
                type: "GET",
                success: function(response) {
                    console.log(response);
                    var dropdown1 = $('#carmodal');
                    dropdown1.empty();
                    dropdown1.append($('<option selected>Choose...</option>'));
                    response.forEach(function(item) {
                        dropdown1.append($('<option value="' + item.carmodalname +
                            '">' +
                            item.carmodalname +
                            '</option>'));
                    });
                }
            });
        });
    });
</script>
<script>
    //Dynamic State and Pincode Coming.............
    $(function() {
        $('#dynamic_selectdistrict').on('change', function() {
            var selecteddistrict = $(this).val();
            console.log(selecteddistrict);
            $.ajax({
                url: "/showstatepincode/" + selecteddistrict,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    $('#stateid').val(data.StateName);
                    $('#pincodeid').val(data.Pincode);
                }
            });
        });
    });
    setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
</script>
