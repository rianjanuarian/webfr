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

    <div class="container">
    
      <a href="<?=base_url()?>index.php/edit_transport/tambah" class="btn btn-success">Tambah transport</a>
    </div>

    <div class="container">
      <h2>Daftar transport</h2>
      <form action="<?=base_url()?>index.php/edit_transport/index" method="get">
        <input type="text" name="cari">
        <input type="submit" value="Cari" class="btn btn-default">
      </form>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/transport/<?=$data->gambar_transport?>" alt="foto">
            </a>
            <div class="caption">
              <h3><?php echo $data->nama_transport?></h3>
              <p>Alamat: <?php echo $data->alamat_transport ?></p>
              <p>
                <a href="<?=base_url()?>index.php/edit_transport/edit/<?=$data->id_transport?>" class="btn btn-info" role="button">Edit</a>
                
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <!-- <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script> -->
  </body>
</html>
