<!-- =-=-=-=-=-=-= All Brands =-=-=-=-=-=-= -->
<section class="client-section ">
    <div class="container card">
        <div class="row">
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1> <span class="heading-color"> Popular</span> Brands</h1>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="brand-logo-area clients-bg">
                    <div class="clients-list">
                        @foreach ($brands as $data)
                            <div class="client-logo">
                                <a href="javascript:void(0);" class="brandfilter" data-value="{{ $data->value }}">
                                    <img src="{{ asset('assets/backend-assets/images/' . $data->iconimage) }}"
                                        class="img-responsive" alt="Brand Image" width="150" />
                                </a>
                                <div class="text-center fs-4">{{ $data->value }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

