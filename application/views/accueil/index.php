
            <?php include_once "header.php";?>
            <?php include_once "carousel.php";?>
            <div class="container" style="margin-top:30px">
                <div class="row">
                    <div class="col-sm-8 section1">
                        <!--navigation-->
                        <?php $urlRetourAccueilFr=site_url("Welcome/index");?>
                        <a style="margin-left: 20px;" class="navigation" href="<?php echo $urlRetourAccueilFr ?>" > Accueil >  </a>
                        <!--navigation-->
                        <hr width="100%">

                        <h2> Qui sommes-nous ?</h2>
                        <?php
                            echo $aproposAuximad[0]->APROPOS;
                        ?>
                    </div>
                    <?php include_once "sousMenu.php";?>

                </div>
            </div>
            <?php include_once "footer.php";?>