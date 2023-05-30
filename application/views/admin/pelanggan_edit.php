<div class="page-header">
    <h3>Edit Pelanggan</h3>
</div>
<?php foreach ($pelanggan as $pl) { ?>
    <form action="<?php echo base_url(). 'admin/pelanggan_update' ?>" method="post">
        <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama" value="<?php echo $pl->nama_pelanggan; ?>" class="form-control">
            <input type="hidden" class="form-control" name="id" value="<?php echo $pl->id_pelanggan; ?>">
            <?php echo form_error('nama'); ?>
        </div>
        <div class="form-group">
            <label>Alamat Pelanggan</label>
            <!-- <input type="text" class="form-control" name="alamat" value="<?php echo $pl->alamat_pelanggan; ?>"> -->
            <textarea name="alamat" class="form-control"><?php echo $pl->alamat_pelanggan; ?></textarea>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin Pelanggan</label>
            <!-- <input type="text" class="form-control" name="jk" value="<?php echo $pl->jk_pelanggan; ?>"> -->
            <select name="jk"cclass="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>No Hp Pelanggan</label>
            <input type="number" class="form-control" name="hp" value="<?php echo $pl->hp_pelanggan; ?>">
        </div>
        <div class="form-group">
            <label>No KTP Pelanggan</label>
            <input type="text" name="ktp" class="form-control" value="<?php echo $pl->ktp_pelanggan; ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>
<?php } ?>