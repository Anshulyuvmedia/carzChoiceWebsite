<!-- =-=-=-=-=-=-= New Car Loan FAQs  =-=-=-=-=-=-= -->
<section class="custom-padding used-cars">
    <div class="container popular-cars">
        <div class="row">
            <div class="heading-panel">
                <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                    <h1>FAQs </h1>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    @foreach ($faqcarloan as $row)
                    <ul class="accordion">
                        <li>
                            <h3 class="accordion-title"><a href="#">{{$row->faqlabel}}</a></h3>
                            <div class="accordion-content">
                                <p>{{$row->faqvalue}}</p>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =-=-=-=-=-=-= New Car Loan FAQs End =-=-=-=-=-=-= -->


