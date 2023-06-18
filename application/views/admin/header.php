<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Website Rental Baju Cosplay</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap2.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/datatable/datatables.css' ?>">

    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/datatable/jquery.dataTables.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/datatable/datatables.js'; ?>"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() . 'admin'; ?>">Peminjaman Lapangan</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url() . 'admin'; ?>"><span class="glyphicon glyphicon-home"></span> Dashboard <span class="sr-only">(current)</span></a></li>
                    <li><a href="<?php echo base_url() . 'admin/bajucosplay'; ?>"><span class="glyphicon glyphicon-folder-open"></span>   Data Lapangan</a></li>
                    <li><a href="<?php echo base_url() . 'admin/pelanggan'; ?>"><span class="glyphicon glyphicon-user"></span> Data Customer</a></li>
                    <li><a href="<?php echo base_url() . 'admin/transaksi'; ?>"><span class="glyphicon glyphicon-sort"></span> Transaksi Peminjaman</a></li>
                    <!-- <li><a href="<?php echo base_url() . 'admin/laporan'; ?>"><span class="glyphicon glyphicon-list-alt"></span> Laporan</a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url() . 'admin/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Hallo, <b>" . $this->session->userdata('nama'); ?></b>
                        <span class="caret"></span> </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url() . 'admin/ganti_password' ?>"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
</body>
</html>