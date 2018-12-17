<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
</head>

<body>
    <div class="form">
          <?php
          header('Location: index2.php');
            ?>

    </div>
</body>
</html>
