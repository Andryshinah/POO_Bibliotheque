<?php
require './Controllers/LivresController.controller.php';

$LivreController=new \App\Controller\LivreController;
if (!isset($_GET['page']) || $_GET['page'] === '') {
    require "View/Accueil.view.php";
} else {
    switch ($_GET['page']) {
        case 'Accueil':
            require "View/Accueil.view.php";
            break;
        case 'livres':
                     $LivreController->AffichageLivre();
            break;
        default:
            require "View/Accueil.view.php"; 
            break;
    }
}
?>
