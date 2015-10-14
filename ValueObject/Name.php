<?php

namespace SumoCoders\FrameworkExampleBundle\ValueObject;

/**
 * Class Name
 * @author Wouter Sioen <wouter@sumocoders.be>
 */
class Name
{
    private $firstName;
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}
