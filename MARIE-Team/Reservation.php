<?php 
$refSecteur= $mysqli->escape_string($_POST['Secteur']);
$refLiaison= $mysqli->escape_string($_POST['Liaison']);
$Rq = $mysqli->query("SELECT Date, Heure, Id, Num FROM Traversee where Code = ".$_POST['Liaison'].";");
$Count = $mysqli->query("SELECT count(*) Id FROM Traversee where Code = ".$_POST['Liaison'].";");
 ?>


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
                                                            <a href="?page=Commande&Num='.$array["Num"].'" class="map-show" style="-webkit-appearance: button-bevel;margin-top: 0;padding: 61% 25px;font-size: 21px;">→</a>
                                                        </div>
                                                    </div>

                                    ');}
					?>

                </div>
            </center>
        </div>
    </section>
