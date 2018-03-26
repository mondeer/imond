<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iMond || Solutions</title>
    <meta name="description" content="imond solutions, imond.co.ke">
    <meta name="keywords" content="software developers in kenya, mobile developers, eldoret home of code">
    <meta name="author" content="www.imond.co.ke">
    <link rel="icon" href="{{url('/imond/img/imond.png')}}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
    <link rel="stylesheet" type="text/css" href="{{ asset ('imond/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('imond/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('imond/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('imond/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('imond/css/rotating-card.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('imond/css/full-slider.css')}}">

  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  <div class="header">
      <div class="bg-color">
        <div class="row">
          <div class="col-sm-4 col-md-4">
          </div>
          <div class="col-sm-4 col-md-">
            <p class="bold text-center">Today: {{ Carbon\Carbon::now()->format('l j F Y')}} </p>
          </div>
          <div class="col-sm-4 col-md-4">
          <p class="bold text-right">Call us now +254 724 87 11 11</p>
          </div>
        </div><hr>
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#imondMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img class="App-logo" src="{{url('/imond/img/imond.png')}}" width="100" alt="">
            </div>
            <div class="collapse navbar-collapse" id="imondMenu">
              <p></p>
              <ul class="nav navbar-nav navbar-right navbar-border">
                <li class="active"><a href="#main-header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="/viewblogs">BLOGS</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 wow fadeIn delay-05s">
              <div class="banner-text">
                <h2> <span>iMond</span> Solutions,</h2>
                <p>The Cognitive Elite <br>Software Developers</p>
              </div>
              <div class="overlay-detail text-center">
                  <a href="#about"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
      <hr>
  <section id="about" class="wow fadeIn delay-05s">
    <div class="imond ">
      <div class="row ">
      <h1 class="title">
          iMond Solutions
          <br>
          <small>Made up of awesomeness</small>
      </h1>
      <div class="col-sm-10 col-sm-offset-1">
       <div class="col-md-6 col-md-offset-3">
           <div class="card-container">
              <div class="card">
                  <div class="front">
                      <div class="cover">
                          <img src="{{url('/imond/img/port03.jpg')}}"/>
                      </div>
                      <div class="user">
                          <img class="img-circle" src="{{url('/imond/img/kim.jpg')}}"/>
                      </div>
                      <div class="content">
                          <div class="main">
                              <h3 class="name">Laban Kering</h3>
                              <p class="profession">CEO</p>
                              <p class="text-center">"We have a secret: and its the team, we have a culture: and its trusting the team"</p>
                          </div>
                          <div class="footer">
                              <i class="fa fa-mail-forward"></i> Profile
                          </div>
                      </div>
                  </div> <!-- end front panel -->
                  <div class="back">
                      <div class="header1">
                          <h5 class="motto">"To say it and do it while at it"</h5>
                      </div>
                      <div class="content">
                          <div class="main">
                              <h4 class="text-center">Job Description</h4>
                              <p class="text-center">Web Development, ERP, Mobile dev, CMS, Websit design</p>

                              <div class="stats-container">
                                  <div class="stats">
                                      <h4>Web Tech</h4>
                                      <p>
                                          Flask <br>
                                          React JS <br>
                                          Laravel <br>
                                          Angular JS
                                      </p>
                                  </div>
                                  <div class="stats">
                                      <h4>Server</h4>
                                      <p>
                                          Node JS <br>
                                          Express JS <br>
                                          PHP <br>
                                          Python
                                      </p>
                                  </div>
                                  <div class="stats">
                                      <h4>Mobile</h4>
                                      <p>
                                          React-Native <br>Ionic Framework
                                      </p>
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="footer">
                          <div class="social-links text-center">
                              <a href="http://facebook.com/imondsol" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                              <a href="http://google.com/mondiakering" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                              <a href="http://github.com/mondeer" class="github"><i class="fa fa-twitter fa-fw"></i></a>
                          </div>
                      </div>
                  </div> <!-- end back panel -->
              </div> <!-- end card -->
          </div> <!-- end card-container -->
      </div> <!-- end col sm 3 -->
      </div> <!-- end col-sm-10 -->
  </div> <!-- end row -->

    </div>
  </section>

        <section id="portfolio" class="">
          <div class="col-md-12">
            <h2 class=" text-center">Let's <span class="deco">See</span> My Work</h2>
          </div>
        </section>
          <div id="myCarousel" class="carousel slide">
            <!-- Indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for Slides -->
              <div class="carousel-inner">
                  <div class="item active">
                      <!-- Set the first background image using inline CSS below. -->
                      <div class="fill" style="background-image:url('/imond/img/port.png');"></div>
                      <div class="carousel-caption">
                          <h2 style="color: #1B101A">Laravel Project, Taxi Booking Web app</h2>
                      </div>
                  </div>
                  <div class="item">
                      <!-- Set the second background image using inline CSS below. -->
                      <div class="fill" style="background-image:url('/imond/img/gifted.png');"></div>
                      <div class="carousel-caption">
                          <h2>Laravel Site, Gifted Training College Website</h2>
                      </div>
                  </div>
                  <div class="item">
                      <!-- Set the third background image using inline CSS below. -->
                      <div class="fill" style="background-image:url('/imond/img/port1.png');"></div>
                      <div class="carousel-caption">
                          <h2 style="color: #1B101A">Caption 3</h2>
                      </div>
                  </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="icon-prev"></span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="icon-next"></span>
              </a>
          </div>
        </div>
  <section id="testimonial" class="section-padding wow fadeInUp">
    <div class="container">
      <div class="row">
        <h2 class="title text-center">See What Our <span class="deco">Clients</span> Are Saying ?</h2>
        <div class="test-sec">
          <div class="col-sm-4">
            <blockquote>
              <p>imond solutions developed a website for our institution, its an awesome web page with sms notification for apply online functionality, we couldnt have asked for more</p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">Shadrack Rotich</span> <span class="testimonials-post">Director, Tropical College of Management.</span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>At Gifted Training College we value quality, and imond solutions delivered </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">Philemon Kipkeu</span> <span class="testimonials-post">Director, Gifted Training College.</span> </div>
            </div>
          </div>
          <div class="col-sm-4">
            <blockquote>
              <p>TransNzoia county is a home of ideas, we support of young people, imond solutions developed a management system to manage Vocational Training Centres, its awesome. </p>
            </blockquote>
            <div class="carousel-info">
              <div class="pull-left"> <span class="testimonials-name">Meng`wa</span> <span class="testimonials-post">CO, Ministry of education</span> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-sec text-center">
            <h2>Want To <span class="deco">Hire</span> Me?</h2>
            <p>Lets do that awesome job, lets discuss and actualize</p>
          </div>
        </div>

        <div class="col-md-8 col-md-push-2">
            <form action="/hire/imond" method="post" role="form" class="contactForm">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="names" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                </div>

                <div class="text-center"><button data-toggle="modal" data-target="#expModal" type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
            </form>
        </div>

      </div>
    </div>
  </section>
  <footer class="footer-2 text-center-xs bg--white">
    <div class="container">
      <!--end row-->
      <div class="row">
          <div class="col-md-6">
              <div class="footer">
                  &copy;2017 Copyright imond Solutions. All Rights Reserved
              </div>
          </div>
          <div class="col-md-6 text-right">
              <ul class="social-list">
                  <li>
                      <a href="http://twitter.com/mondeer" target="_blank">
                          <i class="fa fa-twitter"></i>
                      </a>
                  </li>
                  <li>
                      <a href="http://facebook.com/imondsol" target="_blank">
                          <i class="fa fa-facebook"></i>
                      </a>
                  </li>
                  <li>
                      <a href="http://github.com/mondeer" target="_blank">
                          <i class="fa fa-github"></i>
                      </a>
                  </li>
              </ul>
          </div>

      </div>
      <!--end row-->
    </div>
  </footer>

  <!-- Modal Success Popup -->
    <div class="modal fade" id="expModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Success!</h4>
          </div>
          <div class="modal-body text-center">
             <img src="{{url('/imond/img/imond.png')}}" width="150">
              <p class="lead">You have Succesfully submitted Expense Detail. Thank you,</p>
              <a href="/" class="rd_more btn btn-default">Go to Home</a>
          </div>

        </div>
      </div>
    </div>


    <script src="{{ asset ('imond/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('imond/js/jquery.easing.min.js')}}"></script>
    <script src="{{ asset ('imond/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('imond/js/jquery.bxslider.min.js')}}"></script>
    <script src="{{ asset ('imond/js/wow.js')}}"></script>
    <script src="{{ asset ('imond/js/custom.js')}}"></script>
    <script>
      $('.carousel').carousel({
          interval: 5000 //changes the speed
      })
    </script>

  </body>
</html>
