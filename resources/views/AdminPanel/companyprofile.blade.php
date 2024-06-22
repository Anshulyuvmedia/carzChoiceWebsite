
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
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('updatecompanyprofile',['id'=>'1'])}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Company Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="company name" name="companyname"
                                        type="text" value="{{$data->companyname}}" id="example-text-input">
                                </div>
                                <input type="hidden" name="profileid" value="">
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
                                        value="{{$data->email}}" id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Phone Number</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="phone number" name="phonenumber" type="tel"
                                        value="{{$data->phonenumber}}" id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input"
                                    class="col-md-2 col-form-label">City/State/Province</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="city/state/province"
                                        name="citystateprovince" value="{{$data->citystateprovince}}" type="text"
                                        value="" id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Postal Code</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="postal code" name="postalcode" type="text"
                                        value="{{$data->postalcode}}" id="example-email-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Facebook URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="facebook url" name="fburl" type="url"
                                        value="{{$data->fburl}}" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Instagram URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="instagram url" name="igurl" type="url"
                                        value="{{$data->igurl}}" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Youtube URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="youtube url" name="yturl" type="url"
                                        value="{{$data->yturl}}" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Twitter URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="twitter url" name="twurl" type="url"
                                        value="{{$data->twurl}}" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Linkedin URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="linkedin url" name="linkurl" type="url"
                                        value="{{$data->linkurl}}" id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Full Address</label>
                                <div class="col-md-10">
                                    <textarea rows="3" name="address" class="form-control resize-none"
                                        placeholder="Your full address...">{{$data->address}}</textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        @if($data->companylogo)
                        <img src="{{ asset('storage/' . $data->companylogo) }}" class="img-fluid" alt="">
                        @else
                        <img src="{{ asset('storage/logos' . '/defaultuser.png') }}" class="img-fluid" alt="">
                        @endif
                    </div>
                </div>
            </div>
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
