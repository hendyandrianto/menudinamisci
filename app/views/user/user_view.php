<script src="<?php echo base_url();?>assets/plugins/DataTables/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/plugins/DataTables/js/dataTables.responsive.js"></script>
<script src="<?php echo base_url();?>assets/js/table-manage-responsive.demo.min.js"></script>
<script>
$(document).ready(function() {
    TableManageResponsive.init();
});
</script>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title"><?php echo $halaman;?></h4>
            </div>
            <div class="panel-body">
                <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th style="text-align:center" width="1%">No.</th>
                            <th style="text-align:center" width="10%">Kode</th>
                            <th style="text-align:center" width="70%">Nama</th>
                            <th style="text-align:center" width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    $data = $this->db->query("SELECT kode,nama FROM tbl_username")->result_array();
                    foreach ($data as $key) {
                        $i++;
                        $kode = $key['kode'];
                        $nama = $key['nama'];
                    ?>
                        <tr class="odd gradeX">
                            <td style="text-align:center"><?php echo $i . ".";?></td>
                            <td><?php echo $kode;?></td>
                            <td><?php echo $nama;?></td>
                            <td style="text-align:center">
                                <a href="<?php echo base_url();?><?php echo $link;?>/hapus/<?php echo $kode;?>" data-toggle="tooltip" class="btn btn-danger" title='Hapus Data'><i class="icon-remove icon-white"></i></a>
                                <a href="<?php echo base_url();?><?php echo $link;?>/edit/<?php echo $kode;?>" data-toggle="tooltip" class="btn btn-warning" title='Edit Data'><i class="icon-pencil icon-white"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <ul class="list-nostyle list-inline">
            <li><a href="<?php echo base_url();?><?php echo $link;?>/add" title="Tambah <?php echo $halaman;?>" class="btn btn-success"> <i class="icon-plus-sign"></i> Tambah Data </a> </li>
        </ul>
    </div>
</div>