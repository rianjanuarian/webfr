<?php
	
	$server		= "3306"; // sesuaikan alamat server anda
	$user		= "kelompok1e"; // sesuaikan user web server anda
	$password	= "kelompok1e"; // sesuaikan password web server anda
	$database	= "u1011496_pelita"; // sesuaikan database web server anda
	
	$connect = mysql_connect($server, $user, $password) or die ("Tidak bisa terhubung!");
	mysql_select_db($database) or die ("Database belum siap!");
?>