<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>RoleAkses - Codeigniter</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/funcy/jquery.fancybox.css" media="screen" />
    <link href="<?php echo base_url();?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/default.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style-responsive.min.css"> 
    <link href="<?php echo base_url();?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/masked-input/masked-input.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/password-indicator/js/password-indicator.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/moment.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/funcy/jquery.fancybox.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/select2/dist/js/select2.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/form-plugins.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/apps.min.js"></script>
    <script>
        $(document).ready(function() {
            jQuery('.fancybox').fancybox({'type' : 'image'});
            App.init();
            FormPlugins.init();
        });
    </script>
</head>
<body>
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <?php
        $this->load->view('dashboard/menu_atas');
        ?>
        <?php
        $this->load->view('dashboard/menu_samping');
        ?>
        <div class="sidebar-bg"></div>
        <div id="content" class="content">
            <h1 class="page-header"><?php echo $halaman;?> <small><?php echo $judul;?></small></h1>
            <?php
            $this->load->view($content);
            ?>
        </div>
        <?php 
        $this->load->view('dashboard/footer');
        ?>
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    </div>
</body>
</html>
