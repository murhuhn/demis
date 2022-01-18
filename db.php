<?php

$host = "localhost";
$dbuser = "murhuhn_demis";
$dbpassword = "1234567aA";
$dbname = "murhuhn_demis";
$dbarticles = "demis_news";
$connection = mysqli_connect("$host", "$dbuser", "$dbpassword", "$dbname");

if($connection == false){
	echo "Error!";
	echo mysqli_connect_errno();
	exit();
}

?>