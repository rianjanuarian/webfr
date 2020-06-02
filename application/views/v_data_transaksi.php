<div class="container-fluid">

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Id Transaksi</th>
            <th>id_katalog</th>
            <th>id_pelanggan</th>
            <th>tgl_transaksi</th>
            <th>tgl_berangkat</th>
            <th>penerima</th>
            <th>alamat_rinci</th>
            <th>nohp_penerima</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($transaksi as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $adm->id_transaksi ?></td>
                <td><?= $adm->id_katalog ?></td>
                <td><?= $adm->id_pelanggan ?></td>
                <td><?= $adm->tgl_transaksi ?></td>
                <td><?= $adm->tgl_berangkat ?></td>
                <td><?= $adm->penerima ?></td>
                <td><?= $adm->alamat_rinci ?></td>
                <td><?= $adm->nohp_penerima ?></td>
                <td>
        
                    <?php echo anchor('data_pesanan/hapus/' .$adm->id_transaksi, '<div class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></div>')?>
                </td>
            </tr>
<?php endforeach;?>    
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_transaksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url(). 'data_pesanan/aksi_tambah';?>" method="post">
            <div class="form-group">
                <label for="id_katalog">id katalog</label>
                <input type="text" name="id_katalog" id="id_katalog" class="form-control">
            </div>
            <div class="form-group">
                <label for="id_pelanggan">id_pelanggan</label>
                <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control">
            </div>    
            <div class="form-group">
                <label for="tgl_transaksi">tgl_transaksi</label>
                <input type="text" name="tgl_transaksi" id="tgl_transaksi" class="form-control">
            </div>
            <div class="form-group">
                <label for="tgl_berangkat">tgl_berangkat</label>
                <input type="text" name="tgl_berangkat" id="tgl_berangkat" class="form-control">
            </div>
            <div class="form-group">
                <label for="penerima">tgl_berangkat</label>
                <input type="text" name="penerima" id="penerima" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat_rinci">alamat rinci</label>
                <input type="text" name="alamat_rinci" id="alamat_rinci" class="form-control">
            </div>
            <div class="form-group">
                <label for="nohp_penerima">nohp penerima</label>
                <input type="text" name="nohp_penerima" id="nohp_penerima" class="form-control">
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