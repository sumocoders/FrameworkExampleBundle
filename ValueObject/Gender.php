<?php

namespace SumoCoders\FrameworkExampleBundle\ValueObject;

/**
 * Class Gender
 * @author Wouter Sioen <wouter@sumocoders.be>
 */
class Gender
{
    private $gender;

    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';

    public function __construct($gender)
    {
        switch ($gender) {
            case 'm':
            case 'male':
            case 'man':
                $this->gender = self::GENDER_MALE;
                break;
            case 'f':
            case 'v':
            case 'female':
            case 'vrouw':
                $this->gender = self::GENDER_FEMALE;
                break;
            default:
                throw new \InvalidArgumentException('invalid gender');
        }
    }
}
