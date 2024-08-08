{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Dealer Details')
<div class="page-content">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <style>
        table.dataTable th.dt-type-numeric,
        table.dataTable th.dt-type-date,
        table.dataTable td.dt-type-numeric,
        table.dataTable td.dt-type-date {
            text-align: left !important;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>&nbsp;/
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('registerdealer') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-3">
                                    <label class="">Select Dealer Type</label>
                                    <select name="dealertype" class="form-select" id="subcategory">
                                        <option value="">--select type--</option>
                                        <option value="New Car Dealer">New Car Dealer</option>
                                        <option value="Old Car Dealer">Old Car Dealer</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Business Name</label>
                                    <input class="form-control" placeholder="enter business name" name="businessname" type="text"
                                        value="" id="example-text-input" >
                                </div>
                                <div class="col-lg-3">
                                    <label>Brands</label>
                                    <select name="brands[]" class="select2 form-control select2-multiple mb-3"
                                        multiple="multiple" data-placeholder="brands...">
                                        <option value="All">All</option>
                                        @foreach ($brands as $data)
                                            <option value="{{$data->value}}">{{$data->value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label>Mobile No<span class="color-red">*</span></label>
                                        <input type="text" class="form-control margin-bottom-20" value="" name="mobilenumber"
                                            placeholder="enter mobile number" required>
                                </div>
                                <div class="col-lg-3 mt-3">
                                    <label>WhatsApp No<span class="color-red">*</span></label>
                                    <input type="text" class="form-control margin-bottom-20" value="" name="whatsappnumber"
                                        placeholder="enter whatsapp no" required>
                                </div>
                                <div class="col-lg-3 mt-3">
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
                                <div class="col-lg-3 mt-3">
                                    <label class="fieldlabels">State</label>
                                    <input  class="form-control" type="text" value="" id="stateiddealer" name="state"
                                        placeholder="state" required />
                                </div>
                                <div class="col-lg-3 mt-3">
                                    <label class="fieldlabels">Pincode</label>
                                    <input  class="form-control" type="text" value="" id="pincodeiddealer" name="pincode"
                                        placeholder="pincode" required />
                                </div>
                                <div class="col-lg-3 mt-3">
                                    <label class="fieldlabels">Email</label>
                                    <input  class="form-control" type="email" value="" id="pincodeid" name="email"
                                        placeholder="email" required />
                                </div>
                                <div class="col-lg-3 mt-3">
                                    <label class="fieldlabels">Upload Business Documents</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3 mt-3">
                                    <label class="fieldlabels">Upload Office Photos</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-items-end mt-3">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                                </div>
                            </div>
                        </form>
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
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function confirmDelete(id) {
        let smiley = '😊';
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "/deletedealer/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            },

        });
    });
</script>
{{-- Brand and City Filter --}}
<script>
    $(document).ready(function() {
        $('.searchbtn').on('click', function() {

            const brand = $('#dynamic_selectbrandname').val();
            const city = $('#dynamic_selectcity').val();

            //Here is AJAX Code...
            if (brand && city) {

                $.ajax({
                    url: '/filterdealers',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        brandname: brand,
                        cityname: city
                    },
                    success: function(response) {
                        console.log(response);
                        $('#tablebody').empty();
                        response.forEach(function(row, index) {
                            let brandsArray = Array.isArray(row.brands) ? row.brands : JSON.parse(row.brands || '[]');
                            var newtr = `
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${row.businessname}</td>
                                    <td>${brandsArray.join(', ')}</td>
                                    <td>${row.dealertype}</td>
                                    <td>${row.mobilenumber}</td>
                                    <td>${row.whatsappnumber}</td>
                                    <td>${row.email}</td>
                                    <td>${row.state}/${row.district}/${row.pincode}</td>
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" onclick="confirmDelete('${row.id}')" class="px-2 text-danger">
                                                    <i class="uil uil-trash-alt font-size-18" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete User"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            `;
                            $('#tablebody').append(newtr);
                        });
                    },
                });

            }

        });
    });
</script>
@endpush
