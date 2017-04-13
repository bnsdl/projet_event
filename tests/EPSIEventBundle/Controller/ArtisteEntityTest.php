<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use \EPSI\EventBundle\Entity\Artiste;

class ArtisteEntityTest extends WebTestCase
{
    public function testIncrementor()
    {
        $artiste = new Artiste;
        $artiste->setNbVisiteArtiste(12);
        $artiste->increaseNbVisite();

        $this->assertEquals(
            13,
            $artiste->getNbVisiteArtiste()
        );

    }

    public function testDateCreationArtisteIsDateTime()
    {
        $artiste = new Artiste();
        $dateCreationArtiste = $artiste->getDateCreation();

        $this->assertTrue(
            is_a($dateCreationArtiste, "DateTime")
        );
    }
}