{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Lead Management')
<div class="page-content">
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
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myLargeModalLabel">Insert Lead</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-3">
                            <div class="card-body">
                                <form action="{{ route('insertlead') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <div class="col-lg-4">
                                            <label for="example-text-input" class="">Full Name</label>
                                            <input class="form-control mb-3" placeholder="enter your fullname"
                                                name="fullname" type="text" value="" id="example-text-input"
                                                required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="example-search-input" class="">Mobile</label>
                                            <input class="form-control mb-3" placeholder="enter mobile no."
                                                name="mobile" type="tel" value="" id="example-search-input"
                                                required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="example-search-input" class="">Email</label>
                                            <input class="form-control mb-3" placeholder="enter email address"
                                                name="email" type="email" value="" id="example-search-input"
                                                required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="example-search-input" class="">City</label>
                                            <input class="form-control mb-3" placeholder="enter your city"
                                                name="city" type="text" value="" id="example-search-input"
                                                required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="example-search-input" class="">State</label>
                                            <input class="form-control" placeholder="enter your state" name="state"
                                                type="text" value="" id="example-search-input" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="">Select Vehicle</label>
                                            <select name="vehicle" class="form-select" id="" required>
                                                <option value="">--select vehicle--</option>
                                                <option value="a">a</option>
                                                <option value="b">b</option>
                                                <option value="c">c</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="example-email-input"
                                                class="col-md-2 col-form-label">Remarks</label>
                                            <textarea rows="3" name="remarks" class="form-control resize-none" placeholder="enter remarks..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 d-flex align-items-center justify-content-end">
                                        <button type="submit"
                                            class="btn btn-success waves-effect waves-light">Insert</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Date Range Filter</label>
                                        <div class="input-daterange input-group" id="datepicker6"
                                            data-date-format="dd M, yyyy" data-date-autoclose="true"
                                            data-provide="datepicker" data-date-container='#datepicker6'>
                                            <input type="text" class="form-control" name="startdate"
                                                id="startdate" placeholder="Start Date" />
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
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-inline float-md-end mb-3">
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg"
                                        class="btn btn-success waves-effect waves-light"><i
                                            class="mdi mdi-plus me-2"></i> Add Lead</a>
                                </div>
                            </div>
                        </div>
                        <table id="datatable-buttons" class="table   table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Lead Created</th>
                                    <th>Fullname</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Vehicle</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($leaddata as $index => $row)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $row->created_at->format('d/M/y') }}</td>
                                        <td>{{ $row->fullname }}</td>
                                        <td>{{ $row->mobile }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->city }}</td>
                                        <td>{{ $row->state }}</td>
                                        <td>{{ $row->vehicle }}</td>
                                        <td>
                                            <select name="status" class="form-select leadstatus"
                                                id="inputGroupSelect01_{{ $row->id }}" required>
                                                <option value="">--select lead status--</option>
                                                <option value="intrested"
                                                    {{ $row->leadstatus == 'intrested' ? 'selected' : '' }}>
                                                    Intrested
                                                </option>
                                                <option value="not intrested"
                                                    {{ $row->leadstatus == 'not intrested' ? 'selected' : '' }}>
                                                    Not
                                                    Intrested</option>
                                                <option value="cancel"
                                                    {{ $row->leadstatus == 'cancel' ? 'selected' : '' }}>Cancel
                                                </option>
                                                <option value="final"
                                                    {{ $row->leadstatus == 'final' ? 'selected' : '' }}>Final</option>
                                            </select>
                                            <input type="hidden" name="leadid" value="{{ $row->id }}"
                                                class="leadid">
                                        </td>
                                        <td>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#viewmodal"
                                                        data-record-view="{{ json_encode($row) }}"
                                                        class="px-2 text-primary viewbtnmodal"><i
                                                            class="uil-eye font-size-18" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            data-bs-title="View Details"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        data-record="{{ json_encode($row) }}"
                                                        class="px-2 text-primary editbtnmodal"><i
                                                            class="uil uil-pen font-size-18" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-title="Edit"></i></a>
                                                </li>
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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updatelead') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" id="modalbody">
                    {{-- Modal Body Appends here --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- View Modal --}}
<div class="modal fade" id="viewmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Lead Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" id="remarkform">
                @csrf
                <div class="modal-body" id="modalbodyview">
                    {{-- Modal Body Appends here --}}
                </div>
            </form>
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
                    window.location.href = "/deletelead/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }
</script>
<script>
    //Edit Functionality
    $('#table-body').on('click', '.editbtnmodal', function() {
        var recordId = $(this).data('record');
        console.log(recordId);
        $('#modalbody').empty();
        var modalbody = `
            <div class="p-3">
                            <div class="card-body">
                                    <div class="mb-3 row">
                                        <div class="col-lg-4">
                                            <label for="example-text-input" class="">Full Name</label>
                                            <input class="form-control mb-3" placeholder="enter your fullname" name="fullname"
                                                type="text" value="${recordId.fullname}" id="example-text-input" required>
                                            <input type="hidden" name="leadid" value="${recordId.id}" id="">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="example-search-input" class="">Mobile</label>
                                            <input class="form-control mb-3" placeholder="enter mobile no." name="mobile" type="tel"
                                               value="${recordId.mobile}" id="example-search-input" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="example-search-input" class="">Email</label>
                                            <input class="form-control mb-3" placeholder="enter email address" name="email"
                                                type="email"value="${recordId.email}" id="example-search-input" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="example-search-input" class="">City</label>
                                            <input class="form-control mb-3" placeholder="enter your city" name="city" type="text"
                                               value="${recordId.city}" id="example-search-input" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="example-search-input" class="">State</label>
                                            <input class="form-control" placeholder="enter your state" name="state" type="text"
                                                value="${recordId.state}" id="example-search-input" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="">Select Vehicle</label>
                                            <select name="vehicle" class="form-select" id="" required>
                                                <option value="" ${recordId.vehicle == '' ? 'selected' : ''}>--select vehicle--</option>
                                                <option value="a" value="" ${recordId.vehicle == 'a' ? 'selected' : ''}>a</option>
                                                <option value="b" value="" ${recordId.vehicle == 'b' ? 'selected' : ''}>b</option>
                                                <option value="c" value="" ${recordId.vehicle == 'c' ? 'selected' : ''}>c</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Remarks</label>
                                            <textarea rows="3" name="remarks" class="form-control resize-none"
                                                placeholder="enter remarks...">${recordId.remarks}</textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
        `;
        $('#modalbody').append(modalbody);
    });
</script>
<script>
    //View Functionality
    $('#table-body').on('click', '.viewbtnmodal', function() {
        var viewdata = $(this).data('record-view');
        console.log(viewdata);
        $('#modalbodyview').empty();
        $.ajax({
            url: '/getremarks/' + viewdata.id,
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('#dynamicul').empty();
                response.forEach(function(row) {
                    var formattedDate1 = new Date(row.created_at)
                        .toLocaleDateString('en-GB', {
                            day: 'numeric',
                            month: 'short',
                            year: 'numeric'
                        });

                    var dynaul = `<li>
                        <div class="conversation-list">
                            <div class="ctext-wrap">
                                <div class="ctext-wrap-content w-100">
                                    <h5 class="font-size-14 conversation-name">
                                        <span class="d-inline-block font-size-12 text-muted ms-2">${formattedDate1}</span>
                                    </h5>
                                    <p class="mb-0">${row.remarktext}</p>
                                </div>
                            </div>
                        </div>
                    </li>`;

                    $('#dynamicul').append(dynaul);
                });
            }
        });
        var formattedDate = new Date(viewdata.created_at)
            .toLocaleDateString('en-GB', {
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });
        var modalbodyview = `
            <div class="d-lg-flex mb-4">
                 <div class="chat-leftsidebar card">
            <div class="h-50">
                <div class="card-body">
                    <div class="text-center">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Full Name</th>
                                        <td>${viewdata.fullname}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mobile No.</th>
                                        <td>${viewdata.mobile}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>${viewdata.email}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">City</th>
                                        <td>${viewdata.city}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">State</th>
                                        <td>${viewdata.state}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Vehicle</th>
                                        <td>${viewdata.vehicle}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-1">
                <div class="card">
                <div class="p-3 px-lg-4 border-bottom">
                    <div class="row">
                    <div class="col-md-4 col-6">
                        <h5 class="font-size-16 mb-1 text-truncate">
                        <a href="#" class="text-reset">Remarks</a>
                        </h5>
                    </div>
                    </div>
                </div>
                <div>
                    <div class="chat-conversation py-3">
                    <ul
                        class="list-unstyled mb-0 chat-conversation-message px-3"
                        data-simplebar
                    id="dynamicul">

                    </ul>
                    </div>
                </div>

                <div class="p-3 chat-input-section">
                    <div class="row">
                    <div class="col">
                        <div class="position-relative">
                        <input
                            type="text"
                            name="remarktext"
                            class="form-control chat-input rounded"
                            placeholder="Enter Remark..."
                        />
                        <input
                            type="hidden"
                            name="leadid"
                            class="form-control chat-input rounded"
                            placeholder="Enter Remark..."
                            value="${viewdata.id}"
                        />
                        </div>
                    </div>
                    <div class="col-auto">
                        <button
                        type="submit"
                        class="btn btn-primary chat-send w-md waves-effect waves-light"
                        >
                        <span class="d-none d-sm-inline-block me-2">Insert</span>
                        <i class="mdi mdi-send float-end"></i>
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

        `;
        $('#modalbodyview').append(modalbodyview);
    });
</script>
<script>
    document.getElementById('remarkform').addEventListener('submit', function(event) {
        // alert("sfsdds");
        event.preventDefault();
        $.ajax({
            url: '/insertremarks',
            method: 'POST',
            data: jQuery('#remarkform').serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log(response);
                $('#dynamicul').empty();
                response.forEach(function(row) {
                    var formattedDate = new Date(row.created_at)
                        .toLocaleDateString('en-GB', {
                            day: 'numeric',
                            month: 'short',
                            year: 'numeric'
                        });

                    var dynaul = `<li>
                        <div class="conversation-list">
                            <div class="ctext-wrap">
                                <div class="ctext-wrap-content w-100">
                                    <h5 class="font-size-14 conversation-name">
                                        <span class="d-inline-block font-size-12 text-muted ms-2">${formattedDate}</span>
                                    </h5>
                                    <p class="mb-0">${row.remarktext}</p>
                                </div>
                            </div>
                        </div>
                    </li>`;

                    $('#dynamicul').append(dynaul);
                });
            }
        });
    });
</script>

{{-- Date Filter Functionality --}}
<script>
    $(document).ready(function() {

        $('.datebtn').on('click', function() {
            var datefrom = $('#startdate').val();
            var dateto = $('#enddate').val();
            console.log(datefrom, dateto);
            var dataTableCustomer = $('#datatable-buttons').DataTable();
            $.ajax({
                url: '/datefilterleads',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    datefrom: datefrom,
                    dateto: dateto,
                },
                success: function(response) {
                    console.log(response);
                    dataTableCustomer.clear().destroy();
                    $('#table-body').empty();
                    response.forEach(function(row) {
                        var formattedDate = new Date(row.created_at)
                            .toLocaleDateString('en-GB', {
                                day: 'numeric',
                                month: 'short',
                                year: 'numeric'
                            });

                        var newRow = `
                            <tr>
                                <th scope="row" class="fw-semibold">${row.id}</th>
                                <td>${formattedDate}</td>
                                <td>${row.fullname}</td>
                                <td>${row.mobile}</td>
                                <td>${row.email}</td>
                                <td>${row.city}</td>
                                <td>${row.state}</td>
                                <td>${row.vehicle}</td>
                               <td>
                                    <select class="form-select leadstatus" id="inputGroupSelect01_${row.id}">
                                        <option selected>Choose...</option>
                                        <option value="intrested" ${row.leadstatus == 'intrested' ? 'selected' : ''}>Interested</option>
                                        <option value="not intrested" ${row.leadstatus == 'not intrested' ? 'selected' : ''}>Not Interested</option>
                                        <option value="cancel" ${row.leadstatus == 'cancel' ? 'selected' : ''}>Cancel</option>
                                        <option value="final" ${row.leadstatus == 'final' ? 'selected' : ''}>Final</option>
                                    </select>
                                    <input type="hidden" name="leadid" value="${row.id}" class="leadid">
                                </td>
                                <td>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#viewmodal"
                                                data-record-view='${JSON.stringify(row)}'
                                                class="px-2 text-primary viewbtnmodal"><i
                                                    class="uil-eye font-size-18" data-bs-toggle="tooltip"
                                                    data-bs-placement="top"
                                                    data-bs-title="View Details"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"
                                                data-record='${JSON.stringify(row)}'
                                                class="px-2 text-primary editbtnmodal"><i
                                                    class="uil uil-pen font-size-18" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" data-bs-title="Edit"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" onclick="confirmDelete('${row.id}')"
                                                class="px-2 text-danger" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-title="Delete"><i
                                                    class="uil uil-trash-alt font-size-18"></i></a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>`;
                        $('#table-body').append(newRow);
                        $(`#inputGroupSelect01_${row.id}`).val(row.leadstatus);
                    });
                    dataTableCustomer = $("#datatable-buttons")
                        .DataTable({
                            lengthChange: !1,
                            buttons: ["copy", "excel", "pdf", "colvis"],
                        })
                        .buttons()
                        .container()
                        .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
                        $(".dataTables_length select").addClass(
                            "form-select form-select-sm");
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        var leadid;
        $('#table-body').on('change', '.leadstatus', function() {
            var selectedStatus = $(this).val();
            leadid = $(this).closest('tr').find('.leadid').val();
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
                        url: '/updateleadstatus',
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            status: selectedStatus,
                            record_id: leadid
                        },
                        success: function(response) {
                            if (response.success) {
                                swal("Success", "Lead status updated successfully.", "success");
                            } else {
                                swal("Error", "Failed to update Lead status.", "error");
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
