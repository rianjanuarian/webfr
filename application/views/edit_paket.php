<div class="container-fluid">
    <h3><i class="fas fa-edit">EDIT DATA Paket</i></h3>
    <?php foreach($katalog as $adm): ?>
        <form method="post" action="<?php echo base_url().'data_paket/update_paket'?>">
            <div class="form-group">
                <input type="hidden" name="nama_katalog" class="form-control" value="<?php echo $adm->nama_katalog ?>">
            </div>
            
            <div class="form-group">
                <label>Id Transportasi</label>
                <input type="text" name="id_transport" class="form-control" value="<?php echo $adm->id_transport ?>">
            </div>

            <div class="form-group">
                <label>Id Hotel</label>
                <input type="text" name="id_hotel" class="form-control" value="<?php echo $adm->id_hotel ?>">
            </div>

            <div class="form-group">
                <label>Id Wisata</label>
                <input type="text" name="id_wisata" class="form-control" value="<?php echo $adm->id_wisata ?>">
            </div>

            <div class="form-group">
                <label>harga_katalog</label>
                <input type="text" name="harga_katalog" class="form-control" value="<?php echo $adm->harga_katalog ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>

        </form>
    <?php endforeach; ?>
</div>