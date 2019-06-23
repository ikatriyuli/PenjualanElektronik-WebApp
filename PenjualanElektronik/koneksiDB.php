<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$db_name = "dbpenjualan";

	mysql_connect($server, $user, $password);
	mysql_select_db($db_name) or die ("koneksi ke database GAGAL");

?>