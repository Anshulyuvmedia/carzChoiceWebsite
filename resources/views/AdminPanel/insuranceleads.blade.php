{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Insurance Leads')
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        {{-- <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-inline float-md-end mb-3">
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg"
                                        class="btn btn-success waves-effect waves-light"><i
                                            class="mdi mdi-plus me-2"></i> Add Lead</a>
                                </div>
                            </div>
                        </div> --}}
                        <table id="example" class="table   table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Registration Date</th>
                                    <th>Brand</th>
                                    <th>Carname</th>
                                    <th>Version</th>
                                    <th>City</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Mobileno</th>
                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($leads as $index => $row)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ \Carbon\Carbon::parse($row->registerdate)->format('d/M/y') }}</td>
                                        <td>{{ $row->brandname }}</td>
                                        <td>{{ $row->carname }}</td>
                                        <td>{{ $row->modalname }}</td>
                                        <td>{{ $row->city }}</td>
                                        <td>{{ $row->fullname }}</td>
                                        <td>{{ $row->emailaddress }}</td>
                                        <td>{{ $row->phonenumber }}</td>
                                        {{-- <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" onclick="confirmDelete('{{ $row->id }}')"
                                                        class="px-2 text-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Delete"><i
                                                            class="uil uil-trash-alt font-size-18"></i></a>
                                                </li>
                                            </ul>
                                        </td> --}}
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
     $(document).ready(function() {
        var datatableleads = $('#example').DataTable({
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    });


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
                    window.location.href = "/deleteenquiry/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }
</script>
@endpush
