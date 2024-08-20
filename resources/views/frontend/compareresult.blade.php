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
                            <li class="nav-item">
                                <a class="nav-link" href="#Brochure">Brochure</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Colours">Colours</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Reviews">User Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Middle Content Area -->
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <table class="card">
                        <tbody>
                                @foreach ($new as $data)
                                <tr>
                                    <td>
                                        Selected Cars
                                    </td>
                                    @foreach ($data['vehicles'] as $index => $row)
                                        <td>
                                            <form action="{{ route('insertcompareoffcanvas') }}" method="post" id="">
                                                @csrf
                                                <div>
                                                    <div class="form-group">
                                                        <select class="form-control make" name="brand{{$index}}" id="dynamic_selectbrandname_{{$index}}" data-index="{{$index}}">
                                                            <option>--select brand--</option>
                                                            @foreach ($allbrands as $data)
                                                                <option value="{{$data->label}}">{{$data->label}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                        <input type="hidden" name="compareid[]"  id="compareidsinput_{{$index}}">
                                                    <div class="form-group">
                                                        <select class=" form-control search-year" id="carnamelabel_{{$index}}">
                                                            <option>--select variant--</option>
                                                        </select>
                                                    </div>
                                                    <div class="d-flex justify-content-center mt-3">
                                                        <button type="submit" class="btn btn-outline btn-theme rounded-4">
                                                            Compare
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <img src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                alt="" class="center-block">
                                            <h4>{{ $row->brandname }} {{ $row->carname }}</h4>
                                            <div>{{ $row->carmodalname }}</div>
                                            <div>Rs. {{ $row->price }}/-</div>
                                            {{-- @php
                                                $colors = json_decode($row->colors,true);
                                            @endphp
                                            <div class="row d-flex justify-content-center gap-2 mt-3">
                                                @foreach ($colors as $data)
                                                <div class="card col-1 p-2" style="background-color: {{$data['value']}}; color:white; height:30px;">
                                                    {{$data['label']}}
                                                </div>
                                                @endforeach
                                            </div> --}}
                                        </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    <div class=" card my-5" id="Specifications">
                        <h3 class=" fw-bold text-uppercase bg-secondary-subtle p-3 text-center rounded-4">Specifications
                        </h3>

                        @if (!empty($new))
                            {{-- Assuming all vehicles have the same specification structure --}}
                            @if (!empty($data['vehicles'][0]->specifications))

                                @php
                                    // Group specifications by type
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
        </div>
    </section>
</div>
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
                dropdown1.append($('<option selected>Choose...</option>'));
                data.forEach(function(item) {
                    dropdown1.append($('<option data-id="'+ item.id +'" value="' + item.carname + " " +  item.carmodalname + '">' + item.carname + " " + item.carmodalname +'</option>'));
                });
            }
        });
    });
});


$(function() {
    var ids = [];

    $(document).on('change', '[id^=carnamelabel_]', function() {
        var idvalue = $(this).find(':selected').data('id').toString();
        var index = $(this).data('index');
        if (!ids.includes(idvalue)) {
            ids.push(idvalue);
        }
        $('#compareidsinput').val(ids);

        console.log("IDS : " + ids);
    });

    $('form').on('submit', function() {
        var index = $(this).find('select.make').data('index');
        $('#compareidsinput').val(ids);
        $('#compareidsinput_' + index).val(ids);
        console.log("Form Submitted with IDS JSON: " + ids);
    });
});
</script>
