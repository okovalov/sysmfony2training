<?php
namespace Manwin\Bundle\CustomerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\EmbeddedDocument()
 * 
 */
class Address 
{
	/** 
	 * @MongoDB\String() 
	 */
	private $street;
	
	public function setStreet($street) {
		$this->street = $street;
	}
	
    public function getStreet() {
        return $this->street;
    }	
	
	/** 
	 * @MongoDB\String(name="zip_code") 
	 */
	private $zipCode;

    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
    }	
    
    public function getZipCode() {
        return $this->zipCode;
    }
       	
	/** 
	 * @MongoDB\String() 
	 */
	private $city;
	
    public function setCity($city) {
        $this->city = $city;
    }	
    
    public function getCity() {
        return $this->city;
    }       
	
	/** 
	 * @MongoDB\String() 
	 */
	private $state;
	
    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }       
	
	/** 
	 * @MongoDB\String() 
	 */
	private $country;
	
    public function setCountry($country) {
        $this->country = $country;
    }	
	
    public function getCountry() {
        return $this->country;
    }       

}