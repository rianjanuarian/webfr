<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_pelanggan">
        <i class="fas fa-plus fa-sm">
            Tambah pelanggan
        </i>
    </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama pelanggan</th>
            <th>nohp_pelanggan</th>
            <th>email_pelanggan</th>
            <th>password_pelanggan</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($pelanggan as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $adm->nama_pelanggan ?></td>
                <td><?= $adm->nohp_pelanggan ?></td>
                <td><?= $adm->email_pelanggan ?></td>
                <td><?= $adm->password_pelanggan ?></td>
                <td>
                <?php echo anchor('data_pelanggan/edit/' .$adm->id_pelanggan, '<div class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i></div>')?>
        
                    <?php echo anchor('data_pelanggan/hapus/' .$adm->id_pelanggan, '<div class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></div>')?>
                </td>
            </tr>
<?php endforeach;?>    
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_pelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url(). 'data_pelanggan/aksi_tambah';?>" method="post">
            <div class="form-group">
                <label for="nama_pelanggan">Nama pelanggan</label>
                <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nohp_pelanggan">nohp_pelanggan</label>
                <input type="text" name="nohp_pelanggan" id="nohp_pelanggan" class="form-control">
            </div>    
            <div class="form-group">
                <label for="email_pelanggan">email_pelanggan</label>
                <input type="text" name="email_pelanggan" id="email_pelanggan" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_pelanggan">password_pelanggan</label>
                <input type="password" name="password_pelanggan" id="password_pelanggan" class="form-control">
            </div>
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
        <button type="submit" class="btn btn-primary">TAMBAH</button>
    </div>
    </form>
    </div>
</div>
</div>