{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'All Dealers')
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
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-3">
                                    <label class="">Brand Name</label>
                                    <select name="brandname" class="form-select mb-3" id="dynamic_selectbrandname"
                                        required>
                                        <option value="">--select brand--</option>
                                        @foreach ($masterdata as $row)
                                            <option value="{{ $row->value }}">{{ $row->value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class="">City</label>
                                    <select name="cityname" class="form-select mb-3" id="dynamic_selectcity" required>
                                        <option value="">--select city--</option>
                                        @foreach ($statedata as $row)
                                            <option value="{{ $row->District }}">{{ $row->District }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center">
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-success add-btn searchbtn"><i
                                                class="ri-search-eye-line align-bottom me-1"></i>Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="example" class="table  table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Business Name</th>
                                    <th>Brands for Deal</th>
                                    <th>Dealer Type</th>
                                    <th>Mobile No</th>
                                    <th>Whatsapp No</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tablebody">
                                @foreach ($registereddealers as $index => $row)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $row->businessname }}</td>
                                        <td>{{ implode(', ', json_decode($row->brands)) }}</td>
                                        <td>{{ $row->dealertype }}</td>
                                        <td>{{ $row->mobilenumber }}</td>
                                        <td>{{ $row->whatsappnumber }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->state }}/{{ $row->district }}/{{ $row->pincode }}</td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" onclick="confirmDelete('{{ $row->id }}')"
                                                        class="px-2 text-danger"><i
                                                            class="uil uil-trash-alt font-size-18"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Delete User"></i></a>
                                                </li>
                                            </ul>
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
