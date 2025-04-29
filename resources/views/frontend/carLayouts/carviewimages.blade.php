@extends('frontend.layouts.website')
@section('content')
@section('title', ' Car Images Views ')

<!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
<section class="page-header-area-2 gray">
    <!-- Main Container -->
    <div class="container featured-cars">
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-page">
                    @if ($allcarimage->isNotEmpty())
                        @php
                            $firstCarData = $allcarimage->first();
                        @endphp
                        <h1>
                            {{ $firstCarData->brandname }} {{ $firstCarData->vehicle }} Images
                            <span>({{ $firstCarData->vehicle_count }} Images)</span>
                        </h1>
                        <p>
                            View the latest {{ $firstCarData->vehicle }} images. {{ $firstCarData->vehicle }} car
                            has {{ $firstCarData->vehicle_count }} images of its interior, and exterior. Also, Mahindra
                            {{ $firstCarData->vehicle }} is available in 16 different colours.
                        </p>
                    @endif
                </div>
            </div>

            <div class="card">

                <!-- Nav tabs -->
                @php
                    $type = request()->query('type', 'All');
                    // dd($type);// Default to 'All' if 'type' is not set
                @endphp

                <ul class="nav nav-tabs border-0" role="tablist">
                    <li role="presentation" class="nav-item {{ $type == 'All' ? 'active' : '' }}">
                        <a class="nav-link {{ $type == 'All' ? 'active' : '' }}" aria-controls="All" role="tab"
                            data-toggle="tab" href="#All">All</a>
                    </li>
                    <li role="presentation" class="nav-item {{ $type == 'Exterior' ? 'active' : '' }}">
                        <a class="nav-link {{ $type == 'Exterior' ? 'active' : '' }}" aria-controls="Exterior"
                            role="tab" data-toggle="tab" href="#Exterior">Exterior</a>
                    </li>
                    <li role="presentation" class="nav-item {{ $type == 'Interior' ? 'active' : '' }}">
                        <a class="nav-link {{ $type == 'Interior' ? 'active' : '' }}" aria-controls="Interior"
                            role="tab" data-toggle="tab" href="#Interior">Interior</a>
                    </li>
                    <li role="presentation" class="nav-item {{ $type == 'Colours' ? 'active' : '' }}">
                        <a class="nav-link {{ $type == 'Colours' ? 'active' : '' }}" aria-controls="Colours"
                            role="tab" data-toggle="tab" href="#Colours">Colours</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content clearfix">

                    <div class="tab-pane fade {{ $type == 'All' ? 'in active' : '' }}" id="All">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row my-3">
                                <div class="d-flex pb-4" style="width: 100%; overflow-x: auto; scrollbar-width: thin;">
                                    @php
                                        // Define the specific types to show
                                        $AllTypes = [
                                            'Outer view',
                                            'Outer lights',
                                            'Outer Parts',
                                            'Doors and Mirrors',
                                            'Roof',
                                            'Logo',
                                            'Seat & seat adjustments',
                                        ];

                                        // Filter and get unique vehicle types
                                        $uniqueTypes = $allcarimage->whereIn('type', $AllTypes)->unique('type');
                                    @endphp

                                    @foreach ($uniqueTypes as $imagedata)
                                        <a type="button" href="#{{ $imagedata->type }}"
                                            class="btn btn-theme rounded-4 rounded-pill mx-1 px-4 py-1">
                                            {{ $imagedata->type }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Middle Content Box -->
                        @foreach ($uniqueTypes as $type)
                            @php
                                // Filter images for the current type
                                $filteredTypes = $allcarimage->where('type', $type->type);
                                // Count of images for the current type
                                $imageCount = $filteredTypes->count();
                            @endphp

                            @if ($filteredTypes->isNotEmpty())
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="row border-top pt-3" id="{{ $type->type }}">
                                        <h4 class="mb-3 fw-bold">{{ $type->type }} ({{ $imageCount }} Images)</h4>

                                        <div class="featured-slider owl-carousel owl-theme">
                                            @foreach ($filteredTypes as $imagedata)
                                                <div class="item">
                                                    <div class="grid-style-2">
                                                        <!-- Listing Ad Grid -->
                                                        <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                            <div class="category-grid-box-1 rounded-5">
                                                                <div class="image">
                                                                    <a href="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                        data-fancybox="all">
                                                                        <img class="img-responsive"
                                                                            src="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                            alt="Thumbnail" />
                                                                    </a>
                                                                </div>
                                                                <div class="short-description-1 clearfix">
                                                                    {{ $imagedata->title }}
                                                                    <a href="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                        download="{{ $imagedata->addimage }}">
                                                                        <span class="rounded-pill text-white pull-right"
                                                                            style="background-color: rgb(113 113 113);height: 29px;width: 30px;text-align: center;font-size: 15px;">
                                                                            <i class="bi bi-download"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- Listing Ad Grid -->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- Middle Content Box End -->
                    </div>

                    <div class="tab-pane fade" id="Exterior">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row my-3">
                                <div class="d-flex pb-4" style="width: 100%; overflow-x: auto; scrollbar-width: thin;">
                                    @php
                                        // Define the specific types to show
                                        $exteriorTypes = [
                                            'Outer view',
                                            'Outer lights',
                                            'Outer Parts',
                                            'Doors and Mirrors',
                                            'Roof',
                                            'Logo',
                                        ];

                                        // Filter the collection to include only the specific types and ensure they are unique
                                        $filteredTypes = $allcarimage->whereIn('type', $exteriorTypes)->unique('type');
                                    @endphp

                                    @foreach ($filteredTypes as $imagedata)
                                        <a type="button" href="#{{ $imagedata->type }}"
                                            class="btn btn-theme rounded-4 rounded-pill mx-1 px-4 py-1">
                                            {{ $imagedata->type }}
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <!-- Middle Content Boxes -->
                        @foreach ($filteredTypes as $type)
                            @php
                                // Filter images for the current type
                                $filteredImages = $allcarimage->where('type', $type->type);
                                // Count of images for the current type
                                $imageCount = $filteredImages->count();
                            @endphp

                            @if ($filteredImages->isNotEmpty())
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="row border-top pt-3" id="{{ $type->type }}">
                                        <h4 class="mb-3 fw-bold">{{ $type->type }} ({{ $imageCount }} Images)</h4>

                                        <div class="featured-slider owl-carousel owl-theme">
                                            @foreach ($filteredImages as $imagedata)
                                                <div class="item">
                                                    <div class="grid-style-2">
                                                        <!-- Listing Ad Grid -->
                                                        <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                            <div class="category-grid-box-1 rounded-5">
                                                                <div class="image">
                                                                    <a href="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                        data-fancybox="exterior">
                                                                        <img class="img-responsive"
                                                                            src="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                            alt="Thumbnail" />
                                                                    </a>
                                                                </div>
                                                                <div class="short-description-1 clearfix">
                                                                    {{ $imagedata->title }}
                                                                    <a href="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                        download="{{ $imagedata->addimage }}">
                                                                        <span class="rounded-pill text-white pull-right"
                                                                            style="background-color: rgb(113 113 113);height: 29px;width: 30px;text-align: center;font-size: 15px;">
                                                                            <i class="bi bi-download"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- Listing Ad Grid -->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- Middle Content Box End -->
                    </div>


                    <div class="tab-pane fade" id="Interior">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row my-3">
                                <div class="d-flex pb-4"
                                    style="width: 100%; overflow-x: auto; scrollbar-width: thin;">
                                    @php
                                        // Define the specific types to show
                                        $interiorTypes = [
                                            'Seat & seat adjustments',
                                            'Dashboard',
                                            'Gears, Pedals and Stalks',
                                            'Storage and Cup holders',
                                            'Entertainment systems',
                                            'Ac',
                                            'Interior lights',
                                            'Charging points',
                                            'Doors & Controls',
                                            'Hooks and Handles',
                                            'AirBags',
                                            'Other (interior)',
                                        ];

                                        // Filter the collection to include only the specific types and ensure they are unique
                                        $filteredTypes = $allcarimage->whereIn('type', $interiorTypes)->unique('type');
                                    @endphp

                                    @foreach ($filteredTypes as $imagedata)
                                        <a type="button" href="#{{ $imagedata->type }}"
                                            class="btn btn-theme rounded-4 rounded-pill mx-1 px-4 py-1">
                                            {{ $imagedata->type }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Middle Content Boxes -->
                        @foreach ($filteredTypes as $type)
                            @php
                                // Filter images for the current type
                                $filteredImages = $allcarimage->where('type', $type->type);
                                // Count of images for the current type
                                $imageCount = $filteredImages->count();
                            @endphp

                            @if ($filteredImages->isNotEmpty())
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="row border-top pt-3" id="{{ $type->type }}">
                                        <h4 class="mb-3 fw-bold">{{ $type->type }} ({{ $imageCount }} Images)
                                        </h4>

                                        <div class="featured-slider owl-carousel owl-theme">
                                            @foreach ($filteredImages as $imagedata)
                                                <div class="item">
                                                    <div class="grid-style-2">
                                                        <!-- Listing Ad Grid -->
                                                        <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                            <div class="category-grid-box-1 rounded-5">
                                                                <div class="image">
                                                                    <a href="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                        data-fancybox="interior">
                                                                        <img class="img-responsive"
                                                                            src="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                            alt="Thumbnail" />
                                                                    </a>
                                                                </div>
                                                                <div class="short-description-1 clearfix">
                                                                    {{ $imagedata->title }}
                                                                    <a href="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                        download="{{ $imagedata->addimage }}">
                                                                        <span
                                                                            class="rounded-pill text-white pull-right"
                                                                            style="background-color: rgb(113 113 113);height: 29px;width: 30px;text-align: center;font-size: 15px;">
                                                                            <i class="bi bi-download"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- Listing Ad Grid -->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- Middle Content Box End -->
                    </div>

                    @php

                        $type = request()->query('type', 'All');
                        // Filter the collection to include only images with type "Outer view"
                        $outerViewImages = $allcarimage->where('type', 'Outer view');
                    @endphp


                    <div class="tab-pane mt-4 fade {{ $type == 'Colours' ? 'in active' : '' }}" id="Colours">

                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">

                                @if ($outerViewImages->isNotEmpty())
                                    <div class="featured-slider owl-carousel owl-theme">
                                        @foreach ($outerViewImages as $imagedata)
                                            <div class="item">
                                                <div class="grid-style-2">
                                                    <!-- Listing Ad Grid -->
                                                    <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                        <div class="category-grid-box-1 rounded-5">
                                                            <div class="image">
                                                                <a href="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                    data-fancybox="color">
                                                                    <img class="img-responsive"
                                                                        src="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                        alt="Thumbnail" />
                                                                </a>
                                                            </div>
                                                            <div class="short-description-1 d-flex justify-content-between ">
                                                                    @php
                                                                        $colors = json_decode($imagedata->color, true);
                                                                        $labels = $colors['label'];
                                                                        $values = $colors['value'];
                                                                        // dd($values);
                                                                    @endphp
                                                                        @if (count($values) === 2)
                                                                        <div class="d-flex align-items-center justify-content-evenly" style="width: 100%;">
                                                                            <div class="border shadow-sm m-1 p-2 text-center fw-bold text-dark"
                                                                                    style="height: 50px; width:50px; border-radius: 10px; background: linear-gradient(to bottom, {{ $values[0] }} 50%, {{ $values[1] }} 50%);">

                                                                            </div>
                                                                            <div class="text-center fw-bold text-dark">
                                                                                {{  $labels }}
                                                                            </div>
                                                                        </div>
                                                                        @else
                                                                            @foreach ($values as $key => $colorValue)
                                                                                    <div class="border shadow-sm m-1 p-2 text-center fw-bold text-dark"
                                                                                        style="background-color: {{ $colorValue }};">
                                                                                        {{ $labels[$key] ?? '' }}
                                                                                    </div>
                                                                            @endforeach
                                                                        @endif


                                                                <a href="{{ asset('assets/backend-assets/images/' . $imagedata->addimage) }}"
                                                                    download="{{ $imagedata->addimage }}" style="display: flex; align-items:center; ">
                                                                    <span class="rounded-pill text-white pull-right"
                                                                        style="background-color: rgb(113 113 113);height: 29px;width: 30px;text-align: center;font-size: 15px;">
                                                                        <i class="bi bi-download"></i>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Listing Ad Grid -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif



                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>
                </div>
                <!-- Middle Content Box End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    </div>
    <!-- Main Container End -->
    </div>
</section>
<!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->

@endsection
