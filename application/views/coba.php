<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Penginapan</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nama_hotel">Nama Penginapan</label>
                        <input type="text" name="nama_hotel" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat_hotel">Alamat Penginapan</label>
                        <input type="text" name="alamat_hotel" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="gambar_hotel">Gambar Penginapan</label>
                        <input type="file" name="gambar_hotel" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class='form-group'>
                        <label for="fasilitas_hotel">Fasilitas Hotel</label>
                        <input type="text" name="fasilitas_hotel" class="form-control" value="<?php echo $inap->fasilitas_hotel ?>">
                    </div>

                    <div class='form-group'>
                        <label for="harga_hotel">Harga Hotel</label>
                        <input type="text" name="harga_hotel" class="form-control" value="<?php echo $inap->harga_hotel ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    <button type="reset" class="btn btn-danger mt-4">Batal</button>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<!--batas-->
<div class="container-fluid">
    <h3><i class="fas fa-edit">Edit Data Penginapan</i></h3>       
        <?php foreach($penginapan as $inap): ?>
            <form method="POST" action="<?php echo base_url('data_penginapan/aksi_update_penginapan')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id_hotel" class="form-control" value="<?php echo $inap->id_hotel ?>">
                </div>
            
                <div class="form-group">
                    <label>Nama Penginapan</label>
                    <input type="text" name="nama_hotel" class="form-control" value="<?php $inap->nama_hotel ?>">
                </div>

                <div class="form-group">
                    <label>Alamat Penginapan</label>
                    <input type="text" name="alamat_hotel" class="form-control" value="<?php echo $inap->alamat_hotel ?>">
                </div>

                <div class="form-group">
                    <label for="gambar_hotel">Gambar Penginapan</label>
                    <input type="file" name="gambar_hotel" class="form-control">
                        <?php 
                            if($inap->gambar_hotel==''){?>
                                <label> No Picture</label>
                                }else{?>
                            <img src="<?php echo base_url('assets/hotel/'.$inap->gambar_hotel) ?>">
                            <br>
                        <?php }?>
                                edit gambar <input type="file" name="gambar_hotel">
                            <br>
                            <br>
                            }
                        </div>

                <div class='form-group'>
                    <label for="fasilitas_hotel">Fasilitas Hotel</label>
                    <input type="text" name="fasilitas_hotel" class="form-control" value="<?php echo $inap->fasilitas_hotel ?>">
                </div>

                <div class='form-group'>
                    <label for="harga_hotel">Harga Hotel</label>
                    <input type="text" name="harga_hotel" class="form-control" value="<?php echo $inap->harga_hotel ?>">
                </div>

                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                <button type="reset" class="btn btn-danger mt-4">Batal</button>
            </form>
        <?php endforeach; ?>
</div>