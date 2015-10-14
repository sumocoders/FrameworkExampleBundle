<?php

namespace SumoCoders\FrameworkExampleBundle\Controller;

use Knp\Menu\MenuItem;
use SumoCoders\FrameworkExampleBundle\Form\Type\CollectionsType;
use SumoCoders\FrameworkExampleBundle\Form\Type\DatePickerType;
use SumoCoders\FrameworkExampleBundle\Form\Type\LabelsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

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

    /**
     * @Route("/tutorial/custom-bread-crumb")
     * @Template()
     */
    public function customBreadCrumbAction(Request $request)
    {
        /** @var /SumoCoders\FrameworkCoreBundle\BreadCrumb\BreadCrumbBuilder $breadCrumbBuilder */
        $breadCrumbBuilder = $this->get('framework.breadcrumb_builder');
        $factory = $this->get('knp_menu.factory');

        $breadCrumbBuilder->dontExtractFromTheRequest();
        $item = (new MenuItem('foo.bar', $factory))
            ->setlabel('First!')
            ->setUri(
                $this->generateUrl('sumocoders_frameworkexample_tutorial_custombreadcrumb') . '#first'
            );

        $breadCrumbBuilder->addItem($item);
        $breadCrumbBuilder->addSimpleItem('Second');
        $breadCrumbBuilder->addSimpleItem(
            'Third',
            $this->generateUrl('sumocoders_frameworkexample_tutorial_custombreadcrumb') . '#third'
        );

        return array();
    }

    /**
     * @Route("/tutorial/collections")
     * @Template()
     * @return array
     */
    public function collectionsAction()
    {
        $form = $this->createForm(new CollectionsType());

        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/tutorial/api")
     * @Template()
     * @return array
     */
    public function apiAction()
    {
        return [];
    }
}
