<?php

namespace SumoCoders\FrameworkExampleBundle\Controller;

use Knp\Menu\MenuItem;
use SumoCoders\FrameworkExampleBundle\Form\Type\CollectionsType;
use SumoCoders\FrameworkExampleBundle\Form\Type\ImportType;
use SumoCoders\FrameworkExampleBundle\Form\Type\DatePickerType;
use SumoCoders\FrameworkExampleBundle\Form\Type\LabelsType;
use SumoCoders\FrameworkExampleBundle\ValueObject\Gender;
use SumoCoders\FrameworkExampleBundle\ValueObject\Person;
use SumoCoders\FrameworkExampleBundle\ValueObject\Name;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Ddeboer\DataImport\Reader\ArrayReader;
use Ddeboer\DataImport\Workflow;
use Ddeboer\DataImport\Writer\CallbackWriter;

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
     * @Route("/tutorial/import")
     * @Template()
     * @return array
     */
    public function importAction(Request $request)
    {
        $form = $this->createForm(new ImportType());
        $form->handleRequest($request);
        $processedData = [];

        if ($form->isValid()) {
            // when uploading a file, you can just use the CsvReader
            $data = $form->get('data')->getData();
            $data = preg_replace("/\r\n|\n\r|\n|\r/", "\n", $data);

            $lines = explode("\n", $data);
            $head = str_getcsv(array_shift($lines), ';');

            $array = array();
            foreach ($lines as $line) {
                $array[] = array_combine($head, str_getcsv($line, ';'));
            }

            $reader = new ArrayReader($array);
            $workflow = new Workflow($reader);
            $workflow->addWriter(new CallbackWriter(function ($row) use (&$processedData) {
                $processedData[] = new Person(
                    new Name($row['firstname'], $row['lastname']),
                    new Gender($row['gender'])
                );
            }));
            $workflow->process();
        } else {
            $defaultData = '"firstname";"lastname";"gender"';
            $defaultData .= "\n";
            $defaultData .= '"Wouter";"Sioen";"male"';
            $defaultData .= "\n";
            $defaultData .= '"Tijs";"Verkoyen";"m"';
            $defaultData .= "\n";
            $defaultData .= '"Katrien";"Vanhaute";"female"';

            $form->setData([ 'data' => $defaultData ]);
        }

        return [
            'form' => $form->createView(),
            'processedData' => $processedData,
        ];
    }
}
