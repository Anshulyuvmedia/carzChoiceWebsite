{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', $carname.' | '.$variant.' | '.'Specifications')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-center">
                    <h4 class="me-3">{{ $carname }} {{ $variant }} Specifications</h4>
                </div>
            </div>
        </div>
        @php
        $groupedspecsnew = $specifications->groupBy('formlabels');
        @endphp
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-between align-items-center">
                                <div>
                                    <form action="{{ route('getspecstocopy') }}" method="POST" id="copyform">
                                        @csrf
                                        <label class="mb-0 fs-6">Copy Specifications of :</label>
                                        <div class="p-0 d-flex justify-content-start">
                                            <select name="basevariant" class="form-select mb-0" id="variantdrop" required>
                                                <option value="">--select variant--</option>
                                                @foreach ($carvariants as $row)
                                                <option data-variant="{{ $row->id }}" value="{{ $row->id }}">
                                                    {{ $row->carmodalname }}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="currentvehicleid" value="{{ $vehicleid }}">
                                            <button type="submit" class="btn btn-success ms-2 btn-sm" onclick="confirmcopyfetures(event, '{{ $vehicleid }}')" class="text-danger dropdown-item">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-sm waves-effect waves-light"><i class="uil-plus"></i> Add New Spec</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (count($groupedspecs) === 0)
                    <div class="card-body">
                        <form action="{{ route('storespecifications') }}" method="POST">
                            @csrf
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach ($groupedspecsnew as $formlabel => $group)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading-{{ $loop->index }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }} text-black fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="flush-collapse-{{ $loop->index }}">
                                            {{ $formlabel }}
                                        </button>
                                        <input type="hidden" name="formlabels[]" value="{{ $formlabel }}">
                                        <input type="hidden" name="vehicleid" value="{{ $vehicleid }}">
                                    </h2>
                                    <div id="flush-collapse-{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="flush-heading-{{ $loop->index }}" data-bs-parent="#accordionFlushExample">
                                        <div class="card-body table-responsive">
                                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Specification</th>
                                                        <th>Value</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $index = 0; @endphp
                                                    @foreach ($group as $row)
                                                    <tr>
                                                        <td>{{ $index + 1 }} <input type="hidden" name="indexnos[{{ $formlabel }}][]" value="{{ $index }}"></td>
                                                        <td>{{ $row->value }} <input type="hidden" name="featurenames[{{ $formlabel }}][]" value="{{ $row->value }}"></td>

                                                        <td>
                                                            @if ($row->inputtype != 'textarea')
                                                            <input type="hidden" name="values[{{ $formlabel }}][{{ $index }}]" value="0">
                                                            <input class="border-dark-subtle {{ $row->inputtype == 'checkbox' ? 'form-check-input' : 'form-control' }}""
                                                                                name=" values[{{ $formlabel }}][{{ $index }}]" type={{ $row->inputtype }} value="" placeholder="Enter value here..." id="example-text-input-{{ $formlabel }}{{ $index }}" />
                                                            @else
                                                            <input type="hidden" name="values[{{ $formlabel }}][{{ $index }}]" value="0">
                                                            <textarea class="border-dark-subtle {{ $row->inputtype == 'checkbox' ? 'form-check-input' : 'form-control' }}""
                                                                                name=" values[{{ $formlabel }}][{{ $index }}]" value="" placeholder="Enter value here..." id="example-text-input-{{ $formlabel }}{{ $index }}">
                                                                            </textarea>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @php $index++ @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-12 d-flex align-items-end justify-content-end">
                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </div>
                        </form>
                    </div>
                    @endif

                    @if (count($groupedspecs) !== 0)
                    <div class="card-body">
                        <form action="{{ route('updatespecs') }}" method="POST">
                            @csrf
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach ($groupedspecs as $formlabel => $group)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading-{{ $loop->index }}">
                                        <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }} text-black fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-{{ $loop->index }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="flush-collapse-{{ $loop->index }}">
                                            {{ $formlabel }}
                                        </button>
                                        <input type="hidden" name="formlabels[]" value="{{ $formlabel }}">
                                        <input type="hidden" name="vehicleid" value="{{ $vehicleid }}">
                                    </h2>
                                    <div id="flush-collapse-{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}" aria-labelledby="flush-heading-{{ $loop->index }}" data-bs-parent="#accordionFlushExample">
                                        <div class="card-body table-responsive">
                                            <table class="table table-bordered dt-responsive nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Specification</th>
                                                        <th>Value</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php $index = 0; @endphp
                                                    @foreach ($group as $row)
                                                    @php
                                                    $inputType = $row->inputTypes ?? 'text';
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $row->label }}
                                                            <input type="hidden" name="featurenames[{{ $formlabel }}][]" value="{{ $row->label }}">
                                                        </td>
                                                        <td>
                                                            @if ($inputType == 'checkbox')
                                                            <input type="hidden" name="values[{{ $formlabel }}][{{ $index }}]" value="off">
                                                            <input type="hidden" name="inputtype[{{ $formlabel }}][{{ $index }}]" value="checkbox">
                                                            <input class="form-check-input border-dark-subtle" name="values[{{ $formlabel }}][{{ $index }}]" type="checkbox" {{ ($row->value == 'on' || $row->value == 1) ? 'checked' : '' }} id="example-text-input-{{ $formlabel }}{{ $index }}">

                                                            @else
                                                            <input class="form-control border-dark-subtle" name="values[{{ $formlabel }}][{{ $index }}]" type="text" placeholder="Enter value here..." value="{{ $row->value }}" id="example-text-input-{{ $formlabel }}{{ $index }}">
                                                            <input type="hidden" name="inputtype[{{ $formlabel }}][{{ $index }}]" value="text">
                                                            @endif
                                                        </td>

                                                        <td>
                                                            <button type="button" class="btn btn-danger btn-sm remove-spec" title="Remove">&times;</button>
                                                        </td>
                                                    </tr>
                                                    @php $index++; @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-lg-12 d-flex align-items-end justify-content-end mt-3">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                    @endif


                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Specification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addSpecForm" method="POST">
                @csrf
                <div class="modal-body" id="modalbody">
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Select Type</label>
                            <select name="basevariant" class="form-select" id="typedrop" required>
                                <option value="">--select type--</option>
                                @foreach ($groupedspecsnew as $key => $variant)
                                <option value="{{ $key }}">{{ $key }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="spec-value" class="">Value</label>
                            <input class="form-control" placeholder="Enter specification" name="value" type="text" id="spec-value" required>
                        </div>
                        <div class="col-lg-4">
                            <label>Select Input Type</label>
                            <select name="inputtype" class="form-select" required>
                                <option value="">--select input type--</option>
                                <option value="text">Text Box</option>
                                <option value="checkbox">Checkbox</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Add</button>
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
    function toggleTable(button) {
        const table = button.nextElementSibling;
        if (table.style.display === "none") {
            table.style.display = "table";
        } else {
            table.style.display = "none";
        }
    }

</script>
<script>
    function confirmcopyfetures(event, id) {
        event.preventDefault();
        let smiley = '😊';
        swal({
                title: "Are you sure?"
                , text: "You want to copy Specifications of this variant!"
                , icon: "warning"
                , buttons: {
                    cancel: "Cancel"
                    , confirm: {
                        text: "Proceed"
                        , value: true
                        , visible: true
                    , }
                },
                // dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('copyform').submit();
                } else {
                    swal("Great Decision....!! Specifications will not be copy! " + smiley);
                }
            });
    }

</script>
<script>
    $(document).ready(function() {
        // Handle the submission of the modal form
        $('#addSpecForm').on('submit', function(e) {
            e.preventDefault();

            // Get the selected type and input type
            const selectedType = $('#typedrop').val();
            const inputType = $('select[name="inputtype"]').val();
            const specValue = $('input[name="value"]').val();

            if (!selectedType || !inputType || !specValue) {
                alert("Please fill out all fields.");
                return;
            }

            // Find the corresponding accordion table
            const tableBody = $(`#accordionFlushExample .accordion-item:has(button:contains(${selectedType})) tbody`);

            // Determine the input element based on the selected input type
            let inputElement = '';
            if (inputType === 'checkbox') {
                inputElement = `
                    <input type="hidden" name="inputtype[${selectedType}][]" value="${inputType}">
                    <input class="form-check-input border-dark-subtle" name="values[${selectedType}][]" type="checkbox">
                `;
            } else {
                inputElement = `
                    <input type="hidden" name="inputtype[${selectedType}][]" value="${inputType}">
                    <input class="form-control border-dark-subtle" name="values[${selectedType}][]" type="${inputType}" value="${specValue}">
                `;
            }

            // Create a new row dynamically with a red cross button for removal
            const newRow = `
            <tr>
                <td>${tableBody.find('tr').length + 1}</td>
                <td>${specValue}
                    <input type="hidden" name="featurenames[${selectedType}][]" value="${specValue}">
                </td>
                <td>${inputElement}</td>
                <td>
                    <button type="button" class="btn btn-danger btn-sm remove-spec" title="Remove">
                        &times;
                    </button>
                </td>
            </tr>
            `;

            // Append the new row to the corresponding table
            tableBody.append(newRow);

            // Close the modal and reset the form
            $('#exampleModal').modal('hide');
            $('#addSpecForm')[0].reset();
        });

        // Delegate click event to dynamically remove the specification row
        $(document).on('click', '.remove-spec', function() {
            $(this).closest('tr').remove();
        });
    });

</script>



@endpush
