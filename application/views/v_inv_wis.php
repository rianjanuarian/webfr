<div class="container-fluid">
    <center>
    <h1>
        INVOICE DATA TRANSAKSI WISATA
    </h1>
    </center>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <!--<th>Id Trans Wisata</th>-->
            <th>Nama Wisata</th>
            <th>Harga Tiket</th>
            <th>Nama Pelanggan</th>
            <th>NO.HP</th>
        </tr>

        <?php $no=1; foreach($invwis as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <!--<td><?= $adm->id_trans_wis ?></td>-->
                <td><?= $adm->nama_wisata ?></td>
                <td><?= $adm->harga_tiket ?></td>
                <td><?= $adm->nama_pelanggan ?></td>
                <td><?= $adm->nohp_penerima ?></td>
            </tr>
        <?php endforeach;?>    
    </table>
</div>
