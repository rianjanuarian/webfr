<?php $this->load->view('template/header') ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    Data Karyawan
    </div>
    <br>
    <div>
        <table class="table">
            <tr><td>Nama</td><td><?php echo $nama_hotel; ?></td></tr>
            <tr><td>Pendidikan</td><td><?php echo $alamat_hotel; ?></td></tr>
            <tr><td>Jenis Kelamin</td><td><?php echo $fasilitas_hotel; ?></td></tr>
            <tr><td>Alamat</td><td><?php echo $harga_hotel; ?></td></tr>
          
        </table>
        <div class="text-right">
            <tr><td></td><td><a href="<?php echo base_url('penginapan') ?>" class="btn btn-danger">Cancel</a></td></tr>
        </div>
    </div>
  </div>
</div>
<!--main content end-->
<?php $this->load->view('template/footer'); ?>