{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'All Reviews')
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
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-inline  mb-3">
                                    <a href="{{ route('viewreviews') }}"
                                        class="btn btn-success waves-effect waves-light">Add New Review</a>
                                </div>
                            </div>
                        </div>
                        <table id="example" class="table   table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Upload Date</th>
                                    <th>Vehicle</th>
                                    <th>Customer Name</th>
                                    <th>Ratings</th>
                                    <th>Discription</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($allreviews as $index => $row)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $row->created_at->format('d/M/y')}}&nbsp;&nbsp;<span class="text-secondary fs-6">({{ $row->created_at->diffForHumans()}})</span></td>
                                        <td>{{ $row->vehicle }}</td>
                                        <td>{{ $row->customerfullname }}</td>
                                        <td>{{ $row->ratings }} ⭐</td>
                                        <td>{{ substr($row->discription, 0,50) }}....</td>
                                        <td>
                                            <ul class="list-inline mb-0">
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
                                                        class="px-2 text-danger"><i
                                                            class="uil uil-trash-alt font-size-18"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-title="Delete Review"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updatereviews') }}" method="POST" enctype="multipart/form-data">
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
                    window.location.href = "/deletereview/" + id;
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
<script>
    //Edit Functionality of Reviews
    var alldata = @json($allreviews);
    var variantdata = @json($variantdata);
    $(document).ready(function() {
        $('#table-body').on('click', '.editbtnmodal', function() {
            var reviewdata = $(this).data('record');
            console.log(reviewdata.vehicle);
            $('#modalbody').empty();


            var vehicleoptions = `<option value="">--select vehicle--</option>`;
            if (reviewdata != null) {
                variantdata.forEach(function(row) {
                    var fullVehicleName =
                        `${row.brandname} ${row.carname} (${row.carmodalname})`;
                     console.log("Full Vehicle Name: ", fullVehicleName);

                    vehicleoptions += `
                    <option value="${fullVehicleName.trim()}" ${fullVehicleName.trim() === reviewdata.vehicle.trim() ? 'selected' : ''}>
                        ${fullVehicleName}
                    </option>`;
                });
            }

            var modalbody = `
                <div class="card-body">
                    <div class="mb-3 row">
                        <div class="col-lg-6">
                            <div>
                             <label class="">Select Vehicle</label>
                                <select name="vehicle" class="form-select" id="" required>
                                    ${vehicleoptions}
                                </select>
                            </div>
                            <div class="mt-3">
                                <label class="">Ratings</label>
                                    <select name="ratings" class="form-select" id="" required>
                                        <option value="">--give rating--</option>
                                        <option value="1" ${1==reviewdata.ratings? 'selected' : ''}>1</option>
                                        <option value="2" ${2==reviewdata.ratings? 'selected' : ''}>2</option>
                                        <option value="3" ${3==reviewdata.ratings? 'selected' : ''}>3</option>
                                        <option value="4" ${4==reviewdata.ratings? 'selected' : ''}>4</option>
                                        <option value="5" ${5==reviewdata.ratings? 'selected' : ''}>5</option>
                                    </select>
                            </div>
                            <div class="mt-3">
                                <label for="example-text-input" class="">Customer Full Name</label>
                                <input class="form-control mb-3" placeholder="enter your fullname"
                                    name="customerfullname" type="text" value="${reviewdata.customerfullname}" id="example-text-input" required>
                            </div>
                            <input type="hidden" name="reviewid" value="${reviewdata.id}" id="">
                        </div>

                        <div class="col-lg-6">
                        <label>Upload Review Image</label>
                        <input class="form-control mb-3"  name="reviewimg" type="file">
                        ${reviewdata.reviewimg ? `<img src="/assets/backend-assets/images/${reviewdata.reviewimg}" alt="Review Image" class="img-thumbnail" style="max-width: 100%;">` : ''}
                    </div>

                        <div class="col-lg-12">
                            <label for="example-email-input" class="col-md-2 col-form-label">Review
                                Discription</label>
                            <textarea rows="3" name="discription" class="form-control resize-none"
                                placeholder="enter remarks...">${reviewdata.discription}</textarea>
                        </div>
                    </div>
                </div>
            `;
            $('#modalbody').append(modalbody);
        });
    });
</script>
