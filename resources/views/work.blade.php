@extends('blog.index')

@section('content')
<!-- Portfolio (Right Sidebar) Start -->
     <div class="row">


           <div class="sub-title">
             <h2>My Portfolio</h2>
               <a href="/imondcontact"><i class="icon-envelope"></i></a>
            </div>


           <div class="col-md-12 content-page">
             <div class="col-md-12 blog-post">


               <!-- Intro Start -->
               <div class="post-title margin-bottom-30">
                   <h1>iMond Solutions Work <span class="main-color">My Work</span></h1>
                  </div>
                  <!-- Intro End -->
            <!-- Portfolio Start -->
            <div>

              <!-- Portfolio Detail Start -->
              <div class="row portfolio">
                <div class="col-sm-6 custom-pad-1">
                    <div class="image-carousel">
                      <img src="blog/images/bios.png" class="img-responsive" alt="">
                      <img src="blog/images/biorec.png" class="img-responsive" alt="">
                    </div>
                 </div>


                <div class="col-sm-6 custom-pad-2">
                  <div class="table-responsive">
                   <table class="table table-bordered">
                    <tbody>
                      <tr>
                       <td><b>Skills</b></td>
                       <td>Android(Java), Firebase, VueJS</td>
                      </tr>
                      <tr>
                       <td><b>Duration</b></td>
                       <td>OnGoing</td>
                      </tr>
                      <tr>
                       <td><b>Cost</b></td>
                       <td>Kshs. 100000 and counting</td>
                      </tr>
                      <tr>
                       <td><b>Url</b></td>
                       <td><a href="http://www.github.com/mondeer" target="_blank" title="imond">Github Repor</a></td>
                      </tr>
                      <tr>
                       <td><b>About Project</b></td>
                       <td>Biorec Master is a biometric device with fingerprint and NFC reader, the client is developed with android studio and the admin side is developed with VueJS. The Backend of this system is Firebase</tr>
                    </tbody>
                 </table>

             </div>
           </div>
          </div>
          <!-- Portfolio Detail End -->

              <!-- Portfolio Detail Start -->
              <div class="row portfolio">
                <div class="col-sm-6 custom-pad-1">
                  <div class="image-carousel">
                    <img src="imond/img/gifted.png" class="img-responsive" alt="">
                    <img src="imond/img/gifted.png" class="img-responsive" alt="">
                   </div>
                 </div>
                 <div class="col-sm-6 custom-pad-2">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                     <tbody>
                       <tr>
                        <td><b>Skills</b></td>
                        <td>Laravel, HTML5, Africastlking Bulk sms</td>
                       </tr>
                       <tr>
                        <td><b>Duration</b></td>
                        <td>2 Weeks</td>
                       </tr>
                       <tr>
                        <td><b>Cost</b></td>
                        <td>Kshs. 40,000</td>
                       </tr>
                       <tr>
                        <td><b>Url</b></td>
                        <td><a href="http://www.github.com/mondeer" target="_blank" title="imond">Github Repo</a></td>
                       </tr>
                       <tr>
                        <td><b>About Project</b></td>
                        <td>This project is a College website with integration of bulk sms system for online application</tr>
                     </tbody>
                  </table>

                 </div>
                </div>

              </div>
          <!-- Portfolio Detail End -->

              <!-- Portfolio Detail Start -->
              <div class="row portfolio">
                <div class="col-sm-6 custom-pad-1">
                    <div class="image-carousel">
                      <img src="blog/images/chap1.png" alt="">
                      <img src="blog/images/chap.png" alt="">
                    </div>
                 </div>

                 <div class="col-sm-6 custom-pad-2">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                     <tbody>
                       <tr>
                        <td><b>Skills</b></td>
                        <td>Laravel, Africastlking bulk sms</td>
                       </tr>
                       <tr>
                        <td><b>Duration</b></td>
                        <td>1 Month</td>
                       </tr>
                       <tr>
                        <td><b>Cost</b></td>
                        <td>Kshs. 70,000</td>
                       </tr>
                       <tr>
                        <td><b>Url</b></td>
                        <td><a href="http://www.sokobrand.co.ke" target="_blank" title="Sokobrand">Webpage</a></td>
                       </tr>
                       <tr>
                        <td><b>About Project</b></td>
                        <td>An online shopping system for hustlers, </tr>
                     </tbody>
                  </table>

              </div>
            </div>

          </div>
          <!-- Portfolio Detail End -->



              <!-- Portfolio Detail Start -->
              <div class="row portfolio">
                <div class="col-sm-6 custom-pad-1">
                    <img src="images/portfolio/6.jpg" class="img-responsive" alt="">
                 </div>

                 <div class="col-sm-6 custom-pad-2">
                   <div class="table-responsive">
                    <table class="table table-bordered">
                     <tbody>
                       <tr>
                        <td><b>Skills</b></td>
                        <td>Android(Java), Firebase, VueJS</td>
                       </tr>
                       <tr>
                        <td><b>Duration</b></td>
                        <td>OnGoing</td>
                       </tr>
                       <tr>
                        <td><b>Cost</b></td>
                        <td>Kshs. 100000 and counting</td>
                       </tr>
                       <tr>
                        <td><b>Url</b></td>
                        <td><a href="http://www.github.com/mondeer" target="_blank" title="imond">Github Repo</a></td>
                       </tr>
                       <tr>
                        <td><b>About Project</b></td>
                        <td>Biorec Master is a biometric device with fingerprint and NFC reader, the client is developed with android studio and the admin side is developed with VueJS. The Backend of this system is Firebase</tr>
                     </tbody>
                  </table>

              </div>
            </div>
          </div>
          <!-- Portfolio Detail End -->

        </div>
        <!-- Portfolio End -->
      </div>
    </div>
  </div>

    <div class="col-md-12 text-center">
      <a href="javascript:void(0)" id="load-more-portfolio" class="load-more-button">Load</a>
      <div id="portfolio-end-message"></div>
     </div>
@endsection
