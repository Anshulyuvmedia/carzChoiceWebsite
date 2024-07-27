@extends('frontend.layouts.website')
@section('content')
@section('title', 'User Login')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class=" breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">Login</a></li>
                        </ul>
                    </div>
                    <div class="header-page d-flex justify-content-center">
                        <h1>Sign In to your account </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-area clearfix">
    <section class="section-padding no-top gray">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="form-grid">
                        @if ($message = Session::get('success'))
                        <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        @if ($message = Session::get('failure'))
                        <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <form action="{{ route('loginuser') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                <input placeholder="Your Email" name="email" class="form-control" type="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input placeholder="Your Password" name="password" class="form-control" type="password">
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
                                    <div class="col-xs-12 col-sm-5 text-right">
                                        <p class="help-block"><a data-target="#myModal" data-toggle="modal">Forgot
                                                password?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-theme rounded-4 btn-lg btn-block">Login With Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Forget Password -->
<div class="custom-modal">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header rte">
                    <h2 class="modal-title">Forgot Your Password ?</h2>
                </div>
                <form id="resetform">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input placeholder="Enter a valid phone number" class="form-control" type="tel"
                                maxlength="10" name="phonenumber" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Reset My Account</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
                <div class="p-4">
                    <form action="{{ route('verifyotp') }}" method="POST" id="loginformotp" style="display: none;">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Enter 6-Digit OTP</label>
                            <div class="row">
                                @for ($i = 1; $i <= 6; $i++) <div class="col">
                                    <input type="text" class="form-control border-danger" maxlength="1" pattern="[0-9]"
                                        name="otptest{{ $i }}" title="Please enter a number." required>
                                    </div>
                                    @endfor
                            <input type="hidden" name="registerid" value="" id="registerid">
                        </div>
                        <div class="mt-3 mb-3">
                            <button type="submit" class="btn btn-theme rounded-4 btn-lg btn-block">Verify</button>
                        </div>
                </div>
                </form>
            </div>
            <div class="p-4">
                <form action="{{ route('updatePassword') }}" method="POST"  id="newpasswordform" style="display: none;">
                    @csrf
                    <div class="form-group">
                        <label>New Password</label>
                        <input placeholder="Your Password" name="newpassword" class="form-control" type="password">
                        <div class="invalid-feedback"></div>
                        <input type="hidden" name="otpuserid" value="" id="otpuserid">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input placeholder="Your Password" name="confirmpassword" class="form-control" type="password">
                        <div class="invalid-feedback"></div>
                    </div>
                    <button type="submit" class="btn btn-theme rounded-4 btn-lg btn-block">Update Password</button>
                </form>
            </div>

        </div>
    </div>
</div>
</div>
<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 2000);

    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 2000);
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    jQuery('#resetform').submit(function(e) {
        e.preventDefault();
        var data = jQuery('#resetform').serialize();
        jQuery.ajax({
            url: "{{ url('resetpassworduser') }}",
            data: data,
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                if (data.msg == 'success') {
                    jQuery('#resetform').hide();
                    jQuery('#loginformotp').show();
                    jQuery('#registerid').val(data.data.id);
                }
            }
        });
    });

    jQuery('#loginformotp').submit(function(e) {
        e.preventDefault();
        var data = jQuery('#loginformotp').serialize();
        jQuery.ajax({
            url: "{{ url('verifyotp') }}",
            data: data,
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                console.log(data);
                if (data.msg == 'success') {
                    jQuery('#loginformotp').hide();
                    jQuery('#newpasswordform').show();
                    jQuery('#otpuserid').val(data.data.id)

                }
            }
        });
    });
</script>
@endsection
