{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'All Enquiries')
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
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Date Range Filter</label>
                                        <div class="input-daterange input-group" id="datepicker6"
                                            data-date-format="dd M, yyyy" data-date-autoclose="true"
                                            data-provide="datepicker" data-date-container='#datepicker6'>
                                            <input type="text" class="form-control" name="startdate" id="startdate"
                                                placeholder="Start Date" />
                                            <input type="text" class="form-control" name="enddate" id="enddate"
                                                placeholder="End Date" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-success add-btn datebtn"><i
                                                class="ri-search-eye-line align-bottom me-1"></i>Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
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
                                    <th>Lead Date</th>
                                    <th>Carname & Modal</th>
                                    <th>Enquiry Type</th>
                                    <th>City</th>
                                    <th>Full Name</th>
                                    <th>Mobileno</th>
                                    <th>Enquiry Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($allenquiries as $index => $row)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $row->created_at->format('d/M/y') }}</td>
                                        @if ($row->enquirytype == 'oldcar')
                                            <td>N/A</td>
                                        @else
                                            <td>{{ $row->carname }}</td>
                                        @endif
                                        <td>{{ $row->enquirytype }}</td>
                                        <td>{{ $row->city }}</td>
                                        <td>{{ $row->fullname }}</td>
                                        <td>{{ $row->mobileno }}</td>
                                        <td>
                                            <select name="enquirystatus" class="form-select enquirystatus"
                                                id="inputGroupSelect01_{{ $row->id }}" required>
                                                <option value="">--select enquiry status--</option>
                                                <option value="intrested"  {{ $row->enquirystatus == 'intrested' ? 'selected' : '' }}>
                                                    Intrested
                                                </option>
                                                <option value="not intrested"
                                                    {{ $row->enquirystatus == 'not intrested' ? 'selected' : '' }}>
                                                    Not
                                                    Intrested</option>
                                                <option value="cancel"
                                                    {{ $row->enquirystatus == 'cancel' ? 'selected' : '' }}>Cancel
                                                </option>
                                                <option value="final"
                                                    {{ $row->enquirystatus == 'final' ? 'selected' : '' }}>Final
                                                </option>
                                            </select>
                                            <input type="hidden" name="enquiryid" value="{{ $row->id }}"
                                                class="enquiryid">
                                        </td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" onclick="confirmDelete('{{ $row->id }}')"
                                                        class="px-2 text-danger" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-bs-title="Delete"><i
                                                            class="uil uil-trash-alt font-size-18"></i></a>
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
<script>
    $(document).ready(function() {
        var leadid;
        $('#table-body').on('change', '.enquirystatus', function() {
            var selectedStatus = $(this).val();
            enquiryid = $(this).closest('tr').find('.enquiryid').val();
            swal({
                    title: "Update Lead Status",
                    text: "Are you sure you want to update the lead status?",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willUpdate) => {
                    if (willUpdate) {
                        $.ajax({
                            url: '/updateenquirystatus',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                status: selectedStatus,
                                record_id: enquiryid
                            },
                            success: function(response) {
                                if (response.success) {
                                    swal("Success",
                                        "Enquiry status updated successfully.",
                                        "success");
                                } else {
                                    swal("Error", "Failed to update Enquiry status.",
                                        "error");
                                }
                            },
                            error: function() {
                                swal("Error", "An error occurred.", "error");
                            }
                        });
                    }
                });
        });
    });
</script>
@endpush
