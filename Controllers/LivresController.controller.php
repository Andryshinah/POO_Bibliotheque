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
        if(isset($_POST["submit"])) 
        {
            $check = getimagesize($_FILES["Image"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - ";
                
            } else {
                echo "File is not an image.";
            }
        }
        else
        {
            echo "fichier non pris en charge";
        }
     
    }
    private function VerifImage()
    {
        $target_dir = "public/images/";
        // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        // $uploadOk = 1;
        // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) 
        {
            $check = getimagesize($_FILES["Image"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - ";
                
            } else {
                echo "File is not an image.";
            }
        }
        else
        {
            echo "fichier non pris en charge";
        }
        // // Check if file already exists
        // if (file_exists($target_file)) {
        //     echo "Sorry, file already exists.";
        //     $uploadOk = 0;
        // }
        // // Check file size
        // if ($_FILES["fileToUpload"]["size"] > 500000) {
        //     echo "Sorry, your file is too large.";
        //     $uploadOk = 0;
        // }
        // // Allow certain file formats
        // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        // && $imageFileType != "gif" ) {
        //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        //     $uploadOk = 0;
        // }
        // // Check if $uploadOk is set to 0 by an error
        // if ($uploadOk == 0) {
        //     echo "Sorry, your file was not uploaded.";
        // // if everything is ok, try to upload file
        // } else {
        //     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        //     } else {
        //         echo "Sorry, there was an error uploading your file.";
        //     }
        // }
    }


}

?>