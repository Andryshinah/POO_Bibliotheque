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
  <tr class="table-active">
    <td class="align-middle"><img src="<?=URL?>/public/images/<?php echo $Modif->getImage(); ?>" style="width: 100px;height: 145px; border-radius:10px;"></td>
    <td class="align-middle"> <?php echo $Modif->getTitre(); ?></td>
    <td class="align-middle"><?php echo $Modif->getNbpage(); ?></td>
    <td class="align-middle"><button type="button" class="btn btn-primary">Modifier</button></td>
  </tr>
</table>
<?=
//ataovy bootstrap ilay formulaire;
 "ataovy formulaire de representation";
?>
<?php
$content = ob_get_clean();
$titre = "Mes livres";
require "Template.php";
?>
