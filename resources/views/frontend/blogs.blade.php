@extends('frontend.layouts.website')
@section('content')
@section('title', 'Blogs')

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
 <div class="main-content-area clearfix">
    <section class="section-padding no-top gray ">
       <div class="container">
          <div class="row">
             <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                   <div class="posts-masonry">
                    @foreach ($blogdata as $data)
                      <div class="col-md-4 col-sm-6 col-xs-12">
                         <div class="blog-post">
                            <div class="post-img">
                                @if ($data->blogimg)
                                <a href="#">
                                    <img class="img-responsive" src="{{asset("assets/backend-assets/images/".$data->blogimg) }}" alt="Thumbnail">
                                </a>
                                @endif
                            </div>
                            <div class="post-info"> <a href="#">{{ $data->created_at->format('d/m/y') }}</a></div>
                            <h3 class="post-title"> <a href="#">{{$data->blogtitle}}</a></h3>
                            <p class="post-excerpt">{{ substr($data->description, 0,30) }}...<a href="#"><strong>Read More</strong></a>
                            </p>
                         </div>
                      </div>
                      @endforeach
                   </div>
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
          </div>
       </div>
    </section>
 </div>
@endsection
