<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ImportType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'data',
                'textarea',
                [
                    'attr' => [ 'rows' => 15 ],
                ]
            )
            ->add('import', 'submit');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'import';
    }
}
