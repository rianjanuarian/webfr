<?php 
	include "connection.php";
	
	$query = mysql_query("SELECT id_katalog,nama_katalog, harga_katalog, nama_transport FROM katalog INNER JOIN transport ON transport.id_transport=katalog.id_katalog");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysql_close($connect);
	
?>