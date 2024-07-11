{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'All Blogs')
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
                                    <th>Category</th>
                                    <th>Blog Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Video URL</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bloglistdata as $index => $row)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$row->categorytype}}</td>
                                    <td>
                                        @if ($row->blogimg)
                                            <img src="{{asset("assets/backend-assets/images/" . $row->blogimg) }}" alt="Thumbnail" width="100px">
                                        @endif
                                    </td>
                                    <td>{{$row->blogtitle}}</td>
                                    <td>{{ substr($row->description, 0,50) }}...</td>
                                    <td>
                                        @if($row->vurl)
                                        <a href="{{$row->vurl}}" target="_blank">
                                            <button type="button" class="btn btn-info waves-effect waves-light btn-sm">View Video</button>
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="square-switch">
                                            <input data-id="{{ $row->id }}" type="checkbox" id="square-switch{{ $row->id }}" switch="bool" {{ $row->status ? 'checked' : '' }} />
                                            <label for="square-switch{{ $row->id }}" data-on-label="Yes" data-off-label="No"></label>
                                        </div>
                                    </td>

                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="{{ route('editblog', ['id' => $row->id]) }}" class="px-2 text-primary"><i class="uil uil-pen font-size-18"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" onclick="confirmDelete('{{ $row->id }}')" class="px-2 text-danger"><i class="uil uil-trash-alt font-size-18"></i></a>
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
                window.location.href = "/deleteblog/" + id;
            }else {
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
{{--Updating Blog Status--}}
<script>
    $(document).ready(function() {
        $('input[type="checkbox"][switch="bool"]').change(function() {
            var blogId = $(this).data('id');
            var status = $(this).is(':checked') ? 1 : 0;

            $.ajax({
                url: '{{ route('updateblogstatus') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: blogId,
                    status: status
                },
                success: function(response) {
                    if (response.success) {
                        swal("Success", "Blog status updated successfully.", "success");
                    } else {
                        swal("Error", "Failed to update blog status.", "error");
                    }
                },
                error: function() {
                    swal("Error", "An error occurred.", "error");
                }
            });
        });
    });
</script>
@endpush
