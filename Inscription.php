<script type="text/javascript">
	function alerteEmail() {
		window.alert("Email déjà utlisé");
	}

</script>

<?php 

require_once 'passwordLib.php';

$prenom = $_POST['prenom'];;
$nom = $_POST['nom'];;
$email = $_POST['email'];;
$mdp = $mysqli->escape_string(password_hash($_POST['mdp'], PASSWORD_BCRYPT));
$hash = md5(rand(0, 1000));


$host ="localhost";
$dbusername ="root";
$dbpassword = "toor";
$dbname ="MarieTeam";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .')'
    .mysqli_connect_error());
}
else{
$sql ="SELECT Email FROM Client WHERE Email='$email'";
  if ($conn->query($sql)){

  	$result = $conn->query($sql);

  	if (mysqli_affected_rows($conn) > 0) {
  		echo '<script type="text/javascript">alerteEmail();</script>';
	 }
	 else{
	 	$sql ="INSERT INTO client (Nom, Prenom, Adresse, CodePostal, Ville, Fidelitee, Email, Hash, Password) VALUES ('$nom', '$prenom', '2 Rue Faidherbe', '0', 'Lille', '0', '$email', '$hash', $mdp')";
	  		if ($conn->query($sql)){
	  			echo "Compte créé avec succès"; 
	  		}
	  		else {
	  			echo "Erreur lors de la création du compte";
	  		}
	 }
	}
	else{
	 echo '{"success":"Erreur de connexion à la base de données."}';
	}
	$conn->close();
	}	
?>