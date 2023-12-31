<?php
namespace App;
require_once "Models/Model.class.php";
require_once "Models/Livre.class.php";
use Model;
use PDO;

class LivreManager extends Model
{
    private $Livres=array();

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
        $req = $this->getBdd()->prepare("SELECT * FROM `livres` WHERE `Statut_de_suppression`=0 ORDER BY `Id` ASC");
        $req->execute();
        $Boky = $req->fetchAll(PDO::FETCH_ASSOC);
    
        $req->closeCursor();
    
        foreach ($Boky as $livre) {
            $L = new Livre($livre["Id"], $livre["Titre"], $livre["nbPages"], $livre["image"]);
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

    public function AjoutLivreToBDD( $titre, $nbPages, $image)
    { 
        $req = $this->getBdd()->prepare("INSERT INTO `livres`( `Titre`, `nbPages`, `image`,`Statut_de_suppression`) VALUES ( :titre, :nbPages, :image,:statut)");
        $req->bindParam(':titre', $titre);
        $req->bindParam(':nbPages', $nbPages);
        $req->bindParam(':image', $image);
        $req->bindValue(':statut', 0,PDO::PARAM_INT);
        $req->execute();
    }
    public function ModifierLivreBDD($id, $titre, $nbPages, $image)
    { 
        $req = $this->getBdd()->prepare("UPDATE `livres` SET `Titre`=:titre, `nbPages`=:nbPages, `image`=:image, `Statut_de_suppression`=0 WHERE `Id`=:id");
        $req->bindParam(':id', $id, PDO::PARAM_INT); 
        $req->bindParam(':titre', $titre);
        $req->bindParam(':nbPages', $nbPages, PDO::PARAM_INT); 
        $req->bindParam(':image', $image);
        $req->execute();
    }
    
    
    public function SupprimerLivreToBDD($id)
    { 
        $req = $this->getBdd()->prepare("DELETE FROM `livres` WHERE `Id`=".$id);
        $req->execute();
    }
    
    public function SuppressionLogiqueLivreToBDD($id)
    { 
        $req = $this->getBdd()->prepare("UPDATE `livres` SET `Statut_de_suppression`= 1 WHERE Id=".$id);
        $req->execute();
    }
    


}
?>