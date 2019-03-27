<?php 
require 'db.php';
session_start();

$adulte = $mysqli->escape_string($_GET['adulte']);
$junior = $mysqli->escape_string($_GET['junior']);
$enfant = $mysqli->escape_string($_GET['enfant']);
$vl4 = $mysqli->escape_string($_GET['vl4']);
$vl5 = $mysqli->escape_string($_GET['vl5']);
$fourgon = $mysqli->escape_string($_GET['fourgon']);
$campcar = $mysqli->escape_string($_GET['campcar']);
$camion = $mysqli->escape_string($_GET['camion']);
$numTrav = $mysqli->escape_string($_GET['Num']);

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
	$val = array($adulte, $junior, $enfant, $vl4, $vl5, $fourgon, $campcar, $camion);
	$numType = "";
	$quant = "";
	$req = "";
    $numRes = rand(100, 999);

	echo "INSERT INTO Reservation (Num, Num_Traversee, IdClient) VALUES (".$numRes.", ".$numTrav.",".$_SESSION['id'].");";
    if($mysqli->query("INSERT INTO Reservation (Num, Num_Traversee, IdClient) VALUES (".$numRes.", ".$numTrav.",".$_SESSION['id'].")"))
        echo "OK";
    else
        echo "NOPE";
	foreach ($val as $key => $value) {
		$numType = $key + 1;
		$quant = $value;
		if($value != 0){
		    $req = "INSERT INTO Enregistrer VALUES (".$numRes.", ".$numType.", ".$quant.")";
			echo "<br>".$req;
			if($mysqli->query($req))
			    echo "OK";
			else
			    echo "NOPE";
		}
	}
	unset($_SESSION['champs']);
}
else {
	$_SESSION['champs'] = array();
	$_SESSION['champs']['Num'] = $numTrav;
	$_SESSION['champs']['adulte'] = $adulte;
	$_SESSION['champs']['junior'] = $junior;
	$_SESSION['champs']['enfant'] = $enfant;
	$_SESSION['champs']['vl4'] = $vl4;
	$_SESSION['champs']['vl5'] = $vl5;
	$_SESSION['champs']['fourgon'] = $fourgon;
	$_SESSION['champs']['campcar'] = $campcar;
	$_SESSION['champs']['camion'] = $camion;
	header("location: index.php?page=login&ex=1");
}
 ?>
