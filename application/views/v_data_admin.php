<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_admin">
        <i class="fas fa-plus fa-sm">
            Tambah Admin
        </i>
    </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NO Identitas</th>
            <th>Nama Admin</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($admin as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $adm->no_identitas ?></td>
                <td><?= $adm->nama_admin ?></td>
                <td><?= $adm->username ?></td>
                <td><?= $adm->password ?></td>
                <td>
                <?php echo anchor('data_admin/edit/' .$adm->id_admin, '<div class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i></div>')?>
        
                    <?php echo anchor('data_admin/hapus/' .$adm->id_admin, '<div class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></div>')?>
                </td>
            </tr>
<?php endforeach;?>    
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH ADMIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url(). 'data_admin/aksi_tambah';?>" method="post">
        <div class="form-group">
                <label for="no_identitas">No_identitas</label>
                <input type="text" name="no_identitas" id="no_identitas" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_admin">Nama Admin</label>
                <input type="text" name="nama_admin" id="nama_admin" class="form-control">
            </div>    
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
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