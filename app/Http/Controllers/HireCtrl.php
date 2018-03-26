<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use imond\Hire;

class HireCtrl extends Controller
{
    public function hire(Request $request) {
      $hire = new Hire();

      $hire->names = $request->input('names');
      $hire->email = $request->input('email');
      $hire->subject = $request->input('subject');
      $hire->message = $request->input('message');
      $hire->save();

      return redirect()->back();
    }
}
