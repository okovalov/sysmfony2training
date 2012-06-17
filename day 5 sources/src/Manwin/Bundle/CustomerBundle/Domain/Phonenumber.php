<?php

namespace Manwin\Bundle\CustomerBundle\Domain;

use Symfony\Component\Validator\Constraints as Assert;

class Phonenumber 
{
    static private $types = array(
                "mobile" => 'Mobile',
                "home" => 'Home',
                "pro" => 'Professional',
                "fax" => 'Fax'
            );
            
    static public function getTypes() 
    {
    	return static::$types;
    } 

    static public function getValidTypes() 
    {
        return array_keys( static::$types );
    } 
        
    /**
    * @Assert\NotBlank()
    * @Assert\MinLength(8)
    * @Assert\MaxLength(15)
    * @Assert\Regex("/^[0-9]+$/")  
    */  
    private $number;

    /**
    * @Assert\NotBlank()
    * @Assert\Choice(callback="getValidTypes")
    */      
	private $type;
	
	public function setNumber($number)
	{
		$this->number = $number;
	}
	
    public function getNumber() 
    {
        return $this->number;
    }
	
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function getType() 
    {
        return $this->type;
    }    
} 