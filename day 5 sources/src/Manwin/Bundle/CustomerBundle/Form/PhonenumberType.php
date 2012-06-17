<?php
namespace Manwin\Bundle\CustomerBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Manwin\Bundle\CustomerBundle\Domain\Phonenumber;

class PhonenumberType extends AbstractType 
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
          ->add('number')
          ->add('type', 'choice',array(
            'expanded' => true,
            'choices' => Phonenumber::getTypes()
          ))
         ;
         
        // return $builder;
    }
    
    public function getName()
    {
        return 'phone';
    } 

    public function getDefaultOptions(array $options = array())
    {
    	return array(
    	   'data_class' => 'Manwin\Bundle\CustomerBundle\Domain\Phonenumber'
    	);
    }
}
