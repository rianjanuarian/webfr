<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_paket">
        <i class="fas fa-plus fa-sm">
            Tambah paket
        </i>
    </button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Paket</th>
            <th>Id Transportasi</th>
            <th>Id Hotel</th>
            <th>Id Wisata</th>
            <th>Harga Paket</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($katalog as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $adm->nama_katalog ?></td>
                <td><?= $adm->id_transport ?></td>
                <td><?= $adm->id_hotel ?></td>
                <td><?= $adm->id_wisata ?></td>
                <td><?= $adm->harga_katalog ?></td>
                <td>
                <?php echo anchor('data_paket/edit/' .$adm->id_katalog, '<div class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i></div>')?>
        
                    <?php echo anchor('data_paket/hapus/' .$adm->id_katalog, '<div class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></div>')?>
                </td>
            </tr>
<?php endforeach;?>    
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_paket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH paket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url(). 'data_paket/aksi_tambah';?>" method="post">
            <div class="form-group">
                <label for="nama_katalog">Nama paket</label>
                <input type="text" name="nama_katalog" id="nama_katalog" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_transport">ID Transportasi</label>
                <input type="text" name="id_transport" id="id_transport" class="form-control">
            </div>    
            <div class="form-group">
                <label for="id_hotel">ID Hotel</label>
                <input type="text" name="id_hotel" id="id_hotel" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_wisata">ID Wisata</label>
                <input type="text" name="id_wisata" id="id_wisata" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_katalog">Harga Paket</label>
                <input type="text" name="harga_katalog" id="harga_katalog" class="form-control">
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