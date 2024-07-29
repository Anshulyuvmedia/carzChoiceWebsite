<div class="row margin-top-40">
    <!-- Middle Content Area -->
    <div class="col-md-12 col-xs-12 col-sm-12">
        @if ($message = Session::get('success'))
        <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="profile-section margin-bottom-20">
            <div class="profile-tabs">
                <ul class="nav nav-justified nav-tabs">
                    <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                    <li><a href="#edit" data-toggle="tab">Edit Profile</a></li>
                    <li><a href="#payment" data-toggle="tab">Change Password</a></li>
                    @if (Auth::guard('registeruser')->check() && Auth::guard('registeruser')->user()->usertype !=
                    'Dealer')
                    <li><a href="#registrationdealer" data-toggle="tab">Register as a dealer</a></li>
                    @endif
                </ul>
                <div class="tab-content">
                    <div class="profile-edit tab-pane fade in active" id="profile">
                        <dl class="dl-horizontal">
                            <dt><strong>Your name </strong></dt>
                            <dd>
                                {{$user->fullname}}
                            </dd>
                            <dt><strong>Email Address </strong></dt>
                            <dd>
                                {{$user->email}}
                            </dd>
                            <dt><strong>Phone Number </strong></dt>
                            <dd>
                                {{"+91-".$user->contactno}}
                            </dd>
                            <dt><strong>Country </strong></dt>
                            <dd>
                                India
                            </dd>
                            <dt><strong>District </strong></dt>
                            <dd>
                                {{$user->district}}
                            </dd>
                            <dt><strong>Pincode </strong></dt>
                            <dd>
                                {{$user->pincode}}
                            </dd>
                            <dt><strong>Address </strong></dt>
                            <dd>
                                {{$user->addresss}}
                            </dd>
                        </dl>
                    </div>
                    <div class="profile-edit tab-pane fade" id="edit">
                        <h2 class="heading-md">Edit your Profile</h2>
                        <p>Details Below</p>
                        <div class="clearfix"></div>
                        <form action="{{ route('edituserprofile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>Your Name </label>
                                    <input type="text" class="form-control margin-bottom-20" value="{{$user->fullname}}"
                                        disabled>
                                    <input type="hidden" name="userid" value="{{$user->id}}">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>Email Address <span class="color-red">*</span></label>
                                    <input type="text" class="form-control margin-bottom-20" value="{{$user->email}}"
                                        disabled>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>Contact Number <span class="color-red">*</span></label>
                                    <input type="text" class="form-control margin-bottom-20"
                                        value="{{$user->contactno}}" disabled>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 margin-bottom-20">
                                    <label>District <span class="color-red">*</span></label>
                                    <select class="form-control" id="dynamic_select" name="district">
                                        <option value="">--select district--</option>
                                        @foreach ($statedata as $row)
                                        <option value="{{$row->District}}" {{ $row->District == $user->district ?
                                            'selected' : '' }}>{{ $row->District }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label>State</label>
                                    <input type="text" placeholder="your state" class="form-control margin-bottom-20"
                                        value="{{$user->state}}" readonly id="stateid" name="state">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label>Pincode</label>
                                    <input type="text" placeholder="your pincode" class="form-control margin-bottom-20"
                                        value="{{$user->pincode}}" id="pincodeid" name="pincode">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>Address <span class="color-red">*</span></label>
                                    <textarea name="addresss" class="form-control margin-bottom-20"
                                        rows="3">{{$user->addresss}}</textarea>
                                </div>
                            </div>
                            <div class="row margin-bottom-20">
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Browse… <input type="file" id="imgInp" name="dp">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <img id="img-upload" class="img-responsive" src="images/users/2.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="form-group">
                                        <div class="skin-minimal">
                                            <ul class="list">
                                                <li>
                                                    <input type="checkbox" id="minimal-checkbox-7">
                                                    <label for="minimal-checkbox-7">i agree <a href="#">Terms of
                                                            Services</a></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                    <button type="submit" class="btn btn-theme rounded-4 btn-sm">Update My Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="profile-edit tab-pane fade" id="payment">
                        <h2 class="heading-md">Change your Password</h2>
                        <p>Enter details to change</p>
                        <br>
                        <form action="{{ route('changeuserpassword') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label>Old Password</label>
                                    <input type="text" class="form-control margin-bottom-20" value="" name="oldpassword"
                                        placeholder="old passoword">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label>New Passoword <span class="color-red">*</span></label>
                                    <input type="text" class="form-control margin-bottom-20" value="" name="newpassword"
                                        placeholder="new passoword" required>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label>Confirm Password</label>
                                    <input type="text" placeholder="confirm passoword"
                                        class="form-control margin-bottom-20" value="" id="" name="confirmpassword"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                <button type="submit" class="btn btn-theme rounded-4 btn-sm">Change My Password</button>
                            </div>
                        </form>
                    </div>




                    @if (Auth::guard('registeruser')->check() && Auth::guard('registeruser')->user()->usertype !='Dealer')
                        <div class="profile-edit tab-pane fade" id="registrationdealer">
                            <h2 class="heading-md">Register yourself as a dealer</h2>
                            <p>Enter details to register</p>
                            <br>
                            <form action="{{ route('registerdealer') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex justify-content-start mt-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="dealertype"
                                            id="inlineRadio1" value="New Car Dealer">
                                        <label class="form-check-label fw-bold fs-4" for="inlineRadio1">New Car Dealer</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="dealertype"
                                            id="inlineRadio2" value="Old Car Dealer">
                                        <label class="form-check-label fw-bold fs-4"
                                            for="inlineRadio2">Old Car Dealer</label>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>Business Name</label>
                                        <input type="text" class="form-control margin-bottom-20" value="" name="businessname"
                                            placeholder="enter business name">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>Brands</label>
                                        <select name="brands[]" class="select2 form-control select2-multiple mb-3"
                                            multiple="multiple" data-placeholder="brands...">
                                            <option value="All">All</option>
                                            @foreach ($brands as $data)
                                                <option value="{{$data->value}}">{{$data->value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>Mobile No<span class="color-red">*</span></label>
                                        <input type="text" class="form-control margin-bottom-20" value="" name="mobilenumber"
                                            placeholder="enter mobile number" required>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <label>WhatsApp No<span class="color-red">*</span></label>
                                        <input type="text" class="form-control margin-bottom-20" value="" name="whatsappnumber"
                                            placeholder="enter whatsapp no" required>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <label>District <span class="color-red">*</span></label>
                                        <select class="form-control" id="dynamic_selectdistrict" name="district"
                                            required>
                                            <option value="">--select district--</option>
                                            @foreach ($statedata as $row)
                                                <option value="{{ $row->District }}">{{ $row->District }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <label class="fieldlabels">State</label>
                                        <input  class="form-control" type="text" value="" id="stateiddealer" name="state"
                                            placeholder="state" required />
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <label class="fieldlabels">Pincode</label>
                                        <input  class="form-control" type="text" value="" id="pincodeiddealer" name="pincode"
                                            placeholder="pincode" required />
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <label class="fieldlabels">Email</label>
                                        <input  class="form-control" type="email" value="" id="pincodeid" name="email"
                                            placeholder="email" required />
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <label class="fieldlabels">Upload Business Documents</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Browse… <input type="file" multiple id="imgInp" name="businesspics[]">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3">
                                        <label class="fieldlabels">Upload Office Photos</label>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Browse… <input type="file" multiple id="imgInp" name="officepics[]">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right mt-4">
                                        <button type="submit" class="btn btn-theme rounded-4 btn-sm">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @else
                        <div class="profile-edit tab-pane fade" id="registrationdealer">
                            <div>
                                <p class="text-center">You're already registered as dealer</p>
                            </div>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(function() {
        $('#dynamic_select').on('change', function() {
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
</script>
<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 2000);

    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 2000);
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
                    $('#stateiddealer').val(data.StateName);
                    $('#pincodeiddealer').val(data.Pincode);
                }
            });
        });
    });
</script>
