<?php
use PHPUnit\Framework\TestCase;
use App\class\Joueur;

class JoueurTest extends TestCase{
    
    public function testGetNumeroMaillot()
    {
        $joueur = new Joueur("Giroud", "Olivier", new DateTime("1986-09-30"),35);
        $this->assertEquals(35, $joueur->getNumeroMaillot());
    }

    public function testSetNumeroMaillot()
    {
        $joueur = new Joueur("Giroud", "Olivier", new DateTime("1986-09-30"),35);
        $joueur->setNumeroMaillot(10);
        $this->assertEquals(10,$joueur->getNumeroMaillot());
    }

    public function testGetEquipe()
    {
        //faire liaison d'abord
    }

    public function testDonneText()
    {
        $joueur = new Joueur("Giroud", "Olivier", new DateTime("1986-09-30"),35);
        $this->assertEquals('Le numéro de maillot du joueur est : 35', $joueur->donneTexte()); 
    }

}

?>