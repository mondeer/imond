<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use Kagga\Telco\facades\Telco;

class SmsCtrl extends Controller
{
    public function sms_init(){
      return view('sms.index');
    }

    public function imondSend(Request $request) {
      $message = $request->input('message');
      $mobile = $request->input('mobile');

      Telco::send($mobile, $message);

      return back();
    }
}
