<?php
$user = "root";
$pass="";

$dbc = new PDO("mysql:host=localhost;dbname=users", $user,$pass);
$dbc = null;
?>
