<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use SumoCoders\FrameworkCoreBundle\Form\Type\FieldsetType as SumoCodersFieldsetType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class FieldsetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'fieldset',
            SumoCodersFieldsetType::class,
            [
                'fieldset_class' => 'col-xs-12 col-sm-6',
                'open_row' => true,
                'legend' => 'labels.label.example.fieldset.name',
                'fields' => function (FormBuilderInterface $builder) {
                    $builder
                        ->add(
                            'input',
                            TextType::class,
                            [
                                'label' => 'labels.label.example.fieldset.input'
                            ]
                        );
                },
            ]
        );
    }
}
