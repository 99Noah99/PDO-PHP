<?php
use PHPUnit\Framework\TestCase;
use App\class\Arbitre;

class ArbitreTest extends TestCase
{
   public function testAll(): void
   {
       $unArbitre = new Arbitre ("Pitana","Nestor", new DateTime("1975-06-17"), "Argentin");
       $this->assertEquals("Argentin", $unArbitre->getPays());
       $unArbitre->setPays("Brésilien");
       $this->assertEquals("Brésilien", $unArbitre->getPays());
       $this->assertEquals("Prénom : Nestor Nom : Pitana Date de naissance 17/06/1975 Pays : Brésilien", $unArbitre->donneTexte());
   }
}

?>
