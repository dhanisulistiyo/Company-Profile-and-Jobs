<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GundarJob</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/front/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/animate.css">
    <link href="<?php echo base_url();?>assets/front/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/front/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="<?php echo site_url();?>"><h1>Gundarjob</h1></a>
                </div>
            </div>
            <div class="navbar-collapse collapse">
                <div class="menu">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="<?php echo site_url();?>"<?php if (current_url()==site_url()){?> class="active"<?php } ?>>Home</a></li>
                        <li role="presentation"><a href="<?php echo site_url();?>career" <?php if (stripos(current_url(),'career')){?> class="active"<?php } ?>>About & Career</a></li>
                        <li role="presentation"><a href="<?php echo site_url();?>gallery" <?php if (stripos(current_url(),'gallery')==true){?> class="active"<?php } ?>>Gallery</a></li>
                        <li role="presentation"><a href="<?php echo site_url();?>contact" <?php if (stripos(current_url(),'contact')==true){?> class="active"<?php } ?>>Contact</a></li>
                        <?php if ($this->session->userdata('login_user')==true){?>
                        <li role="presentation"><a href="<?php echo site_url();?>home/logout" <?php if (stripos(current_url(),'account')==true){?><?php } ?>>Logout</a></li>
                        <?php } ?>
                        <?php if ($this->session->userdata('login_user')!=true){?>
                            <li role="presentation"><a href="<?php echo site_url();?>home/account" <?php if (stripos(current_url(),'account')==true){?> class="active"<?php } ?>>Login</a></li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->
