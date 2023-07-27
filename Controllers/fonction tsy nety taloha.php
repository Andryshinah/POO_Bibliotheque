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