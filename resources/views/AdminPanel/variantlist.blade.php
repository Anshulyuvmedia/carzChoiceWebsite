{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'All Variants')
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="datatable-buttons" class="table  table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Car Name</th>
                                    <th>Modal</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Price Type</th>
                                    <th>Mileage</th>
                                    <th>Engine</th>
                                    <th>Fuel Type</th>
                                    <th>Transmission Type</th>
                                    <th>Seating Capactiy</th>
                                    <th>Reported Mileage</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($variantlist as $index => $row)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$row->carname}}</td>
                                    <td>{{$row->carmodalname}}</td>
                                    <td>{{$row->availabelstatus}}</td>
                                    <td>{{$row->price}}</td>
                                    <td>{{$row->pricetype}}</td>
                                    <td>{{$row->mileage}}</td>
                                    <td>{{$row->engine}}</td>
                                    <td>{{ implode(', ', json_decode($row->fueltype)) }}</td>     {{--decoding JSON and merging Array Values--}}
                                    <td>{{ implode(', ', json_decode($row->transmission)) }}</td>
                                    <td>{{$row->seatingcapacity}}</td>
                                    <td>{{$row->userreportedmilage}}</td>
                                    <td>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="{{ route('editvariant', ['id' => $row->id]) }}"
                                                    class="px-2 text-primary"><i
                                                        class="uil uil-pen font-size-18"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" onclick="confirmDelete('{{ $row->id }}')"
                                                    class="px-2 text-danger"><i
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
                window.location.href = "/deletevariants/" + id;
            }else {
                swal("Great Decision....!! Your data is safe! " + smiley);
            }
        });
    }
</script>
@endpush
