<?php
require_once "./Models/Livre.class.php";
ob_start();


?>
<div class="row">
    <div class="col-6">
    <div class="form-group">
    <img src="<?=URL?>/public/images/<?php echo $Modif->getImage(); ?>" style="width: 535px;height: 416px;border-radius:10px;">
    <div class="">
    <button class="btn btn-lg btn-info" type="button" style="width: 535px;">Modifier la photo</button>
    </div>
    </div>
  </div> 

    <div class="col-6">
    <div class="form-group">
    <fieldset >
    <label class="form-label" >Titre</label>
    <input class="form-control"value="<?php echo $Modif->getTitre(); ?>" type="text"  >
    <label class="form-label mt-4" >Nombre de page</label>
        <input class="form-control"value="<?php echo $Modif->getNbpage(); ?>" type="text"  >
    </fieldset>
    </div>
  </div> 
</div>

  <div class="d-grid gap-2">
  <button class="btn btn-lg btn-danger" type="button" style="margin: 31px -7px 10px 10px;">Enregistrer les modifications</button>
  </div>



  


<?php
$content = ob_get_clean();
$titre = "Mes livres";
require "Template.php";
?>
