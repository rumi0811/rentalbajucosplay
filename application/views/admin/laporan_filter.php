<div class="page-header">
    <h3>Laporan</h3>
</div>

<form action="<?php echo base_url().'admin/laporan' ?>" method="post">
    <div class="form-group">
        <label for="">Dari Tanggal</label>
        <input type="date" name="dari" class="form-control" value="<?php echo set_value('dari'); ?>">
        <?php echo form_error('dari') ?>
    </div>

    <div class="form-group">
        <label for="">Sampai Tanggal</label>
        <input type="date" name="sampai" class="form-control" value="<?php echo set_value('sampai'); ?>">
        <?php echo form_error('sampai') ?>
    </div>

    <div class="btn-group">
        <input type="submit" value="CARI" name="cari" class="btn btn-sm btn-primary">
    </div>
</form>
<br>

<div class="btn-group">
    <a href="<?php echo base_url(). 'admin/laporan_print/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" 
    class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-print"></span> Print</a>
</div>

<br/>
<br/>

<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered" border="1" id="table-datatable">
        <thead>
            <tr>
                <th>No. </th>
                <th>Tanggal </th>
                <th>Pelanggan </th>
                <th>Baju Cosplay </th>
                <th>Tgl. Pinjam </th>
                <th>Tgl. Kembali </th>
                <th>Harga </th>
                <th>Denda/hari </th>
                <th>Tgl. Dikembalikan </th>
                <th>Total Denda </th>
                <th>Status </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($laporan as $l){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($l->tgl_transaksi)); ?></td>
                    <td><?php echo $l->nama_pelanggan; ?></td>
                    <td><?php echo $l->baju_cosplay; ?></td>

                    <td><?php echo date('d/m/Y', strtotime($l->tgl_pinjam_transaksi)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($l->tgl_kembali_transaksi)); ?></td>
                    <td><?php echo "Rp. ".number_format($l->harga_transaksi); ?></td>
                    <td><?php echo "Rp. ".number_format($l->denda_transaksi); ?></td>
                    <td>
                        <?php 
                        if($l->tgl_dikembali_transaksi == "0000-00-00"){
                            echo "-";
                        }else{
                            echo date('d/m/Y', strtotime($l->tgl_dikembali_transaksi));
                        }
                        ?>
                    </td>
                    <td><?php echo "Rp. ".number_format($l->totaldenda_transaksi); ?></td>
                    <td>
                        <?php 
                        if($l->status_transaksi == "1"){
                            echo "Selesai";
                        }else{
                            echo "-";
                        }
                        ?>
                    </td>                
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>