<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Crud Codeigniter</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container">
      <h1>Simple Crud image Codeigniter</h1>
      <hr>
    </div>

<!-- KONTEN UTAMA -->
    <div class="container">
      <h2>Edit User</h2>
      <div class="row">
        <form action="<?=base_url()?>index.php/edit_wisata/updatedata" method="post" enctype="multipart/form-data">
          <label>Nama</label><br>
          <input type="text" name="nama_wisata" value="<?=$data->nama_wisata?>"><br><br>
          <label>Alamat</label><br>
          <textarea name="alamat_wisata" rows="8" cols="80"><?=$data->alamat_wisata?></textarea><br><br>
          <label>Gambar</label><br>
          <input type="file" name="fotopost"><br><br>
          <label>Harga Tiket</label><br>
          <input type="text" name="harga_tiket" value="<?=$data->harga_tiket?>"><br><br>
          <label>Status</label><br>
          <input type="text" name="status_wisata" value="<?=$data->status_wisata?>"><br><br>

          <!-- file lama -->
          <input type="hidden" name="filelama" value="<?=$data->gambar_wisata?>">
          <!-- ID -->
          <input type="hidden" name="id_wisata" value="<?=$data->id_wisata?>">

          <input type="submit" name="submit" value="Submit" class="btn btn-default">
        </form>

      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
