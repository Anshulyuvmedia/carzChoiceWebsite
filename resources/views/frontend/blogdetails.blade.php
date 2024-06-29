@extends('frontend.layouts.website')
@section('content')
@section('title', 'Blog Details')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="small-breadcrumb">
                <div class=" breadcrumb-link">
                   <ul>
                      <li><a href="/">Home </a></li>
                      <li><a class="active" href="#">Blog</a></li>
                   </ul>
                </div>
                <div class="header-page">
                   <h1>Latest News & Trends</h1>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
 <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
 <div class="main-content-area clearfix">
    <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
    <section class="section-padding no-top gray ">
       <!-- Main Container -->
       <div class="container">
          <!-- Row -->
          <div class="row">
             <!-- Middle Content Area -->
             <div class="col-md-8 col-xs-12 col-sm-12">
                <div class="blog-detial">
                   <!-- Blog Archive -->
                   <div class="blog-post">
                      <div class="post-img">
                         <a href="{{ asset('assets/frontend-assets/images/blog/2.jpg')}}" data-fancybox="group" > <img class="img-responsive large-img" alt="" src="{{ asset('assets/frontend-assets/images/blog/2.jpg')}}"> </a>
                      </div>
                      <div class="post-info"> <a href="#">Aug 30, 2017</a> <a href="#">23 comments</a> </div>
                      <h3 class="post-title"> <a href="#"> AUDI A4 Saloon 3.0 TDI Sport 4dr S Tronic </a> </h3>
                      <div class="post-excerpt">
                         <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis erat sed lorem dictum ullamcorper. Sed vel elit sed nunc ornare auctor. Suspendisse id ullamcorper purus, sed cursus dui. Sed eget elit magna. Morbi pellentesque gravida vehicula. Nunc ullamcorper rutrum nunc, non consectetur ante egestas non. Donec elementum est at velit accumsan, nec accumsan neque porta. Nunc iaculis condimentum ipsum, eget molestie nulla.
                         </p>
                         <p>
                            lacinia quis nec hendrerit purus Curabitur fermentum nec nisi eget tincidunt. Suspendisse consequat facilisis efficitur. Phasellus aliquet ipsum tellus, et dignissim orci vulputate in commodo erat ut quam ornare.
                         </p>
                         <blockquote>
                            <p><strong>Morbi pellentesque gravida vehicula. Nunc ullamcorper rutrum nunc, non consectetur ante egestas non. Donec elementum est at velit accumsan, nec accumsan neque porta.</strong>
                            </p>
                         </blockquote>
                         <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis erat sed lorem dictum ullamcorper. Sed vel elit sed nunc ornare auctor. Suspendisse id ullamcorper purus, sed cursus dui. Sed eget elit magna. Morbi pellentesque gravida vehicula. Nunc ullamcorper rutrum nunc, non consectetur ante egestas non. Donec elementum est at velit accumsan, nec accumsan neque porta. Nunc iaculis condimentum ipsum, eget molestie nulla.
                         </p>
                         <p><img src="{{ asset('assets/frontend-assets/images/blog/left-align.jpg')}}" alt="" class="alignleft img-responsive"> Aliquam placerat lacinia purus vitae sodales. Nulla egestas mauris eu rutrum fringilla. Nunc malesuada, tortor bibendum feugiat pharetra, dolor mauris porttitor eros, sed dapibus eros diam vitae purus. Mauris rutrum ullamcorper nisi id semper. Maecenas sit amet libero sit amet velit auctor feugiat. Suspendisse libero massa, vestibulum ut luctus eu, convallis nec enim. Donec quis tincidunt est. Ut egestas,</p>
                         <p> dui vitae vulputate congue, ipsum odio congue urna, vel posuere orci ante eget dui. In vestibulum ligula nec interdum suscipit. Proin massa arcu, porta eget odio eget, porttitor ultrices tellus. Cras sed ipsum hendrerit, mattis neque scelerisque, accumsan metus. Vestibulum vulputate dolor sed nulla molestie iaculis. Mauris ornare tellus sit amet mi pharetra laoreet. Donec ac molestie dui, et feugiat turpis.
                         </p>
                         <p><img src="{{ asset('assets/frontend-assets/images/blog/right-align.jpg')}}" alt="" class="alignright img-responsive"> Proin rhoncus magna sollicitudin aliquam interdum. Nullam accumsan, lectus vel rutrum convallis, lacus tellus elementum nisl, vel tincidunt nulla lacus non elit. Integer ultricies dui leo, ac egestas nulla aliquet vitae. Ut nec rutrum purus, sed dignissim metus. Cras consectetur mi sapien, eu sodales enim euismod sit amet. </p>
                         <p> dui vitae vulputate congue, ipsum odio congue urna, vel posuere orci ante eget dui. In vestibulum ligula nec interdum suscipit. Proin massa arcu, porta eget odio eget, porttitor ultrices tellus. Cras sed ipsum hendrerit, mattis neque scelerisque, accumsan metus. Vestibulum vulputate dolor sed nulla molestie iaculis. Mauris ornare tellus sit amet mi pharetra laoreet. Donec ac molestie dui, et feugiat turpis.
                         </p>
                         <p>Donec malesuada volutpat varius. Quisque eu mauris in ipsum consequat tincidunt vel sit amet justo. In tincidunt ex scelerisque arcu varius, nec blandit nibh vestibulum.</p>
                         <div class="clearfix"></div>
                         <div class="tags-share clearfix">
                            <div class="tags pull-left">
                               <h3>Tags:</h3>
                               <ul>
                                  <li><a href="#">Design, </a></li>
                                  <li><a href="#">Kitchen, </a></li>
                                  <li><a href="#">House, </a></li>
                                  <li><a href="#">Building</a></li>
                               </ul>
                            </div>
                            <div class="share pull-right">
                               <h3>Share:</h3>
                               <ul>
                                  <li><a href="#">Facebook, </a></li>
                                  <li><a href="#">Google+, </a></li>
                                  <li><a href="#">Instagram</a></li>
                               </ul>
                            </div>
                         </div>
                         <div class="clearfix"></div>
                         <div class="blog-section">
                            <div class="blog-heading">
                               <h2>Comments (20)</h2>
                               <hr>
                            </div>
                            <ol class="comment-list">
                               <!-- comment-list    -->
                               <li class="comment">
                                  <div class="comment-info">
                                     <img class="pull-left hidden-xs img-circle" src="{{('assets/frontend-assets/images/blog/c1.png')}}" alt="author">
                                     <div class="author-desc">
                                        <div class="author-title">
                                           <strong>Curt Alex</strong>
                                           <ul class="list-inline pull-right">
                                              <li><a href="#">22 Feb 2017</a>
                                              </li>
                                              <li><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                              </li>
                                           </ul>
                                        </div>
                                        <p>You wanna be where everyboody knows Your name. And a we knooow Flipper lives in a world full of wonder flying there-under under the sea creepy and kooky</p>
                                     </div>
                                  </div>
                                  <ol class="children">
                                     <li class="comment">
                                        <div class="comment-info">
                                           <img class="pull-left hidden-xs img-circle" src="{{('assets/frontend-assets/images/blog/c2.png')}}" alt="author">
                                           <div class="author-desc">
                                              <div class="author-title">
                                                 <strong>Emilly Copper</strong>
                                                 <ul class="list-inline pull-right">
                                                    <li><a href="#">22 Feb 2017</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                    </li>
                                                 </ul>
                                              </div>
                                              <p>The first mate and his Skipper too this is will do their very best to make the most others comfortable in their tropic lives in a world of wonder.</p>
                                           </div>
                                        </div>
                                        <!-- .comment-info -->
                                     </li>
                                  </ol>
                                  <!-- .children -->
                               </li>
                               <!-- comment -->
                               <li class="comment">
                                  <div class="comment-info">
                                     <img class="pull-left hidden-xs img-circle" src="{{('assets/frontend-assets/images/blog/c3.png')}}" alt="author">
                                     <div class="author-desc">
                                        <div class="author-title">
                                           <strong>Ricky John</strong>
                                           <ul class="list-inline pull-right">
                                              <li><a href="#">18 Jan 2017</a>
                                              </li>
                                              <li><a href="#"><i class="fa fa-reply"></i> Reply</a>
                                              </li>
                                           </ul>
                                        </div>
                                        <p>You wanna be where everyboody knows Your name. And a we knooow Flipper lives in a world full of wonder flying there-under under the sea creepy and kooky</p>
                                     </div>
                                  </div>
                                  <!-- .comment-info -->
                               </li>
                               <!-- .comment -->
                            </ol>
                         </div>
                         <div class="clearfix"></div>
                         <div class="blog-section">
                            <div class="blog-heading">
                               <h2>leave your comment </h2>
                               <hr>
                            </div>
                            <div class="commentform">
                               <form>
                                  <div class="row">
                                     <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                           <label>Name <span class="required">*</span>
                                           </label>
                                           <input type="text" class="form-control" placeholder="">
                                        </div>
                                     </div>
                                     <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                           <label>Email <span class="required">*</span>
                                           </label>
                                           <input type="email" class="form-control" placeholder="">
                                        </div>
                                     </div>
                                     <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                           <label>Comment <span class="required">*</span>
                                           </label>
                                           <textarea class="form-control" placeholder="" rows="8" cols="6"></textarea>
                                        </div>
                                     </div>
                                     <div class="col-md-12 col-sm-12 margin-top-20 clearfix">
                                        <button type="submit"  class="btn btn-theme">Post Your Comment</button>
                                     </div>
                                  </div>
                               </form>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- Blog Grid -->
                </div>
             </div>
             <!-- Right Sidebar -->
             <div class="col-md-4 col-xs-12 col-sm-12">
                <!-- Sidebar Widgets -->
                <div class="blog-sidebar">
                   <!-- Categories --> 
                   <div class="widget">
                      <div class="widget-heading">
                         <h4 class="panel-title"><a>Categories</a></h4>
                      </div>
                      <div class="widget-content categories">
                         <ul>
                            <li> <a href="#"> Computer and IT <span>(121)</span> </a> </li>
                            <li> <a href="#"> Animal <span>(54)</span> </a> </li>
                            <li> <a href="#"> Electronics<span>(313)</span> </a> </li>
                            <li> <a href="#"> Real Estate<span>(23)</span> </a> </li>
                            <li> <a href="#"> Mobile / Laptop <span>(142)</span> </a> </li>
                            <li> <a href="#"> Car / Bike <span>(120)</span> </a> </li>
                         </ul>
                      </div>
                   </div>
                   <!-- Latest News --> 
                   <div class="widget">
                      <div class="widget-heading">
                         <h4 class="panel-title"><a>Latest News</a></h4>
                      </div>
                      <div class="widget-content recent-ads">
                         <!-- Ads -->
                         <div class="recent-ads-list">
                            <div class="recent-ads-container">
                               <div class="recent-ads-list-image">
                                  <a href="#" class="recent-ads-list-image-inner">
                                  <img src="{{ asset('assets/frontend-assets/images/posting/thumb-1.jpg')}}" alt="">
                                  </a><!-- /.recent-ads-list-image-inner -->
                               </div>
                               <!-- /.recent-ads-list-image -->
                               <div class="recent-ads-list-content">
                                  <h3 class="recent-ads-list-title">
                                     <a href="#">2010 Audi A5 Auto Premium quattro MY10</a>
                                  </h3>
                                  <ul class="recent-ads-list-location">
                                     <li><a href="#">New York</a></li>
                                  </ul>
                                  <!-- /.recent-ads-list-price -->
                               </div>
                               <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                         </div>
                         <!-- Ads -->
                         <div class="recent-ads-list">
                            <div class="recent-ads-container">
                               <div class="recent-ads-list-image">
                                  <a href="#" class="recent-ads-list-image-inner">
                                  <img src="{{ asset('assets/frontend-assets/images/posting/thumb-2.jpg')}}" alt="">
                                  </a><!-- /.recent-ads-list-image-inner -->
                               </div>
                               <!-- /.recent-ads-list-image -->
                               <div class="recent-ads-list-content">
                                  <h3 class="recent-ads-list-title">
                                     <a href="#">Honda Civic 2017 Sports Edition With Turbo</a>
                                  </h3>
                                  <ul class="recent-ads-list-location">
                                     <li><a href="#">Brooklyn</a></li>
                                  </ul>
                                  <!-- /.recent-ads-list-price -->
                               </div>
                               <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                         </div>
                         <!-- Ads -->
                         <div class="recent-ads-list">
                            <div class="recent-ads-container">
                               <div class="recent-ads-list-image">
                                  <a href="#" class="recent-ads-list-image-inner">
                                  <img src="{{ asset('assets/frontend-assets/images/posting/thumb-3.jpg')}}" alt="">
                                  </a><!-- /.recent-ads-list-image-inner -->
                               </div>
                               <!-- /.recent-ads-list-image -->
                               <div class="recent-ads-list-content">
                                  <h3 class="recent-ads-list-title">
                                     <a href="#">Ford Mustang EcoBoost Premium Convertible</a>
                                  </h3>
                                  <ul class="recent-ads-list-location">
                                     <li><a href="#">Brooklyn</a></li>
                                  </ul>
                               </div>
                               <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                         </div>
                         <!-- Ads -->
                         <div class="recent-ads-list">
                            <div class="recent-ads-container">
                               <div class="recent-ads-list-image">
                                  <a href="#" class="recent-ads-list-image-inner">
                                  <img src="{{ asset('assets/frontend-assets/images/posting/thumb-4.jpg')}}" alt="">
                                  </a><!-- /.recent-ads-list-image-inner -->
                               </div>
                               <!-- /.recent-ads-list-image -->
                               <div class="recent-ads-list-content">
                                  <h3 class="recent-ads-list-title">
                                     <a href="#">2017 Bugatti Chiron: Again with the Overkill </a>
                                  </h3>
                                  <ul class="recent-ads-list-location">
                                     <li><a href="#">Brooklyn</a></li>
                                  </ul>
                               </div>
                               <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                         </div>
                         <!-- Ads -->
                         <div class="recent-ads-list">
                            <div class="recent-ads-container">
                               <div class="recent-ads-list-image">
                                  <a href="#" class="recent-ads-list-image-inner">
                                  <img src="{{ asset('assets/frontend-assets/images/posting/thumb-5.jpg')}}" alt="">
                                  </a><!-- /.recent-ads-list-image-inner -->
                               </div>
                               <!-- /.recent-ads-list-image -->
                               <div class="recent-ads-list-content">
                                  <h3 class="recent-ads-list-title">
                                     <a href="#">Porsche 911 Carrera 2017  Super Charger</a>
                                  </h3>
                                  <ul class="recent-ads-list-location">
                                     <li><a href="#">Brooklyn</a></li>
                                  </ul>
                               </div>
                               <!-- /.recent-ads-list-content -->
                            </div>
                            <!-- /.recent-ads-container -->
                         </div>
                      </div>
                   </div>
                   <!-- Archives --> 
                   <div class="widget">
                      <div class="widget-heading">
                         <h4 class="panel-title"><a>Archives</a></h4>
                      </div>
                      <div class="widget-content">
                         <ul>
                            <li><a href="#">August 2017</a></li>
                            <li><a href="#">July 2017</a></li>
                            <li><a href="#">June 2017 </a></li>
                            <li><a href="#">May 2017  </a></li>
                            <li><a href="#">April 2014 </a></li>
                         </ul>
                      </div>
                   </div>
                   <!-- Gallery --> 
                   <div class="widget">
                      <div class="widget-heading">
                         <h4 class="panel-title"><a>Gallery</a></h4>
                      </div>
                      <div class="widget-content gallery">
                         <div class="gallery-image">
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-5.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-6.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-7.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-8.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-9.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-10.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-1.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-2.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-3.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-4.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-11.png')}}">
                            </a>
                            <a href="#"><img alt="" src="{{ asset('assets/frontend-assets/images/blog/small-12.png')}}">
                            </a>
                         </div>
                      </div>
                   </div>
                   <!-- Tags --> 
                   <div class="widget">
                      <div class="widget-heading">
                         <h4 class="panel-title"><a>Tags cloud</a></h4>
                      </div>
                      <div class="widget-content">
                         <div class="tagcloud">
                            <a href="#.">Hair</a>
                            <a href="#.">Waxing</a>
                            <a href="#.">Body</a>
                            <a href="#.">Oil</a>
                            <a href="#.">Facials</a>
                            <a href="#.">Cutting</a>
                            <a href="#.">Blowouts</a>
                            <a href="#.">Curling</a>
                            <a href="#.">Makeup</a>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- Sidebar Widgets End -->
             </div>
             <!-- Middle Content Area  End -->
          </div>
          <!-- Row End -->
       </div>
       <!-- Main Container End -->
    </section>
    <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
    
 </div>
 <!-- Main Content Area End --> 

@endsection