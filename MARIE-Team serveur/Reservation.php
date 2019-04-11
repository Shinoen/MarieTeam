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

<style type="text/css">
	.content-item{
		box-shadow: 2px 2px 20px 0 black;
		display: flex;
		justify-content: space-between;
		align-items: center;
		height: 145px;
	}
	.content-image{
		width: 35%;
		border: 1px solid white;
		height: 100%;
	}
	.content-desc{
		display: flex;
		justify-content: center;
		flex-direction: column;
	}
	.button-search{
		-webkit-appearance: button-bevel;
		margin-top: 0;
		padding: 61% 25px;
		font-size: 21px;
	}
	.content-bott{
    	display: flex;
    	flex-direction: row;
    	justify-content: space-between;
    	width: 55%;
	}
	@media all and (max-width: 1250px){
		.content-item{
			box-shadow: 2px 2px 20px 0 black;
			display: flex;
			justify-content: space-between;
			align-items: center;
			flex-direction: column;
			width: 250px;
			height: 330px;
		}
		.content-image{
			width: auto;
			height: 30%;
			border: 1px solid white;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.content-desc{
			display: flex;
			justify-content: center;
			flex-direction: column;
			height: 25%;
			/* margin: 10px 10px; */
		}
		.content-button{		
		    height: 20%;
		    width: 100%;
		    display: flex;
		    align-items: center;
		    justify-content: center;
		}
		.button-search{
			-webkit-appearance: button-bevel;
			/* margin-top: 0px; */
			/* padding: 30px; */
			padding-bottom: 10px;
			font-size: 21px;
			width: 100%;
			height: auto;
			text-align: center;
			margin-bottom: 0;
			padding-bottom: 0;
			background-color: #79f8f8;
			color: white;
			align-items: center;
			align-self: center;
			vertical-align: middle;
			padding: 0px;
		}
		.content-bott{
        	display: flex;
        	flex-direction: column;
        	justify-content: space-between;
        	height: 70%;
    	}
	}

</style>


    <section>
        <div>
            <div style="margin-top: 12px;display: flex;justify-content: center;flex-direction: column;align-items: center;">


					<?php 
                        $array3 = mysqli_fetch_array($Count);
                        echo ("<div>Nous avons trouvé ".$array3["Id"]." résultats répondant à votre demande.</div>");

                        while($array = mysqli_fetch_array($Rq)){

						$Rq2 = $mysqli->query("SELECT Nom, photo FROM Bateau WHERE Id = ".$array["Id"].";");
						$array2 = mysqli_fetch_array($Rq2);

						$CpctARq = $mysqli->query("SELECT CapaciteMax FROM Contenir WHERE Id = ".$array['Id']);
						$CpctA = mysqli_fetch_array($CpctARq);
						$LstResTravRq = $mysqli->query("SELECT Num FROM Reservation WHERE Num_Traversee = ".$array['Num']);
						$PlaceRes = 0;
						while($LstResTrav = mysqli_fetch_array($LstResTravRq)){
						    $NbPlcARq = $mysqli->query("SELECT Quantite FROM Enregistrer WHERE (NumType = 1 OR NumType = 2 OR NumType = 3) AND NumReservation = ".$LstResTrav['Num']);//Liste de $LstResTravRq
						    while($NbPlcA = mysqli_fetch_array($NbPlcARq)){
						        $PlaceRes += $NbPlcA['Quantite'];
						    }
						}
						$PlcRestante = $CpctA['CapaciteMax'] - $PlaceRes;

                        echo ('

                                                    <div class="col-lg-12 item-recherche content-item">
                                                        <div class="content-image">
                                                            <img style="height: 100%; width:100%;" src="'.$array2["photo"].'" alt="Raju Ahammad">
                                                        </div>
                                                        <div class="content-bott">
                                                        <div class="content-desc">
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
                                                                Nombre de place : '.$PlcRestante.'
                                                            </div>  
                                                        </div>
                                                        
                                                        <div class="content-button">
                                                            <a href="?page=Commande&Num='.$array["Num"].'" class="map-show button-search">→</a>
                                                        </div></div>
                                                    </div>

                                    ');}
					?>

                </div>
            </center>
        </div>
    </section>