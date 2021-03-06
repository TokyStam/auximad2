    <?php include_once "header.php";?>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:230px;margin-top:43px;">
        <div class="w3-panel w3-card-2 text-center">  <h4>Catégorie service</h4></div>

        <div class="container-fluid">
                <button class="btn btn-default" onclick="add_categ()"><i class="glyphicon glyphicon-plus"></i> Categorie</button>
            <hr style="width: 100%; background: none repeat scroll 0% 0% rgba(0,20,41,0.3); height: 1px;" />
                        <table id="table_id" class="table table-striped table-bordered nowrap" width="100%">
                    <thead>
                    <tr>
                        <th>Réferance </th>
                        <th>Catégorie service </th>
                        <th>Détail catégorie service</th>
                        <th>Photos</th>
                        <th>Auteur</th>
                        <th>Date d'ajout</th>

                        <th style="width:125px;">Action
                            </p></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($categorie_services as $categorie){?>
                        <tr>
                            <td><?php echo $categorie->IDCATEGORIESERVICE;?></td>
                            <td><?php echo $categorie->TITRECATEGORIESERVICE;?></td>
                            <td>
                                <p>
                                    <a class="badge badge-info" data-toggle="collapse" href="#<?php echo $categorie->IDCATEGORIESERVICE;?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Détail
                                    </a>
                                </p>
                                <div class="collapse" id="<?php echo $categorie->IDCATEGORIESERVICE;?>">
                                    <div class="card card-body">
                                        <?php echo $categorie->DETAILCATEGORIESERVICE;?>
                                    </div>
                                </div>
                            </td>
                            <td>  <img src="<?php echo img_url($categorie->PHOTOSCATEGORIESERVICE. '.jpg') ?>"
                                       class="w3-round" style="width:50px">
                            </td>
                            <td><?php echo $categorie->AUTEUR;?></td>
                            <td><?php echo $categorie->DATEAJOUT;?></td>
                            <td>
                                <button class="btn btn-info btn-sm" onclick="edit_categorie(<?php echo $categorie->IDCATEGORIESERVICE;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-primary btn-sm" onclick="delete_categorie_service(<?php echo $categorie->IDCATEGORIESERVICE;?>)"><i class="glyphicon glyphicon glyphicon-trash"></i></button>


                            </td>
                        </tr>
                    <?php }?>
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Réferance </th>
                        <th>Catégorie service </th>
                        <th>Détail catégorie service</th>
                        <th>Photos</th>
                        <th>Auteur</th>
                        <th>Date d'ajout</th>
                        <th style="width:125px;">Action
                            </p></th>
                    </tr>
                    </tfoot>
                </table>

            </div>
    </div>



    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h3 class="modal-title">Catégorie service</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>

                <div class="modal-body form">
                    <form action="#" id="form" role="form"  enctype="multipart/form-data" method="POST">
                        <input type="hidden" value="" name="categorie_id"/>
                        <div class="form-body">

                            <div class="form-group">
                                <label for="titre_categorie_service">Titre catégorie service : </label>
                                <input type="text" class="form-control" name="titre_categorie_service" id="titre_categorie_service" placeholder="Saisissez le titre" required>
                            </div>

                            <div class="form-group">
                                <label for="detail_categorie_service">Détail catégorie service : </label>
                                <textarea class="tinyMCE form-control" name="detail_categorie_service" id="detail_categorie_service" placeholder="Détaillez la catégorie" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Photo">Photo : </label>
                                <input type="file" class="form-control" name="Photo" id="Photo">
                            </div>

                        </div>

                </div>

                <div class="modal-footer">
                    <input type="submit" id="submit" class="btn btn-primary" value="Valider">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->

    <div id="uploaded_image">

    </div>

    <?php include_once "footer.php";?>

    <script>
        $(document).ready(function(){
            $('#form').on('submit', function(e){
                e.preventDefault();
                if($('#Photo').val() == '' && save_method != 'update')
                {
                    alert("SVP! veillez selectionner une photo");
                }
                else
                {
                    var url;
                    if(save_method == 'add')
                    {
                        url = "<?php echo base_url(); ?>admin/CService/categorie_service_add";
                    }
                    else
                    {
                        url = "<?php echo base_url(); ?>admin/CService/categorie_service_update";
                    }

                    $.ajax({
                        url:url,
                        //base_url() = http://localhost/codeigniter
                        method:"POST",
                        data:new FormData(this),
                        contentType: false,
                        cache: false,
                        processData:false,
                        success:function(data)
                        {
                            //if success close modal and reload ajax table
                            $('#form').modal('hide');
                            location.reload();// for reload a page
                        }

                    });
                }
            });
        });

    </script>


    <script type="text/javascript">

        function add_categ() {
            save_method = 'add';
            $('#form')[0].reset(); // reset form on modals
            $('#modal_form').modal('show'); // show bootstrap modal
            //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
        }

        function edit_categorie(id){
            save_method = 'update';
            $('#form')[0].reset(); // reset form on modals

            //Ajax Load data from ajax
            $.ajax({
                url: "<?php echo site_url('admin/CService/ajax_edit')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function (data) {

                    $('[name="categorie_id"]').val(data.IDCATEGORIESERVICE);
                    $('[name="titre_categorie_service"]').val(data.TITRECATEGORIESERVICE);
                    $('[name="detail_categorie_service"]').val(data.DETAILCATEGORIESERVICE);

                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Modifier catégorie service'); // Set title to Bootstrap modal title

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Recuperation de donnees corrompu');
                }
            });
        }


        function delete_categorie_service(id)
        {
            if(confirm('Voulez-vous vraiment suprimer l\'elemenet?'))
            {
                // ajax delete data from database
                $.ajax({
                    url : "<?php echo site_url('admin/CService/categorie_service_delete')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert( id + 'Une erreure s\'est produit');
                    }
                });
            }
        }


    </script>