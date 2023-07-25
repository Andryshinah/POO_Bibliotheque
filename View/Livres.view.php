<?php
require_once "./Models/Livre.class.php";
ob_start();
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Titres</th>
      <th scope="col">Nombres de pages</th>
      <th scope="col" colspan="2" class="align-middle">Actions</th>
    </tr>
  </thead>
  <?php for ($i=0; $i<count($tab); $i++) { ?>
 
      <tr class="table-active ">
      <td class="align-middle"><img src="Public/images/<?php echo $tab[$i]->getImage(); ?>" style="width: 100px;height: 145px; border-radius:10px;"></td>
      <td class="align-middle"><a href="<?= URL?>livres/l/<?php echo $tab[$i]->getID();?>"> <?php echo $tab[$i]->getTitre(); ?></a></td>
      <td class="align-middle"><?php echo $tab[$i]->getNbpage(); ?></td>
      <td class="align-middle"><a><button type="button" class="btn btn-primary">Modifier</button></a></td>
      <td class="align-middle"><a><button type="button" class="btn btn-warning">Supprimer</button></a></td>
    </tr>
      <?php } ?>
  </table>

<a href="<?= URL?>livres/a">
  <div class="d-grid gap-2">
  <button class="btn btn-lg btn-primary" type="button">Ajouter</button>
  </div>
</a>

<?php

$content = ob_get_clean();
$titre="Mes livres";
require "Template.php";
?>