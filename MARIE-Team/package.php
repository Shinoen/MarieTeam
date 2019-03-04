<?php 
require 'db.php';
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

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

    <?php require 'header.php' ?>

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nos Abonnements</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Pricing Area Start ==-->
    <section id="pricing-page-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Pricing Content Start -->
				<div class="col-lg-8">
					<div class="pricing-details-content">
						<div class="row">
							<!-- Single Pricing Table -->
							<div class="col-lg-6 col-md-6 text-center">
								<div class="single-pricing-table">
									<h3>OR</h3>
									<h2>$ 55.99</h2>
									<h5>Par mois</h5>

									<ul class="package-list">
										<li>Voiture et camionnette </li>
										<li>Service à bord</li>
										<li>Assurance inclu </li>
										<li>Capitaine Diplomé</li>
										<li>Tout inclu mini-bar</li>
										
									</ul>
								</div>
							</div>
							<!-- Single Pricing Table -->

							<!-- Single Pricing Table -->
							<div class="col-lg-6 col-md-6 text-center">
								<div class="single-pricing-table">
									<h3>Bronze</h3>
									<h2>Free</h2>
									<h5>Par mois</h5>

									<ul class="package-list">
										<li>Aucun véhicule </li>
										<li>Aucun service à bord</li>
                                        <li>Aucune assurance inclu </li>
                                        <li>Capitaine en Stage</li>
                                        <li>Eau du robinet </li>
									</ul>
								</div>
							</div>
							<!-- Single Pricing Table -->

							<!-- Single Pricing Table -->
							<div class="col-lg-6 col-md-6 text-center">
								<div class="single-pricing-table">
									<h3>Platine</h3>
									<h2>$ 75.99</h2>
									<h5>Par mois</h5>

									<ul class="package-list">
										<li>Voiture, camion, hélicptaire</li>
                                        <li>Service lèche botte à bord</li>
                                        <li>Assurance inclu </li>
                                        <li>Capitaine Sur-qualifié</li>
                                        <li>Tout inclu mini-bar avec le capitaine</li>
                                        
									</ul>
								</div>
							</div>
							<!-- Single Pricing Table -->

							<!-- Single Pricing Table -->
							<div class="col-lg-6 col-md-6 text-center">
								<div class="single-pricing-table">
									<h3>Silver</h3>
									<h2>$ 35.99</h2>
									<h5>Par mois</h5>

									<ul class="package-list">
										<li>Vélo</li>
                                        <li>Aucun service à bord</li>
                                        <li>Aucune assurance inclu </li>
                                        <li>Capitaine en fin de Formation</li>
                                        <li>Eau plate ou gazeuse en bouteille </li>
									</ul>
								</div>
							</div>
							<!-- Single Pricing Table -->
						</div>
					</div>
				</div>
                <!-- Pricing Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3> Informations</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i>  03.20.51.62.84.79</p>
                                <p><i class="fa fa-clock-o"></i>  Lun-Ven 09.00 - 17.00</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Service à bord</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service1-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">On rend vos clé de votre véhicule.</a></h4>
                                        
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">Wifi Gratuite pour tous.</a></h4>
                                          
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service2-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">On ouvre la porte aux abonner Platine,OR.</a></h4>
                                          
                                        </div>
                                    </li>

                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">Pour les abonner Platine, droit de selfie avec le capitaine.</a></h4>
                                           
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>Connection</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== FAQ Area End ==-->

    <!--== Footer Area Start ==-->
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