<?php

namespace SumoCoders\FrameworkExampleBundle\ValueObject;

/**
 * Class Person
 * @author Wouter Sioen <wouter@sumocoders.be>
 */
class Person
{
    private $name;
    private $gender;

    public function __construct(Name $name, Gender $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}
