<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

<!-- KONTEN UTAMA -->
    <div class="container">
      <h2>Tambah transport</h2>
      <div class="row">
        <form action="<?=base_url()?>index.php/edit_transport/insertdata" method="post" enctype="multipart/form-data">
          <label>Nama</label><br>
          <input type="text" name="nama_transport" value=""><br><br>
          <label>Alamat</label><br>
          <textarea name="alamat_transport" rows="8" cols="80"></textarea><br><br>
          <label>Gambar</label><br>
          <input type="file" name="fotopost"><br><br>
          <label>Kapasitas</label><br>
          <input type="text" name="kapasitas_transport" value=""><br><br>
          <label>Harga</label><br>
          <input type="text" name="harga_transport" value=""><br><br>

          <input type="submit" name="submit" value="Submit" class="btn btn-default">
        </form>

      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <!-- <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script> -->
  </body>
</html>
