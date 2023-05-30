<div class="page-header">
    <h3>Transaksi Selesai</h3>
</div>

<?php foreach($transaksi as $t){ ?>
    <form action="<?php echo base_url(). 'admin/transaksi_selesai_act' ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $t->id_transaksi ?>">
    <input type="hidden" name="bajucosplay" value="<?php echo $t->id_cosplay ?>">
    <input type="hidden" name="tgl_kembali" value="<?php echo $t->tgl_kembali_transaksi ?>">
    <input type="hidden" name="denda" value="<?php echo $t->denda_transaksi ?>">

    <div class="form-group">
        <label for="">Pelanggan</label>
        <select name="pelanggan" id="" class="form-group" disabled>
            <option value="">-Pilih Pelanggan</option>
            <?php foreach($pelanggan as $pl) { ?>
                <option value="<?php echo $pl->id_pelanggan ?>" <?php if($t->id_pelanggan == $pl->id_pelanggan){echo "selected='selected";} ?>><?php echo $pl->nama_pelanggan; ?></option>
                <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label for="">Mobil</label>
        <select name="baju_cosplay" id="" class="form-control" disabled>
            <option value="">-Pilih Baju Cosplay-</option>
            <?php foreach($bajucosplay as $ps){ ?>
                <option value="<?php echo $ps->id_cosplay; ?>" <?php if($t->id_cosplay == $ps->id_cosplay){echo "selected='selected'";} ?>><?php echo $ps->baju_cosplay; ?></option>
                <?php } ?>
            </select>
    </div>

    <div class="form-group">
        <label for="">Tanggal Pinjam</label>
        <input type="date" class="form-control" name="tgl_pinjam" value="<?php echo$t->tgl_pinjam_transaksi ?>" disabled>
    </div>

    <div class="form-group">
        <label for="">Tanggal Kembali</label>
        <input type="date" class="form-control" name="tgl_kembali" value="<?php echo$t->tgl_kembali_transaksi ?>" disabled>
    </div>

    <div class="form-group">
        <label for="">Harga</label>
        <input type="number" class="form-control" name="harga" value="<?php echo$t->harga_transaksi ?>" disabled>
    </div>

    <div class="form-group">
        <label for="">Harga Denda / Hari</label>
        <input type="text" class="form-control" name="denda" value="<?php echo$t->denda_transaksi ?>" disabled>
    </div>

    <div class="form-group">
        <label for="">Tanggal Dikembalikan Pelanggan</label>
        <input type="date" class="form-control" name="tgl_dikembalikan">
        <?php echo form_error('tgl_dikembalikan'); ?>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
    </div>
</form>
<?php } ?>