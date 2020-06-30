<?php
	include "connection.php";
	
	$idkatalog = isset($_POST['id_katalog']) ? $_POST['id_katalog'] : '';
	$nama = isset($_POST['nama_katalog']) ? $_POST['nama_katalog'] : '';
    $hargakatalog = isset($_POST['harga_katalog']) ? $_POST['harga_katalog'] : '';
	$status = isset($_POST['nama_transport']) ? $_POST['nama_transport'] : '';

	class emp{}
	
	if (empty($idkatalog) || empty($nama) || empty($hargakatalog) || empty($status) ) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("UPDATE katalog SET nama_katalog='".$nama."',harga_katalog='".$hargakatalog."', nama_transport='".$status."' WHERE id_katalog='".$id."'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di update";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error update Data";
			die(json_encode($response)); 
		}	
	}
?>