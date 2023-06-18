<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
</head>
<body>
    <style type="text/css">
        .table-data{
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td{
            border: 1px solid black;
            font-size: 10pt;
        }
    </style>
    <h3>Laporan Transaksi Rental Baju Cosplay</h3>
    <table>
        <tr>
            <td>Dari Tanggal</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($_GET['dari'])); ?></td>
        </tr>
        <tr>
            <td>Sampai Tanggal</td>
            <td>:</td>
            <td><?php echo date('d/m/Y', strtotime($_GET['sampai'])); ?></td>
        </tr>
    </table>
    <br>
    <table class="table-data">
        <thead>
            <tr>
                <th>No. </th>
                <th>Tanggal </th>
                <th>Pelanggan </th>
                <th>Baju Cosplay </th>
                <th>Tanggal Rental  </th>
                <th>Tanggal Kembali </th>
                <th>Harga </th>
                <th>Denda </th>
                <th>Tanggal Dikembalikan </th>
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
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>