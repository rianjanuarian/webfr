<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Transaksi Wisata</h1>
    </div>
    <div class="card">
        <div class="card-body">
        <?php foreach($transaksi_wisata as $wis):?>
        <form method="POST" action="<?php echo base_url('transaksi_homestay/update_wisata')?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="id_trans_wisata" class="form-control" value="<?php echo $wis->id_trans_wisata?>">
                    </div>

                    <div class="form-group">
                        <label for="id_wisata">ID Wisata</label>
                        <input type="text" name="id_wisata" class="form-control" value="<?php echo $wis->id_wisata ?>">
                    </div>

                    <div class="form-group">
                        <label for="id_pelanggan">ID Pelanggan</label>
                        <input type="text" name="id_pelanggan" class="form-control" value="<?php echo $wis->id_pelanggan ?>">
                    </div>

                    <div class="form-group">
                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                        <input type="text" name="tgl_transaksi" class="form-control" readonly value="<?php echo $wis->tgl_transaksi ?>">
                    </div>
                
                    <div class='form-group'>
                        <label for="tgl_pakai">Tanggal Pakai</label>
                        <input type="text" name="tgl_pakai" class="form-control" readonly value="<?php echo $wis->tgl_pakai ?>">
                    </div>

                    <div class='form-group'>
                        <label for="penerima">Penerima</label>
                        <input type="text" name="penerima" class="form-control" readonly value="<?php echo $wis->penerima ?>">
                    </div>

                    <div class='form-group'>
                        <label for="nohp_penerima">NO.HP Penerima</label>
                        <input type="text" name="nohp_penerima" class="form-control" readonly value="<?php echo $wis->nohp_penerima ?>">
                    </div>

                    <div class="form-group">
                        <label for="status_bayar">Status</label>
                        <select name="status_bayar" class="form-control">
                            <option>--Pilih Status--</option>
                            <option <?php echo $wis->status_bayar == 1 ? "selected" :"" ; ?> value="1">Bayar</option>
                            <option <?php echo $wis->status_bayar == 0 ? "selected" :"" ; ?> value="0">Tidak Bayar</option>
                        </select>
                    </div>

                    <!-- <input type="hidden" name="filelama" value="<?php// echo $inp->tgl_transaksi ?>"> -->

                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                    <a href="<?php echo site_url('transaksi_homestay/trans_wis') ?>" class="btn btn-danger btn-md">Batalkan </a>
                </div>
            </div>
        </form>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div>
