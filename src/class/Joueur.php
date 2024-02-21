<?php
namespace App\class;
use DateTime;

class Joueur extends Humain{
    
    private int $numeroMaillot;

    public function __construct(string $nom, string $prenom, datetime $dateNaissance, int $numeroMaillot)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->numeroMaillot = $numeroMaillot;
    }

    public function getNumeroMaillot(): int
    {
        return $this->numeroMaillot;
    }

    public function setNumeroMaillot($numeroMaillot): void
    {
        if($numeroMaillot != "")
            $this->numeroMaillot = $numeroMaillot;
        else
            throw new \Exception("Le numéro de maillot ne peut pas être vide");
    }

    public function getEquipe()
    {
        // a faire le getEquipe avec la liaison vers la class Equipe
    }

    public function donneTexte(): string
    {
        return 'Le numéro de maillot du joueur est : ' . $this->numeroMaillot;
    }
    
}

?>