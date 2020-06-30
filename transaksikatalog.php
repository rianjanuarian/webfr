<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'koneksi.php';
    $koneksi = mysqli_connect($HOST,$USER,$PASS,$DB);

    $id_katalog = $_POST['id_katalog'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $tgl_transaksi = $_POST['tgl_transaksi'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $penerima = $_POST['penerima'];
    $alamat_rinci = $_POST['alamat_rinci'];
    $nohp_penerima = $_POST['nohp_penerima'];
    
   
    $cek = "SELECT * from transaksi where penerima='$penerima'";
    $prosescek = mysqli_fetch_array(mysqli_query($koneksi,$cek));

    if (isset($prosescek)) {
        echo 'Nama telah digunakan';
    } else {
        $query = "INSERT into pelanggan values (null,'$id_katalog','$id_pelanggan','$tgl_transaksi','$tgl_berangkat','$penerima','$alamat_rinci','$nohp_penerima')";
        if (mysqli_query($koneksi,$query)) {
            echo 'Berhasil ';
        } else {
            echo 'Gagal ';
        } 
    }
    
}
?>