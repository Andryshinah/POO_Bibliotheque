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
    public function AjoutLivre()
    {
        require "View/AjoutLivre.view.php";
    }

   
   public function AjoutLivreValidation()
{
    if (isset($_POST['submit'])) 
    {
        $file = $_FILES["Image"];
        $dir = "public/images/". $file["name"];

        if ($this->VerifImage($file["type"], $file["size"], $file["error"])) 
        {
            if (move_uploaded_file($file["tmp_name"], $dir)) 
            {
                echo "Tout est ok";
                $Execute=new LivreManager();
                $Execute->AjoutLivreToBDD("",basename($dir,PATHINFO_EXTENSION),$_POST["nbPages"],$file["name"]);
                require "./View/Accueil.view.php";
            } 
            else 
            {
                echo "Une erreur est survenue lors du téléchargement du fichier, recommencez la procédure.";
            }
        } 
        else 
        {
            echo "<br>"."Le fichier n'est pas valide.";
        }
    }
}

    public function VerifImage( $format, $taille, $error)
    {

            if ($format != "image/jpeg" && $format != "image/png" && $format != "image/jfif" && $format != "image/jpg") 
            {
                echo "Fichier au mauvais format.";
                return false;
                    if ($taille >= 50000 || $error !== 0) 
                    {
                        echo "<br>"."Fichier erreur."."<br>";
                        return false;
                    }
                    
            }
            else
            {
                return true; 
            }
    }
}

?>