<div class="page-header">
    <h3>Edit Baju Cosplay</h3>
</div>
<?php foreach ($bajucosplay as $ps) { ?>
    <form action="<?php echo base_url(). 'admin/bajucosplay_update' ?>" method="post">
        <div class="form-group">
            <label>Nama Baju Cosplay</label>
            <input type="hidden" name="id" value="<?php echo $ps->id_cosplay; ?>">
            <input type="text" class="form-control" name="nama" value="<?php echo $ps->baju_cosplay; ?>">
            <?php echo form_error('nama'); ?>
        </div>
        <div class="form-group">
            <label>Ukuran Baju Cosplay</label>
            <input type="text" class="form-control" name="ukbaju" value="<?php echo $ps->ukbaju_cosplay; ?>">
        </div>
        <div class="form-group">
            <label>Sepatu Cosplay</label>
            <input type="text" class="form-control" name="sepatu" value="<?php echo $ps->sepatu_cosplay; ?>">
        </div>
        <div class="form-group">
            <label>Ukuran Sepatu Cosplay</label>
            <input type="text" class="form-control" name="uksepatu" value="<?php echo $ps->uksepatu_cosplay; ?>">
        </div>
        <div class="form-group">
            <label>Status Baju Cosplay</label>
            <select name="status" class="form-control">
                <option value="1" <?php if($ps->status_cosplay == "1"){echo "selected='selected'";} echo $ps->uksepatu_cosplay; ?>>Tersedia</option>
                <option value="2" <?php if($ps->status_cosplay == "2"){echo "selected='selected'";} echo $ps->uksepatu_cosplay; ?>>Sayang Sekali, sudah dirental orang</option>
            </select>
            <?php echo form_error('status'); ?>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>
    </form>
<?php } ?>