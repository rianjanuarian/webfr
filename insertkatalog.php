<?php

	include "connection.php";
	
	$nama = isset($_POST['nama_katalog']) ? $_POST['nama_katalog'] : '';
	$idtransport = isset($_POST['id_transport']) ? $_POST['id_transport'] : '';
    $idhotel = isset($_POST['id_hotel']) ? $_POST['id_hotel'] : '';
    $idwisata = isset($_POST['id_wisata']) ? $_POST['id_wisata'] : '';
    $hargakatalog = isset($_POST['harga_katalog']) ? $_POST['harga_katalog'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    
	class emp{}
	
	if (empty($nama) || empty($idtransport) || empty($idhotel) || empty($idwisata) || empty($hargakatalog) || empty($status)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("INSERT INTO katalog (id_katalog,nama_katalog,id_hotel,id_wisata,harga_katalog,status) VALUES(0,'".$nama."','".$idtransport."','".$idhotel."','".$idwisata."','".$hargaktalog."','".$status."')");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di simpan";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error simpan Data";
			die(json_encode($response)); 
		}	
	}
?>