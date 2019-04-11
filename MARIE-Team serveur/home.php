<section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>MARIE-TEAM!</h1>
                                <p><br> Le Plus Grand Site de Réservation Ferry au Monde </p>

                                <div class="book-ur-car">
                                    <form method="POST" action="?page=Reservation">
                                        <div class="pick-location bookinput-item">
                                            <select class="custom-select" name="Secteur" id="Secteur" onchange="go()">
                                                <option value="0" selected>SECTEUR</option>

                                                <?php $sql = $mysqli->query("SELECT * FROM Secteur") or die(mysql_error());
    
                                                while ($array  =mysqli_fetch_array($sql))
                                                { ?>

                                                <option value="<?php echo $array['id']; ?>"> <?php echo utf8_encode($array['Nom']); ?><br/> </option>

                                                <?php } ?>
                                              
                                            </select>
                                        </div>
                                         <div class="car-choose bookinput-item" id="Liaison">
                                            <select class="custom-select" name="Liaison">
                                              <option value="-1" >Liaison</option>


                                            </select>
                                        </div>

                                        <div class="pick-date bookinput-item">
                                            <input id="startDate2" placeholder="Aller" />
                                        </div>

                                        <div class="retern-date bookinput-item">
                                            <input id="endDate2" placeholder="Retour" />
                                        </div>

                                        

                                        <div class="bookcar-btn bookinput-item">
                                            <button type="submit">Réserver</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== SlideshowBg Area End ==-->

    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Qui sommes nous</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                      
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Vous pouvez réserver un ferry vers votre déstination à partir de 7 ports et 3 pays ou secteurs. Il y a 10 itinéraires de ferry desservant la cote-ouest exploités par Marie-Team. La route la plus populaire est Quiberon à Le Palais. Le prix moyen de ce mois pour cette route est de XXX€ pour une voiture et deux personnes aller-retour.<br>

Les ferries vers le Port St Gildas sont extrêmement populaires. Le plus tôt vous réservez votre ferry pour le Port St Gildas, le plus d'argent que vous pouvez économiser. Vous n'avez pas besoin d'utiliser des codes d'offre spéciale. Livre de cette page pour obtenir nos meilleurs prix et toutes les offres disponibles.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/home-2-about.jpg" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Us Area End ==-->

    <!--== Partner Area Start ==-->
    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->

                        <!-- Single Partner Start -->
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Single Partner End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Partner Area End ==-->

    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nos services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-taxi"></i>
							<h3>Entretien des véhicules</h3>
							
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-cog"></i>
							<h3>Entretien du ferry    </h3>
							
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-map-marker"></i>
							<h3>Localisation</h3>
							
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-life-ring"></i>
							<h3>Assurance vie</h3>
							
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-bath"></i>
							<h3>Accés à l'eau chaude</h3>
							
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-phone"></i>
							<h3>Appeelez le capitaine</h3>
							
						</div>
						<!-- Single Service End -->
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">55070</span>+</p>
                                        <h4>Clients satisfaits</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">250</span>+</p>
                                        <h4>véhicule transporter</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>Traverser par jour</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            
        </div>
    </section>
    <!--== Choose Car Area End ==-->

    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Only quality for clients</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Pricing Table Conatent Start -->
            <div class="row">
                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
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
                <div class="col-lg-4 col-md-6 text-center">
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
                <div class="col-lg-4 col-md-6 text-center">
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
            <!-- Pricing Table Conatent End -->
        </div>
    </section>