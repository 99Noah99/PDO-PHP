<?php
namespace App\class;

class Stade {
    
    private string $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }

    public function getNom(): string
    {   
        return $this->nom;
    } 

    public function donneTexte() :string 
    {
        return 'Le nom du Stade est : ' . $this->nom;
    }


}


?>