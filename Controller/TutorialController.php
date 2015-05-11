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
        $form = $this->createForm(new DatePickerType());

        return array(
            'form' => $form->createView(),
        );
    }
}
