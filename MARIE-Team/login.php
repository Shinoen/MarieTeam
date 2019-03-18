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
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['Email']);
$result = $mysqli->query("SELECT * FROM Client WHERE Email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    echo '<script type="text/javascript">alerteEmail("Aucun compte possédant cette adresse Email n\'a été trouvé.", "login.html");</script>';

}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['Password']) ) {
        
        $_SESSION['Email'] = $user['Email'];
        $_SESSION['Prenom'] = $user['Prenom'];
        $_SESSION['Name'] = $user['Nom'];
        $_SESSION['id'] = $user['IdClient'];
        $_SESSION['logged_in'] = true;
        if(isset($_SESSION['champs']['Num']))
            header("location: Commande.php?Num=".$_SESSION['champs']['Num']);
        else
            header("location: index.php");
    }
    else {
        echo '<script type="text/javascript">alerteEmail("Mot de passe incorrect. Veuillez réessayer.", "login.html");</script>';
    }
}

