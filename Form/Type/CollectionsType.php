<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CollectionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'languages',
                'collection',
                array(
                    'type' => 'language',
                    'allow_add' => true,
                    'allow_delete' => true,
                )
            )
            ->add(
                'languages_without_label',
                'collection',
                array(
                    'type' => 'language',
                    'allow_add' => true,
                    'allow_delete' => true,
                    'options' => array(
                        'label_render' => false,
                    )
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'collections';
    }
}
