
{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Display Settings')
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
                        <form action="{{ route('insertdisplaysettings') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-3">
                                    <label class="">Select Type</label>
                                    <select name="type" class="form-select" id="dynamic_selecttype" required>
                                        <option value="">--select type--</option>
                                        <option value="Featured Cars">Featured Cars</option>
                                        <option value="Offers On Popular Cars">Offers On Popular Cars</option>
                                        <option value="Top Cars In India">Top Cars In India</option>
                                    </select>
                                </div>
                                <div class="col-lg-3" id="typediv">
                                    <label class="">Select Category</label>
                                    <select name="category" class="form-select" id="dynamic_category">
                                        <option value="">--select category--</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Select Vehicle</label>
                                    <select name="vehicle" class="form-select" id="" required>
                                        <option value="">--select vehicle--</option>
                                        @foreach ($carlistdrop as $row)
                                            <option value="{{ $row->id }}">{{ $row->carname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
                                    <th>Category</th>
                                    <th>Car Name</th>
                                    <th>Brand Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carlistdata as $index => $row)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$row->type}}</td>
                                    <td>{{$row->category}}</td>
                                    <td>{{$row->carname}}</td>
                                    <td>{{$row->brandname}}</td>
                                    <td>
                                        <ul class="list-inline mb-0">
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
                window.location.href = "/deletedisplaysettings/" + id;
            }else {
                swal("Great Decision....!! Your data is safe! " + smiley);
            }
        });
    }

    $(function() {
        $('#dynamic_selecttype').on('change', function() {
            var selectedtype = $(this).val();
            console.log(selectedtype);
            var dropdown1 = $('#dynamic_category');
            if(selectedtype === 'Featured Cars'){
                    $.ajax({
                    success: function() {
                        dropdown1.empty();
                        dropdown1.append($('<option value="Trending">Trending</option>'));
                        dropdown1.append($('<option value="Popular">Popular</option>'));
                        dropdown1.append($('<option value="Upcoming">Upcoming</option>'));
                        $('#typediv').show();
                    }
                });
            }else{
                $('#typediv').hide();
            }
        });
    });

    //Getting Body Type if my type is = Top Cars In India
    $(document).ready(function() {
    $('#dynamic_selecttype').change(function() {
        var selectedType = $(this).val();
        var dropdown1 = $('#dynamic_category');
        if (selectedType === 'Top Cars In India') {
            $.ajax({
                url: '/getbrandsnames',
                method: 'GET',
                success: function(response) {
                    dropdown1.empty();
                        dropdown1.append($('<option value="Trending">Trending</option>'));
                        dropdown1.append($('<option value="Popular">Popular</option>'));
                        dropdown1.append($('<option value="Upcoming">Upcoming</option>'));
                        $('#typediv').show();
                }
            });
        }
    });
});

</script>
@endpush
