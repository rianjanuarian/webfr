<?php 
	include "connection.php";
	
	$query = mysql_query("SELECT id_transport,nama_transport, alamat_transport, kapasitas_transport, harga_transport FROM transport");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>