<?php 
	include "connection.php";
	
	$query = mysql_query("SELECT id_wisata,nama_wisata, alamat_wisata, harga_tiket FROM wisata");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>