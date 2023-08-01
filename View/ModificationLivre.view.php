<?php
require_once "./Models/Livre.class.php";
ob_start();


?>
<form  method="POST" action="<?=URL?>/livres/mb/<?= $Modif->getID();?>" enctype="multipart/form-data">
<div class="row">
    <div class="col-6">
    <div class="form-group">
    <input type="hidden" name="id" value="<?php echo $Modif->getID(); ?>">
    <img src="<?=URL?>/public/images/<?php echo $Modif->getImage(); ?>" style="width: 535px;height: 416px;border-radius:10px;">
    <div class="">
    <input type="file" class="form-control" id="fileInput" name="image">
    </div>
    </div>
  </div> 

    <div class="col-6">
    <div class="form-group">
    <fieldset >
    <label class="form-label" >Titre</label>
    <input class="form-control" name="titre" value="<?php echo $Modif->getTitre(); ?>" type="text"  >
    <label class="form-label mt-4" >Nombre de page</label>
        <input class="form-control" name="nbPages" value="<?php echo $Modif->getNbpage(); ?>" type="text"  >
    </fieldset>
    </div>
  </div> 
</div>

  <div class="d-grid gap-2">
  <button type="submit" name="submit" class="btn btn-lg btn-danger" type="button" style="margin: 31px -7px 10px 10px;">Enregistrer les modifications</button>
  </div>

</form>

  


<?php

$content = ob_get_clean();
$titre = "Mes livres";
require "Template.php";
?>
