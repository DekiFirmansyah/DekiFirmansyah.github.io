<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "tubes";

	$db = mysqli_connect($hostname, $username, $password, $database);

	if( !$db ){
    	die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}
?>