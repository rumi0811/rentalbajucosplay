<div class="page-header">
    <h3>Data Transaksi</h3>
</div>

<a href="<?php echo base_url(). 'admin/transaksi_add'; ?>" class="btn btn-primary btn-sm">
    <span class="glyphicon glyphicon-plus"></span> Transaksi Baru</a>
<br><br>
<div class="table-responsive">
    <table class="table bordered table-striped table-hover" id="table-datatable">
        <thead>
            <tr>
                <th>No. </th>
                <th>Tanggal</th>
                <th>Pelanggan</th>
                <th>Baju Cosplay Sewa</th>
                <th>Tgl. Pinjam</th>
                <th>Tgl. Kembali</th>
                <th>Harga</th>
                <th>Denda/hari</th>
                <th>Tgl. Dikembalikan</th>
                <th>Total Denda</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($transaksi as $t) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($t->tgl_transaksi)); ?></td>
                    <td><?php echo $t->nama_pelanggan; ?></td>
                    <td><?php echo $t->baju_cosplay; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($t->tgl_pinjam_transaksi)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($t->tgl_kembali_transaksi)); ?></td>
                    <td><?php echo "Rp ".number_format($t->harga_transaksi); ?></td>
                    <td><?php echo "Rp ".number_format($t->denda_transaksi); ?></td>
                    <td>
                        <?php
                        if($t->tgl_dikembali_transaksi == "0000-00-00"){
                            echo "-";
                        }else{
                            echo date('d/m/Y', strtotime($t->tgl_dikembali_transaksi));
                        }
                        ?>
                    </td>
                    <td>
                        <?php echo "Rp ".number_format($t->totaldenda_transaksi). ",-"; ?>
                    </td>
                    <td>
                        <?php 
                        if($t->status_transaksi == "1"){
                            echo "Selesai";
                        }else{
                            echo "-";
                        }
                        ?>
                    </td>

                    <td>
                        <?php 
                        if($t->status_transaksi == "1"){
                            echo "-";
                        }else{
                            ?>
                            <a href="<?php echo base_url().'admin/transaksi_selesai/'.$t->id_transaksi; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-ok"></span> Selesai</a>
                            <br>
                            <a href="<?php echo base_url().'admin/transaksi_hapus/'.$t->id_transaksi; ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span> Batal</a>
                            <?php 
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>