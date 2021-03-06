<!DOCTYPE html>
<html>
<title>Gesiotn du site AUXIMAD</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url("asset/jqueryUi/jquery-ui.min.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("asset/bootstrap/bootstrap4/bootstrap.min.css"); ?>"/>

<link rel="stylesheet" href="<?php echo css_url('w3/w3') ?>">
<link rel="stylesheet" href="<?php echo css_url('w3/font-Relay') ?>">
<link rel="stylesheet" href="<?php echo css_url('w3/font-awesome') ?>">
<link rel="stylesheet" href="<?php echo css_url('stylePageAdmin') ?>">
<link rel="stylesheet" href="<?php echo css_url('styleNavBarAdmin') ?>">

<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<!--<link rel="stylesheet" href="--><?php //echo base_url("asset/jqueryUi/jquery-ui.min.css") ?><!--">-->
<!--<link rel="stylesheet" href="--><?php //echo base_url("asset/bootstrap/bootstrap4/bootstrap.min.css"); ?><!--"/>-->

<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/dt-1.10.18/sl-1.2.6/datatables.min.css"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/datatables/css/dataTables.bootstrap.css')?>"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php //include "tinyMce.php"?>

<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
    <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-right">Logo</span>
</div>

<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-collapse w3-animate-left " style="z-index:3;width:230px;" id="mySidenav"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="<?php echo img_url("administrateur.png") ?>" class="w3-circle w3-margin-right" style="width:46px">

        </div>
        <div class="w3-col s8">
            <span>Bien venu <strong>Admin</strong></span><br>
            <a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
            <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
            <a href="<?php echo site_url('admin/User/logout')?>" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-sign-out"></i></a>
        </div>
    </div>
    <hr>
    <div  class="w3-container">
        <h5>Tableau de bord</h5>
    </div>
    <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="<?php echo site_url('admin/SlidePhoto')?>" class="w3-padding "><i class="fa fa-photo"></i>  Slides</a>
    <a href="<?php echo site_url('admin/Apropos')?>" class="w3-padding"><i class="fa fa-users fa-fw"></i>  A propos</a>
    <a href="<?php echo site_url('admin/CService')?>" class="w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Service</a>
    <a href="#" class="w3-padding"><i class="fa fa-diamond fa-fw"></i>  Assurance</a>
    <a href="#" class="w3-padding"><i class="fa fa-users fa-fw"></i>  Blog</a>
    <a href="#" class="w3-padding"><i class="fa fa-newspaper-o"></i>  Press</a>
    <a href="#" class="w3-padding"><i class="fa fa-diamond fa-fw"></i>  Administrateur</a>
    <a href="#" class="w3-padding"><i class="fa fa-address-card"></i>  Contact</a><br><br>
</nav>
