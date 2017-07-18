<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>GundarJob</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url();?>assets/backoffice/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url();?>assets/backoffice/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?php echo base_url();?>assets/backoffice/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo base_url();?>assets/backoffice/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url();?>assets/backoffice/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url();?>assets/backoffice/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->
        <script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
</head>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url();?>backoffice">Gundar Job</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-messages">
        <?php foreach ($msg as $m){?>
        <li>
            <a href="#">
                <div>
                    <strong><?php echo $m->message_name?></strong>
                                    <span class="pull-right text-muted">
                                        <em><?php echo $m->message_email?></em>
                                    </span>
                </div>
                <div><?php echo $m->message_description?></div>
            </a>
        </li>
        <?php } ?>
        <li class="divider"></li>
        <li>
            <a class="text-center" href="<?php echo site_url();?>backoffice/message">
                <strong>Read All Messages</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <!-- /.dropdown-messages -->
</li>

<!-- /.dropdown -->

<!-- /.dropdown -->
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-user">
        <li><a href="<?php echo site_url();?>backoffice/editadmin"><i class="fa fa-user fa-fw"></i> <?php echo $admin['username'];?></a>
        </li>
        <li><a href="<?php echo site_url();?>backoffice/editpass"><i class="fa fa-sign-out fa-fw"></i> Change Password</a>
        </li>
        <li class="divider"></li>
        <li><a href="<?php echo site_url();?>backoffice/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo site_url();?>backoffice/applicant"><i class="fa fa-dashboard fa-fw"></i> Applicant</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Jobs/Office List<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>backoffice/job">List</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/addjob">Add</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-image"></i> Gallery<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>gallery/listimage">List</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>gallery/add">Add</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-plus"></i> Job Vacancy<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>career/vacancies">List</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>career/addvacancy">Add</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users"></i> Admin<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo site_url();?>backoffice/admin">List</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/addadmin">Add</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo site_url();?>backoffice/message"><i class="fa fa-table fa-fw"></i> Message</a>
            </li>
            <li>
                <a href="<?php echo site_url();?>backoffice/user"><i class="fa fa-user"></i> User</a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>