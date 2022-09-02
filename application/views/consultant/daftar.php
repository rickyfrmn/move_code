<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/slide'); ?>img/favicon.png" rel="icon">
  <link href="<?php echo base_url('assets/slide'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/slide/'); ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/slide/'); ?>lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/slide/'); ?>lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/slide/'); ?>lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/slide/'); ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/slide/'); ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/slide/'); ?>lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url('assets/slide/'); ?>css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/slide/'); ?>css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url('assets/slide/'); ?>css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<div></div>
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?php echo base_url('assets/slide/'); ?>img/slider/sliderkon.jpg" alt="" title="#slider-direction-1" />
        <img src="<?php echo base_url('assets/slide/'); ?>img/slider/slidermit.jpg" alt="" title="#slider-direction-2" />
        
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"> </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2"></h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo base_url('service'); ?>">Subscribe</a>
                  <a class="ready-btn page-scroll" href="<?php echo base_url('consultant/registration'); ?>">Daftar Mentor</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="<?php echo base_url('service'); ?>">Subscribe</a>
                  <a class="ready-btn page-scroll" href="<?php echo base_url('consultant/registration'); ?>">Daftar Mentor</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

     
    </div>
  </div>
  <!-- End Slider Area -->


<div class=" area-register ">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-register text-center">
              <h2>Consultant Registry</h2>
            </div>
          </div>
        </div>
        <div class="row">
          

          <!-- Start Google Map -->
        
          <!-- End Google Map -->

          <!-- Start  contact -->
          
  <!-- End Contact Area -->
<div class="daftar">
    <div class="col-md-50">
  <form action="" method="post" class="col">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" >
    <small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
  </div>

  <div class="row form-group">
    <div class="col">
      <label for="email">Email </label>
      <input type="text" name="email" class="form-control" id="email" placeholder="...@gmail.com" >
      <small class="form-text text-danger"><?php echo form_error('email'); ?></small>
    </div>

    <div class="col">
      <label for="exampleInputEmail1">No Hp</label>
      <input type="text" name="nohp" class="form-control" placeholder="+628xxx" >
      <small class="form-text text-danger"><?php echo form_error('nohp'); ?></small>
    </div>
  </div>

  <br>
  <div class="form-group">
    <label for="alamat">Alamat Rumah</label>
    <textarea type="text" name="alamat" class="form-control" id="alamat" ></textarea>
    <small class="form-text text-danger"><?php echo form_error('alamat'); ?></small>
  </div>

  <div class="form-group">
    <label for="pendidikan">Pendidikan</label>
    <input type="text" name="pendidikan" class="form-control" id="pendidikan" placeholder="Min. SMA/SMK">
    <small class="form-text text-danger"><?php echo form_error('pendidikan'); ?></small>
  </div>

  <div class="form-group ">
      <label for="keahlian">Keahlian</label>
      <select class="form-control" id="keahlian" name="keahlian" >
        <option value="Marketing">Marketing</option>
        <option value="Finance">Finance</option>
        <option value="Human Resource">Human Resource</option>
        <option value="Teknologi">Teknologi</option>
        <option value="Law Business">Law Business</option>
        <option value="Lainnya">lainnya..</option>
      </select>
    </div>

      <div class="form-group">
    <label for="sertifikasi">Sertifikasi</label>
    <select class="form-control" id="sertifikasi" name="sertifikasi" >
        <option value="Ya">Ya</option>
        <option value="Tidak">Tidak</option>
      </select>
  </div>

   <div class="form-group ">
      <label for="pengalaman">Pengalaman</label>
      <select class="form-control" id="pengalaman" name="pengalaman" >
        <option value="Fresh Graduate">Fresh Graduate</option>
        <option value=" lebih dari 1 Tahun"> >1 Tahun </option>
        <option value=" kurang dari 1 Tahun"> <1 Tahun </option>
        
        <option value="Lainnya">lainnya..</option>
      </select>
    </div>
      <!-- <div class="form-group">
    <label for="pengalaman">Pengalaman</label>
    <input type="text" name="pengalaman" class="form-control" id="pengalaman" placeholder="Min. 1 Tahun">
  </div> -->

  <!-- <div class="form-group">
    <label for="sertifikasi">Keahlian</label>
    <input type="text" name="sertifikasi" class="form-control" id="sertifikasi" >
  </div> -->
  <div class="form-group">
    <label for="projek_startup">Punya Project Startup</label>
    <select class="form-control" id="projek_startup" name="projek_startup" >
        <option value="Ya">Ya</option>
        <option value="Tidak">Tidak</option>

      </select>
  </div>

  <div class="form-group">
    <label for="bisnis">Nama Startup</label>
    <input type="text" name="bisnis" class="form-control" id="bisnis" >
  </div>

    <div class="form-group">
    <label for="lama">Berapa Lama Berjalan</label>
    <input type="text" name="lama" class="form-control" id="lama" placeholder="Min. 6 bulan">

  </div>

    <div class="form-group ">
      <label for="sektor">Sektor Bisnis</label>
      <select class="form-control" id="sektor" name="sektor" >
        <option value="Fintech">Fintech</option>
        <option value="Games">Games</option>
        <option value="E-Commers">E-Commers</option>
        <option value="Education">Education</option>
        <option value="Digital Marketing">Digital Marketing</option>
        <option value="Consultant">Consultant</option>
        <option value="lainnya">lainnya...</option>
      </select>
    </div>

    

  <div class="form-group">
    <label for="des">Deskripsi Bisnis</label>
    <textarea type="text" name="des" class="form-control" id="des" placeholder="Min. 250 kata"></textarea>
    <small class="form-text text-danger"><?php echo form_error('des'); ?></small>
  </div>



  <div class="form-group">
    <label for="motivasi">Motivasi</label>
    <textarea type="text" name="motivasi" class="form-control" id="motivasi" placeholder="Min. 250 kata"></textarea>
    <small class="form-text text-danger"><?php echo form_error('motivasi'); ?></small>
  </div>

  <div class="form-group">
                <label for="waktu">Konsultasi</label>
                <select class="form-control" id="waktu" name="waktu">
                  <option value="08.00-11.00">08.00-11.00 WIB</option>
                  <option value="12.00-13.00">11.00-14.00 WIB</option>
                  <option value="14.00-17.00">14.00-17.00 WIB</option>
                  <option value="17.00-20.00">17.00-20.00 WIB</option>
                </select>
              </div>
 <!--  <div class="form-group ">
      <label for="konsultasi">Waktu Konsultasi</label>
      <select class="form-control" id="konsultasi" name="konsultasi">
        <option value="08.00-10.00">08.00-11.00 WIB</option>
        <option value="11.00-13.00">11.00-14.00 WIB</option>
        <option value="14.00-17.00">14.00-17.00 WIB</option>
        <option value="17.00-20.00">17.00-20.00 WIB</option>
      </select>

    </div> -->


  <!-- <div class="form-group">
    <label for="konsultan">Waktu Konsultasi</label>
    <input type="text" name="konsultan" class="form-control" id="konsultan"  placeholder="08.00-11.00 memakai waktu 24jam">
  </div> -->

  

  <button type="submit"  class="btn btn-primary">Daftar</button>
</form>

  

</div>
</div>

   </div>
      </div>
    </div>

    <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/slide/'); ?>lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/parallax/parallax.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/appear/jquery.appear.js"></script>
  <script src="<?php echo base_url('assets/slide/'); ?>lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="('assets/slide/'); ?>contactform/contactform.js"></script>

  <script src="<?php echo base_url('assets/slide/'); ?>js/main.js"></script>
</body>

</html>