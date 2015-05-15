<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class DatePickerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $currentDate = new \DateTime();
        $dateInThePast = new \DateTime('20 june 1985 13:37:00');

        $builder
            ->add(
                'date_example1',
                'date',
                array(
                    'data' => $currentDate,
                    'widget' => 'choice',
                    'required' => false,
                )
            )
            ->add(
                'date_example2',
                'date',
                array(
                    'data' => $currentDate,
                    'widget' => 'text',
                    'required' => false,
                )
            )
            ->add(
                'date_example3',
                'date',
                array(
                    'data' => $dateInThePast,
                    'widget' => 'single_text',
                    'required' => false,
                )
            )
            ->add(
                'date_example4',
                'date',
                array(
                    'data' => $dateInThePast,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                )
            )
            ->add(
                'date_example5',
                'date',
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'date_type' => 'normal',
                    'required' => false,
                )
            )
            ->add(
                'date_example6',
                'date',
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'date_type' => 'start',
                    'minimum_date' => new \DateTime('last monday'),
                    'required' => false,
                )
            )
            ->add(
                'date_example7',
                'date',
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'date_type' => 'until',
                    'maximum_date' => new \DateTime('next friday'),
                    'required' => false,
                )
            )
            ->add(
                'date_example8',
                'date',
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'date_type' => 'range',
                    'minimum_date' => new \DateTime('last monday'),
                    'maximum_date' => new \DateTime('next friday'),
                    'required' => false,
                )
            )
            ->add(
                'datetime_example1',
                'datetime',
                array(
                    'data' => $currentDate,
                    'widget' => 'choice',
                    'required' => false,
                )
            )
            ->add(
                'datetime_example2',
                'datetime',
                array(
                    'data' => $currentDate,
                    'widget' => 'text',
                    'required' => false,
                )
            )
            ->add(
                'datetime_example3',
                'datetime',
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'required' => false,
                )
            )
            ->add(
                'time_example1',
                'time',
                array(
                    'data' => $currentDate,
                    'widget' => 'choice',
                    'required' => false,
                )
            )
            ->add(
                'time_example2',
                'time',
                array(
                    'data' => $currentDate,
                    'widget' => 'text',
                    'required' => false,
                )
            )
            ->add(
                'time_example3',
                'time',
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'required' => false,
                )
            )
            ->add(
                'birthday_example1',
                'birthday',
                array(
                    'data' => $dateInThePast,
                    'widget' => 'choice',
                    'required' => false,
                )
            )
            ->add(
                'birthday_example2',
                'birthday',
                array(
                    'data' => $dateInThePast,
                    'widget' => 'text',
                    'required' => false,
                )
            )
            ->add(
                'birthday_example3',
                'birthday',
                array(
                    'data' => $dateInThePast,
                    'widget' => 'single_text',
                    'required' => false,
                )
            )
            ->add(
                'birthday_example4',
                'birthday',
                array(
                    'data' => $dateInThePast,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                )
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'datePicker';
    }
}
