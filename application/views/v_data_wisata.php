<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3"
            data-toggle="modal"
            data-target="#tambah_wisata">
        <i class="fas fa-plus fa-sm">
            Tambah Wisata
        </i>
    </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Wisata</th>
            <th>Alamat Wisata</th>
            <th>Gambar Wisata</th>
            <th>Harga Tiket</th>
            <th>Aksi</th>
        </tr>
        
        <?php $no=1; foreach($wisata as $wst): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $wst->nama_wisata ?></td>
                <td><?php echo $wst->alamat_wisata ?></td>
                <td>
                <img src="<?php echo base_url() ?>assets/wisata/<?php echo $wst->gambar_wisata; ?>" width="70" height="90">
                </td>
                <td><?php echo $wst->harga_tiket ?></td>
                <td>
                    <?php echo anchor('data_wisata/edit/' .$wst->id_wisata, '<div class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i>
                    </div>')?>
                
                    <?php echo anchor('data_wisata/hapus/' .$wst->id_wisata, '<div class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </div>')?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_wisata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH WISATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <?php echo form_open_multipart('data_wisata/aksi_tambah'); ?>
            <div class="form-group">
                <label for="nama_wisata">Nama Wisata</label>
                <input type="text" name="nama_wisata" id="nama_wisata" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat_wisata">Lokasi</label>
                <input type="text" name="alamat_wisata" id="alamat_wisata" class="form-control">
            </div>    
            <div class="form-group">
                <label for="gambar_wisata">Gambar Wisata</label>
                <input type="file" name="gambar_wisata" id="gambar_wisata" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_tiket">Harga Tiket</label>
                <input type="harga_tiket" name="harga_tiket" id="harga_tiket" class="form-control">
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