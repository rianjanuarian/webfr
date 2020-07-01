<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Transaksi Homestay</h1>
    </div>
    <div class="card">
        <div class="card-body">
        <?php foreach($transaksi_hotel as $inp):?>
        <form method="POST" action="<?php echo base_url('transaksi_homestay/update_homestay')?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="id_trans_hotel" class="form-control" value="<?php echo $inp->id_trans_hotel?>">
                    </div>

                    <div class="form-group">
                        <label for="id_hotel">ID Homestay</label>
                        <input type="text" name="id_hotel" class="form-control" readonly value="<?php echo $inp->id_hotel ?>">
                    </div>

                    <div class="form-group">
                        <label for="id_pelanggan">ID Pelanggan</label>
                        <input type="text" name="id_pelanggan" class="form-control" readonly value="<?php echo $inp->id_pelanggan ?>">
                    </div>

                    <div class="form-group">
                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                        <input type="text" name="tgl_transaksi" class="form-control" readonly value="<?php echo $inp->tgl_transaksi ?>">
                    </div>
                
                    <div class='form-group'>
                        <label for="tgl_checkin">Tanggal Checkin</label>
                        <input type="text" name="tgl_checkin" class="form-control" readonly value="<?php echo $inp->tgl_checkin ?>">
                    </div>

                    <div class='form-group'>
                        <label for="penerima">Penerima</label>
                        <input type="text" name="penerima" class="form-control" readonly value="<?php echo $inp->penerima ?>">
                    </div>

                    <div class='form-group'>
                        <label for="nohp_penerima">Penerima</label>
                        <input type="text" name="nohp_penerima" class="form-control" readonly value="<?php echo $inp->nohp_penerima ?>">
                    </div>

                    <div class="form-group">
                        <label for="status_bayar">Status</label>
                        <select name="status_bayar" class="form-control">
                            <option>--Pilih Status--</option>
                            <option <?php echo $inp->status_bayar == 1 ? "selected" :"" ; ?> value="1">Bayar</option>
                            <option <?php echo $inp->status_bayar == 0 ? "selected" :"" ; ?> value="0">Tidak Bayar</option>
                        </select>
                    </div>

                    <!-- <input type="hidden" name="filelama" value="<?php// echo $inp->tgl_transaksi ?>"> -->

                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                    <a href="<?php echo site_url('transaksi_homestay/trans_home') ?>" class="btn btn-danger btn-md">Batalkan </a>
                </div>
            </div>
        </form>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div>
