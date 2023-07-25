<?php
use App\LivreManager;
require_once "./Models/Livre.class.php";
ob_start();
?>
<div class="row">
  <div class="col-6">
    <img src="<?=URL?>public/images/<?= $tab->getImage();?>" style="width: 258px; height: 400px; border-radius: 10px;">
  </div>
  <div class="col-6">
    <p style="font-weight: bolder;font-size: 131%;">Titre : <?php echo $tab->getTitre(); ?></p>
    <p style="font-weight: bolder;font-size: 131%;">Nombre de pages :<?php echo $tab->getNbpage(); ?></p>
  </div>
</div>

    
 



<?php
$content = ob_get_clean();
$titre=$tab->getTitre();
require "Template.php";
?>