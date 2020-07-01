<div class="container-fluid">
    <center>
    <h1>
        INVOICE DATA TRANSAKSI TRANSPORTASI
    </h1>
    </center>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <!--<th>Id Transaksi Transport</th>-->
            <th>Nama Transportasi</th>
            <th>Harga Transportasi</th>
            <th>Nama Pelanggan</th>
            <th>NO.HP</th>
        </tr>

        <?php $no=1; foreach($invsport as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <!--<td><?= $adm->id_trans_transp ?></td>-->
                <td><?= $adm->nama_transport ?></td>
                <td><?= $adm->harga_transport ?></td>
                <td><?= $adm->nama_pelanggan ?></td>
                <td><?= $adm->nohp_penerima ?></td>
            </tr>
        <?php endforeach;?>    
    </table>
</div>
