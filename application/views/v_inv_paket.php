<div class="container-fluid">
    <center>
    <h1>
        INVOICE DATA TRANSAKSI PAKET
    </h1>
    </center>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <!--<th>Id Trans </th>-->
            <th>Nama Paket</th>
            <th>Harga Paket</th>
            <th>Nama Pelanggan</th>
            <th>NO.HP</th>
        </tr>

        <?php $no=1; foreach($invpak as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <!--<td><?= $adm->id_trans_wis ?></td>-->
                <td><?= $adm->nama_katalog ?></td>
                <td><?= $adm->harga_katalog ?></td>
                <td><?= $adm->nama_pelanggan ?></td>
                <td><?= $adm->nohp_penerima ?></td>
            </tr>
        <?php endforeach;?>    
    </table>
</div>
