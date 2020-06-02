<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Penginapan</h1>
    </div>
    <div class="card">
        <div class="card-body">
        <?php foreach($penginapan as $inp):?>
        <form method="POST" action="<?php echo base_url('data_penginapan/aksi_update_penginapan')?>" enctype="multipart/form-data">
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
                        <label for="gambar_hotel">Gambar Penginapan</label>
                        <input type="file" name="gambar_hotel" class="form-control">
                    </div>
                
                    <div class='form-group'>
                        <label for="fasilitas_hotel">Fasilitas Hotel</label>
                        <input type="text" name="fasilitas_hotel" class="form-control" value="<?php echo $inp->fasilitas_hotel ?>">
                    </div>

                    <div class='form-group'>
                        <label for="harga_hotel">Harga Hotel</label>
                        <input type="text" name="harga_hotel" class="form-control" value="<?php echo $inp->harga_hotel ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    <button type="reset" class="btn btn-danger mt-4">Batal</button>
                </div>
            </div>
        </form>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div>
