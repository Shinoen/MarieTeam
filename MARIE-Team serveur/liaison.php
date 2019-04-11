
<?php
require 'db.php';

	echo "<select class='custom-select' name='Liaison'>";
	if(isset($_POST["idSecteur"])){

		$sql = $mysqli->query("SELECT Code, id_Port, id_Port_Arrivee from Liaison where id = ".$_POST["idSecteur"].";");

		
		while($array = mysqli_fetch_array($sql)){
			$sql2 = $mysqli->query("SELECT Nom from Port where Id = ".$array["id_Port"].";");
			$sql3 = $mysqli->query("SELECT Nom from Port where Id = ".$array["id_Port_Arrivee"].";");
			$array2 = mysqli_fetch_array($sql2);
			$array3 = mysqli_fetch_array($sql3);
			echo "<option value='".$array["Code"]."'>".$array2["Nom"]." - ".$array3["Nom"]."</option>";
		}
	}
	echo "</select>"; 
?>