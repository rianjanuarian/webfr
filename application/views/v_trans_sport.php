<div class="container-fluid">

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <!--<th>Id Transaksi</th>-->
            <th>ID Transport</th>
            <th>ID Pelanggan</th>
            <th>Tanggal Transaksi</th>
            <th>TanggaL Berangkat</th>
            <th>Penerima</th>
            <th>Alamat Rinci</th>
            <th>NO HP Penerima</th>
            <th>Status Bayar</th>
            <th>Aksi</th>
        </tr>

        <?php $no=1; foreach($transaksi_transport as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <!--<td><?= $adm->id_trans_transp ?></td>-->
                <td><?= $adm->id_transport ?></td>
                <td><?= $adm->id_pelanggan ?></td>
                <td><?= $adm->tgl_transaksi ?></td>
                <td><?= $adm->tgl_berangkat ?></td>
                <td><?= $adm->penerima ?></td>
                <td><?= $adm->alamat_rinci?></td>
                <td><?= $adm->nohp_penerima ?></td>
                <td><?php 
                    if($adm->status_bayar=="0"){
                        echo "<span class='badge badge-danger'> Tidak Bayar</span>";
                    }else{
                        echo "<span class='badge badge-primary'> Bayar</span>";
                    }
                ?></td>
                <td>
                    <?php echo anchor('transaksi_homestay/edit_trans/' .$adm->id_trans_transp, '<div class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i></div>')?>
        
                    <?php echo anchor('transaksi_homestay/hapus_trans/' .$adm->id_trans_transp, '<div class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i></div>')?>
                </td>
            </tr>
<?php endforeach;?>    
    </table>
</div>
