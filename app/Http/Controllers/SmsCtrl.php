<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use Kagga\Telco\facades\Telco;
use imond\Contact;

class SmsCtrl extends Controller
{
    public function sms_init(){
      return view('sms.index');
    }

    public function imondSend(Request $request) {
      $message = $request->input('message');
      $mobile = $request->input('mobile');

      $contacts = Contact::all();
      foreach ($contacts as $contact) {
        Telco::send($contact->mobile, 'Hi '.$contact->name.', '.$message);
        // dd($mobile);
      }

      return back();
    }
}
