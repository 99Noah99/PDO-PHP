<?php
use PHPUnit\Framework\TestCase;
use App\class\Stade;

class StadeTest extends TestCase{

    public function testgetNom(){
        $stade = new Stade('Paris');
        $this->assertEquals('Paris', $stade->getNom());
    }

    public function testDonneTexte(){
        $stade = new Stade('Paris');
        $this->assertEquals('Le nom du Stade est : Paris', $stade->donneTexte());
    }
}

?>