
{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Reviews')
<style>
    .star {
        font-size: 30px;
        color: gray;
        cursor: pointer;
    }

    .filled {
        color: gold;
    }
</style>
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
                        <form action="{{ route('inserthappycustomers') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-3">
                                    <label class="">Select Vehicle</label>
                                    <select name="vehicle" class="form-select" id="" >
                                        <option value="">--select vehicle--</option>
                                        @foreach ($variantdata as $value)
                                        <option value="{{$value->brandname}} {{$value->carname}} ({{$value->carmodalname}})">{{$value->brandname}}
                                            {{$value->carname}} ({{$value->carmodalname}})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Ratings</label>
                                    <select name="ratings" class="form-select" id="">
                                        <option value="">--give rating--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Customer Full Name</label>
                                    <input class="form-control mb-3" placeholder="enter your fullname"
                                        name="customerfullname" type="text" value="" id="example-text-input">
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Upload Review Image</label>
                                    <input class="form-control mb-3" placeholder="enter your fullname" name="reviewimg"
                                        type="file" value="" id="example-text-input">
                                </div>

                                <div class="col-lg-12">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Review
                                        Discription</label>
                                    <textarea rows="3" name="discription" class="form-control resize-none"
                                        placeholder="enter remarks..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Add</button>
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
