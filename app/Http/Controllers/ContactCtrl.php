<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use imond\Contact;

class ContactCtrl extends Controller
{
    public function index() {
      return view('sms.contact');
    }

    Public function saveContact(Request $request) {
      $contact = new Contact();

      $contact->name = $request->input('name');
      $contact->mobile = $request->input('mobile');
      $contact->save();

      return redirect()->back();
    }
}
