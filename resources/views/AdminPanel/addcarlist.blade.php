{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Car List')
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
                        <form action="{{ route('insertcarlist') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Car Name</label>
                                    <input class="form-control" placeholder="enter car name" name="carname" type="text"
                                        value="" id="example-text-input" >
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Select Brand</label>
                                    <select name="brandname" class="form-select" id="subcategory" >
                                        <option value="">--select brand--</option>
                                        @foreach ($masterdata as $row)
                                        <option value="{{ $row->label }}">{{ $row->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3 d-flex align-items-end mt-3">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-12">
                            <form action="{{ route('import.excel') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex align-items-end">
                                    <div class="text-start">
                                        <label for="file">Bulk Upload</label>
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary ms-2">Import</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
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
                                    <th>Car Name</th>
                                    <th>Brand</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($carlistdata as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->carname }}</td>
                                    <td>{{ $row->brandname }}</td>
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    data-car-list="{{ json_encode($row) }}"
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
                                            <li class="list-inline-item">
                                                <a href="#" data-bs-target="#exampleModalcolor" data-bs-toggle="modal"
                                                    data-value="{{ json_encode($row) }}"
                                                    class="px-2 text-info colorvariants"><i
                                                        class="uil-palette font-size-18" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        data-bs-title="Add Color Variant"></i></a>
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

<div class="modal fade" id="exampleModalcolor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('insertcolorvariants') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" id="modalbody">
                    <label for="">Color Name & Color Code</label>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="hidden" name="vehicleid" id="vehicleid" value="">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Color Name</span>
                                <input type="text" name="colornames[]" aria-label="First name"
                                    placeholder="enter color name" class="form-control">
                                <span class="input-group-text">Color Code</span>
                                <input type="color" name="colorcodes[]" aria-label="Last name"
                                    placeholder="enter color code" class="form-control form-control-color">
                                <button data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Click to Add More" class="btn btn-success addpros" type="button"
                                    id="button-addon2"> <i class="fa fa-plus" aria-hidden="true"></i> </button>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="tablebody">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
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
                title: "Are you sure?"
                , text: "Once deleted, you will not be able to recover this data!"
                , icon: "warning"
                , buttons: true
                , dangerMode: true
            , })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "/deletecarlist/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }

</script>
<script>
    // Edit Functionality
    const masterdata = @json($masterdata);

    $('#table-body').on('click', '.editbtnmodal', function() {
        const carlist = $(this).data('car-list');
        console.log(carlist);

        let brands = `<option value="">--select brand--</option>`;
        masterdata.forEach(function(row) {
            brands += `<option value="${row.label}" ${carlist.brandname === row.label ? 'selected' : ''}>${row.label}</option>`;
        });

        const modalbody = `
            <div class="p-3">
                <div class="card-body">
                    <div class="mb-3 row">
                        <div class="col-lg-6">
                            <label for="example-text-input" class="">Car Name</label>
                            <input class="form-control" placeholder="enter car name" name="carname" type="text"
                                value="${carlist.carname}" id="example-text-input" required>
                            <input type="hidden" name="carlistid" value="${carlist.id}" id="">
                        </div>
                        <div class="col-lg-6">
                            <label class="">Select Brand</label>
                            <select name="brandname" class="form-select" id="subcategory" required>
                                ${brands}
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        `;

        $('#modalbody').empty().append(modalbody);
    });

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
    $(document).on('click', '.colorvariants', function() {
        const data = $(this).data('value');
        $('#vehicleid').val(data.id);
        const converted = JSON.parse(data.colors);
        console.log(converted);
        $('#tablebody').empty();
        converted.forEach(element => {
            var tr = `
            <div class="col-lg-12">
                <div class="input-group mb-3">
                     <span class="input-group-text">Color Name</span>
                                <input type="text" name="colornames[]" value="${element.label}" aria-label="First name" placeholder="enter color name" class="form-control">
                                <span class="input-group-text">Color Code</span>
                                <input type="color"  name="colorcodes[]" value="${element.value}" aria-label="Last name" placeholder="enter color code" class="form-control form-control-color">
                    <button class="btn btn-danger deleteRow" type="button" id="button-addon2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </div>
            </div>
        `;
            $('#tablebody').append(tr);
        });
    });

    $(document).on('click', '.addpros', function() {
            var tr = `
            <div class="col-lg-12">
                <div class="input-group mb-3">
                     <span class="input-group-text">Color Name</span>
                                <input type="text" name="colornames[]"  aria-label="First name" placeholder="enter color name" class="form-control">
                                <span class="input-group-text">Color Code</span>
                                <input type="color"  name="colorcodes[]"  aria-label="Last name" placeholder="enter color code" class="form-control form-control-color">
                    <button class="btn btn-danger deleteRow" type="button" id="button-addon2"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </div>
            </div>
        `;
            $('#tablebody').append(tr);
    });
    $(document).on('click', '.deleteRow', function() {
        $(this).closest('.input-group').remove();
    });

</script>
@endpush
