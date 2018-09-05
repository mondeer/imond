<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use Wikipedia;

class WikiCtrl extends Controller
{
    public function wikiGrab(Request $request) {
      $keyword = $request->input('keyword');
      $page = (new Wikipedia)->page($keyword);

      return view('wiki')->with('page', $page);
    }
}
