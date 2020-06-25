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
            <th>Username</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>no_telepon</th>
            <th>no_identitas</th>
            <th>password</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($pelanggan as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $adm->nama_pelanggan ?></td>
                <td><?= $adm->username ?></td>
                <td><?= $adm->alamat?></td>
                <td><?php 
                    if($adm->gender=="1"){
                        echo "Pria";
                    }else{
                        echo "Wanita";
                    }
                ?></td>
                <td><?= $adm->no_telepon ?></td>
                <td><?= $adm->no_identitas ?></td>
                <td><?= $adm->password ?></td>
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
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control">
            </div>
            <div class="form-group">
            <label for="gender">Gender</label>
                <select name="gender" class="form-control">
                        <option>--Pilih Gender--</option>
                        <option value="1">Pria</option>
                        <option value="0">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label for="no_telepon">no_telepon</label>
                <input type="text" name="no_telepon" id="no_telepon" class="form-control">
            </div>    
            <div class="form-group">
                <label for="no_identitas">no_identitas</label>
                <input type="text" name="no_identitas" id="no_identitas" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">password</label>
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