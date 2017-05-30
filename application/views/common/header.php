<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <title>roussel btp</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'>

  <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  
  
  <script type="text/javascript" src="assets/js/jquery-1.8.3.min.js"></script>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="assets/js/jquery.mobile.customized.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script> 
  <script type="text/javascript" src="assets/js/camera.min.js"></script>
  <script type="text/javascript" src="assets/js/myscript.js"></script>
  <script src="assets/js/sorting.js" type="text/javascript"></script>
  <script src="assets/js/jquery.isotope.js" type="text/javascript"></script>
  <!--script type="text/javascript" src="assets/js/jquery.nav.js"></script-->
  <script>
    jQuery(function(){
        jQuery('#camera_wrap_1').camera({
        transPeriod: 500,
        time: 3000,
        height: '490px',
        thumbnails: false,
        pagination: true,
        playPause: false,
        loader: false,
        navigation: false,
        hover: false
      });
    });
  </script> 
</head>
<body>
<!--home start-->
    
    <div id="home">
        <div class="headerLine">
    <div id="menuF" class="default">
        <div class="container">
            <div class="row">
                <div class="logo col-md-4">
                    <div>
                        <a href="#">
                            <img src="assets/images/logo.jpg">  Roussel BTP
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="navmenu"style="text-align: center;">
                        <ul id="menu">
                            <li class="active" ><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#project">Projects</a></li>
                            <li><a href="#news">News</a></li>
                            <li class="last"><a href="#contact">Contact</a></li>
                            <!--li><a href="#features">Features</a></li-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
