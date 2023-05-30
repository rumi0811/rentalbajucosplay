<div class="page-header">
    <h3>Data Baju Cosplay </h3>
</div>
<a href="<?php echo base_url(). 'admin/bajucosplay_add'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Baju Cosplay Baru</a>
<br/> <br/>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="table-datatable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Baju Cosplay</th>
            <th>Ukuran Baju Cosplay</th>
            <th>Sepatu Cosplay</th>
            <th>Ukuran Sepatu Cosplay</th>
            <th>Status Cosplay</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach($bajucosplay as $ps){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $ps->baju_cosplay  ?></td>
            <td><?php echo $ps->ukbaju_cosplay  ?></td>
            <td><?php echo $ps->sepatu_cosplay  ?></td>
            <td><?php echo $ps->uksepatu_cosplay  ?></td>
            <td>
                <?php
                if($ps->status_cosplay == "1"){
                    echo "Tersedia";
                }else if($ps->status_cosplay == "2"){
                    echo "Sedang dirental";
                }
                ?>
            </td>
            <td>
                <a href="<?php echo base_url(). 'admin/bajucosplay_edit/'.$ps->id_cosplay; ?>" class="btn btn-warning btn-sm"> <span class="glyphicon glyphicon-plus"></span> Edit</a>
                <a href="<?php echo base_url(). 'admin/bajucosplay_hapus/'.$ps->id_cosplay; ?>" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
</div>