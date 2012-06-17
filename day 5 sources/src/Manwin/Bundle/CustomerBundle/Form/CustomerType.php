<?php

namespace Manwin\Bundle\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password')
            ->add('salt')
            ->add('fullName')
            ->add('isActive')
        ;
    }

    public function getName()
    {
        return 'manwin_bundle_customerbundle_customertype';
    }
}
