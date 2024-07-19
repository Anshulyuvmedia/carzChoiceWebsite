<section class="custom-padding ">
    <div class="container">
        <div class="row">
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <!-- Main Title -->
                    <h1>Compare <span class="heading-color"> Cars</span> </h1>
                </div>
            </div>


            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class=" comapare-slider container owl-carousel owl-theme">
                        @foreach ($array as $data)
                            <div class="item">
                                <div class="grid-style-2">
                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="comparison-box">
                                            @foreach ($data['vehicles'] as $row)
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="compare-grid">
                                                        <a href="#" class="">
                                                            <img src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                                alt="Vehicle Image" class="img-responsive">
                                                        </a>
                                                        <div>
                                                            <div class="text-muted">{{ $row->brandname }}</div>
                                                            <div class=""><a
                                                                    href="#">{{ $row->carmodalname }}
                                                                    ({{ $row->carname }})
                                                                </a></div>
                                                            <span class="ad-price">Rs. {{ $row->price }}
                                                                <span class="text-muted ps-2">onwards</span>
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="vsbox">vs</div>
                                            <a href="">
                                                <button data-id="{{ $data['id'] }}" id="comparebtn"
                                                    class="btn btn-outline btn-danger btn-lg btn-block margin-bottom-10">Compare
                                                    Now</button>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="/compareresult" class=" margin-bottom-10">
                        Compare Cars of Your Choice >
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#comparebtn', function() {
            let fullId = $(this).data('id');
            console.log(fullId);

            //Here is AJAX Code
            $.ajax({
                url: "/showcomparecars/" + fullId,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log(data);
                    if (data.success) {
                        window.location.href = data.redirect_url;
                    } else {
                        alert("error");
                    }
                }
            });
        });
    });
</script>
