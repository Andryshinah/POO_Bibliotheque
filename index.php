<?php
require './Controllers/LivresController.controller.php';
define('URL', (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . str_replace('/index.php', '', $_SERVER['REQUEST_URI']));

$LivreController=new \App\Controller\LivreController;
try 
{
    if (!isset($_GET['page']) || $_GET['page'] === '') 
    {
        require "View/Accueil.view.php";
    } 
    else 
    {
        $url=explode("/",filter_var($_GET['page']),FILTER_SANITIZE_URL);
        for ($i=0; $i < count($url); $i++) { 
            print_r($url[$i]) ;
        }
        switch ($url[0]) 
        {
            case 'Accueil':
                require "View/Accueil.view.php";
                break;
            case 'livres':
                if(empty($url[1]))
                {
                    $LivreController->AffichageLivre();
                }
                elseif($url[1]==="l")
                {
                    echo $LivreController->DisplayLivre($url[2]);
                }
                elseif($url[1]==="a")
                {
                    echo "ajout d'un livre";
                }
                elseif($url[1]==="m")
                {
                    echo "modification d'un livre";
                }
                elseif($url[1]==="s")
                {
                    echo "suppression d'un livre";
                }
                else
                {
                    throw new Exception("la page n'existe pas ");
                }       
                break;
        }
    } 

}
catch (Exception $e)
{
    echo $e->getMessage();
}


?>
