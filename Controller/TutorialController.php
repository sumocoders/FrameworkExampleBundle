<?php

namespace SumoCoders\FrameworkExampleBundle\Controller;

use SumoCoders\FrameworkExampleBundle\Form\Type\DatePickerType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class TutorialController extends Controller
{
    /**
     * @Route("/tutorial/datepicker")
     * @Template()
     * @param Request $request
     * @return array
     */
    public function datePickerAction(Request $request)
    {
        $defaultData = array(
            'date_example1' => new \DateTime(),
            'date_example2' => new \DateTime(),
            'date_example3' => new \DateTime('20 june 1985 13:37:00'),
            'date_example4' => new \DateTime('20 june 1985 13:37:00'),
            'date_example5' => new \DateTime(),
            'date_example6' => new \DateTime(),
            'date_example7' => new \DateTime(),
            'date_example8' => new \DateTime(),
            'datetime_example1' => new \DateTime(),
            'datetime_example2' => new \DateTime(),
            'datetime_example3' => new \DateTime(),
            'time_example1' => new \DateTime(),
            'time_example2' => new \DateTime(),
            'time_example3' => new \DateTime(),
            'birthday_example1' => new \DateTime(),
            'birthday_example2' => new \DateTime(),
            'birthday_example3' => new \DateTime(),
            'birthday_example4' => new \DateTime(),
        );

        $form = $this->createForm(new DatePickerType(), $defaultData);

        return array(
            'form' => $form->createView(),
        );
    }
}
