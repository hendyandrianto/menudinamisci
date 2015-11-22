<div id="header" class="header navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="<?php echo base_url();?>" class="navbar-brand"><span class="navbar-logo"></span> ROLE AKSES</a>
            <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs">Selamat Datang </span>
                </a>
            </li>
            <li class="dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>assets/img/user1.jpg" style="width:18px;text-align:center;height:22px;" alt="<?php echo $this->session->userdata('nama');?>" /> 
                    <span class="hidden-xs"><?php echo $this->session->userdata('nama');?></span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInLeft">
                    <li class="arrow"></li>
                    <li><a href="javascript:;">Edit Profile</a></li>
                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url();?>dashboard/log_out">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>