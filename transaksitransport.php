<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'koneksi.php';
    $koneksi = mysqli_connect($HOST,$USER,$PASS,$DB);

    $id_transport = $_POST['id_transport'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $tgl_transaksi = date("Y-m-d H:i:S");
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $penerima = $_POST['penerima'];
    $alamat_rinci = $_POST['alamat_rinci'];
    $nohp_penerima = $_POST['nohp_penerima'];
    $status = $_POST['status_bayar'];
    
   
    $cek = "SELECT * from transaksi_transport where penerima='$penerima'";
    $prosescek = mysqli_fetch_array(mysqli_query($koneksi,$cek));

    if (isset($prosescek)) {
        echo 'Nama telah digunakan';
    } else {
        $query = "INSERT into transaksi_transport values (null,'$id_transport','$id_pelanggan','$tgl_transaksi','$tgl_berangkat','$penerima','$alamat_rinci','$nohp_penerima','$status')";
        if (mysqli_query($koneksi,$query)) {
            echo 'Pesanan Berhasil Dibuat ';
        } else {
            echo 'Gagal ';
        } 
    }
    
}
?>