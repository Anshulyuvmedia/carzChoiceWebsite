{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Compare Cars')
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
                        <form action="{{ route('insertcompare') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <div class="col-lg-12">
                                    <label class="form-label">Select to Compare <span class="text-danger">* (Select
                                            Minimun Two Vehicles)</span></label>
                                    <select name="comparewith[]" class="select2 form-control select2-multiple mb-3"
                                        multiple="multiple" data-placeholder="Choose vehicles.......">
                                        @foreach ($variantlist as $row)
                                        <option value="{{ $row->id }}">{{ $row->carname }} ({{$row->carmodalname}})
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 d-flex align-items-end mt-3">
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light">Compare</button>
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
                                    <th>Vehicles For Comparison</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($array as $index => $row)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>

                                        <strong>Vehicles:</strong>
                                        <ul class="list-unstyled">
                                        @foreach ($row['vehicles'] as $vehicle)
                                        <li>
                                          <i class="uil-car"></i> {{ $vehicle['carname'] }}, {{ $vehicle['carmodalname'] }}
                                        </li>
                                    @endforeach
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
