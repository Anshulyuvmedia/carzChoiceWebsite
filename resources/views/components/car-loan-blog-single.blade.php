<!-- =-=-=-=-=-=-= Latest Car Updates  Ads =-=-=-=-=-=-= -->
<section class="custom-padding mt-0">
    <!-- Main Container -->
    <div class="container featured-cars card">
        <div class="row">
            <div>
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="row">
                        <div class="heading-panel">
                            <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                                <h1>Latest News on <span class="heading-color"> Car Loans</span> </h1>
                            </div>
                        </div>
                        <div class=" comapare-slider owl-carousel owl-theme">
                            @foreach ($carloan as $data)
                                <div class="item">
                                    <div class="grid-style-2">
                                        <!-- Listing Ad Grid -->
                                        <div class="col-md-12 col-xs-12 col-sm-12 px-2">
                                            <div class="blog-post">
                                                <div class="post-img">
                                                    @if ($data->blogimg)
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ asset('assets/backend-assets/images/' . $data->blogimg) }}"
                                                                alt="Thumbnail">
                                                        </a>
                                                    @endif

                                                </div>
                                                <h5 class="post-title"> <a href="#">{{ $data->blogtitle }}</a>
                                                    </h3>
                                                    <div class="post-info">
                                                        <a href="#">By Car Choice</a>
                                                        <a href="#">{{ $data->created_at->format('d/m/y') }}</a>
                                                    </div>
                                                    <p class="post-excerpt">{{ $data->description }}</p>
                                                    <a href="#" class="pull-right pe-3">
                                                        <strong>Read More</strong>
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="/news" class="">
                        View All New <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= Latest Car Updates End =-=-=-=-=-=-= -->
