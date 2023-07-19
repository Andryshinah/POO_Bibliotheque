<?php
namespace App\Routeur;


 Class Routeur
{
    private $URL;
    private $ControllerInstance;
    

    public function Start()
    {
        $this->URL=[$_SERVER["REQUEST_URI"]];
        $result=explode("/",array_shift($this->URL));
        $URL=array_reverse($result);
        $_GET['page']=$URL[0];
        if (empty($_GET['page'])) 
        {
            header("POO_Bibliotheque/view/Accueil");
            
        }

        // elseif(!empty($_GET['page']) && $_GET['page'] === "/")
        // {
        //     header("POO_Bibliotheque/".$_GET['page']);
        // }
        // elseif(!empty($_GET['page']) && isset($_GET['page'])  )
        // {
        //     $this->ControllerInstance = new $_GET['page']."Controller"();
        //     // if(explode("/",$_GET['page']) != "/")
        //     // {
        //     //     $action=explode("/",$_GET['page']);
        //     //     $this->ControllerInstance->$action;
        //     // }

        // }
    }


}
?>