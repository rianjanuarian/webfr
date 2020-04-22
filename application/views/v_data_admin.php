<div class="container-fluid">
    <button class="btn btn-sm btn-primary">
        <i class="fas fa-plus fa-sm">
            Tambah Admin
        </i>
    </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Admin</th>
            <th>NIK</th>
            <th>Username</th>
            <th>Password</th>
        </tr>

        <?php $no=1; foreach($admin as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $adm->nama_admin ?></td>
                <td><?= $adm->nik ?></td>
                <td><?= $adm->username_admin ?></td>
                <td><?= $adm->password ?></td>
            </tr>
<?php endforeach;?>    
    </table>
</div>