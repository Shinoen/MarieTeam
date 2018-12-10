<?php 
require 'db.php';
session_start();

$test= $mysqli->escape_string($_POST['Secteur']);

$test2= $mysqli->escape_string($_POST['Liaison']);

echo $test." + ".$test2;

 ?>