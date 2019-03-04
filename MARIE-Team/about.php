<?php 
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Cardoor - Car Rental HTML Template</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <?php require 'header.php' ?>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nos Tarifs</h2>
                        <span class="title-line"><i class="fa fa-anchor"></i></span>
                        <p>Profiter du Black Friday.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
   <center> <h4><font color="#00B0FD">Liaison 15 : Quiberon-Le Palais</font></h4></centre>
 <table border="1" cellpadding="10" cellspacing="1" width="100%">
   <tr>
      <th><center>Catégorie</center></th>
      <th><center>Type </center></th>
      <th><center>Periode</center> <table border="1" cellpadding="10" cellspacing="1" width="100%">
   <tr>
      <th><center>01/09/2010</center></th>
      <th><center>16/06/2011</center></th>
      <th><center>16/09/2011</center></th>
   </tr>
   <tr>
      <td><center>15/06/2011</center></td>
      <td><center>15/09/2011</center></td>
      <td><center>31/05/2012</center></td>
   </tr>
  
</table></th>
   </tr>
   <tr>
      <td><center>A Passager </center></td>
      <td> <table >
   <tr>
     
      <td>A1-Adulte</td>
   </tr>
   <tr>
     
      <td><center>A2-Junior 8à18 ans</center></td>
   </tr>
   <tr>
      
      <td><center>A3-Enfant 0à7 ans</center></td>
   </tr>
</table></td>
      <td><table border="1" cellpadding="50" cellspacing="1" width="100%">
   <tr>
      <th><center>18.00</center></th>
      <th><center>20.00</center></th>
      <th><center>19.00</center></th>

   </tr>
   <tr>
      <td><center>11.10</center></td>
      <td><center>13.10</center></td>
      <td><center>12.10</center></td>
   </tr>
   <tr>
      <td><center>5.60</center></td>
      <td><center>7.00</center></td>
      <td><center>6.40</center></td>
   </tr>
  
</table></td>
   </tr>
   <tr>
      <td><center>B Véh.inf.2M</center></td>
      <td><table >
   <tr>
     
      <td>B1-Voiture long.inf.4m</td>
   </tr>
   <tr>
     
      <td>B2-Voiture long inf.5m</td>
   </tr>
   <tr>
      
    
   </tr>
</table></td>
      <td><table border="1" cellpadding="50" cellspacing="1" width="100%">
   <tr>
      <th><center>86.00</center></th>
      <th><center>95.00</center></th>
      <th><center>91.00</center></th>

   </tr>
   <tr>
      <td><center>129.00</center></td>
      <td><center>142.00</center></td>
      <td><center>136.00</center></td>
   </tr>
   
  
</table></td>
   </tr>
  <td><center>C Véh.sup.2M</center></td>
      <td><table >
   <tr>
     
      <td>C1-Fourgon</td>
   </tr>
   <tr>
     
      <td>C2-Camping car</td>
   </tr>

   <td>C1-Camion</td>
   </tr>
   <tr>
      
    
   </tr>
</table></td>
      <td><table border="1" cellpadding="50" cellspacing="1" width="100%">
   <tr>
      <th><center>189.00</center></th>
      <th><center>208.00</center></th>
      <th><center>199.00</center></th>

   </tr>
   <tr>
      <td><center>205.00</center></td>
      <td><center>226.00</center></td>
      <td><center>216.00</center></td>
   </tr>
   <tr>
      <td><center>268.00</center></td>
      <td><center>295.00</center></td>
      <td><center>282.00</center></td>
   </tr>
  
</table></td>
   </tr>
</table>
</table>

<br>
   <center> <h4><font color="#00B0FD">Liaison 19 : Vannes-Le Palais</font></h4></centre>
<table border="1" cellpadding="10" cellspacing="1" width="100%">
   <tr>
      <th><center>Catégorie</center></th>
      <th><center>Type </center></th>
      <th><center>Periode</center> <table border="1" cellpadding="10" cellspacing="1" width="100%">
   <tr>
      <th><center>01/09/2010</center></th>
      <th><center>16/06/2011</center></th>
      <th><center>16/09/2011</center></th>
   </tr>
   <tr>
      <td><center>15/06/2011</center></td>
      <td><center>15/09/2011</center></td>
      <td><center>31/05/2012</center></td>
   </tr>
  
</table></th>
   </tr>
   <tr>
      <td><center>A Passager </center></td>
      <td> <table >
   <tr>
     
      <td>A1-Adulte</td>
   </tr>
   <tr>
     
      <td><center>A2-Junior 8à18 ans</center></td>
   </tr>
   <tr>
      
      <td><ceneter>A3-Enfant 0à7 ans</center></td>
   </tr>
</table></td>
      <td><table border="1" cellpadding="50" cellspacing="1" width="100%">
   <tr>
      <th><center>27.20</center></th>
      <th><center>29.30</center></th>
      <th><center>28.50</center></th>

   </tr>
   <tr>
      <td><center>17.30</center></td>
      <td><center>18.60</center></td>
      <td><center>18.10</center></td>
   </tr>
   <tr>
      <td><center>9.80</center></td>
      <td><center>10.60</center></td>
      <td><center>10.20</center></td>
   </tr>
  
</table></td>
   </tr>
   <tr>
      <td><center>B Véh.inf.2M</center></td>
      <td><table >
   <tr>
     
      <td><center>B1-Voiture long.inf.4m</center></td>
   </tr>
   <tr>
     
      <td><cneter>B2-Voiture long inf.5m</cneter></td>
   </tr>
   <tr>
      
    
   </tr>
</table></td>
      <td><table border="1" cellpadding="50" cellspacing="1" width="100%">
   <tr>
      <th><center>129.00</center></th>
      <th><center>139.00</center></th>
      <th><center>135.00</center></th>

   </tr>
   <tr>
      <td><center>194.00</center></td>
      <td><center>209.00</center></td>
      <td><center>203.00</center></td>
   </tr>
   
  
</table></td>
   </tr>
   <td><center>C Véh.sup.2M</center></td>
      <td><table >
   <tr>
     
      <td>C1-Fourgon</td>
   </tr>
   <tr>
     
      <td><center>C2-Camping car</center></td>
   </tr>

   <td>C1-Camion</td>
   </tr>
   <tr>
      
    
   </tr>
</table></td>
      <td><table border="1" cellpadding="50" cellspacing="1" width="100%">
   <tr>
      <th><center>284.00</center></th>
      <th><center>306.00</center></th>
      <th><center>298.00</center></th>

   </tr>
   <tr>
      <td><center>308.00</center></td>
      <td><center>332.00</center></td>
      <td><center>323.00</center></td>
   </tr>
   <tr>
      <td><center>402.00</center></td>
      <td><center>434.00</center></td>
      <td><center>422.00</center></td>
   </tr>
  
</table></td>
   </tr>
</table>
</table>

    <?php require 'footer.php' ?>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>