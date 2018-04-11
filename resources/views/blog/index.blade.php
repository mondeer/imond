<!DOCTYPE html>
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
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->

    <div id="main">
        <div class="container">
            <div class="row">

                 <!-- About Me (Left Sidebar) Start -->
                 <div class="col-md-3">
                   <div class="about-fixed">

                     <div class="my-pic">
                        <img src="/imond/img/biorec.png" alt="">
                        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                         <div id="menu" class="collapse">
                           <ul class="menu-link">
                               <li><a href="/">My Blog</a></li>
                               <li><a href="/imondwork">Work</a></li>
                               <li><a href="/imondcontact">Contact</a></li>
                            </ul>
                         </div>
                        </div>

                      <div class="my-detail">

                        <div class="white-spacing">
                            <h1>Laban Kering</h1>
                            <span>In love with Java, Laravel, <br> Firebase, HTML5.  </span>
                        </div>

                       <ul class="social-icon">
                         <li><a href="http://www.facebook.com/bassaniok" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="http://www.twitter.com/mondeer" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                         <!-- <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
                         <li><a href="http://www.github.com/mondeer" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                        </ul>

                    </div>
                  </div>
                </div>
                <!-- About Me (Left Sidebar) End -->

                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	@yield('content')
                        <!-- Subscribe Form Start -->
                        <div class="col-md-8 col-md-offset-2">
                           <form id="mc-form" method="post" action="">

              						         <div class="subscribe-form margin-top-20">
              							           <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
              							           <button class="submit-btn" type="submit">Submit</button>
              								     </div>
                              <p>Subscribe to my weekly Thoughts</p>
              								<label for="mc-email" class="mc-label"></label>
              							  </form>

                           </div>
                           <!-- Subscribe Form End -->

                         </div>

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


                  </div>
                  <!-- Blog Post (Right Sidebar) End -->

            </div>
         </div>
      </div>



    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('blog/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('blog/js/plugin.js')}}"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('blog/js/scripts.js')}}"></script>


   </body>
 </html>
