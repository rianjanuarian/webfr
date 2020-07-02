<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Form Edit Data Transaksi Transport</h1>
    </div>
    <div class="card">
        <div class="card-body">
        <?php foreach($transaksi_transport as $trsnprt):?>
        <form method="POST" action="<?php echo base_url('transaksi_homestay/update_trans')?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="hidden" name="id_trans_transp" class="form-control" value="<?php echo $trsnprt->id_trans_transp?>">
                    </div>

                    <div class="form-group">
                        <label for="id_transport">ID Transport</label>
                        <input type="text" name="id_transport" class="form-control" value="<?php echo $trsnprt->id_transport ?>">
                    </div>

                    <div class="form-group">
                        <label for="id_pelanggan">ID Pelanggan</label>
                        <input type="text" name="id_pelanggan" class="form-control" value="<?php echo $trsnprt->id_pelanggan ?>">
                    </div>

                    <div class="form-group">
                    <label for="tgl_transaksi">Tanggal Transaksi</label>
                        <input type="text" name="tgl_transaksi" class="form-control" readonly value="<?php echo $trsnprt->tgl_transaksi ?>">
                    </div>
                
                    <div class='form-group'>
                        <label for="tgl_berangkat">Tanggal Berangkat</label>
                        <input type="text" name="tgl_berangkat" class="form-control" readonly value="<?php echo $trsnprt->tgl_berangkat ?>">
                    </div>

                    <div class='form-group'>
                        <label for="penerima">Penerima</label>
                        <input type="text" name="penerima" class="form-control" readonly value="<?php echo $trsnprt->penerima ?>">
                    </div>

                    <div class='form-group'>
                        <label for="alamat_rinci">Alamat Rinci</label>
                        <input type="text" name="alamat_rinci" class="form-control" readonly value="<?php echo $trsnprt->alamat_rinci ?>">
                    </div>

                    <div class='form-group'>
                        <label for="nohp_penerima">Penerima</label>
                        <input type="text" name="nohp_penerima" class="form-control" readonly value="<?php echo $trsnprt->nohp_penerima ?>">
                    </div>

                    <div class="form-group">
                        <label for="status_bayar">Status</label>
                        <select name="status_bayar" class="form-control">
                            <option>--Pilih Status--</option>
                            <option <?php echo $trsnprt->status_bayar == 1 ? "selected" :"" ; ?> value="1">Bayar</option>
                            <option <?php echo $trsnprt->status_bayar == 0 ? "selected" :"" ; ?> value="0">Tidak Bayar</option>
                        </select>
                    </div>

                    <!-- <input type="hidden" name="filelama" value="<?php// echo $inp->tgl_transaksi ?>"> -->

                    <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                    <a href="<?php echo site_url('transaksi_homestay/trans_sport') ?>" class="btn btn-danger btn-md">Batalkan </a>
                </div>
            </div>
        </form>
<?php endforeach; ?>
        </div>
    </div>
</section>
</div>
