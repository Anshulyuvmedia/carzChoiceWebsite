@extends('frontend.layouts.website')
@section('content')
@section('title', 'Compare Result')
<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">Compare</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Car Comparison =-=-=-=-=-=-= -->
    <section class="section-padding no-top compare-detial gray ">
        <!-- Main Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 ">
                    <div class="row my-3">

                        <ul class="nav nav-underline">

                            <li class="nav-item">
                                <a class="nav-link active" href="#Specifications">Specifications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Features">Features</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Middle Content Area -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <table class="card">
                        <tbody>
                                @foreach ($new as $data)
                                     @php
                                        $idsOnLoad = $data['vehicles'][0]->id . ',' . $data['vehicles'][1]->id;
                                        //dd($idsOnLoad);

                                    @endphp
                                    <form action="{{ route('insertcompareoffcanvas') }}" method="post" id="">
                                        @csrf
                                    <tr>
                                        <td class="hideInMobile">
                                            <div class="d-flex justify-content-center mt-3">
                                                <button type="submit" class="btn btn-outline btn-theme rounded-4">
                                                    Compare
                                                </button>
                                            </div>
                                        </td>
                                        @foreach ($data['vehicles'] as $index => $row)
                                            <td>
                                                    <div>
                                                        <div class="form-group">
                                                            <select class="form-control make" name="brand{{$index}}" id="dynamic_selectbrandname_{{$index}}" data-index="{{$index}}">
                                                                <option>--select brand--</option>
                                                                @foreach ($allbrands as $data)
                                                                <option value="{{ $data->label }}" {{ $data->label === $row->brandname ? 'selected' : '' }}>
                                                                    {{ $data->label }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                            <input class="idsonload" value="{{$idsOnLoad}}" type="hidden" name="compareid[]"  id="compareidsinput_{{$index}}">
                                                        <div class="form-group">
                                                            <select class="form-control search-year" id="carnamelabel_{{$index}}" data-index="{{$index}}" data-selected-value="{{ $row->carname }} {{ $row->carmodalname }}">
                                                                <option>--select variant--</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                <img src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                    alt="" class="center-block">
                                                <h4>{{ $row->brandname }} {{ $row->carname }}</h4>
                                                <div>{{ $row->carmodalname }}</div>
                                                <div>Rs. {{ $row->price }}/-</div>
                                            </td>
                                        @endforeach
                                    </tr>
                                </form>
                                @endforeach
                            </tbody>

                        </table>
                    <div class=" card my-5" id="Specifications">
                        <h3 class=" fw-bold text-uppercase bg-secondary-subtle p-3 text-center rounded-4">Specifications
                        </h3>
                        @foreach ($new as $data)
                        @if (!empty($new))
                            {{-- Assuming all vehicles have the same specification structure --}}
                            @if (!empty($data['vehicles'][0]->specifications))
                                @php
                                //    dd($data['vehicles'][0]->specifications);
                                    $groupedSpecifications = [];
                                    foreach ($data['vehicles'][0]->specifications as $specification) {
                                        $groupedSpecifications[$specification['type']][] = $specification;
                                    }
                                @endphp

                                @foreach ($groupedSpecifications as $type => $specifications)
                                    <ul class="accordion">
                                        <li>
                                            <h3 class="accordion-title mb-3"><a href="#">{{ $type }}</a>
                                            </h3>
                                            <div class="accordion-content card">
                                                <table class="table table-hover table-borderless ">
                                                    <thead class="table-borderless">
                                                        <tr class="table-Light">
                                                            <th class="text-center ">Specification</th>
                                                            @foreach ($data['vehicles'] as $vehicle)
                                                                <th class="text-center ">{{ $vehicle->carname }}
                                                                    ({{ $vehicle->carmodalname }})
                                                                </th>
                                                            @endforeach
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-borderless">
                                                        @foreach ($specifications as $spec)
                                                            <tr>
                                                                <th class="table-Light text-start border-end">
                                                                    {{ $spec['label'] }}</th>
                                                                @foreach ($data['vehicles'] as $vehicle)
                                                                    @php
                                                                        // Find the corresponding specification in the current vehicle
                                                                        $vehicleSpec = collect(
                                                                            $vehicle->specifications,
                                                                        )->firstWhere('label', $spec['label']);
                                                                    @endphp
                                                                    <td>{{ $vehicleSpec['value'] ?? 'N/A' }}</td>
                                                                @endforeach
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
                                @endforeach

                            @endif
                        @else
                            <p>No comparison data available.</p>
                        @endif
                        @endforeach
                    </div>

                    <div class=" card my-5" id="Features">
                        <h3 class="fw-bold text-uppercase bg-secondary-subtle p-3 text-center rounded-4">Features</h3>
                        @if (!empty($new) && isset($new[0]['vehicles'][0]->features))
                            @foreach ($new as $data)
                                @if (!empty($data['vehicles'][0]->features))
                                    @foreach ($data['vehicles'][0]->features as $index => $feature)
                                        <ul class="accordion">
                                            <li>
                                                <h3 class="accordion-title"><a
                                                        href="#">{{ $feature['type'] }}</a>
                                                </h3>
                                                <div class="accordion-content card">
                                                    <table class="table table-hover table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">Feature</th>
                                                                @foreach ($data['vehicles'] as $vehicle)
                                                                    <th class="text-center">{{ $vehicle->carname }}
                                                                        ({{ $vehicle->carmodalname }})
                                                                    </th>
                                                                @endforeach
                                                            </tr>
                                                        </thead>
                                                        <tbody class="">
                                                            @foreach ($data['vehicles'][0]->features[$index]['label'] ?? [] as $labelIndex => $label)
                                                                <tr>
                                                                    <th class="table-Light text-start border-end">{{ $label }}</th>
                                                                    @foreach ($data['vehicles'] as $vehicle)
                                                                        <td>
                                                                            @if (isset($vehicle->features[$index]['value'][$labelIndex]))
                                                                                {{ $vehicle->features[$index]['value'][$labelIndex] == 1 ? '✅' : '❌' }}
                                                                            @else
                                                                                ❌
                                                                            @endif
                                                                        </td>
                                                                    @endforeach
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </li>
                                        </ul>
                                    @endforeach
                                @endif
                            @endforeach
                        @else
                            <p>No comparison data available.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="hideInDesktop">
                <div class="row d-flex" id="mobilehighlights">
                    <div class="col-6 text-center">
                            <button class="border-0 btn-outline btn-sm text-wrap highlightbtn text-black" id="highlightDifferences"><i class="fa fa-eye" aria-hidden="true"></i> Hide Similarities</button>
                    </div>
                    <div class="col-6 text-center border-start">
                            <button class="border-0 btn-outline btn-sm text-wrap highlightbtn text-black" id="highlight"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Highlight Differences</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
            //Hide Similatires Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const highlightButton = document.getElementById('highlightDifferences');
            let isHighlighted = false; // Track the current state of the button

            highlightButton.addEventListener('click', function(e) {
                e.preventDefault();

                // Get all the table rows under the Specifications and Features sections
                const specificationsRows = document.querySelectorAll('#Specifications .accordion-content tbody tr');
                const featuresRows = document.querySelectorAll('#Features .accordion-content tbody tr');

                const toggleRows = (rows) => {
                    if (isHighlighted) {
                        // If already highlighted, unhide all rows and reset the button text
                        rows.forEach(row => {
                            row.style.display = ''; // Show all rows
                        });
                    } else {
                        // If not highlighted, hide rows where all values are the same
                        rows.forEach(row => {
                            const cells = row.querySelectorAll('td');
                            let allSame = true;

                            // Collect all cell values for comparison
                            const values = Array.from(cells).map(cell => cell.textContent.trim());

                            // Check if all values are the same
                            for (let i = 1; i < values.length; i++) {
                                if (values[i] !== values[0]) {
                                    allSame = false;
                                    break;
                                }
                            }

                            // Hide or show the row based on comparison
                            if (allSame) {
                                row.style.display = 'none'; // Hide if all values are the same
                            } else {
                                row.style.display = ''; // Show if there are differences
                            }
                        });
                    }
                };

                // Toggle visibility for both sections
                toggleRows(specificationsRows);
                toggleRows(featuresRows);

                // Update button text and icon
                if (isHighlighted) {
                    highlightButton.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i> Hide Similarities';
                } else {
                    highlightButton.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i> Show All';
                }

                // Toggle the state
                isHighlighted = !isHighlighted;
            });
        });
</script>
<script>
    document.getElementById('highlight').addEventListener('click', function() {
        let specRows = document.querySelectorAll('#Specifications .accordion-content tbody tr');
        let featureRows = document.querySelectorAll('#Features .accordion-content tbody tr');

        // Helper function to highlight rows with same values
        function highlightRows(rows) {
            rows.forEach(row => {
                let cells = row.querySelectorAll('td');
                let values = Array.from(cells).map(cell => cell.textContent.trim());
                if (!values.every(value => value === values[0])) {
                // Toggle the class based on its current state
                if (row.classList.contains('table-success')) {
                    row.classList.remove('table-success');
                } else {
                    row.classList.add('table-success');
                }
            } else {
                // Ensure the class is removed if values are the same
                row.classList.remove('table-success');
            }
            });
        }
        highlightRows(specRows);
        highlightRows(featureRows);
    });
</script>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    //Compare Filter
        $(function() {
            $(document).on('change', '[id^=dynamic_selectbrandname_]', function() {
                var selectedBrandName = $(this).val();
                var index = $(this).data('index');
                console.log(selectedBrandName, index);

                $.ajax({
                    url: "/filtervariantscompare/" + selectedBrandName,
                    type: "GET",
                    success: function(data) {
                        console.log('Data from server:', data);
                        var dropdown1 = $('#carnamelabel_' + index);
                        dropdown1.empty();
                        dropdown1.append($('<option selected>--select variant--</option>'));
                        data.forEach(function(item) {
                            dropdown1.append($('<option data-id="'+ item.id +'" value="' + item.carname + " " +  item.carmodalname + '">' + item.carname + " " + item.carmodalname +'</option>'));
                        });
                    }
                });
            });
        });

        $(document).ready(function() {
                $('[id^=dynamic_selectbrandname_]').each(function() {
                    var selectedBrandName = $(this).val();
                    var index = $(this).data('index');
                    console.log(selectedBrandName, index);
                    $.ajax({
                        url: "/filtervariantscompare/" + selectedBrandName,
                        type: "GET",
                        success: function(data) {
                            console.log('Data from server:', data);
                            var dropdown1 = $('#carnamelabel_' + index);
                            var currentSelectedValue = dropdown1.data('selected-value');
                            dropdown1.empty();
                            dropdown1.append($('<option>--select variant--</option>'));
                            data.forEach(function(item) {
                                var optionValue = item.carname + " " + item.carmodalname;
                                var option = $('<option data-id="'+ item.id +'" value="' + optionValue + '">' + optionValue + '</option>');

                                // Set the selected option if it matches the stored value
                                if (optionValue === currentSelectedValue) {
                                    option.prop('selected', true);
                                }
                                dropdown1.append(option);
                            });
                        }
                    });
                });
        });

        $(function() {
    // Clear all hidden input values on page load
    $('.idsonload').val('');

    // Initialize the ids array
    var ids = [];

    console.log("Initial empty IDS: ", ids);

    // Handle change event on dropdowns
    $(document).on('change', '[id^=carnamelabel_]', function() {
        var selectedOption = $(this).find(':selected');
        var idvalue = String(selectedOption.data('id')); // Convert to string
        var index = $(this).data('index');

        console.log("Dropdown changed - index: " + index + ", idvalue: " + idvalue);

        // Ensure that the correct ID is stored at the correct index
        ids[index] = idvalue;

        // Update the corresponding hidden input field
        $('#compareidsinput_' + index).val(idvalue);

        console.log("Updated IDS array after change: ", ids);
    });

    // Handle form submission
    $('form').on('submit', function() {
        // Iterate over each hidden input
        $(this).find('.idsonload').each(function(index) {
            // Set the value from the ids array, or an empty string if undefined
            $(this).val(ids[index] || '');
        });

        console.log("Form Submitted with IDS array: ", ids);
    });
});

        // $(function() {
        //     var idsStr = $('.idsonload').val();
        //     var ids = idsStr ? idsStr.split(',').map(String) : [];
        //     console.log("ON LOAD IDS: ", ids);

        //     // Handle change event on dropdowns
        //     $(document).on('change', '[id^=carnamelabel_]', function() {
        //         var selectedOption = $(this).find(':selected');
        //         var idvalue = String(selectedOption.data('id')); // Convert to string
        //         var index = $(this).data('index');

        //         console.log("Dropdown changed - index: " + index + ", idvalue: " + idvalue);

        //             // Ensure that the correct ID is stored at the correct index
        //     ids[index] = idvalue;

        //     // Update the corresponding hidden input field
        //     $('#compareidsinput_' + index).val(idvalue);
        //     console.log("Updated IDS array after change: ", ids);
        //     });
        //     $('.idsonload').val(ids);
        // });

</script>



