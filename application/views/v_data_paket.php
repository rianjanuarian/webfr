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

        <?php $no=1; foreach($showall as $pkt): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $pkt->nama_katalog ?></td>
                <td><?= $pkt->nama_transport ?></td>
                <td><?= $pkt->nama_hotel ?></td>
                <td><?= $pkt->nama_wisata ?></td>
                <td><?= $pkt->harga_katalog ?></td>
                <td><?php 
                    if($pkt->status=="0"){
                        echo "<span class='badge badge-danger'> Tidak Tersedia</span>";
                    }else{
                        echo "<span class='badge badge-primary'> Tersedia</span>";
                    }
                ?></td>
                <td>
                <?php echo anchor('data_paket/edit/' .$pkt->id_katalog, '<div class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i></div>')?>
        
                    <?php echo anchor('data_paket/hapus/' .$pkt->id_katalog, '<div class="btn btn-danger btn-sm">
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
                <label>Data Transportasi</label>
                <select name="id_transport" class="form-control">
                    <option value="">--Pilih Transport--</option>
                    <?php foreach ($combotrans as $ctrans) {?>
                        <option type="text" name="id_transport" value="<?php echo $ctrans->id_transport; ?>">
                        <?php echo $ctrans->nama_transport; ?> 
                        </option>
                    <?php } ?>
                </select>
            </div>    
            <div class="form-group">
                <label for="id_hotel">Data Hotel</label>
                <select name="id_hotel" class="form-control">
                    <option>--Pilih Hotel--</option>
                    <?php foreach($comboinap as $cinap) { ?>
                        <option type="text" name="id_hotel" value="<?php echo $cinap->id_hotel; ?>">
                            <?php echo $cinap->nama_hotel; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_wisata">Data Wisata</label>
                <select name="id_wisata" class="form-control">
                    <option>--Pilih Wisata--</option>
                    <?php foreach($wisata as $wst) { ?>
                        <option type="text" name="id_wisata" value="<?php echo $wst->id_wisata; ?>">
                            <?php echo $wst->nama_wisata; ?>
                        </option>
                    <?php } ?>
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
