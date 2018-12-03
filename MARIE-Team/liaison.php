
<?php
require 'db.php';

	echo "<select class='custom-select' name='Liaison'>";
	if(isset($_POST["idSecteur"])){
		$sql = $mysqli->query("SELECT Nom,Id FROM Port 
								WHERE Id  IN (Select id_Port from Liaison where id=".$_POST["idSecteur"].") LIMIT 0, 30;") or die(mysql_error());
		while($array = mysqli_fetch_array($sql)){
			echo "<option value='".$array["Id"]."'>".$array["Nom"]."</option>";
		}
	}
	echo "</select>"; //".$_POST["idSecteur"]."
?>