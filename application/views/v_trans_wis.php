<div class="container-fluid">

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <!--<th>Id Transaksi</th>-->
            <th>ID Wisata</th>
            <th>ID Pelanggan</th>
            <th>Tanggal Transaksi</th>
            <th>TanggaL Pakai</th>
            <th>Penerima</th>
            <th>NO.HP Penerima</th>
            <th>Status Bayar</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($transaksi_wisata as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <!--<td><?= $adm->id_trans_wisata ?></td>-->
                <td><?= $adm->id_wisata ?></td>
                <td><?= $adm->id_pelanggan ?></td>
                <td><?= $adm->tgl_transaksi ?></td>
                <td><?= $adm->tgl_pakai ?></td>
                <td><?= $adm->penerima ?></td>
                <td><?= $adm->nohp_penerima ?></td>
                <td><?php 
                    if($adm->status_bayar=="0"){
                        echo "<span class='badge badge-danger'> Tidak Bayar</span>";
                    }else{
                        echo "<span class='badge badge-primary'> Bayar</span>";
                    }
                ?></td>
                <td>
                    <?php echo anchor('transaksi_homestay/edit_wisata/' .$adm->id_trans_wisata, '<div class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i></div>')?>
        
                    <?php echo anchor('transaksi_homestay/hapus_wisata/' .$adm->id_trans_wisata, '<div class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></div>')?>
                </td>
            </tr>
<?php endforeach;?>    
    </table>
</div>
