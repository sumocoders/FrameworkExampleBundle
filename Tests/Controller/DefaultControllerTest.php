<?php
namespace SumoCoders\FrameworkExampleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/hello/world');

        $this->assertGreaterThan(
            0,
            $crawler->filter('#main .container:contains("Hello world")')->count()
        );
    }
}
