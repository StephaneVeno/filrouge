<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eos voluptatem sit quasi fugit reiciendis repudiandae at placeat optio quos minima aspernatur nobis corrupti ea nostrum, voluptas modi veritatis! Accusantium, cumque neque quasi voluptas facilis esse omnis laboriosam quo commodi placeat maxime eius incidunt praesentium ullam quia dolore, tempore doloremque.."/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/")."bootstrap.min.css";?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/favicon-min.png");?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/")."style.css";?>">
    <title>v green</title>
</head>

<body class="container root" style="background:url('<?php echo base_url('assets/img/accueil/background_village.png');?>')">
    <div class="wrap m-0 p-0">
        <header class="col-12 px-0">
            <div class="container p-0">
                <div class="col-12 p-0">
                    <div class="row m-0 d-bk" style="background:url('<?php echo base_url('assets/img/header/3_bandes.png');?>');">
                        <figure class="col-md-2 col-lg-2 d-none d-md-block p-0 ">
                            <a class="navbar-brand" href="<?php echo base_url();?>" title="Vers l'accueil de Village Green">
                                <img class="d-inline-blocks" src="<?= base_url('assets/img/header/').'logo_village_green.png'?>" alt="logo de l'entreprise village green" title="logo">
                            </a>
                        </figure>
                        <div class="col-md-9 col-xs-12 p-0 ml-auto d-sm-none d-sm-block">
                            <!--première nav-->
                            <nav class="navbar navbar-expand-sm firstNav px-0 py-0">
                                <span class="d-sm-none title-nav-service mr-auto pl-4">Rubrique Client</span>
                                <a class="navbar-brand" href=""></a>
                                <button class="navbar-toggler mr-2 my-2 c-icon-button" type="button" data-toggle="collapse" data-target="#target1" aria-controls="target1" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon c-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse pl-0" id="target1">
                                    <ul class="navbar-nav ml-auto pt-3 mr-2">
                                        <li class="nav-item active col-xs-3">
                                            <?= anchor('structure/other/info/#info', "Info", ["class" => "nav-link pl-4"]);?>
                                        </li>
                                   



                                        <div class="box dropdown nav-link active col-5">
                                            <button type="button" data-toggle="dropdown" class="nav-link pl-4">Espace Client<span class="void"></span>
                                            </button>                   
                                            <div class="dropdown-menu ">
                                            <?php if(isset($_SESSION["client"]) && $_SESSION["client"] == true){ ?>
                                                        <a href="<?php echo site_url('admin/sup_session');?>" class="btn">se déconnecter</a>
                                            <?php } else { ?>
                                                    <?php echo form_open_multipart('admin/new_session_client')?>
                                                    <!--Cotée Gauche-->
                                                    <span>Êtes-vous déjà clients chez nous ?</span>
                                                    <input class="form-control" type="email" name="mail" placeholder="Adresse E-mail">
                                                    <?php echo form_error('mail'); ?>
                                                    <input class="form-control" type="password" name="password" placeholder="Mot de passe">
                                                    <?php echo form_error('password'); ?>
                                                    <input class="form-check-control" type="checkbox" name="always_connexion">
                                                    <label for="always_connexion">Rester connectée ?</label>
                                                    <button name="connexion" class="btn btn-success">Se connecter maintenant</button>
                                                    <?php echo form_close(); ?>

                                                    <label class="text-center col-12" for="connexion">
                                                        <a href="" alt="Mot de passe oublié?" title="Mot de passe oublié?">Mot de passe oublié?</a>
                                                    </label>
                                                <form class="drop-inscription" method="post" action="#">
                                                    <!--Cotée Droite-->
                                                    <span class="col-12">Vous n'êtes pas encore inscript ?</span>
                                                    <p class="col-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                                                    <a href="<?php echo site_url('clients/inscription') ?>" name="inscription" class="btn btn-success">S'inscrire</a>
                                                    <label class="text-center col-12" for="inscription">
                                                        <a href="" title="plus d'information sur les modalitées d'inscription">Plus d'information</a>
                                                    </label>
                                                </form>
                                            <?php } ?>
                                            </div>
                                        </div>





                                        <!--STORE-->
                                        <li class="nav-item col-2 pr-5 nav-link active pl-4">
                                            <a class="" href="<?php echo site_url("admin/Panier");?>">
                                                <img title="boutique de Village Green" src="<?= base_url('assets/img/header/').'picto_panier.png'?>" alt="boutique">
                                            </a>
                                        </li>
                                        <!--menue bootstap lang-->
                                        <li class="nav-link active px-4 col-2">
                                            <img title="choisir sa langue" src="<?= base_url('assets/img/header/').'picto_pays.png'?>" alt="choisir sa langue">
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="d-sm-none d-sm-block">
                                <!--second barre-->
                                <nav class="navbar navbar-expand-sm navbar-dark secondNav px-0 py-0 ">
                                    <span class="d-sm-none title-nav-aide mr-auto pl-4">Rubrique Aide</span>
                                    <a class="navbar-brand" href="#"></a>
                                    <button class="navbar-toggler mr-2 my-2" type="button" data-toggle="collapse" data-target="#target2" aria-controls="target2" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse pl-0" id="target2">
                                        <ul class="navbar-nav ml-auto pl-0 pr-0">

                                        <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true) {?>

                                            <li class="nav-item active col-xs-3"><a class="nav-link pl-4" href="<?php echo site_url("admin/adminAccueil");?>">Administration</a></li>
                                            <li class="nav-item active col-xs-3"><a class="nav-link pl-4" href="<?php echo site_url('admin/sup_session_admin');?>" >se déconnecter</a></li>

                                        <?php } else { ?>

                                            <li class="nav-item active col-xs-3"><a class="nav-link pl-4" href="<?php echo site_url("admin/connexionAdmin");?>">Espace Personnel</a></li>

                                        <?php } ?>

                                            <li class="nav-item active col-xs-3"><a class="nav-link pl-4" href="<?php echo site_url("produits/index");?>">Produits</a></li>

                                            <li class="nav-item active col-xs-3">
                                                <?= anchor('structure/other/service/#service', "Service", ["class" => "nav-link pl-4"]);?>
                                            </li>
                                            <li class="nav-item active col-xs-3">
                                                <?= anchor('structure/other/aide/#aide', "Aide", ["class" => "nav-link pl-4"]);?>
                                            </li>
                                            <li class="nav-item active col-xs-3">
                                                <?= anchor('structure/other/propos/#propos', "As propos", ["class" => "nav-link pl-4"]);?>
                                            </li>                                       
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="row ml-0 mr-0">
                        <!--3reme barre-->
                        <nav class="navbar navbar-expand-xl navbar-dark thirdNav col-xl-12 align-bottom px-0 py-0">
                            <span class="d-sm-none title-nav-produits mr-auto pl-4">Rubrique Produits</span>
                            <a class="navbar-brand" href="#"></a>
                            <button class="navbar-toggler mr-2 my-2" type="button" data-toggle="collapse" data-target="#target3" aria-controls="target3" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse pl-0" id="target3">
                                <ul class="navbar-nav ml-auto pl-0 pr-0 m-0">


                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/GuitBass");?>" title="Guit/Basse">Guit/Basse</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/Batteries");?>" title="Batteries">Batteries</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/Piano");?>" title="Clavier">Clavier</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/Studio");?>" title="Studio">Studio</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/Eclairage");?>" title="Eclairage">Eclairage</a> </li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/Dj");?>" title="DJ">DJ</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/cases");?>" title="Cases">Cases</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/Accessoire");?>" title="Accessoires">Accessoires</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="<?php echo site_url("categories/InstruAVent");?>" title="Accessoires">Instrument à vent</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    