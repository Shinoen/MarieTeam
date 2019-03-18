<?php 
require 'db.php';
session_start();

$refTraversee = $mysqli->escape_string($_GET['Num']);
$Rq = $mysqli->query("SELECT * FROM Traversee where Num = ".$refTraversee.";");
$Array = mysqli_fetch_array($Rq);
$Rq4 = $mysqli->query("SELECT Nom, Id From Bateau where Id = ".$Array["Id"].";");
$Bateau = mysqli_fetch_array($Rq4);
$Rq1 = $mysqli->query("SELECT Id_Port, Id_Port_Arrivee FROM Liaison where Code = ".$Array["Code"].";");
$Array1 = mysqli_fetch_array($Rq1);
$Rq2 = $mysqli->query("SELECT Nom FROM Port where Id = ".$Array1["Id_Port"].";");
$Array2 = mysqli_fetch_array($Rq2);
$Rq3 = $mysqli->query("SELECT Nom FROM Port where Id = ".$Array1["Id_Port_Arrivee"].";");
$Array3 = mysqli_fetch_array($Rq3);
$Date = new Datetime($Array["Date"]);

//Calcul place restante
$CpctARq = $mysqli->query("SELECT CapaciteMax FROM Contenir WHERE Id = ".$Bateau['Id']);
$CpctA = mysqli_fetch_array($CpctARq);
$LstResTravRq = $mysqli->query("SELECT Num FROM Reservation WHERE Num_Traversee = ".$refTraversee);
$PlaceRes = 0;
while($LstResTrav = mysqli_fetch_array($LstResTravRq)){
    $NbPlcARq = $mysqli->query("SELECT Quantite FROM Enregistrer WHERE (NumType = 1 OR NumType = 2 OR NumType = 3) AND NumReservation = ".$LstResTrav['Num']);//Liste de $LstResTravRq
    while($NbPlcA = mysqli_fetch_array($NbPlcARq)){
        $PlaceRes += $NbPlcA['Quantite'];
    }
}
$PlcRestante = $CpctA['CapaciteMax'] - $PlaceRes;
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
    <!--== Page Title Area End ==-->

    <!--== Driver Page Content Start ==-->
    <!-- <section id="driver-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <table class="book-ur-car" border="1" cellpadding="10" cellspacing="1" width="100%">
                    <tr>
                        <th><center>Date</center></th>
                        <th><center>Heure </center></th>
                        <th><center>Bateau</center> </th>
                    </tr> ==--> 
    <section style="display: flex;justify-content: space-around;align-items: center;">
        <div style="margin: 1% 1%;width: 20%;display: flex;align-items: flex-start;flex-direction: column;background-color: rgba(0, 0, 0, 0.25);border-radius: 3px;" class="book-ur-car">
            
            <h1 style="font-size: 1.5rem;align-self: center;">Réservation</h1>
            <div style="margin-top: 12px;display: flex;flex-direction: column;">
                <b><p style="font-size: 17px;">Traversée choisi :</p></b>
                <p><?php echo $Array2["Nom"]." - ".$Array3["Nom"]; ?></p>
            </div>
            <div style="display: flex;flex-direction: column;">
                <b><p style="font-size: 17px;">Date :</p></b>
                <p><?php echo $Date->format("r");?></p>
            </div>
            <div style="display: flex;flex-direction: column;">
                <b><p style="font-size: 17px;">Horaire :</p></b>
                <p><?php echo "Le ".$Array["Date"]." à ".$Array["Heure"]."h"; ?></p>
            </div>
            <div style="display: flex;flex-direction: column;">
                <b><p style="font-size: 17px;">Bateau de traversée :</p></b>
                <p><?php echo "Vous naviguerez à bord du bateau ".$Bateau["Nom"]; ?></p>
            </div>
            <div style="display: flex;flex-direction: column;">
                <b><p style="font-size: 17px;">Nombre de place restante :</p></b>
                <p><?php echo "Il reste actuellement ".$PlcRestante." place passagères pour cette traversée."; ?></p>
            </div>
        </div>
        <form style="width: 65%;display: flex;justify-content: space-between;align-items: center;" method="get" action="Demande.php?Num=<?=$refTraversee?>">
        	<div style="display: flex;justify-content: space-around;flex-direction: column;align-items: center;background-color: rgba(0, 0, 0, 0.25);border-radius: 3px;width: 80%;padding: 1%;margin-top: 15px;margin-bottom: 15px;">
	        	<div style="display: flex;flex-direction: column;align-self: center;justify-content: space-around;background-color: rgba(0, 0, 0, 0.25);width: 100%;margin-bottom: 15px;align-items: center;">
	        		<div style="font-weight: bold;font-size: 18px;margin-top: 5px; color: black;">Passager</div>
	        		<div style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
	        			<div style="display:  flex;flex-direction: column;margin: 5%;">
		        			<div style="font-weight: bold;margin-bottom: 7.5px">
		        				Adulte : 
		        			</div>
		        			<div>
		        				<input type="text" name="adulte" value="<?php if($_SESSION['champs']['Num'] == $refTraversee && isset($_SESSION['champs']['adulte'])) echo $_SESSION['champs']['adulte']; else echo "0" ?>" style="background-color: rgba(0, 0, 0, 0);border: 1px solid rgba(0, 0, 0, 0.5);border-radius: 2px;padding: 2%;">
		        			</div>
		        		</div>
		        		<div style="display:  flex;flex-direction: column;margin: 5%;">
		        			<div style="font-weight: bold;margin-bottom: 7.5px">
		        				Junior : 
		        			</div>
		        			<div>
		        				<input type="text" name="junior" value="<?php if($_SESSION['champs']['Num'] == $refTraversee && isset($_SESSION['champs']['adulte'])) echo $_SESSION['champs']['junior']; else echo "0" ?>" style="background-color: rgba(0, 0, 0, 0);border: 1px solid rgba(0, 0, 0, 0.5);border-radius: 2px;padding: 2%;">
		        			</div>
		        		</div>
		        		<div style="display:  flex;flex-direction: column;margin: 5%;">
		        			<div style="font-weight: bold;margin-bottom: 7.5px">
		        				Enfant : 
		        			</div>
		        			<div>
		        				<input type="text" name="enfant" value="<?php if($_SESSION['champs']['Num'] == $refTraversee && isset($_SESSION['champs']['adulte'])) echo $_SESSION['champs']['enfant']; else echo "0" ?>" style="background-color: rgba(0, 0, 0, 0);border: 1px solid rgba(0, 0, 0, 0.5);border-radius: 2px;padding: 2%;">
		        			</div>
		        		</div>
	        		</div>
	        	</div>
	        	<div style="display: flex;flex-direction: column;align-self: center;justify-content: space-around;background-color: rgba(0, 0, 0, 0.25);width: 100%;margin-bottom: 15px;align-items: center;">
	        		<div style="font-weight: bold;font-size: 18px;margin-top: 5px; color: black;">Véhicule inférieur à 2m de hauteur</div>
	        		<div style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;width: 80%">
	        			<div style="display:  flex;flex-direction: column;margin: 5%;width: 50%">
		        			<div style="font-weight: bold;margin-bottom: 7.5px;width: 100%">
		        				Véhicule de longueur inférieur à 4m : 
		        			</div>
		        			<div>
		        				<input type="text" name="vl4" value="<?php if($_SESSION['champs']['Num'] == $refTraversee && isset($_SESSION['champs']['adulte'])) echo $_SESSION['champs']['vl4']; else echo "0" ?>" style="background-color: rgba(0, 0, 0, 0);border: 1px solid rgba(0, 0, 0, 0.5);border-radius: 2px;padding: 2%;width: 100%">
		        			</div>
		        		</div>
		        		<div style="display:  flex;flex-direction: column;margin: 5%;width: 50%">
		        			<div style="font-weight: bold;margin-bottom: 7.5px;width: 100%;">
		        				Véhicule de longueur inférieur à 5m : 
		        			</div>
		        			<div>
		        				<input type="text" name="vl5" value="<?php if($_SESSION['champs']['Num'] == $refTraversee && isset($_SESSION['champs']['adulte'])) echo $_SESSION['champs']['vl5']; else echo "0" ?>" style="background-color: rgba(0, 0, 0, 0);border: 1px solid rgba(0, 0, 0, 0.5);border-radius: 2px;padding: 2%;width: 100%">
		        			</div>
		        		</div>
	        		</div>
	        	</div>
	        	<div style="display: flex;flex-direction: column;align-self: center;justify-content: space-around;background-color: rgba(0, 0, 0, 0.25);width: 100%;align-items: center;">
	        		<div style="font-weight: bold;font-size: 18px;margin-top: 5px; color: black;">Véhicule supérieur à 2m de hauteur</div>
	        		<div style="display: flex;flex-direction: row;justify-content: space-around;align-items: center;">
	        			<div style="display:  flex;flex-direction: column;margin: 5%;">
		        			<div style="font-weight: bold;margin-bottom: 7.5px">
		        				Fourgon : 
		        			</div>
		        			<div>
		        				<input type="text" name="fourgon" value="<?php if($_SESSION['champs']['Num'] == $refTraversee && isset($_SESSION['champs']['adulte'])) echo $_SESSION['champs']['fourgon']; else echo "0" ?>" style="background-color: rgba(0, 0, 0, 0);border: 1px solid rgba(0, 0, 0, 0.5);border-radius: 2px;padding: 2%;">
		        			</div>
		        		</div>
		        		<div style="display:  flex;flex-direction: column;margin: 5%;">
		        			<div style="font-weight: bold;margin-bottom: 7.5px">
		        				Camping car : 
		        			</div>
		        			<div>
		        				<input type="text" name="campcar" value="<?php if($_SESSION['champs']['Num'] == $refTraversee && isset($_SESSION['champs']['adulte'])) echo $_SESSION['champs']['campcar']; else echo "0" ?>" style="background-color: rgba(0, 0, 0, 0);border: 1px solid rgba(0, 0, 0, 0.5);border-radius: 2px;padding: 2%;">
		        			</div>
		        		</div>
		        		<div style="display:  flex;flex-direction: column;margin: 5%;">
		        			<div style="font-weight: bold;margin-bottom: 7.5px">
		        				Camion : 
		        			</div>
		        			<div>
		        				<input type="text" name="camion" value="<?php if($_SESSION['champs']['Num'] == $refTraversee && isset($_SESSION['champs']['adulte'])) echo $_SESSION['champs']['camion']; else echo "0" ?>" style="background-color: rgba(0, 0, 0, 0);border: 1px solid rgba(0, 0, 0, 0.5);border-radius: 2px;padding: 2%;">
		        			</div>
		        		</div>
	        		</div>
	        	</div>
	        </div>
            <div style="display: none"><input type="text" name="Num" value="<?=$refTraversee?>" ></div>
	        <div style="width: 30%;height: 50%;margin-left: 10%">
	        	<button type="submit" style="width: 100%;height: 300px;background-color: rgba(0, 0, 0, 0.25);border: 1px solid rgba(0, 0, 0, 0.25);border-radius: 3px;">OK</button>
	        </div>
        </form>
        
        
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
