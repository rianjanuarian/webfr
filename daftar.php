<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'koneksi.php';
    $koneksi = mysqli_connect($HOST,$USER,$PASS,$DB);

    $fullname = $_POST['nama_pelanggan'];
    $email = $_POST['email_pelanggan'];
    $password = $_POST['password_pelanggan'];
   
    $cek = "SELECT * from pelanggan where email_pelanggan='$email'";
    $prosescek = mysqli_fetch_array(mysqli_query($koneksi,$cek));

    if (isset($prosescek)) {
        echo 'Email telah digunakan';
    } else {
        $query = "INSERT into pelanggan values (null,'$fullname','$email','$password')";
        if (mysqli_query($koneksi,$query)) {
            echo 'Berhasil ';
        } else {
            echo 'Gagal ';
        } 
    }
    
}
?>