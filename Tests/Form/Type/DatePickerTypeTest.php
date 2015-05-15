<?php

namespace SumoCoders\FrameworkExampleBundle\Tests\Form\Type;

use SumoCoders\FrameworkExampleBundle\Form\Type\DatePickerType;

class DatePickerTypeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var DatePickerType
     */
    private $datePickerType;

    public function setUp()
    {
        $this->datePickerType = new DatePickerType();
    }

    public function tearDown()
    {
        $this->datePickerType = null;
    }

    public function testGetName()
    {
        $this->assertEquals(
            'datePicker',
            $this->datePickerType->getName()
        );
    }
}
