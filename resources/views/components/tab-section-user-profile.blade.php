<div class="row margin-top-40">
    <!-- Middle Content Area -->
    <div class="col-md-12 col-xs-12 col-sm-12">
        <!-- Row -->
        <div class="profile-section margin-bottom-20">
            <div class="profile-tabs">
                <ul class="nav nav-justified nav-tabs">
                    <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                    <li><a href="#edit" data-toggle="tab">Edit Profile</a></li>
                    <li><a href="#payment" data-toggle="tab">Change Password</a></li>
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
                            <dt><strong>City </strong></dt>
                            <dd>
                                Ajmer
                            </dd>
                            <dt><strong>You are a </strong></dt>
                            <dd>
                                Customer
                            </dd>
                            <dt><strong>Address </strong></dt>
                            <dd>
                                Ajmer,Rajasthan
                            </dd>
                        </dl>
                    </div>
                    <div class="profile-edit tab-pane fade" id="edit">
                        <h2 class="heading-md">Edit your Profile</h2>
                        <p>Details Below</p>
                        <div class="clearfix"></div>
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>Your Name </label>
                                    <input type="text" class="form-control margin-bottom-20" value="{{$user->fullname}}"
                                        disabled>
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
                                <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                    <label>Country <span class="color-red">*</span></label>
                                    <select class="form-control">
                                        <option value="0">SriLanka</option>
                                        <option value="1">Australia</option>
                                        <option value="2">Bahrain</option>
                                        <option value="3">Canada</option>
                                        <option value="4">Denmark</option>
                                        <option value="5">Germany</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                    <label>City <span class="color-red">*</span></label>
                                    <select class="form-control">
                                        <option value="0">London</option>
                                        <option value="1">Edinburgh</option>
                                        <option value="2">Wales</option>
                                        <option value="3">Cardiff</option>
                                        <option value="4">Bradford</option>
                                        <option value="5">Cambridge</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>Address <span class="color-red">*</span></label>
                                    <textarea class="form-control margin-bottom-20" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="row margin-bottom-20">
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Browse… <input type="file" id="imgInp">
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
                                    <button type="submit" class="btn btn-theme btn-sm">Update My Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="profile-edit tab-pane fade" id="payment">
                        <h2 class="heading-md">Manage your Package Settings</h2>
                        <p>Below are the payment options for your account.</p>
                        <br>
                        <form action="#" id="sky-form" class="sky-form" novalidate>
                            <!--Checkout-Form-->
                            <dl class="dl-horizontal">
                                <dt><strong>Current Plan</strong></dt>
                                <dd>
                                    Premium
                                </dd>
                                <dt><strong>Expiration Date </strong></dt>
                                <dd>
                                    2nd January 2017
                                </dd>
                            </dl>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 margin-bottom-20">
                                    <label>Select Plan You Want To Change<span class="color-red">*</span></label>
                                    <select class="form-control">
                                        <option value="0">Free</option>
                                        <option value="1">Premium</option>
                                        <option value="2">Advanced</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-default" type="button">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                            <!--End Checkout-Form-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Middle Content Area  End -->
</div>
