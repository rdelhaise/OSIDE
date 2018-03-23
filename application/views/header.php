<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/icon.css" />
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/bootstrap.min.css" />
    <script src="<?php echo site_url(); ?>assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/js/popper.min.js"></script>


    <link href="<?php echo site_url(); ?>assets/css/font.css" rel="stylesheet"><!-- Police Open Sans Regular -->
    <title>O.Side</title>
</head>
<body>

<!-- Barre de navigation -->

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto" >
            <li class="nav-item g active font"><a href="#" class="nav-link"><img src="<?php echo site_url(); ?>/assets/img/png/grey/brush.png" alt="Logo O.Side">Accueil</a></li>
            <li class="nav-item g font"><a href="#" class="nav-link"><img src="<?php echo site_url(); ?>assets/img/png/grey/seche.png" alt="Logo O.Side">Informations</a></li>
            <li class="nav-item g font"><a href="#" class="nav-link"><img src="<?php echo site_url(); ?>assets/img/png/grey/ciseau.png" alt="Logo O.Side">Tarifs</a></li>
            <li class="nav-item g font"><a href="#" class="nav-link"><img src="<?php echo site_url(); ?>assets/img/png/grey/tube.png" alt="Logo O.Side">La revue</a></li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto logomid" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <a class="navbar-brand mx-auto" href="#"><img src="<?php echo site_url(); ?>assets/img/logo.jpg" style="height: 60px;" /></a>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item font"><a href="#" class="nav-link"><img src="<?php echo site_url(); ?>assets/img/png/grey/spray.png" alt="Logo O.Side">Prendre RDV</a></li>
                <li class="nav-item font"><a href="#" class="nav-link"><img src="<?php echo site_url(); ?>assets/img/png/grey/barbier.png" alt="Logo O.Side">Contacts</a></li>
                <li class="nav-item font"><a href="<?php echo site_url('/pages/login');?>" class="nav-link"><img src="<?php echo site_url(); ?>assets/img/png/grey/rasoir.png" alt="Logo O.Side">Connexion</a></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-1">
                      <li class="p-3">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="Password" class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="form-group text-xs-center">
                                    <small><a href="#">Forgot password?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
        </ul>
    </div>
</nav>