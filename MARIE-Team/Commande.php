<?php 

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

 

    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nos Capitaines</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Ayez confiance en nos capitaines, ce sont les meilleurs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    
