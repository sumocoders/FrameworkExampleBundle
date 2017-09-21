<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use IntlDateFormatter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
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
                DateType::class,
                array(
                    'format' => IntlDateFormatter::LONG,
                    'data' => $currentDate,
                    'widget' => 'choice',
                    'required' => false,
                    'label' => 'datePicker.date.example',
                )
            )
            ->add(
                'date_example2',
                DateType::class,
                array(
                    'data' => $dateInThePast,
                    'widget' => 'single_text',
                    'required' => false,
                    'label' => 'datePicker.date.example',
                )
            )
            ->add(
                'date_example3',
                DateType::class,
                array(
                    'data' => $dateInThePast,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                    'label' => 'datePicker.date.example',
                )
            )
            ->add(
                'date_example4',
                DateType::class,
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                    'label' => 'datePicker.date.example',
                )
            )
            ->add(
                'date_example5',
                DateType::class,
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'minimum_date' => new \DateTime('last monday'),
                    'required' => false,
                    'label' => 'datePicker.date.example',
                )
            )
            ->add(
                'date_example6',
                DateType::class,
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'maximum_date' => new \DateTime('next friday'),
                    'required' => false,
                    'label' => 'datePicker.date.example',
                )
            )
            ->add(
                'date_example7',
                DateType::class,
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'minimum_date' => new \DateTime('last monday'),
                    'maximum_date' => new \DateTime('next friday'),
                    'required' => false,
                    'label' => 'datePicker.date.example',
                )
            )
            ->add(
                'datetime_example1',
                DateTimeType::class,
                array(
                    'date_format' => IntlDateFormatter::LONG,
                    'data' => $currentDate,
                    'widget' => 'choice',
                    'required' => false,
                    'label' => 'datePicker.datetime.example',
                )
            )
            ->add(
                'datetime_example2',
                DateTimeType::class,
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'required' => false,
                    'datetimepicker' => true,
                    'label' => 'datePicker.datetime.example',
                )
            )
            ->add(
                'time_example1',
                TimeType::class,
                array(
                    'data' => $currentDate,
                    'widget' => 'choice',
                    'required' => false,
                    'label' => 'datePicker.time.example',
                )
            )
            ->add(
                'time_example2',
                TimeType::class,
                array(
                    'data' => $currentDate,
                    'widget' => 'single_text',
                    'required' => false,
                    'label' => 'datePicker.time.example',
                )
            )
            ->add(
                'birthday_example1',
                BirthdayType::class,
                array(
                    'format' => IntlDateFormatter::LONG,
                    'data' => $dateInThePast,
                    'widget' => 'choice',
                    'required' => false,
                    'label' => 'datePicker.birthday.example',
                )
            )
            ->add(
                'birthday_example2',
                BirthdayType::class,
                array(
                    'data' => $dateInThePast,
                    'widget' => 'single_text',
                    'required' => false,
                    'label' => 'datePicker.birthday.example',
                )
            )
            ->add(
                'birthday_example3',
                BirthdayType::class,
                array(
                    'data' => $dateInThePast,
                    'widget' => 'single_text',
                    'datepicker' => true,
                    'required' => false,
                    'label' => 'datePicker.birthday.example',
                )
            )
        ;
    }
}
