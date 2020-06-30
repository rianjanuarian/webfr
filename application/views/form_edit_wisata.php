<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Penginapan</h1>
    </div>
    <div class="card">
        <div class="card-body">
        <?php foreach($wisata as $wst):?>
        <form method="POST" action="<?php echo base_url('data_wisata/update_wisata')?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="id_wisata" class="form-control" value="<?php echo $wst->id_wisata ?>">
                    </div>

                    <div class="form-group">
                        <label for="nama_wisata">Nama Wisata</label>
                        <input type="text" name="nama_wisata" class="form-control" value="<?php echo $wst->nama_wisata ?>">
                    </div>

                    <div class="form-group">
                        <label for="alamat_wisata">Alamat Wisata</label>
                        <input type="text" name="alamat_wisata" class="form-control" value="<?php echo $wst->alamat_wisata ?>">
                    </div>

                    <div class="form-group">
                        <label>Gambar Wisata</label>
                        <input type="file" name="fotoup" class="form-control" value="<?php echo $wst->gambar_wisata ?>">
                    </div>

                    <div class='form-group'>
                        <label for="harga_tiket">Harga Tiket</label>
                        <input type="text" name="harga_tiket" class="form-control" value="<?php echo $wst->harga_tiket ?>">
                    </div>

                    <div class="form-group">
                        <label for="status_wisata">Status</label>
                        <select name="status_wisata" class="form-control">
                            <option>--Pilih Status--</option>
                            <option <?php echo $wst->status_wisata == 1 ? "selected" :"" ; ?> value="1">Tersedia</option>
                            <option <?php echo $wst->status_wisata == 0 ? "selected" :"" ; ?> value="0">Tidak Tersedia</option>
                        </select>
                    </div>

                    <input type="hidden" name="filelama" value="<?php echo $wst->gambar_wisata ?>">

                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                    <a href="<?php echo site_url('data_wisata/index') ?>" class="btn btn-danger btn-md">Batalkan </a>
                </div>
            </div>
        </form>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div>
