@extends('blog.index')

@section ('content')
<div class="row imondgray">
  <div class="col-md-12">
    <h1>Hi {{ Auth::user()->name }}, Create a new blog</h1>
    <form class="form-horizontal" action="/newblog" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="title" placeholder="your title goes here {{Auth::user()->name}}" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
          <textarea id="message" class="form-control" rows="13" placeholder="{{Auth::user()->name}}, your content goes here, at the bottom right of this canvas, expand" name="content"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="subscribe-form margin-top-20">
            <button class="load-more-button" type="submit">Submit</button>
        </div>
      </div>
  </form>
</div>
</div>
@endsection
