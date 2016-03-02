<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
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
                CollectionType::class,
                array(
                    'entry_type' => LanguageType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                )
            )
            ->add(
                'languages_without_label',
                CollectionType::class,
                array(
                    'entry_type' => LanguageType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'entry_options' => array(
                        'label_render' => false,
                    )
                )
            );
    }
}
