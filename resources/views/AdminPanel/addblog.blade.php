{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Blog')
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('insertblog')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Blog Category</label>
                                <div class="col-md-10">
                                    <select name="categorytype" class="form-select" id="subcategory">
                                        <option value="">--select blog category--</option>
                                        @foreach ($blogdata as $row)
                                        <option value="{{ $row->label }}">{{ $row->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-search-input" class="col-md-2 col-form-label">Blog Title</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="enter blog title" name="blogtitle"
                                        type="text" value="" id="example-search-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Description</label>
                                <div class="col-md-10">
                                    <textarea rows="3" name="description" class="form-control resize-none"
                                        placeholder="Your description..."></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Blog Post</label>
                                <div class="col-md-10">
                                    <textarea name="blogpost" id="classic-editor"></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-url-input" class="col-md-2 col-form-label">Video URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="video url" name="vurl" type="url" value=""
                                        id="example-url-input">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="example-email-input" class="col-md-2 col-form-label">Blog Image</label>
                                <div class="col-md-10">
                                    <input class="form-control" placeholder="postal code" name="blogimg" type="file"
                                        value="" id="example-email-input">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Add Blog</button>
                            </div>
                        </form>
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
    ClassicEditor
    .create( document.querySelector( '#classic-editor' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
@endpush
