<?php
/**
 * Created by PhpStorm.
 * User: Ehsanh
 * Date: 3/6/14
 * Time: 5:09 PM
 *
 * Description:
 * The header file that contains two links to the register and login or displays the names
 * this part is made in order to reduce the overhead of rewriting the header code
 *
 * Containing:
 * 1. Every link necessary to load the pages
 * 2. if the user is logged in
 *      2.1. the name of the user
 * 3. if the user is not logged in
 *      3.1. the buttons to registor or login to the system
 *
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="<?php echo $header_meta_description;?>">
	    <meta name="author" content="ASYA.ir">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	    <!--<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' type='text/css'>-->
        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css">
	    <link rel="stylesheet" href="<?php echo base_url();?>css/base.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>css/skeleton.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>css/layout.css">
	    <link rel="stylesheet" href="<?php echo base_url();?>css/prettyPhoto.css">

	    <!--[if lt IE 9]>
		    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

	    <link rel="apple-touch-icon" href="<?php echo base_url();?>img/apple-touch-icon.png">
	    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72x72.png">
	    <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico">
	    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114x114.png">

  	    <script src="http://code.jquery.com/jquery-latest.js"></script>
  	    <script src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
  	    <script src="<?php echo base_url();?>js/jquery.custom.js"></script>
    </head>
    <body dir="rtl" style="background: #1c120f url('<?php echo base_url();?>img/page-bg.jpg') no-repeat top center;">
        <nav class="navbar nav navbar-inverse" role="navigation">
            <?php if($user_name == FALSE)
                  {?>
            <div class="col-lg-offset-8 col-lg-1 col-md-offset-10 col-md-1 col-sm-offset-8 col-sm-1 col-xs-offset-8 col-xs-1">
                <span class="pull-right">
                    <a href="<?php echo base_url();?>index.php/register" >
                        <button id="btnheader1"class="btn btn-default" style="margin-top: 8px"><?php echo $header_register;?></button>
                    </a>
                </span>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <span class="pull-left">
                    <a href="<?php echo base_url();?>index.php/login" >
                        <button id="btnheader2" class="btn btn-default" style="margin-top: 8px"><?php echo $header_login;?></button>
                    </a>
                </span>
            </div>
            <?php }?>
        </nav>
	    <div class="header-section">
	        <div class="container">
                <div class="eight columns">
			        <a href="<?php echo base_url();?>download/EasyPrint_Setup.msi">
                        <img src="<?php echo base_url();?>img/product-package.png" alt="EasyPrint Package" class="scale-with-grid" />
                    </a>
                    <img src="<?php echo base_url();?>/img/PleaseClick.png" alt="please click the above link" class="scale-with-grid1"/>
                </div>