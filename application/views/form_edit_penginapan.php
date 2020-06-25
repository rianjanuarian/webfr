<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Penginapan</h1>
    </div>
    <div class="card">
        <div class="card-body">
        <?php foreach($penginapan as $inp):?>
        <form method="POST" action="<?php echo base_url('data_penginapan/update_penginapan')?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="id_hotel" class="form-control" value="<?php echo $inp->id_hotel?>">
                    </div>

                    <div class="form-group">
                        <label for="nama_hotel">Nama Penginapan</label>
                        <input type="text" name="nama_hotel" class="form-control" value="<?php echo $inp->nama_hotel ?>">
                    </div>

                    <div class="form-group">
                        <label for="alamat_hotel">Alamat Penginapan</label>
                        <input type="text" name="alamat_hotel" class="form-control" value="<?php echo $inp->alamat_hotel ?>">
                    </div>

                    <div class="form-group">
                        <label>Gambar Penginapan</label>
                        <input type="file" name="fotoup" class="form-control" value="<?php echo $inp->gambar_hotel ?>">
                    </div>
                
                    <div class='form-group'>
                        <label for="fasilitas_hotel">Fasilitas Hotel</label>
                        <input type="text" name="fasilitas_hotel" class="form-control" value="<?php echo $inp->fasilitas_hotel ?>">
                    </div>

                    <div class='form-group'>
                        <label for="harga_hotel">Harga Hotel</label>
                        <input type="text" name="harga_hotel" class="form-control" value="<?php echo $inp->harga_hotel ?>">
                    </div>

                    <div class="form-group">
                        <label for="status_hotel">Status</label>
                        <select name="status_hotel" class="form-control">
                            <option>--Pilih Status--</option>
                            <option <?php echo $inp->status_hotel == 1 ? "selected" :"" ; ?> value="1">Tersedia</option>
                            <option <?php echo $inp->status_hotel == 0 ? "selected" :"" ; ?> value="0">Tidak Tersedia</option>
                        </select>
                    </div>

                    <input type="hidden" name="filelama" value="<?php echo $inp->gambar_hotel ?>">

                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                    <a href="<?php echo site_url('data_penginapan/index') ?>" class="btn btn-danger btn-md">Batalkan </a>
                </div>
            </div>
        </form>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div>
