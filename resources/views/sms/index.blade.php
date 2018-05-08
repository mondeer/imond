@extends('layouts.imondmain')

@section('content')
  <h1>Send Message</h1>
  <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/imond/sms') }}">
          {{ csrf_field() }}
        <div class="form-group">
            <label for="tel" class="col-md-4 control-label">Phone Number</label>

            <div class="col-md-6">
                <input id="tel" type="text" class="form-control" name="mobile"
                       placeholder="e.g +2567______" required>
            </div>

        </div>

        <div class="form-group">
            <label for="message" class="col-md-4 control-label">Message</label>

            <div class="col-md-6">
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                              placeholder="message"
                              required autofocus></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Send Message
                </button>

            </div>
        </div>
    </form>
</div>
@endsection
