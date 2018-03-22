<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="/oside/assets/css/style.css" /> -->
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/icon.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <title>O.Side</title>
</head>
<body>

<!-- Barre de navigation -->
<nav class="navbar bg-dark navbar-dark navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Menu navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Logo au milieu de la navbar -->
            <a class="navbar-brand" style="transform: translateX(-50%); left: 50%; position: absolute;" href="#">
                <img src="<?php echo site_url(); ?>assets/img/logo.jpg" style="margin-top: -10px; transform: rotate(-27deg); height: 285%;" alt="Logo O.Side">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="active font"><a href="#" class="accueil"><img src="<?php echo site_url(); ?>/assets/img/png/grey/brush.png" alt="Logo O.Side">Accueil</a></li>
                <li class="font"><a href="#"><img src="<?php echo site_url(); ?>assets/img/png/grey/ciseau.png" alt="Logo O.Side">Tarifs</a></li>
                <li class="font"><a href="#"><img src="<?php echo site_url(); ?>assets/img/png/grey/tube.png" alt="Logo O.Side">La revue</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="font"><a href="http://www.coif.easyrendezvous.fr/head-givet"><img src="<?php echo site_url(); ?>assets/img/png/grey/spray.png" alt="Logo O.Side">Prendre RDV</a></li>
                <li class="font"><a href="#"><img src="<?php echo site_url(); ?>assets/img/png/grey/seche.png" alt="Logo O.Side">Informations</a></li>
                <li class="font"><a href="#"><img src="<?php echo site_url(); ?>assets/img/png/grey/barbier.png" alt="Logo O.Side">Contacts</a></li>
                <li class="font"><a href="<?php echo site_url('/auth/disconnect');?>"><img src="<?php echo site_url(); ?>assets/img/png/grey/rasoir.png" alt="Logo O.Side">Se Déconnecter</a></li>
            </ul>
        </div>

    </div>

</nav>

