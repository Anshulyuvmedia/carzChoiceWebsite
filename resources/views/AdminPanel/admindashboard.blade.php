
{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Dashboard | CarzChoice')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">@yield('title')</a></li>&nbsp;/
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-2 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div> <i class="fa fa-users fs-2 text-success" aria-hidden="true"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$registeruserscount}}</span></h4>
                            <p class="text-muted mb-0">Registered Users</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div> <i class="fa fa-users fs-2 text-success" aria-hidden="true"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$dealerscount}}</span></h4>
                            <p class="text-muted mb-0">Registered Dealers</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div> <i class="fa fa-book fs-2 text-success" aria-hidden="true"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$Leadscount}}</span></h4>
                            <p class="text-muted mb-0">All Leads</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">

                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div> <i class="fas fa-car-side fs-2 text-success"></i> </div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1"><span data-plugin="counterup">{{$allvariants}}</span></h4>
                            <p class="text-muted mb-0">All Variants</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Registered Users</h4>
                        <div data-simplebar style="max-height: 339px;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-centered hover table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">User Type</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registeredusers as $index => $users)
                                        <tr>
                                            <th scope="row">{{$index + 1}}</th>
                                            <td><a href="#" class="text-reset ">{{$users->fullname}}</a></td>
                                            <td>{{$users->contactno}}</td>
                                            <td>{{$users->usertype}}</td>
                                            <td>
                                                @if($users->verifystatus == 1)
                                                <span
                                                    class="badge bg-success-subtle text-success font-size-12">Verified</span>
                                                @else
                                                <span class="badge bg-danger-subtle text-danger font-size-12">Not
                                                    Verified</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Registered Dealers</h4>
                        <div data-simplebar style="max-height: 339px;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-centered hover table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Profile</th>
                                            <th scope="col">Business Name</th>
                                            <th scope="col">Dealer Type</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registereddealers as $index => $users)
                                        <tr>
                                            <th scope="row"><img width="20px" height="20px" class="rounded"
                                                    src="{{$users->businesspics}}" alt="">
                                            </th>
                                            <td><a href="#" class="text-reset ">{{$users->businessname}}</a></td>
                                            <td>{{$users->dealertype}}</td>
                                            <td>{{$users->mobilenumber}}</td>
                                            <td>{{$users->district}}/{{$users->state}}-{{$users->pincode}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Loan Enquiries</h4>
                        <div data-simplebar style="max-height: 339px;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-centered hover table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Car Name</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Enquiry Type</th>
                                            <th scope="col">Contact</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($loanenquiries as $index => $users)
                                        <tr>
                                            <th scope="row">{{$index + 1}}</th>
                                            @if ($users->enquirytype == 'oldcar')
                                            <td>N/A</td>
                                            @else
                                            <td>{{$users->carname}}</td>
                                            @endif
                                            <td>{{$users->fullname}}</td>
                                            <td>{{$users->enquirytype}}</td>
                                            <td>{{$users->mobileno}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Insurance Enquiries</h4>
                        <div data-simplebar style="max-height: 339px;">
                            <div class="table-responsive">
                                <table class="table table-bordered table-centered hover table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Car Name</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($insuranceenq as $index => $users)
                                        <tr>
                                            <th scope="row">{{$index + 1}}</th>
                                            <td>{{$users->carname}}</td>
                                            <td>{{$users->fullname}}</td>
                                            <td>{{$users->phonenumber}}</td>
                                            <td>{{$users->city}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
