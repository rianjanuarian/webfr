<?php
$server ="localhost";
$username   = "root"; 
$password   =""; 
$database   ="sipelita";
 
mysql_connect($server, $username, $password) or die("Koneksi tidak ada");
mysql_select_db($database) or die("Database tidak ditemukan");
?>