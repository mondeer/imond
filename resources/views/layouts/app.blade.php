<html lang="en">

  <head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="Mondia Kering">
    <meta name="url" content="http://www.imond.co.ke">
    <meta name="copyright" content="iMond Solutions">
    <meta name="robots" content="index,follow">


    <title>iMond || DevBlog</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog/css/plugin.css')}}">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog/css/style.css')}}">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    <link rel="icon" href="{{url('/imond/img/imond.png')}}">
    @yield('css')
  </head>

 <body>
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->

    <div id="main">
        <div class="container">
          <nav class="navbar navbar-default navbar-static-top">
              <div class="container">
                  <div class="navbar-header">

                      <!-- Collapsed Hamburger -->
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                          <span class="sr-only">Toggle Navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>

                  </div>

                  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                      <!-- Left Side Of Navbar -->
                      <ul class="nav navbar-nav">
                          &nbsp;
                      </ul>

                      <!-- Right Side Of Navbar -->
                      <ul class="nav navbar-nav navbar-right">
                          <!-- Authentication Links -->
                          @if (Auth::guest())
                              <li><a href="{{ route('login') }}">Login</a></li>
                              <li><a href="{{ route('register') }}">Register</a></li>
                          @else
                              <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>

                                  <ul class="dropdown-menu" role="menu">
                                      <li>
                                          <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                              Logout
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                                  </ul>
                              </li>
                          @endif
                      </ul>
                  </div>
              </div>
          </nav>

         </div>
      </div>
      @yield('content')
      <!-- Footer Start -->
      <div class="col-md-12 page-body margin-top-50 footer">
         <footer>
         <ul class="menu-link">
              <li><a href="/">Home</a></li>
              <li><a href="/">My Blog</a></li>
              <li><a href="/imondwork">My Work</a></li>
              <li><a href="/imondcontact">Contact</a></li>
           </ul>

         <p>© Copyright 2018 iMond Solutions. MIT license</p>

<!-- imond Credit Start -->
         <div class="imond-credit">Shared by <i class="fa fa-love"></i><a href="https://imond.co.ke">Mondia Kering</a></div>
         <!-- imond Credit End -->
        </footer>
      </div>
      <!-- Footer End -->


    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->

    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('blog/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('blog/js/plugin.js')}}"></script>
    @yield('js')
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('blog/js/scripts.js')}}"></script>


   </body>
 </html>
