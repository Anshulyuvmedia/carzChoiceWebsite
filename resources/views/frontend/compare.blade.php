@extends('frontend.layouts.website')
@section('content')
@section('title', 'Compare ')

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
                <div class="header-page">
                   <h1>Car Comparison</h1>
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
    <section class="section-padding no-top reviews gray ">
       <!-- Main Container -->
       <div class="container">
          <!-- Row -->
          <div class="row">
             <!-- Middle Content Area -->
             <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                   <!-- Review Archive -->
                   <ul class="compare-masonry text-center">
                      <!-- Comparison -->
                      <li class="col-md-6 col-sm-6 col-xs-12">
                         <div class="comparison-box">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                   <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/2.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2016 Ford Escape cape  </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(4)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="vsbox">vs</div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                   <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/1.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Chevrolet Camaro </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                         </div>
                      </li>
                      <!-- Comparison -->
                      <li class="col-md-6 col-sm-6 col-xs-12">
                         <div class="comparison-box">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/3.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Chevrolet Corvette </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="vsbox">vs</div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/4.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Honda Accord Sedan </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                         </div>
                      </li>
                      <!-- Comparison -->
                      <li class="col-md-6 col-sm-6 col-xs-12">
                         <div class="comparison-box">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                   <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/5.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">Mercedes-Benz C-Class </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="vsbox">vs</div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/6.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Honda CR-V </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                         </div>
                      </li>
                      <!-- Comparison -->
                      <li class="col-md-6 col-sm-6 col-xs-12">
                         <div class="comparison-box">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/7.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2016 Ford Mustang</a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="vsbox">vs</div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/8.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Toyota RAV4 </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                         </div>
                      </li>
                      <!-- Comparison -->
                      <li class="col-md-6 col-sm-6 col-xs-12">
                         <div class="comparison-box">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/9.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2016 Ford Mustang</a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="vsbox">vs</div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/10.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Toyota RAV4 </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                         </div>
                      </li>
                      <!-- Comparison -->
                      <li class="col-md-6 col-sm-6 col-xs-12">
                         <div class="comparison-box">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/11.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2016 Ford Mustang</a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="vsbox">vs</div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/12.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Toyota RAV4 </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                         </div>
                      </li>
                      <!-- Comparison -->
                      <li class="col-md-6 col-sm-6 col-xs-12">
                         <div class="comparison-box">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/7.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2016 Ford Mustang</a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="vsbox">vs</div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/8.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Toyota RAV4 </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                         </div>
                      </li>
                      <!-- Comparison -->
                      <li class="col-md-6 col-sm-6 col-xs-12">
                         <div class="comparison-box">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                  <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/7.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2016 Ford Mustang</a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="vsbox">vs</div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                               <div class="compare-grid">
                                   <a href="#" class=""><img src="{{ asset('assets/frontend-assets/images/compare/8.png')}}" alt="" class="img-responsive"></a>
                                  <h2><a href="#">2017 Toyota RAV4 </a></h2>
                                  <div class="rating">
                                     <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(3)</span>
                                  </div>
                               </div>
                            </div>
                            <div class="clearfix"></div>
                         </div>
                      </li>
                   </ul>
                   <div class="col-md-12 col-xs-12 col-sm-12">
                      <ul class="pagination pagination-lg">
                         <li> <a href="#"> <i class="fa fa-chevron-left" aria-hidden="true"></i></a></li>
                         <li> <a href="#">1</a> </li>
                         <li class="active"> <a href="#">2</a> </li>
                         <li> <a href="#">3</a> </li>
                         <li> <a href="#">4</a> </li>
                         <li><a href="#"> <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <!-- Middle Content Area  End -->
          </div>
          <!-- Row End -->
       </div>
       <!-- Main Container End -->
    </section>
    
 </div>
 <!-- Main Content Area End --> 

@endsection