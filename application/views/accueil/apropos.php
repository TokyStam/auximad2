
        <?php include_once "header.php";?>
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-8 section1">
                    <!--navigation-->
                    <?php $urlRetourAccueilFr=site_url("Welcome");?>
                    <a style="margin-left: 20px;" class="navigation" href="<?php echo $urlRetourAccueilFr ?>" > Accueil >  </a>
                    <a  class="navigation" style="text-decoration: none" href=""> A propos	></a>
                    <a  class="navigation" href="">
                        <?php  if(!empty($detailleCategorie->DETAILCATEGORIEAPROPOS)) {
                         echo strtolower($detailleCategorie->TITRECATEGORIEAPROPOS); }
                         ?>
                    </a>
                    <!--navigation-->
                    <hr width="100%">
                    <?php  if(!empty($detailleCategorie->DETAILCATEGORIEAPROPOS)) { ?>
                        <h3><?php echo $detailleCategorie->TITRECATEGORIEAPROPOS; ?></h3>

                        <?php echo $detailleCategorie->DETAILCATEGORIEAPROPOS;
                    }else {?>
                    <p>Aucun resultat correspondant...</p>
                    <?php }?>
                </div>

                <?php include_once "sousMenu.php";?>

            </div>
        </div>

                <?php include_once "footer.php";?>