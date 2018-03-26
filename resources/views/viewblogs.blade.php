@extends('blog.index')

@section('content')
<div class="row">


      <div class="sub-title">
        <h2>iMond Solutions</h2>
          <a href="contact.html"><i class="icon-envelope"></i></a>
       </div>


      <div class="col-md-12 content-page">
        @if($blogs->count()==0)
          <div class="post-info">
            <h1>No Blogs</h1>
          </div>
        @endif

          <!-- Blog Post Start -->
          @foreach($blogs as $blog)
          <div class="col-md-12 blog-post">
              <div class="post-title">
                <a href="/viewblog/{{ $blog->id }}"><h1>{{ $blog->title }}</h1></a>
              </div>
              <div class="post-info">
                <span>{{$blog->created_at->diffForHumans()}}/ by <a href="#" target="_blank">{{ $blog->author }}</a></span>
              </div>
              <p>{!! str_limit($blog->content, $limit = 350, $end = "...") !!}</p>
              <a href="/viewblog/{{ $blog->id }}" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
          </div>
          @endforeach
          <!-- Blog Post End -->

          <div class="col-md-12 text-center">
           <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
           <div id="post-end-message"></div>
          </div>

       </div>

   </div>
@endsection
