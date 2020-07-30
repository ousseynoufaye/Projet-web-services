<?php
$conn = new mysqli("localhost","root","","phpcrud");

if ($conn->connect_error){
	die("Ne pas accéder a votre base de donnée".$conn->connect_error);
}
?>