<section class="custom-padding ">
    <div class="container card">
        <div class="row">
            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="heading-panel">
                        <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                            <h1>Compare <span class="heading-color">Cars</span> </h1>
                        </div>
                    </div>
                    <div class=" comapare-slider container owl-carousel owl-theme">
                        @foreach ($array as $data)
                            <div class="item">
                                <div class="grid-style-2">
                                    <div class="col-md-12 col-xs-12 col-sm-12">
                                        <div class="comparison-box">
                                            @foreach ($data['vehicles'] as $row)
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="compare-grid">

                                                        <img src="{{ asset('assets/backend-assets/images/' . $row->addimage) }}"
                                                            alt="Vehicle Image" class="img-responsive">

                                                        <div>
                                                            <div class="text-muted">{{ $row->brandname }}</div>
                                                            <div class=""><a href="#">{{ $row->carname }} </a></div>
                                                            <div class="text-muted">{{ $row->carmodalname }}</div>
                                                            <span class="ad-price">Rs. {{ $row->price }}Lakh</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="vsbox">vs</div>
                                            <a>
                                                <button data-id="{{ $data['id'] }}" id="comparebtn"
                                                    class="btn btn-theme rounded-4 btn-sm btn-block ">Compare
                                                    Now</button>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

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
