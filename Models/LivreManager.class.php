<?php
namespace App;
require_once "Models/Model.class.php";
require_once "Models/Livre.class.php";
use Model;
use PDO;

class LivreManager extends Model
{
    private $Livres;

    public function AjoutLivre($Livre)
    {
        $this->Livres[]=$Livre;
    }
    public function getLivre()
    {
        return $this->Livres;

    }

    public function chargementLivre()
    {
        $req=$this->getBdd()->prepare("SELECT * FROM `livres` ORDER BY `Id` ASC");
        $req->execute();
        $Boky=$req->fetchAll(PDO::FETCH_ASSOC);
      
        $req->closeCursor();

        foreach ($Boky as $livre ) 
        {
            $L=new Livre($livre["Id"],$livre["Titre"],$livre["nbPages"],$livre["image"]);

            $this->AjoutLivre($L);
        }
    }

    public function getLivreById($id)
    { 
      for($i=0; $i<count($this->Livres) ; $i++) 
      { 

        if($this->Livres[$i]->getID()===$id)
        {
            return $this->Livres[$i];
        }
      }
    }


}
?>