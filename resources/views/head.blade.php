<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>iMond || Solutions</title>
    <meta name="description" content="imond solutions, imond.co.ke">
    <meta name="keywords" content="software developers in kenya, mobile developers, eldoret home of code">
    <meta name="author" content="www.imond.co.ke">

    <link rel="stylesheet" type="text/css" href="/blog/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/blog/style.css">
    <link rel="stylesheet" href="/blog/css/animate.css"/>
    <script src="/blog/js/jquery-2.1.0.js"></script>
    <script src="/blog/js/bootstrap.js"></script>
    <script src="/blog/js/typer.js"></script>
    <script src="/blog/js/blocs.js"></script>
    <link rel='stylesheet' href='/blog/css/et-line.min.css'/>
    <link rel='stylesheet' href='/blog/css/font-awesome.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display, Slabo' rel='stylesheet'
          type='text/css'>

    <link rel="icon" href="{{url('/imond/img/imond.png')}}">
    <script src="/blog/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'codesample link',
        toolbar: 'bold, italic, underline, strikethrough, alignleft, aligncenter, alignright, alignjustify, styleselect, fontselect, fontsizeselect, bullist, numlist, outdent, indent, blockquote, subscript, superscript'
      });
    </script>

</head>
<body>
<!-- Main container -->
<div class="page-container">

    <!-- Navigation Bloc -->
    <!-- <div class="bloc" id="nav-bloc"> -->
        <div class="container">
            <nav class="navbar row">
                <div class="navbar-header">
                  	<a href="/"><img style="width: 300px; height: 70px;"src="/images/imond.png" alt="" /></a>
                    <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-legal icon-sm icon-white zoomIn animated"></span> <img src="images/kal.png" alt="" /></a> -->
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar imond1"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1" style="color:f20000;">
                    <ul class="site-navigation nav navbar-nav">

                        @if (Auth::guest())
                        <li class="line">
                            <a href="/">Home</a>
                        </li>
                          <li class="line">
                              <a href="/kalyaservices">Services</a>
                          </li>
                          <li class="line">
                              <a href="/kalyaportfolio">Portfolio</a>
                          </li>
                          <li class="line">
                              <a href="/kalyateam">Our Team</a>
                          </li>
                          <li class="line">
                              <a href="/kalyacontact">Contact Us</a>
                          </li>
                            <li><a class="btn-danger" href="{{ url('/login') }}">Login</a></li>

                        @else
                        <li class="line">
                            <a href="/">Home</a>
                        </li>
                          <li class="line">
                              <a href="/kalyaservices">Services</a>
                          </li>
                          <li class="line">
                              <a href="/kalyaportfolio">Portfolio</a>
                          </li>
                          <li class="line">
                              <a href="/kalyateam">Our Team</a>
                          </li>
                        <li class="dropdown">
                            <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">
                              Blog<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/viewblogs">
                                        View Blogs
                                    </a>
                                </li>
                                <li>
                                    <a href="/kalyablog">
                                        Create New Blog
                                    </a>
                                </li>
                            </ul>
                        </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>


            </nav>
        </div>
    <!-- </div> -->
    <!-- Navigation Bloc END -->


    <div class="container">
      @yield('content')

    </div>
    <!-- Footer - bloc-8 -->
    <div class="bloc bgc-platinum l-bloc" id="bloc-8">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="http://www.twitter.com/mondeer" target="_blank"><span
                                class="fa fa-twitter icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="facebook.com/bassaniok" target="_blank"><span
                                class="fa fa-facebook icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg"
                           href="http://www.github.com/mondeer"
                           target="_blank"><span class="fa fa-github icon-md icon-carmine-pink"></span></a>
                    </div>
                    <div class="col-sm-3 text-center">
                        <a class="social-lg" href="http://medium.com/mondeer"><span class="fa fa-medium icon-md icon-carmine-pink"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-2 text-center-xs bg--white">
      <div class="container">
        <!--end row-->
        <div class="row">
            <div class="col-md-6">
                <div class="footer">
                    &copy;2017 Copyright imond Solutions. All Rights Reserved
                </div>
            </div>


        </div>
        <!--end row-->
      </div>
    </footer>
    <div class="row">
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center mg-md"><small>Designed by
        <a href="http://www.imond.co.ke" target="_blank">iMond Solutions</a></small>
      </div>
    </div>
    <!-- Footer - bloc-8 END -->

  </body>
  </html>
