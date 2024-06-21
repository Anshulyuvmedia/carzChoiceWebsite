{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Company Profile')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Company Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                            <li class="breadcrumb-item active">Company Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('storecompanyprofile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Company Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="company name" name="companyname"
                                        type="text" value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Company Logo</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="company name" name="companylogo"
                                        type="file" value="" id="example-search-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="email address" name="email" type="email"
                                        value="" id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Phone Number</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="phone number" name="phonenumber" type="tel"
                                        value="" id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input"
                                    class="col-md-2 col-form-label">City/State/Province</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="city/state/province"
                                        name="citystateprovince" type="text" value="" id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Postal Code</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="postal code" name="postalcode" type="text"
                                        value="" id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Facebook URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="facebook url" name="fburl" type="url"
                                        value="" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Instagram URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="instagram url" name="igurl" type="url"
                                        value="" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Youtube URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="youtube url" name="yturl" type="url"
                                        value="" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Twitter URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="twitter url" name="twurl" type="url"
                                        value="" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Linkedin URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="linkedin url" name="linkurl" type="url"
                                        value="" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Full Address</label>
                                <div class="col-md-10">
                                    <textarea rows="3" name="address" class="form-control resize-none"
                                        placeholder="Your full address..."></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
@endsection
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
@endpush
