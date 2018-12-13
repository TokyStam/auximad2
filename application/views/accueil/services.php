        <?php include_once "header.php";?>

        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-8 section1">
                    <!--navigation-->
                    <?php $urlRetourAccueilFr=site_url("Welcome");?>
                    <a style="margin-left: 20px;" class="navigation" href="<?php echo $urlRetourAccueilFr ?>" > Accueil ></a>
                    <a  class="navigation" style="text-decoration: none" href="#"> Nos services	</a>
                    <!--navigation-->
                    <hr width="100%">

                    <div class="card">
                        <img class="card-img-top" src="<?php echo img_url($detailleCategorie[0]->PHOTOSCATEGORIESERVICE.'.jpg'); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo $detailleCategorie[0]->TITRECATEGORIESERVICE ?></h5>
                            <p class="card-text">
                                <?php echo $detailleCategorie[0]->DETAILCATEGORIESERVICE?>
                            </p>
                        </div>

                    </div>

                </div>
                <?php include_once "sousMenu.php";?>

            </div>
        </div>


        <?php include_once "footer.php";?>

