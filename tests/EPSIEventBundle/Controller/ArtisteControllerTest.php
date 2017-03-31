<?php


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class ArtisteControllerTest extends WebTestCase
{

    public function testListArtiste()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/event');

        $this->assertGreaterThan(
            1,
            $crawler->filter('a')->count()
        );
    }


}
