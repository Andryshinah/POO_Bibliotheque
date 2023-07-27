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

    // public function AjoutLivreValidation()
    // {
    //     $file=$_FILES["Image"];
    //     $dir="public/images/".$file["name"];
    //    if(isset($_POST['submit']))
    //    {
    //     if (move_uploaded_file($file["tmp_name"], $dir))
    //     {
    //         if($this->VerifImage($dir,$file["type"],$file["size"],$file["error"]))
    //         {
    //             echo "tout est ok";
    //         }
    //         else
    //         {
    //             echo "une erreur est survenue";
    //         }
    //     }     
    //    }
    //    else
    //    {
    //      echo "une erreur est survenue lors du telechargement du fichier,recommencer la procedure";
    //    }
    // }
    // //Mila verifiena existence sy nom ve mitovy ny base sy anat fichier,taille,format,misy error v
    // public function VerifImage(string $dir,$format,$taille,$error)
    // { 
    //     $taille=filesize($dir);
    //     if(file_exists($dir))
    //     {
    //         return true;
    //             if ($format=="image/jpeg" || $format=="image/png" || $format=="image/jfif" || $format=="image/jpeg") 
    //             {
    //                 return true;
    //                 if($taille<50000 || $error==0)
    //                 {
    //                     return true;
    //                 }
    //                 else
    //                 {
    //                     echo "fichier erreur";
    //                 }
    //             }
    //             else
    //             {
    //                 echo "fichier au mavais format";
    //             }
    //     }
    //     else
    //     {
    //         echo "fichier non telechargé car existe déja";

    //     }
    // }
   //code corrigé
   public function AjoutLivreValidation()
{
    if (isset($_POST['submit'])) {
        $file = $_FILES["Image"];
        $dir = "public/images/" . $file["name"];

        if ($this->VerifImage($dir, $file["type"], $file["size"], $file["error"])) {
            if (move_uploaded_file($file["tmp_name"], $dir)) 
            {
                echo "Tout est ok";
                // var_dump($file);
                // echo $_POST["nbPages"];
                $Execute=new LivreManager();
                $Execute->AjoutLivreToBDD("",basename($dir,PATHINFO_EXTENSION),$_POST["nbPages"],$file["name"]);
            } 
            else 
            {
                echo "Une erreur est survenue lors du téléchargement du fichier, recommencez la procédure.";
            }
        } else {
            echo "Le fichier n'est pas valide.";
        }
    }
}

public function VerifImage(string $dir, $format, $taille, $error)
{
    if (!file_exists($dir)) {
        echo "Fichier non téléchargé car il n'existe pas.";
        return false;
    }

    if ($format != "image/jpeg" && $format != "image/png" && $format != "image/jfif") {
        echo "Fichier au mauvais format.";
        return false;
    }

    if ($taille >= 50000 || $error !== 0) {
        echo "Fichier erreur.";
        return false;
    }

    return true; 
}


}

?>