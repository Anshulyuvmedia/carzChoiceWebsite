<!-- =-=-=-=-=-=-= New Car Loan FAQs  =-=-=-=-=-=-= -->
<section class="custom-padding used-cars ">
    <div class="container popular-cars card ">
        <div class="row">

            <!-- Middle Content Box -->
            <div class="col-md-12 col-xs-12 col-sm-12">
                
                    <div class="heading-panel">
                        <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                            <h1> Car Loan <span class="heading-color">FAQs</span> </h1>
                        </div>
                    </div>
                    @foreach ($faqcarloan as $row)
                        <ul class="accordion">
                            <li>
                                <h3 class="accordion-title"><a href="#">Q: {{ $row->faqlabel }}</a></h3>
                                <div class="accordion-content">
                                    <p>{{ $row->faqvalue }}</p>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                 
            </div>
        </div>
    </div>
</section>

<!-- =-=-=-=-=-=-= New Car Loan FAQs End =-=-=-=-=-=-= -->
