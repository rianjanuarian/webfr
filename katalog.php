<?php 

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','sipelita');
	
	
	$conn = new mysqli(HOST, USER, PASS, DB);
	

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}
	
	//creating a query
	$stmt = $conn->prepare("SELECT id_katalog, nama_katalog, id_transport, id_hotel, id_wisata, harga_katalog, status;");
	
	//executing the query 
	$stmt->execute();
	
	//binding results to the query 
	$stmt->bind_result($id_katalog, $nama_katalog, $id_transport, $id_hotel, $id_wisata, $harga_katalog, $status);
	
	$products = array(); 
	
	//traversing through all the result 
	while($stmt->fetch()){
		$temp = array();
		$temp['id_katalog'] = $id_katalog; 
		$temp['nama_katalog'] = $nama_katalog; 
		$temp['id_transport'] = $id_transport; 
		$temp['id_hotel'] = $id_hotel; 
		$temp['id_wisata'] = $id_wisata; 
        $temp['harga_katalog'] = $harga_katalog; 
        $temp['status'] = $status; 
		array_push($products, $temp);
	}
	
	//displaying the result in json format 
	echo json_encode($products);