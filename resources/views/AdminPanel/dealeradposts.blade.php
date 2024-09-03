{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'My Cars')
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
                        <table id="example" class="table  table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Carname</th>
                                    <th>Version</th>
                                    <th>Price</th>
                                    <th>Owners</th>
                                    <th>Color</th>
                                    <th>Insurance</th>
                                    <th>Register Type</th>
                                    <th>Registration Year</th>
                                    <th>Activation Status</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($adposts as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->brandname }} {{ $row->carname }}</td>
                                    <td>{{ $row->modalname }}</td>
                                    <td>{{ $row->price }}</td>
                                    <td>{{ $row->ownernumbers }}</td>
                                    <td>{{ $row->color }}</td>
                                    <td>{{ $row->insurance }}</td>
                                    <td>{{ $row->registertype }}</td>
                                    <td>{{ $row->registeryear }}</td>
                                    <td>
                                        <select name="status" class="form-select leadstatus" id="" required>
                                            <option value="">--change activation status--</option>
                                            <option value="Activated" {{ $row->activationstatus == 'Activated' ?
                                                'selected' : '' }}>Activated</option>
                                            <option value="Deactivated" {{ $row->activationstatus == 'Deactivated' ?
                                                'selected' : '' }}>Deactivated</option>
                                        </select>
                                    </td>
                                    <input type="hidden" name="activationid" value="{{ $row->id }}" class="activationid">
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
{{--Updating Activation Status--}}
<script>
    $(document).ready(function() {
        var activationid;
        $('#table-body').on('change', '.leadstatus', function() {
            var selectedStatus = $(this).val();
            activationid = $(this).closest('tr').find('.activationid').val();
            console.log(activationid);
            swal({
                    title: "Update Activation Status",
                    text: "Are you sure you want to update the Activation status?",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willUpdate) => {
                    if (willUpdate) {
                        $.ajax({
                            url: '/updateactivationstatus',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                status: selectedStatus,
                                record_id: activationid
                            },
                            success: function(response) {
                                if (response.success) {
                                    swal("Success", "Activation status updated successfully.",
                                        "success");
                                } else {
                                    swal("Error", "Failed to update Activation status.",
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
