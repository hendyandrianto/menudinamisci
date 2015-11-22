<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Halaman Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="<?php echo base_url();?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/css/default.css" rel="stylesheet" id="theme" />
	<script src="<?php echo base_url();?>assets/plugins/pace/pace.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/js/apps.min.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
</head>
<body class="pace-top">
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<div id="page-container" class="fade">
        <div class="login bg-black animated fadeInDown">
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> Halaman Login
                    <small>Silahkan Masukan Username dan Password Anda</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <div class="login-content">
                <form action="<?php echo base_url();?>login/do_login" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" name="username" placeholder="Masukan Username" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" name="password" placeholder="Masukan Password" />
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">SIGN IN</button>
                    </div>
                </form>
            </div>
        </div>
	</div>
</body>
</html>
