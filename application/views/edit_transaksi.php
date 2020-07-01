<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Transaksi</h1>
    </div>
    <div class="card">
        <div class="card-body">
        <?php foreach($transaksi as $inp):?>
        <form method="POST" action="<?php echo base_url('data_pesanan/update_transaksi')?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="id_transaksi" class="form-control" value="<?php echo $inp->id_transaksi?>">
                    </div>

                    <div class="form-group">
                        <label for="id_katalog">ID Katalog</label>
                        <input type="text" name="id_katalog" class="form-control" value="<?php echo $inp->id_katalog ?>">
                    </div>

                    <div class="form-group">
                        <label for="id_pelanggan">ID Pelanggan</label>
                        <input type="text" name="id_pelanggan" class="form-control" value="<?php echo $inp->id_pelanggan ?>">
                    </div>

                    <div class="form-group">
                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                        <input type="date" name="tgl_transaksi" class="form-control" value="<?php echo $inp->tgl_transaksi ?>">
                    </div>
                
                    <div class='form-group'>
                        <label for="tgl_berangkat">Tanggal Berangkat</label>
                        <input type="date" name="tgl_berangkat" class="form-control" value="<?php echo $inp->tgl_berangkat ?>">
                    </div>

                    <div class='form-group'>
                        <label for="penerima">Penerima</label>
                        <input type="text" name="penerima" class="form-control" value="<?php echo $inp->penerima ?>">
                    </div>

                    <div class='form-group'>
                        <label for="alamat_rinci">Alamat Rinci</label>
                        <input type="text" name="alamat_rinci" class="form-control" value="<?php echo $inp->alamat_rinci ?>">
                    </div>

                    <div class='form-group'>
                        <label for="nohp_penerima">Penerima</label>
                        <input type="text" name="nohp_penerima" class="form-control" value="<?php echo $inp->nohp_penerima ?>">
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
                    <a href="<?php echo site_url('data_pesanan/index') ?>" class="btn btn-danger btn-md">Batalkan </a>
                </div>
            </div>
        </form>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div>
