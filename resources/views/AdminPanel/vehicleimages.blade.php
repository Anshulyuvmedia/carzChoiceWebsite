{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add ' . $carnamedata . ' Images')
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
                        <form action="{{ route('insertvehicleimages') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-md-2">
                                    <label class="">Select Category</label>
                                    <select name="type" class="form-select" id="subcategory" required>
                                        <option value="">--select category--</option>
                                        @foreach ($masterdata as $row)
                                        <option value="{{ $row->label }}">{{ $row->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="">Select Color</label>
                                    <select name="color" class="form-select" required>
                                        <option value="">--select color--</option>
                                        @if (is_array($colors) || is_object($colors))
                                        @foreach ($colors as $color)
                                        @php

                                        $colorLabel = $color->label; // Extract the label
                                        $colorValues = implode(', ', $color->value); // Convert the value array to a
                                        $encodedColor = json_encode($color); // Encode the value array to JSON
                                        //for the option value
                                        @endphp
                                        <option value="{{$encodedColor}}">{{ $colorLabel }} - {{ $colorValues }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="example-search-input" class="">Title</label>
                                    <input class="form-control" placeholder="enter value" name="title" type="text"
                                        value="" id="labelval" onchange="labelValue()" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="inputGroupSelect01">Media Type</label>
                                    <div class="input-group">
                                        <select class="form-select" id="type" onchange="files()" name="mediatype"
                                            required>
                                            <option value="default" selected>Choose...</option>
                                            <option value="image">Image</option>
                                            <option value="video">Video</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 d-none mt-0" id="uploadimage">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Upload Image</label>
                                        <input type="file" id="uploadimage" class="form-control"
                                            placeholder="enter label" name="addimage" value="0">
                                    </div>
                                </div>
                                <div class="col-md-2 d-none mt-0" id="urlinput">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Enter Youtube URL</label>
                                        <input type="text" class="form-control" placeholder="enter video link"
                                            name="videourl" id="videolink" value="https://dummy.com">
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
                                </div>
                                {{-- <div class="col-lg-3">
                                    <label for="example-search-input" class="">Icon Image</label>
                                    <input class="form-control" placeholder="enter value" name="iconimage" type="file"
                                        value="">
                                </div> --}}
                            </div>
                                <input class="form-control" placeholder="enter value" name="vehicle" type="hidden"
                                    value="{{ $data->carname }}">
                                <input class="form-control" placeholder="enter value" name="variantid" type="hidden"
                                    value="{{ $data->id }}">
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
                                    <th>Category</th>
                                    <th>Color</th>
                                    <th>Vehicle</th>
                                    <th>Title</th>
                                    <th>Media</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($vehicleimgdata as $index => $row)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $row->type }}</td>
                                    @php
                                    // Decode JSON into an associative array
                                    $color = json_decode($row->color, true);
                                    @endphp
                                    <td>
                                        @if (json_last_error() === JSON_ERROR_NONE && isset($color['label'], $color['value']))
                                                @php
                                                    // Split the labels by comma
                                                    $labels = $color['label'];
                                                    $values = $color['value'];
                                                @endphp

                                                @if (count($values) != 0)
                                                <p>{{$labels}}</p>
                                                <div class="border shadow-sm m-1 p-2 text-center fw-bold text-dark"
                                                     style="height: 50px; background: linear-gradient(to bottom, {{ $values[0] }} 50%, {{ $values[1] }} 50%);">

                                                </div>
                                                @endif
                                            @else
                                                <li>
                                                    <div class="border shadow-sm m-1 p-2 text-center fw-bold text-dark">
                                                        Invalid color data
                                                    </div>
                                                </li>
                                            @endif
                                    </td>
                                    <td>{{ $row->vehicle }}</td>
                                    <td>{{ $row->title }}</td>
                                    <td>
                                        @if ($row->mediatype == 'image')
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#viewmodal"
                                            data-record-view="{{ json_encode($row) }}"
                                            class="px-2 text-primary viewbtnmodal">
                                            <img src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                alt="Thumbnail" width="100px" class="square-100">
                                        </a>
                                        @endif
                                        @if ($row->mediatype == 'video')
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#viewmodal"
                                            data-record-view="{{ json_encode($row) }}"
                                            class="px-2 text-primary viewbtnmodal"><i
                                                class="bi bi-youtube"></i>&nbsp;&nbsp;View Video</a>
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="list-inline mb-0">
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('updatevehicleimgs') }}" method="POST" enctype="multipart/form-data">
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
<div class="modal fade" id="viewmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">All Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="viewmodalbody">
                {{-- Modal Body Appends here --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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
                    window.location.href = "/deletevehicleimg/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    // Edit Functionality
    var masterdata = @json($masterdata);
    var mastercolordata = @json($mastercolordata);
    console.log(mastercolordata);
    var carlistdata = @json($carlistdata);

    $('#table-body').on('click', '.editbtnmodal', function() {
        var vehicledata = $(this).data('record');
        console.log(vehicledata);
        $('#modalbody').empty();

        var options = `<option value="">--select category--</option>`;
        masterdata.forEach(function(row) {
            options +=
                `<option value="${row.label}" ${vehicledata.type === row.label ? 'selected' : ''}>${row.label}</option>`;
        });

        var color = `<option value="">--select color--</option>`;
        mastercolordata.forEach(function(row) {
            color +=
                `<option value="${row.label}" ${vehicledata.color === row.label ? 'selected' : ''}>${row.label}</option>`;
        });

        // var carnames = `<option value="">--select color--</option>`;
        // carlistdata.forEach(function(row) {
        //     carnames +=
        //         `<option value="${row.carname}" ${vehicledata.vehicle === row.carname ? 'selected' : ''}>${row.carname}</option>`;
        // });

        var modalbody = `
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="exampleDataList" class="form-label">Select Category</label>
                        <div>
                            <select name="type" class="form-select mb-3" required>
                                ${options}
                            </select>
                        </div>
                         <div>
                        <label class="">Select Color</label>
                        <select name="color" class="form-select mb-3" required>
                             ${color}
                        </select>
                    </div>
                        <label for="example-text-input" class="form-label">Title</label>
                        <div class="">
                            <input class="form-control mb-3" name="title" type="text" value="${vehicledata.title}" id="example-text-input">
                        </div>
                        <input type="hidden" name="vehicleimgid" value="${vehicledata.id}" id="">
                        <div class="">
                                    <label class="form-label" for="inputGroupSelect01">Media Type</label>
                                    <div class="input-group">
                                        <select class="form-select" id="modaltype" onchange="filesmodal()" name="mediatype"
                                            required>
                                            <option value="default" selected>Choose...</option>
                                            <option value="image" ${vehicledata.mediatype == 'image' ? 'selected' : ''}>Image</option>
                                            <option value="video" ${vehicledata.mediatype == 'video' ? 'selected' : ''}>Video</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" d-none mt-3" id="uploadimagemodal">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Upload Image</label>
                                        <input type="file" id="uploadimage" class="form-control"
                                            placeholder="enter label" name="addimage" value="0">
                                    </div>
                                </div>
                                <div class=" d-none mt-3" id="urlinputmodal">
                                    <div>
                                        <label for="placeholderInput" class="form-label">Enter Youtube URL</label>
                                        <input type="text" class="form-control" placeholder="enter video link"
                                            name="videourl" id="videolink" value="https://dummy.com">
                                    </div>
                                </div>
                    </div>
                    <div class="col-lg-6" id="media-container">
                        <!-- Media content will be inserted here -->
                    </div>
                </div>
            </div>
        `;

        $('#modalbody').append(modalbody);
        var mediaContainer = document.getElementById('media-container');
        var mediaContent = '';

        if (vehicledata.mediatype === 'image') {
            mediaContent =
                `<img src="/assets/backend-assets/images/${vehicledata.addimage}" alt="Image" class="img-fluid">`;
        } else if (vehicledata.mediatype === 'video') {
            // Extract video ID from YouTube URL
            var videoId = extractVideoId(vehicledata.videourl);

            // Construct iframe tag with embedded YouTube video
            mediaContent =
                `<iframe width="100%" height="100%" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allowfullscreen></iframe>`;
        }

        mediaContainer.innerHTML = mediaContent;


        function extractVideoId(url) {
            // Regex pattern to match both YouTube URL formats
            var regex = /[?&]?(?:v=|vi?=|youtu\.be\/)([a-zA-Z0-9_-]{11})/;

            // Extract video ID using regex
            var match = url.match(regex);

            if (match && match[1]) {
                return match[1];
            } else {
                // Handle invalid URLs or fallback behavior
                console.error('Invalid YouTube URL');
                return ''; // or handle differently as per your application logic
            }
        }
    });
</script>
<script>
    function files() {
        if (document.getElementById('type').value == 'image') {
            var image = document.getElementById('uploadimage')
            var video = document.getElementById('urlinput')
            image.classList.add('d-block');
            image.classList.remove('d-none');
            video.classList.add('d-none');
        }
        if (document.getElementById('type').value == 'video') {
            var video = document.getElementById('urlinput')
            var image = document.getElementById('uploadimage')
            video.classList.add('d-block');
            video.classList.remove('d-none');
            image.classList.add('d-none');
        }
        if (document.getElementById('type').value == 'default') {
            var video = document.getElementById('urlinput')
            var image = document.getElementById('uploadimage')
            video.classList.add('d-none');
            image.classList.add('d-none');
        }
    }

    function filesmodal() {
        if (document.getElementById('modaltype').value == 'image') {
            var image = document.getElementById('uploadimagemodal')
            var video = document.getElementById('urlinputmodal')
            image.classList.add('d-block');
            image.classList.remove('d-none');
            video.classList.add('d-none');
        }
        if (document.getElementById('modaltype').value == 'video') {
            var video = document.getElementById('urlinputmodal')
            var image = document.getElementById('uploadimagemodal')
            video.classList.add('d-block');
            video.classList.remove('d-none');
            image.classList.add('d-none');
        }
        if (document.getElementById('modaltype').value == 'default') {
            var video = document.getElementById('urlinputmodal')
            var image = document.getElementById('uploadimagemodal')
            video.classList.add('d-none');
            image.classList.add('d-none');
        }
    }
</script>
<script>
    $(document).ready(function() {
        $('#table-body').on('click', '.viewbtnmodal', function() {
            var viewdata = $(this).data('record-view');
            console.log(viewdata);
            $('#viewmodalbody').empty();

            var modalbody = `
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12" id="media-containernew">
                            <!-- Media content will be inserted here -->
                        </div>
                    </div>
                </div>
            `;

            $('#viewmodalbody').append(modalbody);

            // Update media content only if mediaContainernew exists
            var mediaContainernew = document.getElementById('media-containernew');
            if (mediaContainernew) {
                var mediaContentnew = '';

                if (viewdata.mediatype === 'image') {
                    mediaContentnew =
                        `<img src="/assets/backend-assets/images/${viewdata.addimage}" alt="Image" class="img-fluid rounded-bottom">`;
                } else if (viewdata.mediatype === 'video') {
                    var videoId = extractVideoId(viewdata.videourl);
                    mediaContentnew =
                        `<iframe width="100%" height="315" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allowfullscreen></iframe>`;
                }

                mediaContainernew.innerHTML = mediaContentnew;
            }
        });

        // Function to extract YouTube video ID from URL
        function extractVideoId(url) {
            var regex = /[?&]?(?:v=|vi?=|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
            var match = url.match(regex);
            return match && match[1] ? match[1] : '';
        }
    });
</script>

@endpush
