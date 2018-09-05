<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use Kagga\Telco\facades\Telco;
<<<<<<< HEAD
=======
use imond\Contact;
>>>>>>> 9a1d843b97b2834a3d59995fb89faa5cd104ee6c

class SmsCtrl extends Controller
{
    public function sms_init(){
      return view('sms.index');
    }

    public function imondSend(Request $request) {
      $message = $request->input('message');
      $mobile = $request->input('mobile');

<<<<<<< HEAD
      Telco::send($mobile, $message);
=======
      $contacts = Contact::all();
      foreach ($contacts as $contact) {
        Telco::send($contact->mobile, 'Hi '.$contact->name.', '.$message);
        // dd($mobile);
      }
>>>>>>> 9a1d843b97b2834a3d59995fb89faa5cd104ee6c

      return back();
    }
}
