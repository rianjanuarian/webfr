<div class="container-fluid">
    <h3><i class="fas fa-edit">EDIT DATA ADMIN</i></h3>
    <?php foreach($admin as $adm): ?>
        <form method="post" action="<?php echo base_url().'data_admin/update_admin'?>">
            <div class="form-group">
                <input type="hidden" name="id_admin" class="form-control" value="<?php echo $adm->id_admin ?>">
            </div>
            
            <div class="form-group">
                <label>No Identitas</label>
                <input type="text" name="no_identitas" class="form-control" value="<?php echo $adm->no_identitas ?>">
            </div>

            <div class="form-group">
                <label>Nama admin</label>
                <input type="text" name="nama_admin" class="form-control" value="<?php echo $adm->nama_admin ?>">
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $adm->username ?>">
            </div>

            <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" name="password" class="form-control" value="<?php echo $adm->password ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>

        </form>
    <?php endforeach; ?>
</div>