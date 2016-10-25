<?php

namespace SumoCoders\FrameworkExampleBundle\Controller;

use Knp\Menu\MenuItem;
use SumoCoders\FrameworkExampleBundle\Form\Type\ButtonIconType;
use SumoCoders\FrameworkExampleBundle\Form\Type\CollectionsType;
use SumoCoders\FrameworkExampleBundle\Form\Type\DatePickerType;
use SumoCoders\FrameworkExampleBundle\Form\Type\FieldsetType;
use SumoCoders\FrameworkExampleBundle\Form\Type\LabelsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
        $form = $this->createForm(DatePickerType::class);

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
        $form = $this->createForm(LabelsType::class);

        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/tutorial/button-icons")
     * @Template()
     */
    public function buttonIconsAction()
    {
        $form = $this->createForm(ButtonIconType::class);

        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/tutorial/fieldset")
     * @Template()
     */
    public function fieldsetAction()
    {
        $form = $this->createForm(FieldsetType::class);

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
        $form = $this->createForm(CollectionsType::class);

        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/tutorial/send-mail")
     * @Template()
     * @param Request $request
     * @return array
     */
    public function sendMailAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // get the message factory so we can create messages
            $messageFactory = $this->get('framework.message_factory');

            // create a simple message
            $message = $messageFactory->createHtmlMessage(
                'the subject',
                '<p>foo bar</p>'
            );

            // set some extra properties, just like you would do with a normal \Swift_Message
            $message->setTo(
                $this->getParameter('mailer_default_to_email')
            );

            // send it
            $this->get('mailer')->send($message);
        }

        return array(
            'form' => $form->createView(),
        );
    }
}
