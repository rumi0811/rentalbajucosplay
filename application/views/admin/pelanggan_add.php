<div class="page-header">
    <h3>Pelanggan Baru</h3>
</div>

<form action="<?php echo base_url(). 'admin/pelanggan_add_act' ?>" method="post">
    <div class="form-group">
        <label>Nama Pelanggan</label>
        <input type="text" name="nama" class="form-control">
        <?php echo form_error('nama'); ?>
    </div>
    <div class="form-group">
        <label>Alamat Pelanggan</label>
        <input type="text" name="alamat" class="form-control">
    </div>
    <div class="form-group">
        <label>Jenis Kelamin Pelanggan</label>
        <select name="jk" class="form-control">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label>No. HP Pelanggan</label>
        <input type="number" name="hp" class="form-control">
    </div>
    <div class="form-group">
        <label>No KTP Pelanggan</label>
        <input type="number" name="ktp" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
</form>