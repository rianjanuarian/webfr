<?php 
	include "connection.php";
	
	$query = mysql_query("SELECT id_hotel,nama_hotel, alamat_hotel, fasilitas_hotel, harga_hotel FROM penginapan");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>