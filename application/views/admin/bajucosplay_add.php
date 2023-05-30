<div class="page-header">
    <h3>Baju Cosplay Baru</h3>
</div>

<form action="<?php echo base_url(). 'admin/bajucosplay_add_act' ?>" method="post">
    <div class="form-group">
        <label>Nama Baju Cosplay</label>
        <input type="text" name="nama" class="form-control">
        <?php echo form_error('nama'); ?>
    </div>
    <div class="form-group">
        <label>Ukuran Baju Cosplay</label>
        <input type="text" name="ukuran" class="form-control">
    </div>
    <div class="form-group">
        <label>Sepatu Cosplay</label>
        <input type="text" name="sepatu" class="form-control">
    </div>
    <div class="form-group">
        <label>Ukuran Sepatu</label>
        <input type="text" name="uksepatu" class="form-control">
    </div>
    <div class="form-group">
        <label>Status Baju Cosplay</label>
        <select name="status" class="form-control">
            <option value="1">Tersedia</option>
            <option value="2">Sedang di rental</option>
        </select>
        <?php echo form_error('status'); ?>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="btn btn-primary">
    </div>

</form>