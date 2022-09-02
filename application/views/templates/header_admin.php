<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>movecode</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="<?php echo base_url('assets/home/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/'); ?>vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/'); ?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/'); ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/'); ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/'); ?>vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/home/'); ?>vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/home/'); ?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v2.0.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">

    
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <div class="text-light logo"><a href="<?php echo base_url('') ?>"><img src="<?php echo base_url('assets/home/img/icon/logonyar.png'); ?>" class="site-header__logo"> </a></div>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      
<br><br><br>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?php echo base_url(); ?>admin/mentor">Mentor</a></li>
          <li><a href="<?php echo base_url(); ?>admin/subscribe">Subscribe</a></li>
          <li><a href="<?php echo base_url(); ?>admin/contact_us">Contact-us</a></li>
          
          <li class="drop-down"><a href="#"><?php echo $user['name']; ?></a>
          
            <ul>
              <li><a href="<?php echo base_url(); ?>admin/setting">Setting</a></li>
              <li><a href="<?php echo base_url('auth/logout') ?>"data-toggle="modal" data-target="#logoutModal" >Log out</a></li>
              
            </ul>
          </li>

          
          
          

          <!-- <li class="get-started"><a href="#about">Get Started</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>