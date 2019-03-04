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
                        <i class="fa fa-mobile"></i> 03.20.51.62.84.79
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Lun-Ven 09.00 - 17.00
                    </div class="logs">
                    <div class="col-lg-3 text-right">
                        <div class="logs">
                            <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != 1 ): ?>
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
                        <a href="index.php" class="logo">
                            <img src="assets/img/logo.png" alt="JSOFT">
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="index.php">Home</a>
                                     
                                       
                                       
                                
                             
                               <li><a href="Article.php">Bateaux</a>
                                    
                                </li>
                                <li ><a href="#">Informations</a>
                                    <ul>
                                        <li><a href="package.php">Abonnement</a></li>
                                        <li><a href="driver.php">Capitaine</a></li>
                                        <li><a href="about.php">Tarifs</a></li>                                    
                                        <li><a href="driver.php">Horaires</a></li>
                                        
                                       
                                    </ul>
                                    <li></li>
                                    
                               
                                </li>
                                <li class ><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>