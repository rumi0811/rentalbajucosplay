<div class="di" padding="20px">
<div class="page-header">
    <h3>Dashboard</h3>
</div>

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-folder-open"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_rental->get_data('bajucosplay')->num_rows(); ?>
                        </div>
                        <div>Jumlah Baju Cosplay</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/bajucosplay' ?>">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-rigt"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-user"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_rental->get_data('pelanggan')->num_rows(); ?>
                        </div>
                        <div>Jumlah Pelanggan</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/pelanggan' ?>">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heaading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-sort"></i>
                    </div>
                    <div class="col-xs-9 text-rigt">
                        <div class="huge">
                            <?php echo $this->m_rental->get_data('transaksi')->num_rows(); ?>
                        </div>
                        <div>Jumlah Transaksi</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/transaksi' ?>">
            <div class="panel-footer">
                <span class="pull-left">View Details</span>
                <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                <div class="clearfix"></div>
            </div>
        </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-ok"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php echo $this->m_rental->edit_data(array('status_transaksi'=>1), 'transaksi')->num_rows(); ?>
                        </div>
                        <div>Rental Selesai</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url() . 'admin/transaksi' ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>        
        </a>
        </div>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="glyphicon glyphicon-random arrow-right"></i> Baju Cosplay</h3>
            </div>
            <div class="panel-body">
                <div class="list-group">
                    <?php foreach($bajucosplay as $p) { ?>
                        <a href="#" class="list-group-item">
                            <span class="badge"><?php if($p->status_cosplay == 1){echo "Tersedia";}else{echo "Dirental";} ?></span>
                            <i class="glyphicon glyphicon-user"></i> <?php echo $p->baju_cosplay; ?>
                        </a>
                        <?php } ?>
                </div>
                <div class="text-right">
                    <a href="<?php echo base_url() . 'admin/bajucosplay' ?>">Lihat Semua Baju Cosplay <i class="glyphicon glyphicon-arrow-right"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><div class="panel-title"><i class="glyphicon glyphicon-user o"></i> Pelanggan Terbaru</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <?php foreach ($pelanggan as $pl) { ?>
                            <a href="#" class="list-group-item">
                                <span class="badge"><?php echo $pl->jk_pelanggan ?></span>
                                <i class="glyphicon glyphicon-user"></i> <?php echo $pl->nama_pelanggan ?>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="text-right">
                        <a href="<?php echo base_url() . 'admin/pelanggan' ?>">Lihat Semua Pelanggan  <i class="glyphicon glyphicon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-lg-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="glyphicon glyphicon-sort"></i> Perental Terakhir</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Tanggal Transaksi</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($transaksi as $t) {
                                        ?>
                                        <tr>
                                            <td><?php echo date('d/m/Y',strtotime($t->tgl_transaksi)); ?></td>
                                            <td><?php echo date('d/m/Y',strtotime($t->tgl_pinjam_transaksi)); ?></td>
                                            <td><?php echo date('d/m/Y',strtotime($t->tgl_kembali_transaksi)); ?></td>
                                            <td><?php echo "Rp ".number_format($t->harga_transaksi).",-"; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right">
                            <a href="<?php echo base_url() . 'admin/transaksi' ?>">Lihat Semua Transaksi <i class="glyphicon glyphicon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
