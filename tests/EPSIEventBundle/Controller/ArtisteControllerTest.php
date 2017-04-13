<?php


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class ArtisteControllerTest extends WebTestCase
{

    public function testListArtiste()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/artiste');

        $this->assertGreaterThan(
            1,
            $crawler->filter('a')->count()
        );
    }

//    public function testAddField()
//    {
//        $client = static::createClient();
//        $crawler = $client->request('GET', '/artiste/new');
//        // Get the form.
//        $form = $crawler->selectButton('artiste_Sauvegarder')->form();
//
//        // Get the raw values.
//        $values = $form->getPhpValues();
//
//        // Add fields to the raw values.
//        $values['foo']['li'][0]['name'] = 'foo';
//        $values['bar']['li'][1]['name'] = 'bar';
//
//        // Submit the form with the existing and new values.
//        $crawler = $client->request($form->getMethod(), $form->getUri(), $values,
//            $form->getPhpFiles());
//
//        // The 2 tags have been added to the collection.
//        $this->assertEquals(
//            2,
//            $crawler->filter('input')->count()
//        );
//    }


}
