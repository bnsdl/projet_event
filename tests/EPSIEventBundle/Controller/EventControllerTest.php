<?php

use \Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class EventControllerTest extends WebTestCase
{
    public function testListEvent()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/event');

        $this->assertGreaterThan(
            1,
            $crawler->filter('a')->count()
        );
    }

//    public function testNewEvent() {
//
//        $client = static::createClient();
//        $crawler = $client->request('GET', '/event/new');
//
//        $form = $crawler->selectButton("event_Sauvegarder")->form();
//
////        $form['event[nomEvenement]'] = 'PhpUnitEvent';
////        $form['description'] = 'Event avec phpUnit !';
//
//        $crawler = $client->submit($form);
//    }
}