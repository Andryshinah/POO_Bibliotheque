<?php
namespace App\Controller;
include "./Models/LivreManager.class.php";
use App\LivreManager;



class LivreController
{
    private $GestionLivre;

    public function __construct()
    {
        
        $this->GestionLivre= new LivreManager;
        $this->GestionLivre->chargementLivre();    
    }

    public  function AffichageLivre()
    {

        $tab=$this->GestionLivre->getLivre();
        require "./View/Livres.view.php";
    
    }

    public function DisplayLivre($id)
    {
        $tab=$this->GestionLivre->getLivreById($id);
        require "./View/AfficherLivres.view.php";
        
        
       
    }


}

?>