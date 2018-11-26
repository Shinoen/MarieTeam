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
$mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
$hash = md5(rand(0, 1000));
$codePostal = intval($_POST['codePostal']);
$Fidelitee = floatval(0);


$host ="localhost";
$dbusername ="root";
$dbpassword = "toor";
$dbname ="MarieTeam";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

mysqli_set_charset( $conn, 'utf8' );

if(mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .')'
    .mysqli_connect_error());
}
else{
$sql ="SELECT Email FROM Client WHERE Email='$email'";
  if ($conn->query($sql)){

  	$result = $conn->query($sql);

  	if (mysqli_affected_rows($conn) > 0) {
  		echo '<script type="text/javascript">alerteEmail("Email déjà utilisé", "register.html");</script>';
	 }
	 else{
	 	$sql ="INSERT INTO Client (Nom, Prenom, Adresse, CodePostal, Ville, Fidelitee, Email, Hash, Password) VALUES ('$nom', '$prenom', '2 Rue Faidherbe', '$codePostal', 'Lille', '$Fidelitee', '$email', '$hash', '$mdp')";
	  		if ($conn->query($sql)){
	  			echo '<script type="text/javascript">alerteEmail("Compte créé avec succès", "index2.html");</script>';
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