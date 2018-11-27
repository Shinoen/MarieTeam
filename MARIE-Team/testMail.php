<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Envoi d'un email par formulaire</title>
    </head>
    <body>
        <p>
        <?php
        $retour=mail('sebastien.duivn@hotmail.com', $_POST['message'], 'From : sebastien.duivn@hotmail.com');
        if($retour)
            echo 'Votre message a bien été envoyé !';
        ?>
        </p>
    </body>
</html>