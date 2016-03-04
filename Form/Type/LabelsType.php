<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class LabelsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addLabelsSection($builder, $options);
    }

    private function addLabelsSection($builder, array $options)
    {
        $builder
            ->add(
                'label_example_with_help_block_1',
                TextType::class,
                array(
                    'help_block' => 'Block help text, can inlude <strong>HTML formatting</strong>',
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_help_label',
                TextType::class,
                array(
                    'help_label' => 'Label help text',
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_tooltip',
                TextType::class,
                array(
                    'required' => false,
                    'help_label_tooltip' => array(
                        'title' => 'Label tooltip text',
                    ),
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_tooltip_without_icon',
                TextType::class,
                array(
                    'help_label_tooltip' => array(
                        'title' => 'Label tooltip text',
                        'text' => 'read more',
                        'icon' => false,
                    ),
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_popover',
                TextType::class,
                array(
                    'help_label_popover' => array(
                        'title' => 'Label popover title',
                        'content' => 'Content for popover help, can include <strong>HTML</strong>'
                    ),
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_popover_and_options',
                TextType::class,
                array(
                    'help_label_popover' => array(
                        'title' => 'Label popover title to the right',
                        'placement' => 'right',
                        'icon' => 'question',
                        'content' => 'Content for popover help, can include <strong>HTML</strong>'
                    ),
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            );
    }
}
