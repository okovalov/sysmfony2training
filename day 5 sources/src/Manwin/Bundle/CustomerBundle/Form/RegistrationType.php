<?php
namespace Manwin\Bundle\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class RegistrationType extends AbstractType 
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder
		  ->add('username')
		  ->add('password', 'password')
		  ->add('email', 'email')
		  ->add('birthdate', 'birthday', array('required' => false))
		  ->add('biography', 'textarea', array('required' => false))
		  ->add('avatar', 'file', array('required' => false))
		  ->add('skills', 'collection', array(
		      'type' => 'url',
		      'allow_add' => true,
		      'allow_delete' => true,
		  ))
		  ->add('phonenumber', new PhonenumberType())
		 ;
		 
		// return $builder;
	}
	
    public function getName()
    {
        return 'registration';
    }	
}
