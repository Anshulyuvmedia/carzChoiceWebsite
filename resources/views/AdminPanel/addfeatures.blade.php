{{-- “सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।” --}}
@extends('layouts.admin')
@section('main-section')
@section('title', 'Add Features')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-start align-items-center">
                        <h4 class="me-3">{{ $carname }} {{ $variant }} Features</h4>
                    </div>
                    <div class="col-lg-3 p-0">
                        <form action="{{ route('getfeaturestocopy') }}" method="POST" id="copyform">
                            @csrf
                            <label class="mb-0 fs-6">Copy Features of :</label>
                            <div class="p-0 d-flex justify-content-start">
                                <select name="basevariant" class="form-select mb-0" id="variantdrop" required>
                                    <option value="">--select variant--</option>
                                    @foreach ($carvariants as $row)
                                        <option data-variant="{{ $row->id }}" value="{{ $row->id }}">
                                            {{ $row->carmodalname }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="currentvehicleid" value="{{ $vehicleid }}">
                                <button type="submit" class="btn btn-success ms-2"
                                    onclick="confirmcopyfetures(event, '{{ $vehicleid }}')"
                                    class="text-danger dropdown-item">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">dashboard</a></li>&nbsp;/
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @php
            $groupedFeatures = $features->groupBy('formlabels');
        @endphp
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (count($grouped) === 0)
                        <div class="card-body">
                            <form action="{{ route('storefeatures') }}" method="POST">
                                @csrf
                                <div class="accordion accordion-flush" id="storedivnew">
                                    @foreach ($groupedFeatures as $formlabel => $group)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-heading-{{ $loop->index }}">
                                                <button
                                                    class="accordion-button {{ $loop->first ? '' : 'collapsed' }} text-black fw-bold"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapse-{{ $loop->index }}"
                                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                    aria-controls="flush-collapse-{{ $loop->index }}">
                                                    {{ $formlabel }}
                                                </button>
                                                <input type="hidden" name="formlabels[]" value="{{ $formlabel }}">
                                                <input type="hidden" name="vehicleid" value="{{ $vehicleid }}">
                                            </h2>
                                            <div id="flush-collapse-{{ $loop->index }}"
                                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                                aria-labelledby="flush-heading-{{ $loop->index }}"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="card-body table-responsive">
                                                    <table id="datatable-buttons"
                                                        class="table table-bordered dt-responsive nowrap"
                                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Feature</th>
                                                                <th>Value</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php $index = 0; @endphp
                                                            @foreach ($group as $row)
                                                                <tr>
                                                                    <td>{{ $index + 1 }} <input type="hidden"
                                                                            name="indexnos[{{ $formlabel }}][]"
                                                                            value="{{ $index }}"></td>
                                                                    <td>{{ $row->value }} <input type="hidden"
                                                                            name="featurenames[{{ $formlabel }}][]"
                                                                            value="{{ $row->value }}"></td>
                                                                    <td>
                                                                        @if ($row->inputtype != 'textarea')
                                                                            <!-- Hidden field to store unchecked value -->
                                                                            <input type="hidden"
                                                                                name="values[{{ $formlabel }}][{{ $index }}]"
                                                                                value="0">

                                                                            <!-- Checkbox or other input field -->
                                                                            <input
                                                                                class="border-dark-subtle {{ $row->inputtype == 'checkbox' ? 'form-check-input' : 'form-control' }}"
                                                                                name="values[{{ $formlabel }}][{{ $index }}]"
                                                                                type="{{ $row->inputtype }}"
                                                                                placeholder="Enter value here..."
                                                                                id="formCheck{{ $formlabel }}{{ $index }}"
                                                                                value="1" />
                                                                        @else
                                                                            <!-- Hidden field for textarea -->
                                                                            <input type="hidden"
                                                                                name="values[{{ $formlabel }}][{{ $index }}]"
                                                                                value="0">

                                                                            <!-- Textarea field -->
                                                                            <textarea class="border-dark-subtle form-control" name="values[{{ $formlabel }}][{{ $index }}]"
                                                                                placeholder="Enter value here..." id="formCheck{{ $formlabel }}{{ $index }}"></textarea>
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
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light">Submit</button>
                                </div>
                            </form>
                        </div>
                    @endif


                    @if (count($grouped) !== 0)
                        <div class="card-body">
                            <form action="{{ route('updatefeatures') }}" method="POST">
                                @csrf
                                <div class="accordion accordion-flush" id="updatediv">
                                    @foreach ($grouped as $type => $featuresdata)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-heading-{{ $loop->index }}">
                                                <button
                                                    class="accordion-button {{ $loop->first ? '' : 'collapsed' }} text-black fw-bold"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapse-{{ $loop->index }}"
                                                    aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                                    aria-controls="flush-collapse-{{ $loop->index }}">
                                                    {{ $type }}
                                                </button>
                                                <input type="hidden" name="types[]" value="{{ $type }}">
                                                <input type="hidden" name="vehicleid" value="{{ $vehicleid }}">
                                            </h2>
                                            <div id="flush-collapse-{{ $loop->index }}"
                                                class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                                aria-labelledby="flush-heading-{{ $loop->index }}"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="card-body table-responsive">
                                                    <table id="datatable-buttons"
                                                        class="table table-bordered dt-responsive nowrap"
                                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Label</th>
                                                                <th>Value</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($featuresdata as $data)
                                                                @foreach ($data->label as $index => $row)
                                                                    <tr>
                                                                        <td>{{ $index + 1 }}
                                                                            <input type="hidden"
                                                                                name="indexnos[{{ $type }}][]"
                                                                                value="{{ $index }}">
                                                                        </td>
                                                                        <td>{{ $row }}
                                                                            <input type="hidden"
                                                                                name="featuresname[{{ $type }}][]"
                                                                                value="{{ $row }}">
                                                                        </td>
                                                                        <td>
                                                                            {{-- Check for checkbox type based on 1/0 values --}}
                                                                            @if (in_array(strtolower($data->value[$index]), ['0', '1']))
                                                                                <input type="hidden"
                                                                                    name="valuesupdate[{{ $type }}][{{ $index }}]"
                                                                                    value="0">
                                                                                <input
                                                                                    class="form-check-input border-dark-subtle"
                                                                                    name="valuesupdate[{{ $type }}][{{ $index }}]"
                                                                                    type="checkbox" value="1"
                                                                                    {{ $data->value[$index] == '1' ? 'checked' : '' }}
                                                                                    id="formCheck{{ $type }}{{ $index }}" />
                                                                                {{-- Handle textarea type --}}
                                                                            @elseif (strtolower($type) == 'textarea')
                                                                                <textarea class="border-dark-subtle form-control" name="valuesupdate[{{ $type }}][{{ $index }}]"
                                                                                    placeholder="Enter value here..." id="formCheck{{ $type }}{{ $index }}">{{ $data->value[$index] }}</textarea>
                                                                                {{-- Handle other input types (default: text) --}}
                                                                            @else
                                                                                <input
                                                                                    class="border-dark-subtle form-control"
                                                                                    name="valuesupdate[{{ $type }}][{{ $index }}]]"
                                                                                    type="text"
                                                                                    value="{{ $data->value[$index] }}"
                                                                                    id="formCheck{{ $type }}{{ $index }}" />
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12 d-flex align-items-end justify-content-end">
                                    <button type="submit"
                                        class="btn btn-success waves-effect waves-light">Update</button>
                                </div>
                            </form>
                        </div>
                    @endif


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
                title: "Are you sure?",
                text: "You want to copy Features of this variant!",
                icon: "warning",
                buttons: {
                    cancel: "Cancel",
                    confirm: {
                        text: "Proceed",
                        value: true,
                        visible: true,
                    }
                },
                // dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('copyform').submit();
                } else {
                    swal("Great Decision....!! Features will not be copy! " + smiley);
                }
            });
    }
</script>
@endpush
