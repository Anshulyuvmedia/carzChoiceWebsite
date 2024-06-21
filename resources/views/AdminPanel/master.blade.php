{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Master')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Company Profile</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">dashboard</a></li>
                            <li class="breadcrumb-item active">Company Profile</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('storemaster')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-4">
                                    <label for="example-text-input" class="">Label</label>
                                    <input class="form-control" placeholder="enter label" name="label" type="text"
                                        value="" id="example-text-input">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-search-input" class="">Value</label>
                                    <input class="form-control" placeholder="enter value" name="value" type="text"
                                        value="" id="example-search-input">
                                </div>
                                <div class="col-lg-4 d-flex align-items-end">
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
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Label</th>
                                    <th>Value</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($masterdata as $index => $row)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$row->label}}</td>
                                    <td>{{$row->value}}</td>
                                    <td>{{$row->type}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm"
                                            onclick="confirmDelete('{{ $row->id }}')">
                                            <i class="uil-trash-alt"></i>
                                        </button>
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
            }else {
                swal("Great Decision....!! Your data is safe! " + smiley);
            }
        });
    }
</script>
@endpush
