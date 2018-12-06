    <?php include_once "header.php";?>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

            <div class="container-fluid">
                <div class="w3-panel w3-card-2">  <h3>Catégorie service</h3></div>

                <br />
                <button class="btn btn-success" onclick="add_categ()"><i class="glyphicon glyphicon-plus"></i> Categorie</button>
                <br />
                <br />
                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
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
                            <td><?php echo $categorie->TITRECATEGORIESERVICE;?></td>
                            <td><?php echo $categorie->DETAILCATEGORIESERVICE;?></td>
                            <td><?php echo $categorie->PHOTOSCATEGORIESERVICE;?></td>
                            <td><?php echo $categorie->AUTEUR;?></td>
                            <td><?php echo $categorie->DATEAJOUT;?></td>
                            <td>
                                <button class="btn btn-warning" onclick="edit_book(<?php echo $categorie->IDCATEGORIESERVICE;;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-danger" onclick="delete_book(<?php echo $categorie->IDCATEGORIESERVICE;;?>)"><i class="glyphicon glyphicon-remove"></i></button>


                            </td>
                        </tr>
                    <?php }?>
                    </tbody>

                    <tfoot>
                    <tr>
                        <th>Catégorie service </th>
                        <th>Détail catégorie service</th>
                        <th>Photos</th>
                        <th>Auteur</th>
                        <th>Date d'ajout</th>
                    </tr>
                    </tfoot>
                </table>

            </div>
    </div>

    <script type="text/javascript">

        function add_categ() {
            save_method = 'add';
//            $('#form')[0].reset(); // reset form on modals
            $('#modal_form').modal('show'); // show bootstrap modal
            //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
        }

        //sauver le nouveau categorie
        function save()
        {
            var url;
            if(save_method == 'add')
            {
                url = "<?php echo site_url('admin/Service/categorie_service_add')?>";
            }
            else
            {
                url = "<?php echo site_url('admin/Service/categorie_service_add')?>";
            }

            // ajax adding data to database
            $.ajax({
                url : url,
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    //if success close modal and reload ajax table
                    $('#modal_form').modal('hide');
                    location.reload();// for reload a page
                },
                error: function (jqXHR, textStatus, errorThrown)
                {alert($('#form').value());
                    alert('Error adding / update data');
                }
            });
        }
    </script>

    <!-- Bootstrap modal -->
    <div class="modal fade" id="modal_form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Catégorie service</h3>
                </div>
                <div class="modal-body form">
                    <form action="#" id="form" class="form-horizontal">
                        <input type="hidden" value="" name="categorie_id"/>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Titre catégorie service</label>
                                <div class="col-md-9">
                                    <input name="titre_categorie_service" placeholder="Donnez un titre  pour le nouveau categorie service" class="form-control" type="tex">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Détail catégorie service</label>
                                <div class="col-md-9">
                                    <textarea class="tinyMCE form-control" type="text" placeholder="Entrer détail categorie service" name="detail_categorie_service"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Photo</label>
                                <div class="col-md-9">
                                    <input name="photo_categorie_service" placeholder="Book Author" class="form-control" type="file">
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- End Bootstrap modal -->

    <?php include_once "footer.php";?>