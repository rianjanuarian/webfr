<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_penginapan">
        <i class="fas fa-plus fa-sm">
            Tambah Penginapan
        </i>
    </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Hotel</th>
            <th>Alamat Hotel</th>
            <th>Gambar Hotel</th>
            <th>Fasilitas Hotel</th>
            <th>Harga Hotel</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($penginapan as $inap): ?>
            <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $inap->nama_hotel ?></td> <!--menampilkan data barang-->
            <td><?php echo $inap->alamat_hotel ?></td>
            <td>
            <img src="<?php echo base_url() ?>assets/hotel/<?php echo $inap->gambar_hotel; ?>" width="70" height="90">
            </td>
            <td><?php echo $inap->fasilitas_hotel ?></td>
            <td><?php echo $inap->harga_hotel ?></td>
                <td>
                    <div class="btn btn-success btn-sm"> 
                        <i class="fas fa-search-plus"></i>
                    </div>
                
                    <?php echo anchor('data_penginapan/edit/' .$inap->id_hotel, '<div class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i></div>')?>

                    <?php echo anchor('data_penginapan/hapus/' .$inap->id_hotel, '<div class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></div>')?>
                </td>
            </tr>
<?php endforeach; ?>    
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_penginapan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PENGINAPAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <?php echo form_open_multipart('data_penginapan/tambah_aksi'); ?>
            <div class="form-group">
                <label for="nama_hotel">Nama Hotel</label>
                <input type="text" name="nama_hotel" id="nama_hotel" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat_hotel">Alamat Hotel</label>
                <input type="text" name="alamat_hotel" id="alamat_hotel" class="form-control">
            </div>    
            <div class="form-group">
                <label for="gambar_hotel">Gambar Hotel</label>
                <input type="file" name="gambar_hotel" id="gambar_hotel" class="form-control">
            </div>
            <div class="form-group">
                <label for="fasilitas_hotel">Fasilitas Hotel</label>
                <input type="text" name="fasilitas_hotel" id="fasilitas_hotel" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_hotel">Harga Hotel</label>
                <input type="text" name="harga_hotel" id="harga_hotel" class="form-control">
            </div>
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
        <button type="submit" class="btn btn-primary">TAMBAH</button>
    </div>
    <?php echo form_close(); ?>
    </div>
</div>
</div>