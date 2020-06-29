<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_transport">
        <i class="fas fa-plus fa-sm">
            Tambah Transport
        </i>
    </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama transport</th>
            <th>Alamat</th>
            <th>Gambar</th>
            <th>Kapasitas</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    
        <?php $no=1; foreach($transport as $trnsprt): ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $trnsprt->nama_transport?></td>
                <td><?php echo $trnsprt->alamat_transport?></td>
                <td>
                <img src="<?php echo base_url() ?>assets/transport/<?php echo $trnsprt->gambar_transport; ?>" width="70" height="90">
                </td>
                <td><?php echo $trnsprt->kapasitas_transport?></td>
                <td><?php echo $trnsprt->harga_transport?></td>
                <td><?php 
                    if($trnsprt->status_transport=="0"){
                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                    }else{
                        echo "<span class='badge badge-primary'> Tersedia</span>";
                    }
                ?></td>
                <td>
                    <?php echo anchor('data_transportasi/edit_transportasi/' .$trnsprt->id_transport, '<div class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i></div>')?>

                    <?php echo anchor('data_transportasi/hapus/' .$trnsprt->id_transport, '<div class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i></div>')?>    
                </td>
            </tr>
<?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_transport" tabindex="-1" role="dialog" aria-labelledby="tambah_transport" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="tambah_transport">TAMBAH Transportasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <?php echo form_open_multipart('data_transportasi/tambah_aksi'); ?>
            <div class="form-group">
                <label for="nama_transport">Nama Transportasi</label>
                <input type="text" name="nama_transport" id="nama_transport" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat_transport">Alamat Transport</label>
                <input type="text" name="alamat_transport" id="alamat_transport" class="form-control">
            </div>    
            <div class="form-group">
                <label for="gambar_transport">Gambar Transport</label>
                <input type="file" name="gambar_transport" id="gambar_transport" class="form-control">
            </div>
            <div class="form-group">
                <label for="kapasitas_transport">Kapasitas Transport</label>
                <input type="number" name="kapasitas_transport" id="kapasitas_transport" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_transport">Harga Transport</label>
                <input type="text" name="harga_transport" id="harga_transport" class="form-control">
            </div>
            <div>
            <label for="status_transport">Status</label>
                <select name="status_transport" class="form-control">
                        <option>--Pilih Status--</option>
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                </select>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
        <button type="submit" class="btn btn-primary">TAMBAH</button>
    </div>
    <?php echo form_close();?>
    </div>
</div>
</div>