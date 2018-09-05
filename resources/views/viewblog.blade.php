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
            <iframe src="https://www.youtube.com/embed/xI0uGBEPMts?controls=0" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            <hr>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{$blog->content}}" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127669.09351646721!2d35.199171436058336!3d0.5117561176467033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178101ae37f9f535%3A0xe2db337df0fc0820!2sEldoret!5e0!3m2!1ssw!2ske!4v1536151355344" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<br>
  </div>
  <hr>

</div>

<div class="row">
  <div class="col-md-4">
    <img src="/blog/images/labankering.jpeg" width="100" style="border-radius: 50%;" alt="">
  </div>
  <div class="col-md-8">
    <p align="left">{{$blog->author}}</p>
  </div>
</div>
@endsection
