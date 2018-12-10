<?php 
require 'db.php';
session_start();
?>  

<script type="text/javascript"> 
	function alerteEmail(message, page) { 
		window.alert(message); 
		location = page; 
	} 
 
</script> 
 
<?php  
require_once 'passwordLib.php';

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$ville = $_POST['ville'];
$adresse = $_POST['adresse'];
$mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
$hash = md5(rand(0, 1000));
$codePostal = intval($_POST['codePostal']);
$Fidelitee = floatval(0);

mysqli_set_charset($mysqli,'utf8');

if(mysqli_connect_error()) {
  die('Connect Error ('. mysqli_connect_errno() .')'
    .mysqli_connect_error());
}
else{
	$sql ="SELECT Email FROM Client WHERE Email='$email'";
	if ($mysqli->query($sql)) {

  		$result = $mysqli->query($sql);

  		if (mysqli_affected_rows($mysqli) > 0) {
  			echo '<script type="text/javascript">alerteEmail("Email déjà utilisé", "register.html");</script>';
	 	}
	 	else{
	 		$sql ="INSERT INTO Client (Nom, Prenom, Adresse, CodePostal, Ville, Fidelitee, Email, Hash, Password) VALUES ('$nom', '$prenom', '$adresse', '$codePostal', '$ville', '$Fidelitee', '$email', '$hash', '$mdp')";
	  			if ($mysqli->query($sql)) {
	  				echo '<script type="text/javascript">alerteEmail("Compte créé avec succès", "index2.php");</script>';
	  			}
	  			else {
	  				echo "Erreur lors de la création du compte";
	  			}
	 	}
	}
	else {
		echo '{"success":"Erreur de connexion à la base de données."}';
	}
	$mysqli->close();
}
?>