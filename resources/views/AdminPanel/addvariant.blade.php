{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Variant')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>&nbsp;/
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-5">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <form action="{{ route('import.excelvarinats') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex align-items-end">
                                    <div class="text-start">
                                        <label for="file">Upload Variants in Bulk-(Excel)</label>
                                        <input type="file" name="file" id="file" class="form-control">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary ms-2">Import</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mt-2">
                            <a class="mt-2 text-dark"
                                href="{{ asset('assets/backend-assets/images/SampleExcel/variants.xlsx') }}"
                                download="Sample Data of Variants">Click Here to <span class="text-danger fw-bolder">
                                    Download Sample Excel Sheet</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('insertvariants') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card border-5">
                        <div class="row mb-0 p-2">
                            <div class="col-lg-12 d-flex justify-content-end mt-3">
                                <button type="submit" class="btn btn-success waves-effect waves-light"><i
                                        class="bi bi-plus-circle"></i> Add New Variant</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-4 row shadow border rounded-3 p-3">
                                <div class="col-lg-3 ">
                                    <label class="">Brand Name <span class="text-danger">*</span></label>
                                    <select name="brandname" class="form-select mb-3" id="dynamic_selectbrandname">
                                        <option value="">--select car--</option>
                                        @foreach ($cardata as $row)
                                        <option value="{{ $row->brandname }}">{{ $row->brandname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Car Name <span class="text-danger">*</span></label>
                                    <select name="carname" class="form-select mb-3" id="carnamelabel">
                                        <option value="">--select car--</option>
                                        <!--Append here car name-->
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Car Modal Name <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control mb-3" placeholder="enter modal name" name="carmodalname"
                                        type="text" value="" id="carmodal">
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Select Status <span class="text-danger">*</span></label>
                                    <select name="availabelstatus" class="form-select mb-3" id="cartypeid">
                                        <option value="">--select status--</option>
                                        <option value="Available">Available</option>
                                        <option value="Not Available">Not Available</option>
                                        <option value=" Coming soon">Coming soon</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4 row shadow border rounded-3 p-3">

                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Price <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control mb-3" placeholder="enter car price" name="price"
                                        type="text" value="" id="example-text-input">
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Price Type <span class="text-danger">*</span></label>
                                    <select name="pricetype" class="form-select mb-3" id="cartypeid">
                                        <option value="">--select price type--</option>
                                        <option value="Lakh">Lakh</option>
                                        <option value="Cr">Cr</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">Engine <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control mb-3" placeholder="enter engine" name="engine"
                                        type="text" value="" id="example-text-input">
                                </div>
                                <div class="col-lg-3">
                                    <label class="">Body Type <span class="text-danger">*</span></label>
                                    <select name="bodytype" class="form-select" id="subcategory">
                                        <option value="">--select body type--</option>
                                        @foreach ($bodytype as $body)
                                        <option value="{{ $body->value }}">{{ $body->value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row shadow border rounded-3 p-3">
                                <div class="col-lg-3">
                                    <label class="">Seating Capacity <span class="text-danger">*</span></label>
                                    <select name="seatingcapacity" class="form-select" id="subcategory">
                                        <option value="">--select seates capacity--</option>
                                        @for ($i = 1; $i <= 8; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                            <option value="8+">8+</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-label">Transmission <span class="text-danger">*</span></label>
                                    <select name="transmission[]" class="select2 form-control select2-multiple mb-3"
                                        multiple="multiple" data-placeholder="Choose type...">
                                        <option value="Automatic">Automatic</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Clutchless Manual">Clutchless Manual</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <label for="example-text-input" class="">User Report Mileage <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="enter user report mileage"
                                        name="userreportedmilage" type="text" value="" id="example-text-input">
                                </div>

                                <div class="col-lg-3">
                                    <label class="">Upload Brochure</label>
                                    <input class="form-control" placeholder="" accept=".pdf" name="brochure" type="file"
                                        value="" id="example-text-input">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4 row shadow border rounded-3 p-3">
                                        <div class="col-lg-12">
                                            <label class="form-label">Fuel Type <span
                                                    class="text-danger">*</span></label>
                                            <select name="fueltype[]" class="select2 form-control select2-multiple mb-3"
                                                multiple="multiple" data-placeholder="Choose fuel type ..."
                                                id="fueltype">
                                                <option value="Hybrid">Hybrid</option>
                                                <option value="Petrol">Petrol</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="CNG">CNG</option>
                                                <option value="Electric">Electric</option>
                                            </select>
                                        </div>

                                        <div id="mileageInputs" class="d-flex flex-wrap">
                                            <!-- Mileage inputs will be appended here -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4 row shadow border rounded-3 p-3">
                                        <div class="col-lg-12">
                                            <label class="form-label">Colors<span class="text-danger">*</span> <span
                                                    class="text-muted fs-6">(At least select a car
                                                    first)</span></label>
                                            <select name="colors[]" class="select2 form-control select2-multiple mb-3"
                                                multiple="multiple" data-placeholder="Choose color ..." id="colors">
                                                <!-- Colors inputs will be appended here -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 row shadow border rounded-3 p-3">
                                <div class="col-lg-6">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Key
                                        Features</label>
                                    <div class="">
                                        <textarea name="keyfeatures" id="classic-editor"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Summary</label>
                                    <div class="">
                                        <textarea name="summary" id="classic-editor1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@if(session('success') && Session::has('insertedCount') && Session::has('updatedCount'))
    <script>
        const insertedCount = "{{ Session::get('insertedCount') }}";
        const updatedCount = "{{ Session::get('updatedCount') }}";
        swal("Success", "{{ session('success') }}\nTotal New Inserted Variants: " + insertedCount + "\nTotal Existing Updated Variants: " + updatedCount, "success");
    </script>
@endif


@if (session('error'))
<script>
    swal("Error", "{{ session('error') }}", "error");
</script>
@endif
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}

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
    $(document).ready(function() {
        $('#fueltype').on('change', function() {
            // Get selected fuel types
            let selectedFuelTypes = $(this).val();
            $('#mileageInputs').empty();
            selectedFuelTypes.forEach(function(fuelType) {
                $('#mileageInputs').append(`
                <div class="col-lg-4">
                    <label for="mileage-${fuelType}" class="mt-3">Mileage for ${fuelType} <span class="text-danger">*</span></label>
                    <input class="form-control " placeholder="enter mileage for ${fuelType}" name="mileage[${fuelType}]" type="text" id="mileage-${fuelType}"  >
                </div>
            `);
            });
        });
    });
</script>
<script>
    $(function() {
        $('#dynamic_selectbrandname').on('change', function() {
            var selectedbrandname = $(this).val();
            console.log(selectedbrandname);
            $.ajax({
                url: "/filterbrandname/" + selectedbrandname,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    var dropdown1 = $('#carnamelabel');
                    dropdown1.empty();
                    dropdown1.append($('<option selected>Choose...</option>'));
                    data.forEach(function(item) {
                        dropdown1.append($('<option value="' + item.carname + '">' +
                            item.carname +
                            '</option>'));
                    });
                }
            });
        });
    });


    var colorOptions = []; // Global variable to store color options

    $(function() {
        $('#carnamelabel').on('change', function() {
            var selectedcar = $(this).val();
            console.log(selectedcar);
            $.ajax({
                url: "/filtercolors/" + selectedcar,
                type: "GET",
                success: function(response) {
                    console.log(response);
                    colorOptions = response; // Store the response in the global variable
                    var dropdown1 = $('#colors');
                    dropdown1.empty();
                    dropdown1.append($(
                        '<option value="all">All</option>')); // Add All option

                    // Append color options with both label and color codes
                    response.forEach(function(item) {
                        dropdown1.append(
                            $('<option value="' + item.label + '|' + item.value
                                .join(',') + '">' +
                                item.label + ' (' + item.value.join(', ') +
                                ')' +
                                '</option>'
                            )
                        );

                    });
                    // Refresh select2
                    dropdown1.select2();
                }
            });
        });

        $('#colors').on('change', function() {
            var selectedValue = $(this).val();
            if (selectedValue && selectedValue.includes("all")) {
                var allValues = colorOptions.map(item => item.label + '|' + item.value.join(',')).flat();
                $(this).val(allValues);
                $(this).trigger('change');
            }
        });

    });
</script>
@endpush
