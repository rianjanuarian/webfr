<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'koneksi.php';
    $koneksi = mysqli_connect($HOST,$USER,$PASS,$DB);

    
    $nama = $_POST["nama_pelanggan"];
    $nohp = $_POST["nohp_pelanggan"];
    $email = $_POST["email_pelanggan"];
    $password = $_POST["password_pelanggan"];
   
    $cek = "SELECT * from pelanggan where nama_pelanggan='$nama'";
    $prosescek = mysqli_fetch_array(mysqli_query($koneksi,$cek));

    if (isset($prosescek)) {
        echo 'Nama telah digunakan';
    } else {
        $query = "INSERT into pelanggan values (null,'$nama','$nohp','$email','$password')";
        if (mysqli_query($koneksi,$query)) {
            echo 'Berhasil ';
        } else {
            echo 'Gagal ';
        } 
    }
    
}
?>