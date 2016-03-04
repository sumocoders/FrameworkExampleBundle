<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ButtonIconType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'example',
            SubmitType::class,
            [
                'label' => 'Bug',
                'icon' => 'fa fa-bug',
                'attr' => [
                    'class' => 'btn btn-large btn-default btn-block',
                ],
            ]
        );
    }
}
