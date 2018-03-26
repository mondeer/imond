<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use imond\Blog;
use Auth;

class BlogCtrl extends Controller
{
  public function create () {
    return view ('blogcreate');
  }

  public function postCreate(Request $request) {
    $author = Auth::user()->name;
    $blog = new Blog;
    $blog->title = $request->input('title');
    $blog->author = $author;
    $blog->content = $request->input('content');
    $blog->save();

    return redirect('/viewblogs');

  }

  public function show() {
  $blogs = Blog::all();

  return view('viewblogs')->with('blogs', $blogs);
  }

  public function showblog($id) {
    $blog = Blog::FindOrFail($id);

    return view('viewblog', compact('blog'));

  }
}
