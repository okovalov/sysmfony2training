<?php
namespace Manwin\Bundle\CustomerBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="clients", repositoryClass="Manwin\Bundle\CustomerBundle\Document\CustomerRepository")
 * 
 */
class Customer 
{
	/**
	 * @MongoDB\Id()
	 */
	private $id;
	
	public function getId()
	{
		return $this->id;
	}
	
    /**
     * @MongoDB\String(name="first_name")
     */
    private $firstName;	

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @MongoDB\String(name="last_name")
     */
    private $lastName; 

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @MongoDB\String()
     */
    private $company; 

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }
    
    /**
     * @MongoDB\Date()
     */
    private $birthday; 

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTime $birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @MongoDB\Int(name="nb_projects")
     */
    private $nbProjects; 

    public function getNbProjects()
    {
        return $this->nbProjects;
    }

    public function setNbProjects($nbProjects)
    {
        $this->nbProjects = $nbProjects;
    }

    /**
     * @MongoDB\Collection()
     */
    private $hobbies; 

    public function addHobbie($hobby)
    {
        if(!in_array($hobby, $this->hobbies)) {
        	$this->hobbies[] = $hobby;
        }
    }

    public function setHobbies($hobby)
    {
    	foreach ($hobbies as $hobby) {
            $this->addHobbie($hobby);		
    	}
    	
    }    

    public function getHobbies()
    {
        return $this->hobbies;
    }
        
    /**
     * @MongoDB\EmbedOne(targetDocument="Address")
     */
    private $address; 

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    
    
    public function __construct()
    {
    	$this->hobbies = array();
    	$this->nbProjects = 0;
    }
}