@extends('layouts.imondmain')

@section('content')
<h1>Save New Contact</h1>
<div class="panel-body">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/imond/contact') }}">
        {{ csrf_field() }}
      <div class="form-group">
          <label for="tel" class="col-md-4 control-label">Phone Number</label>

          <div class="col-md-6">
              <input type="text" class="form-control" name="name"
                     placeholder="First Name" required>
          </div>

      </div>

      <div class="form-group">
          <label for="message" class="col-md-4 control-label">Mobile Number</label>

          <div class="col-md-6">
              <input type="text" class="form-control" name="mobile" placeholder="e.g +2567______">
          </div>
      </div>

      <div class="form-group">
          <div class="col-md-8 col-md-offset-4">
              <button type="submit" class="btn btn-primary">
                  Save
              </button>

          </div>
      </div>
  </form>
</div>
@endsection
