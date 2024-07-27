@extends('frontend.layouts.website')
@section('content')
@section('title', 'Registration')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">Registration</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-area clearfix">

    <section class="section-padding no-top gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    @if ($mymess = Session::get('successtest'))
                    <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                        <strong>{{ $mymess }}</strong>
                    </div>
                    @endif
                    @if ($mymess = Session::get('failuretest'))
                    <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                        <strong>{{ $mymess }}</strong>
                    </div>
                    @endif
                    <div class="">
                        <div class="card p-5 shadow-lg rounded-5">
                            <div class="">
                                <div class="header-page d-flex justify-content-center">
                                    <h2 class="fw-bold">Create Your Account</h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="registerform">
                                    <div class="d-flex justify-content-center mt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="usertype"
                                                id="inlineRadio1" value="User">
                                            <label class="form-check-label fw-bold fs-4" for="inlineRadio1">User</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="usertype"
                                                id="inlineRadio2" value="Dealer">
                                            <label class="form-check-label fw-bold fs-4" for="inlineRadio2">Dealer</label>
                                        </div>
                                    </div>
                                    @csrf
                                    <div class="form-group">
                                        <label for="fullname" class="fs-4">Full Name</label>
                                        <input id="fullname" placeholder="Enter full name" type="text"
                                            class="form-control" name="fullname" value="">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-4">Contact Number <span class="text-danger fs-4">(Must be
                                                Unique)</span></label>
                                        <input placeholder="Enter Your Contact Number" name="contactno"
                                            class="form-control" type="text">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-4">Email <span class="text-danger fs-4">(Must be Unique)</span></label>
                                        <input placeholder="Your Email" name="email" class="form-control" type="email">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="fs-4">Password</label>
                                        <input placeholder="Your Password" name="password" class="form-control"
                                            type="password">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="skin-minimal">
                                                    <ul class="list">
                                                        <li>
                                                            <input type="checkbox" id="minimal-checkbox-1">
                                                            <label for="minimal-checkbox-1">I agree <a href="#">Terms of
                                                                    Services</a></label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-theme btn-lg btn-block">Register</button>
                            </div>
                            </form>
                        </div>

                        <form action="{{ route('verifyregisterotp') }}" method="POST" id="registerotpform"
                            style="display: none;">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Enter OTP</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control border-danger" maxlength="1"
                                            pattern="[0-9]" name="otptest1" title="Please enter a number." required>
                                        <input type="hidden" name="registerid" value="" id="registerid">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control border-danger" maxlength="1"
                                            pattern="[0-9]" name="otptest2" title="Please enter a number." required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control border-danger" maxlength="1"
                                            pattern="[0-9]" name="otptest3" title="Please enter a number." required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control border-danger" maxlength="1"
                                            pattern="[0-9]" name="otptest4" title="Please enter a number." required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control border-danger" maxlength="1"
                                            pattern="[0-9]" name="otptest5" title="Please enter a number." required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control border-danger" maxlength="1"
                                            pattern="[0-9]" name="otptest6" title="Please enter a number." required>
                                    </div>
                                </div>
                                <div class="mt-3 mb-3">
                                    <button type="submit" class="btn btn-theme btn-lg btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

<!-- Main Content Area End -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@push('scripts')
@if (session('success'))
<script>
    swal("Success", "{{ session('success') }}", "success");
</script>
@endif

@if (session('error'))
<script>
    swal("Error", "{{ session('error') }}", "error");
</script>
@endif
<script>
    jQuery('#registerform').submit(function(e) {
    e.preventDefault();
    var data = jQuery('#registerform').serialize();
    console.log(data);
    console.log("hello");
    jQuery.ajax({
        url: "{{ url('register_customer') }}",
        data: data,
        type: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            console.log(data);
            if (data.msg == 'success') {
                jQuery('#registerform').hide();
                jQuery('#registerotpform').show();
                jQuery('#registerid').val(data.data.id);
            }
        },
        error: function(xhr) {
            if (xhr.status === 422) {
                var errors = xhr.responseJSON.errors;
                console.log(errors);
                jQuery.each(errors, function(key, value) {
                    var input = jQuery('input[name=' + key + ']');
                    input.addClass('is-invalid');
                    input.next('.invalid-feedback').remove();
                    input.after('<div class="invalid-feedback">' + value[0] + '</div>');
                });
            }
        }
    });
});

setTimeout(function() {
            $('#successAlert').fadeOut('slow');
        }, 2000);

        setTimeout(function() {
            $('#dangerAlert').fadeOut('slow');
        }, 2000);
</script>
@endpush
