<div class="container-fluid">
    
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_paket">
        <i class="fas fa-plus fa-sm">
            Tambah PAKET
        </i>
    </button>


    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama Paket</th>
            <th>ID Transportasi</th>
            <th>ID Hotel</th>
            <th>ID Wisata</th>
            <th>Harga Paket</th>
            <th>Status</th>
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
                <td><?php 
                    if($adm->status=="0"){
                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                    }else{
                        echo "<span class='badge badge-primary'> Tersedia</span>";
                    }
                ?></td>
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

<!-- Modal--> 
<div class="modal fade" id="tambah_paket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PAKET</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url('data_paket/aksi_tambah');?>" method="post">
            <div class="form-group">
                <label for="nama_katalog">Nama paket</label>
                <input type="text" name="nama_katalog" id="nama_katalog" class="form-control">
            </div>
            <div class="form-group">
                <label>ID Transportasi</label>
                <select name="id_transport" class="form-control">
                    <option value="">--Pilih Transport--</option>
                    <?php foreach($transport as $sport):?>
                        <option value="<?php echo $sport->id_transport; ?>">
                            <?php echo $sport->id_transport; ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>    
            <div class="form-group">
                <label for="id_hotel">ID Hotel</label>
                <select name="id_hotel" class="form-control">
                    <option>--Pilih ID Hotel--</option>
                    <?php foreach($penginapan as $inap):?>
                        <option value="<?php echo $inap->id_hotel ?>">
                            <?php echo $inap->id_hotel ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_wisata">ID Wisata</label>
                <select name="id_wisata" class="form-control">
                    <option>--Pilih ID Wisata--</option>
                    <?php foreach($wisata as $wst):?>
                        <option value="<?php echo $wst->id_wisata ?>">
                            <?php echo $wst->id_wisata ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="harga_katalog">Harga Paket</label>
                <input type="text" name="harga_katalog" id="harga_katalog" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                        <option>--Pilih Status--</option>
                        <option value="1">Tersedia</option>
                        <option value="0">Tidak Tersedia</option>
                </select>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-primary">TAMBAH</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
