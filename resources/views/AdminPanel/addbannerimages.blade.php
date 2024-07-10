
{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Banner Images')
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

        @if($imagesdata->isNotEmpty())
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('updatebannerimages') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-4">
                                    <label for="example-search-input" class="form-label">Upload Main Banner Image</label>
                                    <input class="form-control" placeholder="company name" name="mainbannerimg"
                                        type="file" value="" id="example-search-input">
                                    <input type="hidden" name="imageid" value="{{$imagesdata[0]->id}}">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-search-input" class="form-label">Upload Check on Road Image</label>
                                    <input class="form-control" placeholder="company name" name="checkonroadimg"
                                        type="file" value="" id="example-search-input">
                                </div>
                                <div class="col-lg-4 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('insertbannerimages') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-4">
                                    <label for="example-search-input" class="form-label">Upload Main Banner Image</label>
                                    <input class="form-control" placeholder="company name" name="mainbannerimg"
                                        type="file" value="" id="example-search-input">
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-search-input" class="form-label">Upload Check on Road Image</label>
                                    <input class="form-control" placeholder="company name" name="checkonroadimg"
                                        type="file" value="" id="example-search-input">
                                </div>
                                <div class="col-lg-4 d-flex align-items-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Main Banner Image</th>
                                    <th>Check-on Road Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($imagesdata as $index => $row)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>
                                        @if ($row->mainbannerimg)
                                            <img src="{{asset("assets/backend-assets/images/" . $row->mainbannerimg) }}" alt="Thumbnail" width="200px" >
                                        @endif
                                    </td>
                                    <td>
                                        @if ($row->checkonroadimg)
                                            <img src="{{asset("assets/backend-assets/images/" . $row->checkonroadimg) }}" alt="Thumbnail" width="200px" >
                                        @endif
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
                window.location.href = "/deletebannerimages/" + id;
            }else {
                swal("Great Decision....!! Your data is safe! " + smiley);
            }
        });
    }
</script>
@endpush
