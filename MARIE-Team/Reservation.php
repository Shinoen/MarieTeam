<?php 
require 'db.php';
session_start();

$refSecteur= $mysqli->escape_string($_POST['Secteur']);
$refLiaison= $mysqli->escape_string($_POST['Liaison']);
$Rq = $mysqli->query("SELECT Date, Heure, Id, Num FROM Traversee where Code = ".$_POST['Liaison'].";");
$Count = $mysqli->query("SELECT count(*) Id FROM Traversee where Code = ".$_POST['Liaison'].";");
 ?>

 <!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Réservation</title>

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
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> 1 avenue Gaston Berger

                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i>03.20.51.62.84.79
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Lun-Ven 09.00 - 17.00

                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                   <div class="col-lg-3 text-right">
                        <div class="logs">
                            <?php if ( $_SESSION['logged_in'] != 1 ): ?>
                                <a href="register.html">Inscription</a>
                                <NOBR>|</NOBR>
                                <a href="login.html">Se connecter</a>
                            <?php else : ?>
                                <NOBR>Connecté</NOBR>
                                <NOBR>|</NOBR>
                                <a href="logout.php">Déconnexion</a>
                            <?php endif ?>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index2.php" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                               <li ><a href="index2.php">Home</a>
                                     
                                       
                                       
                                
                             
                               <li><a href="#">Bateaux</a>
                                    
                                </li>
                                <li class="active"><a href="index.html">Réservation</a>
                                    <ul>
                                        <li><a href="package.html">Abonnement</a></li>
                                        <li><a href="driver.html">Capitaine</a></li>
                                        <li><a href="about.html">Tarifs</a></li>                                    
                                        <li><a href="driver.html">Horaires</a></li>
                                        
                                       
                                    </ul>
                                    <li></li>
                                    
                               
                                </li>
                                <li class ><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nos Capitaines</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Ayez confiance en nos capitaines, ce sont les meilleurs.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>



    <section>
        <div>
            <div style="margin-top: 12px;display: flex;justify-content: center;flex-direction: column;align-items: center;">


					<?php 
                        $array3 = mysqli_fetch_array($Count);
                        echo ("<div>Nous avons trouvé ".$array3["Id"]." résultats répondant à votre demande.</div>");

                        while($array = mysqli_fetch_array($Rq)){

						$Rq2 = $mysqli->query("SELECT Nom FROM Bateau WHERE Id = ".$array["Id"].";");
						$array2 = mysqli_fetch_array($Rq2);

                        echo ('

                                                    <div class="col-lg-12 item-recherche" style="color:;box-shadow: 2px 2px 20px 0 black;display: flex;justify-content: space-between;align-items: center;">
                                                        <div style="width: 90px;border: 1px solid white;height: 100%;">
                                                            <img src="assets/img/driver/driver-1.jpg" alt="Raju Ahammad">
                                                        </div>
                                                        <div style="display: flex;justify-content: center;flex-direction: column;">
                                                            <div class="ecriture-recherche">
                                                                Date : '.$array["Date"].'
                                                            </div>
                                                            <div class="ecriture-recherche">
                                                                Heure : '.$array["Heure"].'
                                                            </div>
                                                            <div class="ecriture-recherche">
                                                                Bateau : '.$array2["Nom"].'
                                                            </div>
                                                            <div class="ecriture-recherche">
                                                                Nombre de place : 10
                                                            </div>  
                                                        </div>
                                                        
                                                        <div>
                                                            <a href="Commande.php?Num='.$array["Num"].'" class="map-show" style="-webkit-appearance: button-bevel;margin-top: 0;padding: 61% 25px;font-size: 21px;">→</a>
                                                        </div>
                                                    </div>

                                    ');}
					?>

                </div>
            </center>
        </div>
    </section>
				<!--</table>
			</div>
		</div>
    </section> ==-->
    <!--== Driver Page Content End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Contact</h2>
                            <div class="widget-body">
                                <img src="assets/img/logo.png" alt="JSOFT">
                                
                                <div class="newsletter-area">
                                    <form action="contact.html">
                                        <input type="email" placeholder="Message">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Destinations</h2>
                            <div class="widget-body">
                                <ul class="recent-post">
                                    <li>
                                        <a href="#">
                                           Belle Ile en mer! 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          Houat 
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                          Ile de Groix
                                           <i class="fa fa-long-arrow-right"></i>
                                       </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Coordonner </h2>
                            <div class="widget-body">
                              
                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> 1 avenue Gaston Berger</li>
                                    <li><i class="fa fa-mobile"></i> 03.20.51.62.84.79</li>
                                    <li><i class="fa fa-envelope"></i>Contact@MarieTeam.fr</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Map</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
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