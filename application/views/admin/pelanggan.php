<div class="page-header">
    <h3>Data Pelanggan</h3>
</div>
<a href="<?php echo base_url(). 'admin/pelanggan_add'; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Pelanggan</a>
<br/>
<br/>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" id="table-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pelanggan</th>
                <th>Jenis kelamin Pelanggan</th>
                <th>No HP Pelanggan</th>
                <th>No KTP Pelanggan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($pelanggan as $pl){ ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $pl->nama_pelanggan ?></td>
                <td><?php echo $pl->alamat_pelanggan ?></td>
                <td><?php echo $pl->jk_pelanggan ?></td>
                <td><?php echo $pl->hp_pelanggan ?></td>
                <td><?php echo $pl->ktp_pelanggan ?></td>
                <td>
                    <a href="<?php echo base_url(). 'admin/pelanggan_edit/'.$pl->id_pelanggan; ?>" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-wrench"></span> Edit</a>
                    <a href="<?php echo base_url(). 'admin/pelanggan_hapus/'.$pl->id_pelanggan; ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>