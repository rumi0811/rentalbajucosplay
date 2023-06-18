<div class="page-header">
    <h3>Laporan</h3>
</div>

<form action="<?php echo base_url(). 'admin/laporan' ?>" method="post">
    <div class="form-group">
        <label for="">Dari Tanggal</label>
        <input type="date" class="form-control" name="dari"><?php echo form_error('dari'); ?>
    </div>

    <div class="form-group">
        <label for="">Sampai Tanggal</label>
        <input type="date" class="form-control" name="sampai"><?php echo form_error('sampai'); ?>
    </div>

    <div class="btn-group">
        <input type="submit" class="btn btn-sm btn-primary" value="CARI" name="cari">

    </div>
</form>