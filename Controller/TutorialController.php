<?php

namespace SumoCoders\FrameworkExampleBundle\Controller;

use SumoCoders\FrameworkExampleBundle\Form\Type\DatePickerType;
use SumoCoders\FrameworkExampleBundle\Form\Type\LabelsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TutorialController extends Controller
{
    /**
     * @Route("/tutorial/datepicker")
     * @Template()
     * @return array
     */
    public function datePickerAction()
    {
        $form = $this->createForm(new DatePickerType());

        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/tutorial/labels")
     * @Template()
     */
    public function labelsAction()
    {
        $form = $this->createForm(new LabelsType);

        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/tutorial/statistics")
     * @Template()
     */
    public function statisticsAction()
    {
       return array();
    }
}
