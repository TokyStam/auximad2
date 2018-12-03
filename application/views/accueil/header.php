<!doctype html>
<html>
<head lang="fr">
    <title>auximad</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name = "keywords" content = " Radio Yahoshuah, T&eacute;l&eacute;vision Yahoshuah, YAHOSHUAH God of Samuelson Edward, YAHOSHUAH Andriamanitry Samuelson Edward, YAHOSHUAH Dieu de Samuelson Edward, Evangelisation, Rava, Detruit, Destroyed, Moise, Lalàna, Law, loi, Rava ny lalan'i Moizy, Loi de Moise d&eacute;triut, Law of Moise destroyed,Ambassadeur d'Yahoshuah, Ambassador, Ambassador of Yahoshuah, Ambasadoran'i Yahoshuah, AmbasTelevision an'i Yahoshuah mandrava didy folo, T&eacute;l&eacute;vision d' Yahoshuah qui detriut les 10 commendements,Television of Yahoshuah that destroy the 10 commandments, Doctrine de Yahoshuah,fampianaran'i Episkopo Samuelson Edward, teaching of Episcope Samuelson Eward, didy folo rava, rava ny didy folo, rtv, RTV, rtvyahoshuah, rtvYahoshuah, Yahoshuah, Destroy 10 commandments, Detriut les 10 commendements, Yahoshuah mpandrava didy folo, Yahoshuah destroyed the 10 commandments, Yahoshuah a d&eacute;truit les 10 commandements, Le vrai Dieu, The true God, Andriamanitra tena Izy, Radio mitory an'i Yahoshuah, Tv mitory an'i Yahoshuah, Radio preach Yahoshuah, Tv preach Yahoshuah, Episcope Samuelson Edward, Episkopo, Episcope, YAH, Rava ny didy folo, Didy folo, 10 commandments destroyed, 10 commandments, 10 commandements, dix commandements, ten commandments, Episcope Samueleson Edward, Samueleson Edward, Episcope, Episcope, Radio mandrava didy folo, T&eacute;l&eacute; mandrava diy folo, mandrava didy folo, Lalànan'i Yahoshuah, Radio that destroy the 10 commandments, Tv that destroy the 10 commandments, Radio qui detriut les dix commandements, T&eacute;l&eacute;vision qui d&eacute;truit les 10 commandements, Law of Yahoshuah, Loi d'Yahoshuah, Christ, Kristy, Ambasadoran'Yahoshuah, Ambasadaoran'i Yahoshuah, Ambasadaoran' Yahoshuah, Radio Streaming, TV Streaming, Radio Evangelika Malagasy, Radio Evangelika Madagascar, Radio Evangelique Malgache, Radio Evangelique à Madagascar, Malagasy Evangelic Radio; Madagascar Evangelic Radio, T&eacute;l&eacute;vision Evangelika Madagascar, T&eacute;l&eacute;vision Evangelique Malgache, T&eacute;l&eacute;vision Evangelique à Madagascar, Malagasy Evangelic Tv; Madagascar Evangelic Tv, Madagascar, Radio T&eacute;l&eacute;vision, TV, Jesus diff&eacute;rent de Yahoshuah, Jesus different of Yahoshuah, Jesosy tsy Yahoshuah, vrai sauver, The true God, Le Vrai Dieu, Son of God, Fils de Dieu, God of Hebrew, Dieu d'Israel, YHWH, YHVH, YAHWEH, YAOHU, YAHOVAH, YAHVEH, YESHUA, YEHOSHUAH, YAHOSHUAH, YASHUAH, JESUS, YAOHU UL, YAOHUSHUAH, Strean TV en live Yahoshuah,  Bible translitteration, Translitteration, Bapteme, Traduction bible hebreu"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url("asset/jqueryUi/jquery-ui.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("asset/bootstrap/bootstrap4/bootstrap.min.css"); ?>"/>

    <link rel="stylesheet" href="<?php echo css_url('styleNavBar') ?>">
    <link rel="stylesheet" href="<?php echo css_url('stylePage') ?>">


    <title>Bootstrap Footer Template</title>

    <!-- CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="<?php echo css_url("footer/animate") ?>">
    <link rel="stylesheet" href="<?php echo css_url("footer/style") ?>">
    <link rel="stylesheet" href="<?php echo css_url("footer/media-queries") ?>">

</head>
<body id="mybody">
<div class="row">
    <div class="col-lg-9 " style=" margin: auto;background-color: whitesmoke;padding: 0;" >

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h2 class="display-4">  <img src="<?php echo img_url("logoauximad.png") ?>" alt="Logo"> Auximad</h2>
                <p class="lead">"Vous satisfaire c'est notre affaire"</p>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            <img src="<?php echo img_url("logoauximad.png") ?>" alt="Logo">
                            Auximad</font></font>
                </a>
                <button style="border-color: #555;color: #555;"  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                 --
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url()?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Accueil </font></font><span class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(actuel)</font></font></span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">A propos</font></font></a>
                            <div class="dropdown-menu"aria-labelledby="dropdown07">
                                <?php for($i=0;$i< count($apropos);$i++){
                                    $titreCategorieApropos = $apropos[$i]->TITRECATEGORIEAPROPOS;
                                    $ancien = array("-",  "'", "é", "à", "è", "À", "É", "È");
                                    $new = array("", "", "e", "a", "e", "a", "e", "e");
                                    $titreCategorieApropos=str_replace($ancien,$new,$titreCategorieApropos);


                                    $titreCategorieApropos=strtolower($titreCategorieApropos); //minus
                                    if(!empty($apropos[$i]->DETAILCATEGORIEAPROPOS)){?>

                                        <a class="dropdown-item" href="<?php echo site_url('accueil/Apropos/categorieApropos/').$titreCategorieApropos.'/'.$apropos[$i]->IDCATEGORIEAPROPOS;?>">
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    <?php echo strtolower($titreCategorieApropos);?></font></font>
                                        </a>
                                    <?php } } ?>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nos services</font></font></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <?php for($i=0;$i< count($services);$i++){

                                    $detailleCategories = $services[$i]->TITRECATEGORIESERVICE;
                                    $ancien = array("-","'", "é", "à", "è", "À", "É", "È");
                                    $new = array("", "", "e", "a", "e", "a", "e", "e");
                                    $detailleCategories=str_replace($ancien,$new,$detailleCategories);
                                    $detailleCategories =strtolower($detailleCategories); //minus

                                    if(!empty($services[$i]->DETAILCATEGORIESERVICE)){ ?>

                                        <a class="dropdown-item" href="<?php echo site_url('accueil/Service/categorie_services/').$detailleCategories.'/'.$services[$i]->IDCATEGORIESERVICE;?>">
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    <?php echo strtolower($detailleCategories);?></font></font>
                                        </a>
                                    <?php } } ?>
                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact</font></font></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Agence </font></font></a>
                                <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Partenaire </font></font></a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


