@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Data</h1>
            <span>Informasi Data Guru & Siswa SD NEGERI 1 BARENG MALANG</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>DATA GURU <em>SEKOLAH</em></h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="down-content">
                <h4>Guru Berstatus PNS</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover">
			              <thead>
                      <tr>
                        <th>Pendidikan Terakhir</th>
                        <th>Jumlah</th>
                        <th>Tersertifikasi</th>	
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>S2</td>
                        <td>2</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>S1</td>
                        <td>10</td>
                        <td>10</td>
                      </tr>
                      <tr>
                        <td>D3</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="down-content">
                <h4>Guru Berstatus NON-PNS</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover">
			              <thead>
                      <tr>
                        <th>Pendidikan Terakhir</th>
                        <th>Jumlah</th>
                        <th>Tersertifikasi</th>	
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>S2</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>S1</td>
                        <td>5</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>D3</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                    </tbody>
                  </table>
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
              <h2>DATA TENAGA PENDIDIKAN <em>SEKOLAH</em></h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="down-content">
                <h4>Tenaga Pendidikan Berstatus PNS</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover">
			              <thead>
                      <tr>
                        <th>Pendidikan Terakhir</th>
                        <th>Jumlah</th>
                        <th>Tersertifikasi</th>	
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>S1</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>D3</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>SLTA</td>
                        <td>1</td>
                        <td>-</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="down-content">
                <h4>Tenaga Pendidikan Berstatus NON-PNS</h4>
                <p>SD NEGERI 1 BARENG MALANG</p>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover">
			              <thead>
                      <tr>
                        <th>Pendidikan Terakhir</th>
                        <th>Jumlah</th>
                        <th>Tersertifikasi</th>	
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>S1</td>
                        <td>1</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>SLTA</td>
                        <td>-</td>
                        <td>-</td>
                      </tr>
                    </tbody>
                  </table>
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
                <div class="col-md-12">
                  <div class="right-content">
                    <h2>DATA SELURUH SISWA <em>PERTAHUNNYA</em></h2>
                    <h4>Jumlah siswa sesuai jenjang tingkatan dalam 3 (tiga) tahun terakhir :</h4></br>
                      <div class="table-responsive">
		                    <table class="table table-bordered table-striped table-hover">
			                    <thead>
                            <tr>
                              <th>Tahun</th>
                              <th>Kelas I</th>
                              <th>Kelas II</th>
                              <th>Kelas III</th>
                              <th>Kelas IV</th>
                              <th>Kelas V</th>
                              <th>Kelas VI</th>
                              <th>Jumlah</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>2019 / 2020</td>
                              <td>55</td>
                              <td>55</td>
                              <td>59</td>
                              <td>46</td>
                              <td>56</td>
                              <td>57</td>
                              <td>328</td>
                            </tr>
                            <tr>
                              <td>2020 / 2021</td>
                              <td>43</td>
                              <td>47</td>
                              <td>51</td>
                              <td>56</td>
                              <td>57</td>
                              <td>46</td>
                              <td>300</td>
                            </tr>
                            <tr>
                              <td>2021 / 2022</td>
                              <td>31</td>
                              <td>45</td>
                              <td>47</td>
                              <td>51</td>
                              <td>56</td>
                              <td>57</td>
                              <td>287</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br></br><br></br><br></br>

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