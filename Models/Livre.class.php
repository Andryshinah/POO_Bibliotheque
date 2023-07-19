<?php
namespace App;

class Livre

{
    private $id;
    private $titre;
    private $nbPage;
    private $image;

    public static $livres;

    public function __construct($id,$titre,$nbPage,$image)
    {
        $this->id=$id;
        $this->titre=$titre;
        $this->nbPage=$nbPage;
        $this->image=$image;

        self::$livres[]=$this;

    }

    public function setId($id)
    {
        $this->id=$id;
    }
    public function getID ()
    {
        return $this->id;
    }

    public function setTitre($titre)
    {
        $this->titre=$titre;
    }
    public function getTitre ()
    {
        return $this->titre;
    }
    
    public function setNbPage($nbPage)
    {
        $this->nbPage=$nbPage;
    }
    public function getNbpage ()
    {
       return  $this->nbPage;
    }

    public function setImage($image)
    {
       $this->image=$image;
    }
    public function getImage ()
    {
        return $this->image;
    }


}
?>