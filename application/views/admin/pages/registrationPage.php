

<div class="container" id="formAddAdmin">
    <div id="formTitle"><img src="<?php echo img_url('ajouter.png') ?>" height="100px" width="100px" >AJOUTER NOUVEAU ADMIN</div>
    <div class="well" id="form_add">
        <br>
        <form class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" required="true" placeholder="username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" required="true" placeholder="email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="password" name="password" required="true" placeholder="password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="confirmation">Confirmation:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="confirmation" name="confirmation" required="true" placeholder="confirmation">
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
            </div>
        </form>
    </div>
</div>

