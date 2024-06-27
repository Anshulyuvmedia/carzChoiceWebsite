{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'FAQs')
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
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('storefaq') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="exampleDataList" class="col-md-2 col-form-label">Select Category</label>
                                <div class="col-md-10">
                                    <select name="faqcategory" class="form-select" required>
                                        <option value="">--select category--</option>
                                        @foreach ($masterdata as $row)
                                            <option value="{{ $row->label }}">{{ $row->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Label</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="faqlabel" placeholder="enter your label" type="text" value=""
                                        id="example-text-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Value</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="faqvalue" placeholder="enter your value" type="text" value=""
                                        id="example-text-input">
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Add FAQ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end col -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category</th>
                                    <th>Label</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($faqdataa as $index => $row)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $row->category }}</td>
                                        <td>{{ $row->faqlabel }}</td>
                                        <td><p data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{$row->faqvalue}}">{{ substr($row->faqvalue, 0,100) }}</p></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Edit FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updatefaq') }}" method="POST" enctype="multipart/form-data">
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
                    window.location.href = "/deletefaq/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    //Edit Functionality
    var masterdata = @json($masterdata);
    $('#table-body').on('click', '.editbtnmodal', function() {
        var faqdata = $(this).data('record');
        console.log(faqdata);
        $('#modalbody').empty();

        var options = `<option value="">--select category--</option>`;
        masterdata.forEach(function(row) {
            options += `<option value="${row.label}" ${faqdata.category === row.label ? 'selected' : ''}>${row.label}</option>`;
        });

        var modalbody = `
           <div class="card-body">
                <div class="mb-3 row">
                    <label for="exampleDataList" class="col-md-2 col-form-label">Select Category</label>
                    <div class="col-md-10">
                        <select name="faqcategory" class="form-select" required>
                            ${options}
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Label</label>
                    <div class="col-md-10">
                        <input class="form-control" name="faqlabel" type="text" value="${faqdata.faqlabel}" id="example-text-input">
                    </div>
                    <input type="hidden" name="faqid" value="${faqdata.id}" id="">
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Value</label>
                    <div class="col-md-10">
                        <input class="form-control" name="faqvalue" type="text" value="${faqdata.faqvalue}" id="example-text-input">
                    </div>
                </div>
           </div>
        `;
        $('#modalbody').append(modalbody);
    });
</script>
@endpush
