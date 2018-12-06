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
                    <input type="hidden" value="" name="bat_id"/>
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