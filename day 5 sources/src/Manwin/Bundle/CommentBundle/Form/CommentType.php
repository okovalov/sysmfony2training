<?php

namespace Manwin\Bundle\CommentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('author')
            ->add('content')
            //->add('createdAd')
        ;
    }

    public function getName()
    {
        return 'comment';
    }
}
