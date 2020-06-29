<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Transport</h1>
    </div>
    <div class="card">
        <div class="card-body">
        <?php foreach($transport as $trnsprt):?>
        <form method="POST" action="<?php echo base_url('data_transportasi/update_transportasi')?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="id_transport" class="form-control" value="<?php echo $trnsprt->id_transport?>">
                    </div>

                    <div class="form-group">
                        <label for="nama_transport">Nama Transport</label>
                        <input type="text" name="nama_transport" class="form-control" value="<?php echo $trnsprt->nama_transport ?>">
                    </div>

                    <div class="form-group">
                        <label for="alamat_transport">Alamat Transport</label>
                        <input type="text" name="alamat_transport" class="form-control" value="<?php echo $trnsprt->alamat_transport ?>">
                    </div>

                    <div class="form-group">
                        <label>Gambar Transport</label>
                        <input type="file" name="fotoup" class="form-control" value="<?php echo $trnsprt->gambar_transport ?>">
                    </div>
                
                    <div class='form-group'>
                        <label for="kapasitas_transport">Kapasitas Transport</label>
                        <input type="text" name="kapasitas_transport" class="form-control" value="<?php echo $trnsprt->kapasitas_transport ?>">
                    </div>

                    <div class='form-group'>
                        <label for="harga_transport">Harga Transport</label>
                        <input type="text" name="harga_transport" class="form-control" value="<?php echo $trnsprt->harga_transport ?>">
                    </div>

                    <div class="form-group">
                        <label for="status_transport">Status</label>
                        <select name="status_transport" class="form-control">
                            <option>--Pilih Status--</option>
                            <option <?php echo $trnsprt->status_transport == 1 ? "selected" :"" ; ?> value="1">Tersedia</option>
                            <option <?php echo $trnsprt->status_transport == 0 ? "selected" :"" ; ?> value="0">Tidak Tersedia</option>
                        </select>
                    </div>

                    <input type="hidden" name="filelama" value="<?php echo $trnsprt->gambar_transport ?>">

                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                    <a href="<?php echo site_url('data_transportasi/index') ?>" class="btn btn-danger btn-md">Batalkan </a>
                </div>
            </div>
        </form>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div>
