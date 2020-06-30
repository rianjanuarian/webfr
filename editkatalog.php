<?php
	include "connection.php";
	
	$id = isset($_POST['id_katalog']) ? $_POST['id_katalog'] : '';
	$nama = isset($_POST['nama_katalog']) ? $_POST['nama_katalog'] : '';
	$tlp = isset($_POST['harga_katalog']) ? $_POST['harga_katalog'] : '';
	$email = isset($_POST['nama_transport']) ? $_POST['nama_transport'] : '';
	
	class emp{}
	
	if (empty($id)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error Mengambil Data"; 
		die(json_encode($response));
	} else {
		$query 	= mysql_query("SELECT id_katalog,nama_katalog, harga_katalog, nama_transport FROM katalog INNER JOIN transport ON transport.id_transport=katalog.id_katalog WHERE id_katalog");
		
		$row 	= mysql_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->success = 1;
			$response->id = $row["id_katalog"];
			$response->nama = $row["nama_katalog"];
			$response->tlp = $row["hargakatalog"];
			$response->email = $row["nama_transport"];
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Mengambil Data";
			die(json_encode($response)); 
		}	
	}
?>