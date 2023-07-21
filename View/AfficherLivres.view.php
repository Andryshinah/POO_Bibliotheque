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
  </table>

<a href=""><div class="d-grid gap-2">
  <button class="btn btn-lg btn-primary" type="button">Ajouter</button>
</div></a>

<?php

$content = ob_get_clean();
$titre=$tab->getTitre();
require "Template.php";
?>