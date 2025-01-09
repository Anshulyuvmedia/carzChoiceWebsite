{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Sub-Master')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">dashboard</a></li>
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
                        <form action="{{ route('storesubmaster') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-2">
                                    <label class="">Select Master Category</label>
                                    <select name="type" class="form-select" id="subcategory" required>
                                        <option value="">--select master category--</option>
                                        @foreach ($submasterdata as $row)
                                            <option value="{{ $row->label }}">{{ $row->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <label for="example-search-input" class="">Label</label>
                                    <input class="form-control" placeholder="enter value" name="label" type="text"
                                        value="" id="labelval" onchange="labelValue()" required>
                                </div>
                                <div class="col-lg-2">
                                    <label for="example-search-input" class="">Value</label>
                                    <input class="form-control" placeholder="enter value" name="value" type="text"
                                        value="" id="valueval" required>
                                </div>
                                <div class="col-lg-2">
                                    <label for="example-search-input" class="">Icon Image</label>
                                    <input class="form-control" placeholder="enter value" name="iconimage"
                                        type="file" value="">
                                </div>
                                <div class="col-lg-2 d-flex align-items-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Type</th>
                                    <th>Label</th>
                                    <th>Value</th>
                                    <th>Icon-Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                {{-- Table body appends here --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Edit details Modal --}}
<div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('updatesubmaster') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body" id="modalbodyedit">

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
                    window.location.href = "/deletemaster/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function labelValue() {
        var label = document.getElementById('labelval').value;
        document.getElementById('valueval').value = label;
    }

    $('#subcategory').on('change', function() {
        var selectedCat = $(this).val();
        console.log(selectedCat);
        $.ajax({
            type: 'GET',
            url: '/getsubmasterajax/' + selectedCat,
            success: function(data) {
                console.log(data);
                $('#table-body').empty();
                data.forEach(function(element, index) {
                    var row = '<tr>';
                    row += '<td>' + (index + 1) + '</td>';
                    row += '<td>' + element.type + '</td>';
                    row += '<td>' + element.label + '</td>';
                    row += '<td>' + element.value + '</td>';
                    row += '<td>' + (element.iconimage ?
                        '<img src="assets/backend-assets/images/' + element.iconimage +
                        '" alt="Icon Image" width="100">' : '') + '</td>';
                    row += '<td>' +
                            '<ul class="list-inline mb-0">' +
                                '<li class="list-inline-item">' +
                                    '<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaledit" ' +
                                    'data-car-list=\'' + JSON.stringify(element) + '\' ' +
                                    'class="px-2 text-primary editbtnmodal"><i ' +
                                    'class="uil uil-pen font-size-18" data-bs-toggle="tooltip" ' +
                                    'data-bs-placement="top" data-bs-title="Edit"></i></a>' +
                                '</li>' +
                                '<li class="list-inline-item">' +
                                    '<button type="button" class="btn btn-danger waves-effect waves-light btn-sm" ' +
                                    'onclick="confirmDelete(' + element.id + ')">' +
                                    '<i class="uil-trash-alt"></i>' +
                                    '</button>' +
                                '</li>' +
                            '</ul>' +
                        '</td>';

                    row += '</tr>';
                    $('#table-body').append(row);
                });
            }
        });
    });
</script>
<script>
    //Edit Functionality
    $('#table-body').on('click', '.editbtnmodal', function() {
        const carlist = $(this).data('car-list');
        console.log(carlist);
        $('#modalbodyedit').empty();
        const imageSrc = carlist.iconimage ? 'assets/backend-assets/images/' + carlist.iconimage : '';
        const modalbody = `
           <div class="mb-3 row">
                <div class="col-lg-6">
                    <div class="mt-2 mb-2">
                         <label>Select Master Category</label>
                    <select name="type" class="form-select" id="subcategory" required>
                        <option value="">--select master category--</option>
                        @foreach ($submasterdata as $row)
                            <option value="{{ $row->label }}" ${carlist.type === '{{ $row->label }}' ? 'selected' : ''}>{{ $row->label }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="labelval">Label</label>
                        <input class="form-control" placeholder="enter label" name="label" type="text"
                            value="${carlist.label}" id="labelval" onchange="labelValue()" required>
                             <input type="hidden" name="submasterid" value="${carlist.id}" id="">
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="valueval">Value</label>
                        <input class="form-control" placeholder="enter value" name="value" type="text"
                            value="${carlist.value}" id="valueval" required>
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="iconimage">Icon Image</label>
                        <input class="form-control" placeholder="enter value" name="iconimage" type="file" value="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-pre">
                        <img class="img-fluid" src="${imageSrc}" alt="Icon Image">
                    </div>
                </div>
            </div>
        `;
        $('#modalbodyedit').append(modalbody);
    });
</script>
@endpush
