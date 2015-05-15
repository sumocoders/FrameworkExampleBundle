<?php

namespace SumoCoders\FrameworkExampleBundle\Tests\DependencyInjection;

use SumoCoders\FrameworkExampleBundle\DependencyInjection\SumoCodersFrameworkExampleExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SumoCodersFrameworkExampleExtensionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SumoCodersFrameworkExampleExtension
     */
    protected $extension;

    public function setUp()
    {
        $this->extension = new SumoCodersFrameworkExampleExtension();
    }

    public function tearDown()
    {
        $this->extension = null;
    }

    public function testDefaultConfig()
    {
        $container = new ContainerBuilder();
        $this->extension->load(array(), $container);

        $this->assertTrue($container->has('example_menu_listener'));
    }
}
