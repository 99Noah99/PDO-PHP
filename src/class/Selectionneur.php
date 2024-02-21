<?php
namespace App\class;
use DateTime;


class Selectionneur extends Humain{
    
    private Equipe $equipe;

    public function __construct(string $nom, string $prenom, datetime $dateNaissance, Equipe $equipe)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->equipe = $equipe;
    }

    public function GetEquipe(): Equipe
    {
        //faire lien avec class sélectionneur 

    }

}

?>