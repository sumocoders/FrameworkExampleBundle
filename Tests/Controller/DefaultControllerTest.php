<?php
namespace SumoCoders\FrameworkExampleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Client;

class DefaultControllerTest extends WebTestCase
{
    /**
     * @var Client
     */
    private $client = null;

    public function setUp()
    {
        $this->client = static::createClient();
    }

    public function tearDown()
    {
        $this->client = null;
    }

    /**
     * @param string $method
     * @param string $url
     * @return Crawler
     */
    private function getCrawlerForRequest($method, $url)
    {
        return $this->client->request(
            $method,
            $url
        );
    }

    public function testHelloWorld()
    {
        $crawler = $this->getCrawlerForRequest('GET', '/hello/world');

        $this->assertGreaterThan(
            0,
            $crawler->filter('#main .container:contains("Hello world")')->count()
        );
    }
}
