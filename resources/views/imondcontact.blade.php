@extends('blog.index')

@section('content')
<div class="row">


      <div class="sub-title">
        <h2>Contact Me</h2>
          <a href="/"><i class="icon-home"></i></a>
       </div>


      <div class="col-md-12 content-page">
        <div class="col-md-12 blog-post">

          <!-- Intro Start -->
          <div class="post-title margin-bottom-10">
             <h1>Looking for a <span class="main-color">Seasoned Developer</span>?</h1>
             </div>
             <div class="col-md-offset-3 col-md-12">
               <img src="blog/images/kim.jpeg" class="imond" alt="">
             </div>
            <p>.</p>
               <!-- Intro End -->

          <!-- Testimonials Start -->
          <div class="post-title margin-top-50">
             <h2>I hope you've checked <a href="/imondwork" data-toggle="tooltip" data-placement="top" title="Check out my work.">my work</a>, Let's take a look on what other clients said about my work.</h2>
             </div>


          <!-- <div class="row">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="testimonial-content">
               <p>Nice job delivered on time, the best develoment i ever interacted with.</p>
            </div>

            <div class="testimonial-client-info">
              <div class="testimonial-client client-thumb">
                <img src="images/testimonial/1.png" alt="">
              </div>

              <div class="client-text">
                <div class="client-name">client</div>
                <span>Tropical, College</span>
              </div>
            </div>
           </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="testimonial-content">
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus.</p>
           </div>

           <div class="testimonial-client-info">
              <div class="testimonial-client client-thumb">
                <img src="images/testimonial/2.png" alt="">
              </div>
              <div class="client-text">
                <div class="client-name">Jhon Doe</div>
                <span>WebRes LTD, Founder</span>
              </div>
           </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="testimonial-content">
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam at orci commodo hendrerit vitae nec eros. Vestibulum neque est, imperdiet nec tortor nec, tempor semper metus.</p>
            </div>

            <div class="testimonial-client-info">

              <div class="testimonial-client client-thumb">
                <img src="images/testimonial/3.png" alt="">
              </div>

              <div class="client-text">
                <div class="client-name">Jhon Doe</div>
                <span>WeSoon LTD, Founder</span>
              </div>
            </div>
           </div>

          </div> -->
          <!-- Testimonials  End -->

         <!-- Contact Me Start -->
          <div class="post-title margin-top-70">
            <h1>Contact <span class="main-color">Me</span></h1>
          </div>
           <div class="row">

             <div class="col-md-4 col-sm-4">
               <div class="contact-us-detail">
                <i class="icon-screen-smartphone color-6"></i>
                <p><a href="#">+254 724 871 111</a></p>
              </div>
             </div>

             <div class="col-md-4 col-sm-4">
               <div class="contact-us-detail">
                <i class="icon-envelope-open color-5"></i>
                <p><a href="mailto:mondiakering@gmail.com">mondiakering@gmail.com, mondia@imond.co.ke</a></p>
              </div>
             </div>

             <div class="col-md-4 col-sm-4">
               <div class="contact-us-detail">
                <i class="icon-clock color-3"></i>
                <p>Sun - Fri 00:00 – 00:00(24/6)</p>
              </div>
            </div>

          </div>


          <div class="row margin-top-30">
            <div class="col-md-12">

            <div class="row">
             <form>

              <div class="col-sm-6">
                <div class="form-group">
                 <input type="text" id="name" class="form-control" placeholder="Your Name">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                 <input type="email" id="email" class="form-control" placeholder="Your Email">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" id="website" class="form-control" placeholder="Your Website">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" id="address" class="form-control" placeholder="Where are You From?">
                </div>
              </div>

              <div class="col-sm-12">
                <select id="subject" class="form-group form-control">
                 <option value="" selected disabled>Subject</option>
                 <option>Website Design & Development</option>
                 <option>Mobile App Development</option>
                 <option>Integrated System Development</option>
                 <option>Web App development</option>
                 <option>I Want to General Talk</option>
                 <option>Other</option>
               </select>
             </div>

              <div class="col-sm-12">
                  <div class="textarea-message form-group">
                    <textarea id="message" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
                  </div>
             </div>


            <div class="text-center">
              <button type="submit" class="load-more-button">Send</button>
            </div>

           </form>
          </div>
        </div>
       </div>
       <!-- Contact Me End -->

   </div>
  </div>
 </div>
@endsection
