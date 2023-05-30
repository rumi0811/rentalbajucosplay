<div class="page-header">
    <h3>Transakski Baru</h3>
</div>

<form action="<?php echo base_url(). 'admin/transaksi_add_act' ?>" method="post">
    <div class="form-group">
        <label for="">Pelanggan</label>
        <select name="pelanggan" class="form-control">
            <option value="">-Pilih Pelanggan-</option>
            <?php foreach ($pelanggan as $pl) { ?>
            <option value="<?php echo $pl->id_pelanggan; ?>"><?php echo $pl->nama_pelanggan; ?></option>
            <?php } ?>
        </select>
        <?php echo form_error('pelanggan'); ?>
    </div>

    <div class="form-group">
        <label for="">Baju Cosplay Sewa</label>
        <select name="bajucosplay" id="" class="form-control">
            <option value="">Pilih Baju cosplay</option>
            <?php foreach($bajucosplay as $ps){ ?>
                <option value="<?php echo $ps->id_cosplay; ?>"><?php echo $ps->baju_cosplay; ?></option>
            <?php } ?>
        </select>
        <?php echo form_error('bajucosplay'); ?>
    </div>

    <div class="form-group">
        <label for="">Tanggal Pinjam</label>
        <input type="date" name="tgl_pinjam" class="form-control">
        <?php echo form_error('tgl_pinjam'); ?>
    </div>

    <div class="form-grop">
        <label for="">Tanggal Kembali</label>
        <input type="date" name="tgl_kembali" class="form-control">
        <?php echo form_error('tgl_kembali'); ?>
    </div>

    <div class="form-group">
        <label for="">Harga</label>
        <input type="number" name="harga" class="form-control">
        <?php echo form_error('harga'); ?>
    </div>

    <div class="form-group">
        <label for="">Denda</label>
        <input type="number" name="denda" class="form-control">
        <?php echo form_error('denda'); ?>
    </div>

    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
    </div>
</form>