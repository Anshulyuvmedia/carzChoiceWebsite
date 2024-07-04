
{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Form Attributes')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">dashboard</a></li>&nbsp;/
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
                        <form action="{{ route('insertformattributes') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-2">
                                    <label class="">Select Type</label>
                                    <select name="cartype" class="form-select" id="cartypeid" required>
                                        <option value="">--select type--</option>
                                        <option value="features">Features</option>
                                        <option value="specifications">Specifications</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Select Labels</label>
                                    <select name="formlabels" class="form-select" id="formlabelsid" required>
                                        <option value="">--select form labels--</option>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <label for="example-text-input" class="">Value</label>
                                    <input class="form-control" placeholder="enter label" name="value" type="text"
                                        value="" id="example-text-input" required>
                                </div>
                                <div class="col-lg-2">
                                    <x-formselect data="" /> {{-- this is form select coming from component --}}
                                </div>
                                <div class="col-lg-3 d-flex align-items-end">
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light">Submit</button>
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
                        <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Type</th>
                                    <th>Form Labels</th>
                                    <th>Value</th>
                                    <th>Input Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                {{-- @foreach ($attributesdata as $index => $row)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$row->cartype}}</td>
                                    <td>{{$row->formlabels}}</td>
                                    <td>{{$row->value}}</td>
                                    <td>{{$row->inputtype}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm"
                                            onclick="confirmDelete('{{ $row->id }}')">
                                            <i class="uil-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updateattributes') }}" method="POST" enctype="multipart/form-data">
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
                    window.location.href = "/deleteattribute/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    //Dynamic Labels are coming..........
    $('#cartypeid').on('change', function() {
        var selectedtype = $(this).val();
        console.log(selectedtype);
        $.ajax({
            url: '/filteroldcar/' + selectedtype,
            type: 'GET',
            success: function(response) {
                console.log("this working", response);
                var dropdown1 = $('#formlabelsid');
                dropdown1.empty();
                dropdown1.append($('<option selected>Choose...</option>'));
                response.master.forEach(function(item) {
                    dropdown1.append($('<option value="' + item.label + '">' + item.label +
                        '</option>'));
                });
            }
        });
    });

    //Table Appending dynamically
    $('#cartypeid, #formlabelsid').on('change', function() {
        var selectedcartype = $('#cartypeid').val();
        var selectedformlabel = $('#formlabelsid').val();
        console.log(selectedcartype, selectedformlabel);
        $.ajax({
            type: 'GET',
            url: '/getattributesajax/' + selectedcartype + '/' + selectedformlabel,
            success: function(data) {
                console.log(data);
                $('#table-body').empty();
                data.data.forEach(function(element, index) {
                    var row = '<tr>';
                    row += '<td>' + (index + 1) + '</td>';
                    row += '<td>' + element.cartype + '</td>';
                    row += '<td>' + element.formlabels + '</td>';
                    row += '<td>' + element.value + '</td>';
                    row += '<td>' + element.inputtype + '</td>';
                    row += '<td>';
                    row += '<ul class="list-inline mb-0">';
                    row += '<li class="list-inline-item">';
                    row += '<a href="/editattributes/' + element.id +
                        '" class="px-2 text-primary openModalBtn" data-record-id=\'' + JSON
                        .stringify(element) +
                        '\' data-bs-toggle="modal" data-bs-target="#exampleModal">';
                    row += '<i class="uil uil-pen font-size-18"></i>';
                    row += '</a>';
                    row += '</li>';
                    row += '<li class="list-inline-item">';
                    row += '<a href="#" onclick="confirmDelete(' + element.id +
                        ')" class="px-2 text-danger">';
                    row += '<i class="uil uil-trash-alt font-size-18"></i>';
                    row += '</a>';
                    row += '</li>';
                    row += '</ul>';
                    row += '</td>';
                    row += '</tr>';
                    $('#table-body').append(row);
                });
            }
        });
    });

    //Edit Functionality
    $('#table-body').on('click', '.openModalBtn', function() {
        var recordId = $(this).data('record-id');
        console.log(recordId);
        $('#modalbody').empty();
        var modalbody = `
                       <div class="">
                    <div class="card-body">
                            <div class="mb-3 row">
                                <div class="col-lg-12">
                                    <label class="">Select Car Type</label>
                                    <input class="form-control mb-3" placeholder="enter label" name="value" type="text"
                                        value="${recordId.cartype}" id="example-text-input" required disabled>
                                     <input type="hidden" name="attributeid" value="${recordId.id}"
                                                id="">
                                </div>
                                <div class="col-lg-12">
                                    <label class="">Select Labels</label>
                                    <input class="form-control mb-3" placeholder="enter label" name="value" type="text"
                                        value="${recordId.formlabels}" id="example-text-input" required disabled>
                                </div>
                                <div class="col-lg-12">
                                    <label for="example-text-input" class="">Value</label>
                                    <input class="form-control mb-3" placeholder="enter label" name="value" type="text"
                                        value="${recordId.value}" id="example-text-input" required>
                                </div>
                                  <div class="col-lg-12">
                                    <label class="">Select Input Type</label>
                                    <select name="inputtype" class="form-select" id="inputtypeid" required>
                                        <option value="" ${recordId.inputtype == '' ? 'selected' : ''}>--select input type--</option>
                                        <option value="text" ${recordId.inputtype == 'text' ? 'selected' : ''}>Text</option>
                                        <option value="email" ${recordId.inputtype == 'email' ? 'selected' : ''}>Email</option>
                                        <option value="checkbox" ${recordId.inputtype == 'checkbox' ? 'selected' : ''}>Checkbox</option>
                                        <option value="file" ${recordId.inputtype == 'file' ? 'selected' : ''}>File</option>
                                        <option value="textarea" ${recordId.inputtype == 'textarea' ? 'selected' : ''}>Textarea</option>
                                        <option value="number" ${recordId.inputtype == 'number' ? 'selected' : ''}>Number</option>
                                        <option value="url" ${recordId.inputtype == 'url' ? 'selected' : ''}>URL</option>
                                    </select>
                    </div>
                            </div>
                    </div>
                </div>
            `;
        $('#modalbody').append(modalbody);
    });
</script>
<script>
    function labelValue() {
        var label = document.getElementById('labelval').value;
        document.getElementById('valueval').value = label;
    }
</script>
@endpush
