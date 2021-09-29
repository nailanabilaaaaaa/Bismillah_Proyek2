@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Profil</h1>
            <span>SD NEGERI BARENG 1 MALANG</span>
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
                <div class="col-md-13">
                  <div class="col-md-13 align-self-center">
                  <div class="right-content">
                    <h2>PROFIL <em>SEKOLAH</em></h2>
                    <p>Sekolah adalah salah satu lembaga pendidikan formal. Sebagai suatu lembaga pendidikan formal, sekolah berperan sangat menentukan dalam rangka usaha untuk meningkatkan kwalitas pendidikan  Sekolah juga merupakan lembaga pendidikan yang selalu berinteraksi dengan  masyarakat sekitarnya. 
                      Sekolah memiliki satu tradisi yang kaya dengan keterlibatan orang tua siswa dan komunitasnya dalam penyelenggaraan pendidikan. Untuk memantapkan dan mengembangkan tradisi tersebut, maka dibentuklah satu lembaga yang dikenal dengan nama Komite Sekolah yang berkedudukan di satu satuan pendidikan, tidak terkecuali di SDN Bareng 1.
                      SDN Bareng 1 juga sudah membentuk wadah tersebut sebagai mitra kerja sekolah guna bersama-sama ikut serta memajukan dunia pendidikan dan ikut serta juga memberikan informasi kepada masyarakat akan betapa pentingnya pendidikan untuk anak-anak kita sebagai penerus perjuangan bangsa ini. Untuk itu SDN Bareng 1 merumuskan visi, misi, serta motto guna mewujudkan hal tersebut. Visi, misi, dan motto yang dimaksud adalah sebagai berikut.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>MOTTO <em>SEKOLAH</em></h2>
              <span>“MAJU BERSAMA UNTUK MUTU PENDIDIKAN DI SD NEGERI BARENG 1”</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2>VISI<em></em></h2>
                    <p>Terwujudnya Manusia Beriman, Bertaqwa, Berbudi Luhur, Cerdas Dan Terampil Yang Berwawasan Lingkungan</p>
                    <h2><em>MISI</em></h2>
                    <p>1. Melaksanakan dan mengamalkan ajaran agama, berakhlak mulia (cerdas spiritual/olah hati).</p>
                    <p>2.	Mengembangkan wawasan dalam kehidupan bermasyarakat (cerdas sosial).</p>
                    <p>3.	Melaksanakan pembelajaran dan bimbingan secara efisien dan efektif dalam berpikir ilmiah yang kritis, kreatif dan mandiri (cerdas intelektual/olah pikir).</p>
                    <p>4.	Mengembangkan potensi siswa dalam kemampuan mengekspresikan dan mengapresiasi keindahan dan harmoni (cerdas emosional/olah hati).</p>
                    <p>5.	Mengembangkan potensi fisik dan menanamkan sportivitas serta kesadaran hidup bersih dan sehat (cerdas kinestesis).</p>
                  </div>
                  </div>
                  <div class="col-md-6">
                    <div class="left-image">
                      <img src="{{asset('images/sekolah1.jpg')}}" alt="">
                    </div>
                    <br>
                    <div class="left-image">
                      <img src="{{asset('images/sekolah2.jpg')}}" alt="">
                    </div>
                  </div>
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
                  <br></br>
                  <div class="left-image">
                    <img src="{{asset('images/sekolah4.jpg')}}" alt="">
                  </div>
                  <br></br>
                  <div class="left-image">
                    <img src="{{asset('images/sekolah5.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2>TUJUAN <em>SEKOLAH</em></h2>
                    <p>1.	Mengamalkan ajaran agama dan berakhlak mulia dari hasil proses pembelajaran dan kegiatan pembiasaan.</p>
                    <p>2.	Menjadikan peserta didik yang berkarakter dan berwawasan kebangsaan dalam kehidupan bermasyarakat, berbangsa dan bernegara.</p>
                    <p>3.	Memberikan dasar-dasar ilmu pengetahuan dan teknologi sebagai bekal peserta didik melanjutkan ke sekolah yang lebih tinggi.</p>
                    <p>4.	Meningkatkan dan mengembangkan pembelajaran ang inovatif dan kreatif melalui pengembangan kurikulum yang adaptif dan proaktif, berbudaya.</p>
                    <p>5.	Menghasilkan perangkat dan proses pembelajaran yang inovatif dan kreatif melalui pembelajaran aktif dan menyenangkan.</p>
                    <p>6.	Menghasilkan prestasi peserta didik dibidang akademik dan non akademik.</p>
                    <p>7.	Menjadikan peserta didik sebagai pelopor dan penggerak peduli lingkungan hidup, kebiasaan hidup bersih dan sehat.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br></br><br></br>

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