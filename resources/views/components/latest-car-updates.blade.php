<section class="custom-padding ">
    <div class="container featured-cars">
        <div class="row">
            

            <div class="card">
                <div class="heading-panel">
                    <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <h1>Latest Car <span class="heading-color"> Updates</span> </h1>
                    </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="nav-item active">
                        <a class="nav-link" aria-controls="trending" role="tab" data-toggle="tab"
                            href="#carnews">Car
                            News </a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="popular" role="tab" data-toggle="tab"
                            href="#expertreviews">Expert Reviews</a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a class="nav-link" aria-controls="upcoming" role="tab" data-toggle="tab"
                            href="#video">Video</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content clearfix">
                    <div class="tab-pane fade in active" style="margin-top: 20px;" id="carnews">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class=" featured-slider owl-carousel owl-theme">
                                    @foreach ($carnews as $data)
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">

                                                        <div class="post-img">
                                                            @if ($data->blogimg)
                                                                <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                                    <img src="{{ asset('assets/backend-assets/images/' . $data->blogimg) }}"
                                                                        alt="Thumbnail" width="100px">
                                                                </a>
                                                            @elseif ($data->vurl)
                                                                <a href="{{ $data->vurl }}" target="_blank">
                                                                    <button type="button"
                                                                        class="btn btn-info waves-effect waves-light btn-sm">View
                                                                        Video</button>
                                                                </a>
                                                            @endif

                                                        </div>
                                                        <h3 class="post-title">
                                                            <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                                {{ $data->blogtitle }}
                                                            </a>
                                                        </h3>
                                                        <div class="post-info">
                                                            By CarChoice
                                                            <span class="pull-right">
                                                                {{ $data->created_at->format('d/m/y') }}
                                                            </span>
                                                        </div>
                                                        <div class="post-excerpt">
                                                            {{ substr($data->description, 0, 25) }}...
                                                        </div>
                                                        <div class="post-title pull-right">
                                                            <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                                <strong>Read More</strong>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>

                    <div class="tab-pane fade" style="margin-top: 20px;" id="expertreviews">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class=" featured-slider owl-carousel owl-theme">
                                    @foreach ($expert as $data)
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">

                                                        <div class="post-img">
                                                            @if ($data->blogimg)
                                                                <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                                    <img src="{{ asset('assets/backend-assets/images/' . $data->blogimg) }}"
                                                                        alt="Thumbnail" width="100px">
                                                                </a>
                                                            @elseif ($data->vurl)
                                                                <a href="{{ $data->vurl }}" target="_blank">
                                                                    <button type="button"
                                                                        class="btn btn-info waves-effect waves-light btn-sm">View
                                                                        Video</button>
                                                                </a>
                                                            @endif

                                                        </div>
                                                        <h3 class="post-title">
                                                            <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                                {{ $data->blogtitle }}
                                                            </a>
                                                        </h3>
                                                        <div class="post-info"> By
                                                            CarChoice
                                                            <span class="pull-right">
                                                                {{ $data->created_at->format('d/m/y') }}
                                                            </span>
                                                        </div>
                                                        <p class="post-excerpt">
                                                            {{ substr($data->description, 0, 25) }}...
                                                        </p>
                                                        <div class="post-title pull-right">
                                                            <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                                <strong>Read More</strong>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>

                    <div class="tab-pane fade" style="margin-top: 20px;" id="video">
                        <!-- Middle Content Box -->
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="row">
                                <div class=" featured-slider owl-carousel owl-theme">
                                    @foreach ($videos as $data)
                                        <div class="item">
                                            <div class="grid-style-2">
                                                <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            @if ($data->blogimg)
                                                                <a
                                                                    href={{ route('newsdetails', ['id' => $data->id]) }}>

                                                                    <img src="{{ asset('assets/backend-assets/images/' . $data->blogimg) }}"
                                                                        alt="Thumbnail" width="100px">
                                                                </a>
                                                            @elseif ($data->vurl)
                                                                <a href="{{ $data->vurl }}" target="_blank">
                                                                    <button type="button"
                                                                        class="btn btn-info waves-effect waves-light btn-sm">View
                                                                        Video</button>
                                                                </a>
                                                            @endif

                                                        </div>
                                                        <div >

                                                            <h3 class="post-title">
                                                                <a
                                                                    href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                                    {{ $data->blogtitle }}</a>
                                                            </h3>
                                                            <div class="post-info"> By
                                                                CarChoice
                                                                <span class="pull-right">

                                                                    {{ $data->created_at->format('d/m/y') }}
                                                                </span>
                                                            </div>
                                                            <p class="post-excerpt">
                                                                {{ substr($data->description, 0, 25) }}...
                                                            </p>
                                                            <div class="post-title pull-right">
                                                                <a href={{ route('newsdetails', ['id' => $data->id]) }}>
                                                                    <strong>Read More</strong>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Middle Content Box End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= Latest Car Updates End =-=-=-=-=-=-= -->
