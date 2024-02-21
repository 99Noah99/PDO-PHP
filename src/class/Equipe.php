<?php
namespace App\class;


class Equipe{
     
    private string $pays;

    public function __construct(string $pays)
    {
        $this->pays = $pays;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function AjouterJoueur(): void
    {
        // faire le lien avec la class joueur
    }

    public function GetEstEntrainée(): Selectionneur
    {
        //faire lien avec class sélectionneur 

    }

    public function SetSelectionneur(): void
    {
        
    }

}

?>