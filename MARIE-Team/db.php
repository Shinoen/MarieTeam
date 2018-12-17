<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'toor';
$db = 'marieteam';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
