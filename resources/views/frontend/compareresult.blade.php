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
                    @foreach ($new as $data)
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        Select Car
                                    </td>
                                    @foreach ($data['vehicles'] as $row)
                                        <td>
                                            <div class="form-group">
                                                <select class=" form-control make">
                                                    <option label="Any Make"></option>
                                                    <option>BMW</option>
                                                    <option>Honda </option>
                                                    <option>Hyundai </option>
                                                    <option>Nissan </option>
                                                    <option>Mercedes Benz </option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class=" form-control search-year">
                                                    <option label="Any Year"></option>
                                                    <option>Year</option>
                                                    <option>2010</option>
                                                    <option>2011</option>
                                                    <option>2012</option>
                                                    <option>2013</option>
                                                    <option>2014</option>
                                                    <option>2015</option>
                                                    <option>2016</option>
                                                </select>
                                            </div>
                                            <img src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                alt="" class="center-block">
                                            <h4>{{ $row->brandname }} {{ $row->carname }}</h4>
                                            <h4>{{ $row->carmodalname }}</h4>
                                            <h4>Rs. {{ $row->price }}/-</h4>
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                    @endforeach
                    </table>
                    <div class="shadow-sm p-3 bg-dark rounded-3" id="Specifications">
                        <h3 class=" fw-bold text-danger">Specifications</h3>
                    </div>
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
                                        <h3 class="accordion-title"><a href="#">{{ $type }}</a></h3>
                                        <div class="accordion-content">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Specification</th>
                                                        @foreach ($data['vehicles'] as $vehicle)
                                                            <th>{{ $vehicle->carname }} ({{ $vehicle->carmodalname }})
                                                            </th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($specifications as $spec)
                                                        <tr>
                                                            <td>{{ $spec['label'] }}</td>
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


                    <div class="shadow-sm p-3 bg-dark rounded-3">
                        <h3 class=" fw-bold text-danger">Features</h3>
                    </div>

                    @if (!empty($new) && isset($new[0]['vehicles'][0]->features))
                        @foreach ($new as $data)
                            @if (!empty($data['vehicles'][0]->features))
                                @foreach ($data['vehicles'][0]->features as $index => $feature)
                                    <ul class="accordion">
                                        <li>
                                            <h3 class="accordion-title"><a href="#">{{ $feature['type'] }}</a>
                                            </h3>
                                            <div class="accordion-content">
                                                <table class="table">
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
                                                    <tbody>
                                                        @foreach ($data['vehicles'][0]->features[$index]['label'] ?? [] as $labelIndex => $label)
                                                            <tr>
                                                                <td>{{ $label }}</td>
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
    </section>
</div>
@endsection
