<?php
ob_start();
?>
<form  method="POST" action="<?=URL?>livres/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" id="Titre"  name="titre" >
    </div>
    <div class="form-group">
        <label for="nbPage">Nombres de Pages</label>
        <input type="number" class="form-control" id="nbPages"  name="nbPages" >
    </div>
    <div class="form-group" style="margin: 46px 10px 10px 4px;">
        <label for="image" style="display: block;margin: -37px 10px 10px -2px;">Image</label>
        <input type="file" class="form-control-file" id="Image" name="Image" >
    </div>
    <button type="submit" name="submit" class="btn btn-dark">Enregistrer</button>
</form>

<?php

$content = ob_get_clean();
$titre="Ajouter un livre";
require "Template.php";
?>