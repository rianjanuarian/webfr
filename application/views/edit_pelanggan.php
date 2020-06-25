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
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $adm->username ?>">
            </div>

            <div class="for-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo $adm->alamat ?>">
            </div>

            <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control">
                            <option>--Pilih Gender--</option>
                            <option <?php echo $adm->gender == 1 ? "selected" :"" ; ?> value="1">Pria</option>
                            <option <?php echo $adm->gender == 0 ? "selected" :"" ; ?> value="0">Wanita</option>
                        </select>
                    </div>

            <div class="for-group">
                <label>No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" value="<?php echo $adm->no_telepon ?>">
            </div>

            <div class="for-group">
                <label>No Identitas</label>
                <input type="text" name="no_identitas" class="form-control" value="<?php echo $adm->no_identitas ?>">
            </div>

            <div class="for-group">
                <label>PASSWORD</label>
                <input type="password" name="password" class="form-control" value="<?php echo $adm->password ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>

        </form>
    <?php endforeach; ?>
</div>