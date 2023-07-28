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
                
                    $Execute=new LivreManager();
                    $Execute->AjoutLivreToBDD("",basename($dir,PATHINFO_EXTENSION),$_POST["nbPages"],$file["name"]);
                    require "./View/Accueil.view.php";
                    echo "<h4 class='rounded border border-dark p-2 m-2 text-center text-white bg-success'>Tout est ok</h4>";
                } 
                else 
                {
                    require "./View/Accueil.view.php";
                    echo "<h4 class='rounded border border-dark p-2 m-2 text-center text-white bg-success'>Une erreur est survenue lors du téléchargement du fichier, recommencez la procédure.</h4>";
                }
            } 
            else 
            {
                require "./View/Accueil.view.php";
                echo "<br>"."<h4 class='rounded border border-dark p-2 m-2 text-center text-white bg-success'>Le fichier n'est pas valide.</h4>";
            }
        }
    }
    
    public function ModifierLivre($id)
    {
        var_dump($Modif=$this->GestionLivre->getLivreById($id));
        require "./View/ModificationLivre.view.php";
    }
    
    public function SupprimerLivre($id)
    {
        var_dump($Modif=$this->GestionLivre->getLivreById($id));
        require "./View/ModificationLivre.view.php";
    }




    private function VerifImage( $format, $taille, $error)
    {

            if ($format != "image/jpeg" && $format != "image/png" && $format != "image/jfif" && $format != "image/jpg") 
            {
                echo "<h4 class='rounded border border-dark p-2 m-2 text-center text-white bg-success'>Fichier au mauvais format.</h4>";
                return false;
                    if ($taille >= 50000 || $error !== 0) 
                    {
                        echo "<br>"."<h4 class='rounded border border-dark p-2 m-2 text-center text-white bg-success'>Fichier erreur.</h4>"."<br>";
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