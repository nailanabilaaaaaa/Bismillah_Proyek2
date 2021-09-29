@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>SELAMAT DATANG DI PROFIL SEKOLAH</h6>
                  <h4>SD NEGERI 1 BARENG MALANG</h4>
                  <p>PENDIDIKAN YANG BERKARAKTER DAN BERINTEGRITAS</p>
                  <a href="HalamanHome" class="filled-button">Read More</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>we are here to support you</h6>
                  <h4>Accounting<br>&amp; Management</h4>
                  <p>You are allowed to use this template for your company websites. You are NOT allowed to re-distribute this template ZIP file on any template download website. Please contact TemplateMo for more detail.</p>
                  <a href="services.html" class="filled-button">our services</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>we have a solid background</h6>
                  <h4>Market Analysis<br>&amp; Statistics</h4>
                  <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate mi. Sed nec cursus augue. Phasellus lacinia ac sapien vitae dapibus. Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</p>
                  <a href="about.html" class="filled-button">learn more</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
            <span>Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</span>
          </div>
          <div class="col-md-4">
            <a href="contact.html" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>WEB <em>SEKOLAH</em></h2>
              <span>SD NEGERI 1 BARENG MALANG</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/service_01.jpg')}}" alt="">
              <div class="down-content">
                <h4>Profil</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <a href="Profil" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/service_02.jpg')}}" alt="">
              <div class="down-content">
                <h4>Gallery</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <a href="HalamanGallery" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/service_03.jpg')}}" alt="">
              <div class="down-content">
                <h4>Program Kegiatan</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <a href="HalamanProgram" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="left-content">
              <span>SD NEGERI 1 BARENG MALANG</span>
                <h2>KATA PENGANTAR <em>KEPALA SEKOLAH</em></h2>
                <p>Puji syukur kami panjatkan kehadirat Allah SWT yang telah melimpahkan rahmat, taufik dan hidayah-Nya sehingga kami dapat menyelesaikan PROFIL SD NEGERI BARENG 01 TAHUN 2021/2022 ini dengan baik, meskipun secara sederhana dan masih banyak kekurangan.
                    Terselesainya Profil Sekolah ini adalah atas dasar bimbingan dan petunjuk dari berbagai pihak, untuk itu kami menyampaikan terimakasih kepada Pengawas  SD Gugus V Kecamatan Klojen Kota Malang, Seluruh Dewan Guru dan Karyawan SDN Bareng 1, Komite SDN Bareng 1, dan semua pihak yang tidak bisa kami sebutkan satu persatu.
                    Atas segala bantuan, bimbingan dan petunjuknya semoga Allah SWT memberikan balasan yang lebih baik dan diharapkan Profil ini dapat memberikan informasi kepada semua pihak yang memerlukan.
                </p>
                <p> Drs. H. ADI SUSILO, M. Pd</p>
              </div>
            </div>
              <div class="col-md-4">
                <div class="left-image">
                  <img src="{{asset('images/kepsek.jpg')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="{{asset('images/more-info.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>Who we are</span>
                    <h2>Get to know about <em>our company</em></h2>
                    <p>Curabitur pulvinar sem a leo tempus facilisis. Sed non sagittis neque. Nulla conse quat tellus nibh, id molestie felis sagittis ut. Nam ullamcorper tempus ipsum in cursus<br><br>Praes end at dictum metus. Morbi id hendrerit lectus, nec dapibus ex. Etiam ipsum quam, luctus eu egestas eget, tincidunt</p>
                    <a href="#" class="filled-button">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What they say <em>about us</em></h2>
              <span>testimonials from our greatest clients</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-testimonials owl-carousel">
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>George Walker</h4>
                  <span>Chief Financial Analyst</span>
                  <p>"Nulla ullamcorper, ipsum vel condimentum congue, mi odio vehicula tellus, sit amet malesuada justo sem sit amet quam. Pellentesque in sagittis lacus."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>John Smith</h4>
                  <span>Market Specialist</span>
                  <p>"In eget leo ante. Sed nibh leo, laoreet accumsan euismod quis, scelerisque a nunc. Mauris accumsan, arcu id ornare malesuada, est nulla luctus nisi."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>David Wood</h4>
                  <span>Chief Accountant</span>
                  <p>"Ut ultricies maximus turpis, in sollicitudin ligula posuere vel. Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
              <div class="testimonial-item">
                <div class="inner-content">
                  <h4>Andrew Boom</h4>
                  <span>Marketing Head</span>
                  <p>"Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis."</p>
                </div>
                <img src="http://placehold.it/60x60" alt="">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Contact <em>Us</em></h2>
              <span>SD NEGERI 1 BARENG MALANG</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="4" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('images/logo.png')}}" title="5" alt="5">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/owl.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>