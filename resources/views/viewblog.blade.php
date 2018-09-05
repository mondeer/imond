@extends('blog.index')

@section('content')
<div class="row">
  <div class="sub-title">
 		<a href="/" title="Go to Home Page"><h2>Back Home</h2></a>
      <a href="#" class="smoth-scroll"><i class="icon-bubbles"></i></a>
   </div>

  <div class="col-md-10 col-md-offset-2">
      <h1>{{$blog->title}}</h1>
      <p>
        By {{$blog->author}}
      </p>
              <p> Created: {{$blog->created_at->diffForHumans()}}</p>
            <p>
                <span class="fa fa-clock-o"></span> {{ Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}
            </p>
            <hr>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{$blog->content}}" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>

  </div>
  <hr>

</div>
@endsection
