<div class="container-fluid">
    <center>
    <h1>
        INVOICE DATA TRANSAKSI HOMESTAY
    </h1>
    </center>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <!--<th>Id Transaksi Homestay</th>-->
            <th>Nama Homestay</th>
            <th>Harga Homestay</th>
            <th>Nama Pelanggan</th>
            <th>NO.HP</th>
        </tr>

        <?php $no=1; foreach($invhome as $adm): ?>
            <tr>
                <td><?= $no++ ?></td>
                <!--<td><?= $adm->id_trans_home ?></td>-->
                <td><?= $adm->nama_hotel ?></td>
                <td><?= $adm->harga_hotel ?></td>
                <td><?= $adm->nama_pelanggan ?></td>
                <td><?= $adm->nohp_penerima ?></td>
            </tr>
        <?php endforeach;?>    
    </table>
</div>
