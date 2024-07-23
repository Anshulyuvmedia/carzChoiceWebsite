{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Pros & Cons')
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
                        <form action="{{ route('insertprosandcons') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-6" id="tablebody">
                                    <label for="">Add Pros</label>
                                    <input type="hidden" name="vehicleid" value="{{$vehicleid}}">
                                    <div class="input-group mb-3">
                                        <input type="text" name="pros[]" class="form-control" placeholder="enter pros"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-success addpros" type="button" id="button-addon2"> <i
                                                class="fa fa-plus" aria-hidden="true"></i> </button>

                                    </div>
                                </div>
                                <div class="col-lg-6" id="consbody">
                                    <label for="">Add Cons</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="cons[]" class="form-control" placeholder="enter cons"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-success addcons" type="button" id="button-addon2"> <i
                                                class="fa fa-plus" aria-hidden="true"></i> </button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                            </div>
                        </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        //Adding Pros
    $(document).on('click', '.addpros', function() {
        var tr = `
         <div class="input-group mb-3" >
            <input type="text" name="pros[]" class="form-control" placeholder="enter pros"
                aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-danger deleteRow" type="button" id="button-addon2"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </div>
    `;
        $('#tablebody').append(tr);
    });
    $(document).on('click', '.deleteRow', function() {
        $(this).closest('.input-group').remove();
    });


    //Adding Cons
    $(document).on('click', '.addcons', function() {
        var tr = `
         <div class="input-group mb-3" >
            <input type="text" name="cons[]" class="form-control" placeholder="enter cons"
                aria-label="Recipient's username" aria-describedby="button-addon2">
               <button class="btn btn-danger deleteRow" type="button" id="button-addon2"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </div>
    `;
        $('#consbody').append(tr);
    });
    $(document).on('click', '.deleteRow', function() {
        $(this).closest('.input-group').remove();
    });

    </script>
    <script>
        function confirmDelete(id) {
        let smiley = '😊';
        swal({
                title: "Are you sure?"
                , text: "Once deleted, you will not be able to recover this data!"
                , icon: "warning"
                , buttons: true
                , dangerMode: true
            , })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "/deletemaster/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }

    </script>
    @endpush
