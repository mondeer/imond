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
    <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">

    {{-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
    tinymce.init({
          selector: 'textarea',
          height: 500,
          setup: function (editor) {
              editor.on('init change', function () {
                  editor.save();
              });
          },
          plugins: [
              "advlist autolink lists link image charmap print preview anchor",
              "searchreplace visualblocks code fullscreen",
              "insertdatetime media table contextmenu paste imagetools"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
          content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'
          ],
          image_title: true,
          automatic_uploads: true,
          images_upload_url: '/upload',
          file_picker_types: 'image',
          file_picker_callback: function(cb, value, meta) {
              var input = document.createElement('input');
              input.setAttribute('type', 'file');
              input.setAttribute('accept', 'image/*');
              input.onchange = function() {
                  var file = this.files[0];

                  var reader = new FileReader();
                  reader.readAsDataURL(file);
                  reader.onload = function () {
                      var id = 'blobid' + (new Date()).getTime();
                      var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                      var base64 = reader.result.split(',')[1];
                      var blobInfo = blobCache.create(id, file, base64);
                      blobCache.add(blobInfo);
                      cb(blobInfo.blobUri(), { title: file.name });
                  };
              };
              input.click();
          }
      });
    </script> --}}
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
              <div class="sub-title">
             		<a href="/" title="Go to Home Page"><h2>Back Home</h2></a>
                  <a href="#" class="smoth-scroll"><i class="icon-bubbles"></i></a>
               </div>
              <!-- Subscribe Form Start -->
                <div class="col-md-8 col-md-offset-2">
                    <form method="get" action="/wiki">
                            <div class="subscribe-form margin-top-20">
                                <input id="mc-email" name="keyword" type="text" placeholder="Query Wikipedia" class="text-input">
                                <button class="submit-btn" type="submit">Search</button>
                            </div>
                       <p>Search Wikipedia</p>
                       <label for="mc-email" class="mc-label"></label>
                     </form>

                 </div>
                 <!-- Subscribe Form End -->

                 <!-- About Me (Left Sidebar) Start -->
                 {{-- <div class="col-md-3">
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
                </div> --}}
                <!-- About Me (Left Sidebar) End -->

                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-12">
                        <div class="col-md-12 page-body">

                          @yield('content')

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

    <script src="/blog/js/medium-editor.js"></script>

    <script>
      var editor = new MediumEditor('.editable', {
          placeholder: {
              /* This example includes the default options for placeholder,
                 if nothing is passed this is what it used */
              text: 'Type Blog text',
              hideOnClick: true
          },
          paste: {
              /* This example includes the default options for paste,
                 if nothing is passed this is what it used */
              forcePlainText: false,
              cleanPastedHTML: true,
              cleanReplacements: [],
              cleanAttrs: ['class', 'style', 'dir'],
              cleanTags: ['meta'],
              unwrapTags: []
          }
      });
  </script>

    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('blog/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('blog/js/plugin.js')}}"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('blog/js/scripts.js')}}"></script>


   </body>
 </html>
