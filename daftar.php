<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'koneksi.php';
    $koneksi = mysqli_connect($HOST,$USER,$PASS,$DB);

    $fullname = $_POST['nama_pelanggan'];
    $email = $_POST['username'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $nohp =  $_POST['no_telepon'];
    $identitas = $_POST['no_identitas'];
   
    $cek = "SELECT * from pelanggan where username='$email'";
    $prosescek = mysqli_fetch_array(mysqli_query($koneksi,$cek));

    if (isset($prosescek)) {
        echo 'Email telah digunakan';
    } else {
        $query = "INSERT into pelanggan values (null,'$fullname','$email','$alamat','$gender','$nohp','$identitas','$password')";
        if (mysqli_query($koneksi,$query)) {
            echo 'Berhasil ';
        } else {
            echo 'Gagal ';
        } 
    }
    
}
?>