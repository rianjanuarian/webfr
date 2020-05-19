<div class="container-fluid">
    <h3><i class="fas fa-edit">EDIT DATA pelanggan</i></h3>
    <?php foreach($pelanggan as $adm): ?>
        <form method="post" action="<?php echo base_url().'data_pelanggan/update_pelanggan'?>">
            <div class="for-group">
                <label>ID pelanggan</label>
                <input type="hidden" name="id_pelanggan" class="form-control" value="<?php echo $adm->id_pelanggan ?>">
            </div>
            
            <div class="for-group">
                <label>Nama pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo $adm->nama_pelanggan ?>">
            </div>

            <div class="for-group">
                <label>nohp_pelanggan</label>
                <input type="text" name="nohp_pelanggan" class="form-control" value="<?php echo $adm->nohp_pelanggan ?>">
            </div>

            <div class="for-group">
                <label>email</label>
                <input type="text" name="email_pelanggan" class="form-control" value="<?php echo $adm->email_pelanggan ?>">
            </div>

            <div class="for-group">
                <label>PASSWORD</label>
                <input type="password" name="password_pelanggan" class="form-control" value="<?php echo $adm->password_pelanggan ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>

        </form>
    <?php endforeach; ?>
</div>