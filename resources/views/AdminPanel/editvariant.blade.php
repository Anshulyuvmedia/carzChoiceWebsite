{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Edit Variant')
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
            <form action="{{ route('updatevariants') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row mb-0 p-2">
                            <div class="col-lg-12 d-flex justify-content-end mt-3">
                                <a href="{{ route('variantslist') }}" class="btn btn-info waves-effect waves-light"><i
                                        class="uil-left-arrow-from-left me-2"></i>All Variants</a>
                                <button type="submit" class="btn btn-success waves-effect waves-light ms-2">Update
                                    Variant</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <div class="col-lg-3">
                                    <label class="">Select Car Name</label>
                                    <select name="carname" class="form-select mb-3" id="subcategory" required>
                                        <option value="">--select car--</option>
                                        @foreach ($carlistdata as $row)
                                        <option value="{{ $row->carname }}" {{ $row->carname == $variantdata->carname
                                            ?'selected' : '' }}>
                                            {{ $row->carname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Car Modal Name</label>
                                    <input class="form-control mb-3" placeholder="enter modal name" name="carmodalname"
                                        type="text" value="{{ $variantdata->carmodalname }}" id="example-text-input" required>
                                    <input type="hidden" name="variantid" value="{{ $variantdata->id }}">
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Select Status</label>
                                    <select name="availabelstatus" class="form-select mb-3" id="cartypeid" required>
                                        <option value="">--select status--</option>
                                        <option value="Available" {{ $variantdata->availabelstatus == 'Available' ?
                                            'selected' : '' }}>
                                            Available</option>
                                        <option value="Not Available" {{ $variantdata->availabelstatus ==
                                            'Not Available' ? 'selected': '' }}>
                                            Not Available</option>
                                        <option value="Coming soon" {{ $variantdata->availabelstatus == ' Coming soon'
                                            ? 'selected' : '' }}>
                                            Coming soon</option>
                                        <option value="Newly Launched" {{ $variantdata->availabelstatus == ' Newly
                                            Launched'
                                            ? 'selected' : '' }}>
                                            Newly Launched</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Price</label>
                                    <input class="form-control mb-3" placeholder="enter car price" name="price"
                                        type="text" value="{{ $variantdata->price }}" id="example-text-input">
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Price Type</label>
                                    <select name="pricetype" class="form-select mb-3" id="cartypeid">
                                        <option value="" {{ $variantdata->pricetype == '' ? 'selected' : '' }}>
                                            --select
                                            price type--</option>
                                        <option value="Lakh" {{ $variantdata->pricetype == 'Lakh' ? 'selected' : ''
                                            }}>Lakh</option>
                                        <option value="Cr" {{ $variantdata->pricetype == 'Cr' ? 'selected' : '' }}>
                                            Cr
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Engine</label>
                                    <input class="form-control mb-3" placeholder="enter engine" name="engine"
                                        type="text" value="{{ $variantdata->engine }}" id="example-text-input">
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Upload Brochure</label>
                                    <input class="form-control" placeholder="" accept=".pdf" name="brochure" type="file"
                                        value="" id="example-text-input">
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Body Type</label>
                                    <select name="bodytype" class="form-select mb-3" id="subcategory" required>
                                        <option value="">--select Body Type--</option>
                                        @foreach ($bodytypes as $row)
                                        <option value="{{ $row->label }}" {{ $row->label == $variantdata->bodytype ?
                                            'selected' : '' }}>
                                            {{ $row->label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    @php
                                    $selectedtransmissions = json_decode($variantdata->transmission, true) ?? [];
                                    @endphp
                                    <label class="form-label">Transmission</label>
                                    <select name="transmission[]" class="select2 form-control select2-multiple"
                                        multiple="multiple" data-placeholder="Choose type..." required>
                                        <option value="Automatic" {{ in_array('Automatic', $selectedtransmissions)
                                            ? 'selected' : '' }}>
                                            Automatic</option>
                                        <option value="Manual" {{ in_array('Manual', $selectedtransmissions)
                                            ? 'selected' : '' }}>
                                            Manual</option>
                                        <option value="Clutchless Manual" {{ in_array('Clutchless Manual',
                                            $selectedtransmissions) ? 'selected' : '' }}>
                                            Clutchless Manual</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="">Seating Capacity</label>
                                    <select name="seatingcapacity" class="form-select" id="subcategory">
                                        <option value="">--select seating capacity--</option>
                                        @for ($i = 1; $i <= 8; $i++) <option value="{{ $i }}" {{ $variantdata->
                                            seatingcapacity == $i ? 'selected' : '' }}>
                                            {{ $i }}
                                            </option>
                                            @endfor
                                            <option value="8+" {{ $variantdata->seatingcapacity == '8+' ? 'selected' :''
                                                }}>8+</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="example-text-input" class="">User Report Mileage</label>
                                    <input class="form-control" placeholder="enter user report mileage"
                                        name="userreportedmilage" type="text"
                                        value="{{ $variantdata->userreportedmilage }}" id="example-text-input">
                                </div>
                                <div class="col-lg-3">
                                    @php
                                    $selectedFuelTypes = json_decode($variantdata->fueltype, true) ?? [];
                                    @endphp
                                    <label class="form-label">Fuel Type</label>
                                    <select name="fueltype[]" id="fueltype"
                                        class="select2 form-control select2-multiple mb-3" multiple="multiple"
                                        data-placeholder="Choose fuel type ..." required>
                                        <option value="Hybrid" {{ in_array('Hybrid', $selectedFuelTypes) ? 'selected'
                                            : '' }}>Hybrid</option>
                                        <option value="Petrol" {{ in_array('Petrol', $selectedFuelTypes) ? 'selected'
                                            : '' }}>Petrol</option>
                                        <option value="Diesel" {{ in_array('Diesel', $selectedFuelTypes) ? 'selected'
                                            : '' }}>Diesel</option>
                                        <option value="CNG" {{ in_array('CNG', $selectedFuelTypes) ? 'selected' : '' }}>
                                            CNG</option>
                                        <option value="Electric" {{ in_array('Electric', $selectedFuelTypes)
                                            ? 'selected' : '' }}>Electric</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <label for="example-text-input" class="">Mileages</label>
                                    @php
                                    $mileages = json_decode($variantdata->mileage, true);
                                    @endphp
                                    <div id="mileageInputs">
                                        @foreach ($mileages as $fuelType => $mileage)
                                        <div class="col-lg-4">
                                            <label for="mileage-{{ $fuelType }}" class="mt-3">Mileage for {{ $fuelType
                                                }}</label>
                                            <input class="form-control ms-2" value="{{ $mileage }}"
                                                placeholder="enter mileage for {{ $fuelType }}"
                                                name="mileage[{{ $fuelType }}]" type="text"
                                                id="mileage-{{ $fuelType }}">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Key
                                        Features</label>
                                    <div class="">
                                        <textarea name="keyfeatures"
                                            id="classic-editor">{{ $variantdata->keyfeatures }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Summary</label>
                                    <div class="">
                                        <textarea name="summary"
                                            id="classic-editor1">{{ $variantdata->summary }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
            <form action="#" method="POST" enctype="multipart/form-data">
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
                    window.location.href = "/deletecarlist/" + id;
                } else {
                    swal("Great Decision....!! Your data is safe! " + smiley);
                }
            });
    }
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#classic-editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#classic-editor1'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    function initializeMileageInputs() {
        let previousSelectedFuelTypes = $('#fueltype').val() || [];

        $('#fueltype').on('change', function() {
            let selectedFuelTypes = $(this).val();

            // Find removed fuel types
            let removedFuelTypes = previousSelectedFuelTypes.filter(fuelType => !selectedFuelTypes.includes(fuelType));
            removedFuelTypes.forEach(function(fuelType) {
                $('#mileageInputs').find(`#mileage-${fuelType}`).closest('.col-lg-4').remove();
            });

            // Find added fuel types
            let addedFuelTypes = selectedFuelTypes.filter(fuelType => !previousSelectedFuelTypes.includes(fuelType));
            addedFuelTypes.forEach(function(fuelType) {
                $('#mileageInputs').append(`
                    <div class="col-lg-4">
                        <label for="mileage-${fuelType}" class="mt-3">Mileage for ${fuelType}</label>
                        <input class="form-control ms-2" placeholder="enter mileage for ${fuelType}" name="mileage[${fuelType}]" type="text" id="mileage-${fuelType}">
                    </div>
                `);
            });

            // Update previous selected fuel types
            previousSelectedFuelTypes = selectedFuelTypes;
        });
    }

    $(document).ready(function() {
        // Initialize select2 plugin
        $('#fueltype').select2();

        // Initialize the mileage inputs script
        initializeMileageInputs();
    });
</script>
@endpush
