<?php
namespace Manwin\Bundle\CustomerBundle\Domain;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Registration
{
	/**
    * @Assert\NotBlank()
    * @Assert\MinLength(8)
    * @Assert\MaxLength(15)
    * @Assert\Regex("/^[a-zA-Z0-9]+$/")  
    */
    private $username;

    /**
    * @Assert\NotBlank()
    * @Assert\MinLength(8)
    */    
    private $password;
    
    /**
    * @Assert\NotBlank()
    * @Assert\Email()
    */    
    private $email;
    
    /**
    * @Assert\Date()
    */    
    private $birthdate;
    
    private $biography;
    
    /**
    * @Assert\File(maxSize=2097152, mimeTypes={
    *   "image/gif",
    *   "image/jpg",
    *   "image/jpeg",
    *   "image/png"
    * })
    */        
    private $avatar;
    
    /**
    * @Assert\All({
    *   @Assert\NotBlank(),
    *   @Assert\MinLength(2),
    *   @Assert\MaxLength(15)
    * })
    */    
    private $skills;
    
    private $phonenumber;
    
    public function setPhonenumber(Phonenumber $phone)
    {
    	$this->phonenumber = $phone;
    }

    public function getPhonenumber()
    {
        return $this->phonenumber;
    }
    
    public function setSkills(array $skills)
    {
    	$this->skills = $skills;
    }
    
    public function getSkills()
    {
    	return $this->skills;
    }
    
    public function setUsername($username) 
    {
    	$this->username = $username;
    }

    public function getUsername() 
    {
        return $this->username;
    }
        
    public function setPassword($password) 
    {
        $this->password = $password;
    }

    public function getPassword() 
    {
        return $this->password;
    }
        
    public function setEmail($email) 
    {
        $this->email = $email;
    }

    public function getEmail() 
    {
        return $this->email;
    }
    
    public function setBirthdate($birthdate) 
    {
        $this->birthdate = $birthdate;
    }

    public function getBirthdate() 
    {
        return $this->birthdate;
    }
    
    public function setBiography($biography) 
    {
        $this->biography = $biography;
    }
    
    public function getBiography() 
    {
        return $this->biography;
    }
    
    public function setAvatar(UploadedFile $file) 
    {
        $this->avatar = $file;
    }
    
    public function getAvatar() 
    {
        return $this->avatar;
    }
    
    
    /**
    * @Assert\True(message="The birthdate is not valid.")
    */    
    public function isBirthdateValid()
    {
    	if(!$this->birthdate ) {
    	   return true;
    	}

        return checkdate(
           $this->birthdate->format('m'),
           $this->birthdate->format('d'),
           $this->birthdate->format('Y')           
        );
    	
        $today = new \DateTime();
        
        //return $this->birthdate < $today ;
        return $this->birthdate->format('U') < strtotime(date('Y-m-d')) ;
         
    	//return checkdate(
    	//   $this->birthdate->format('m'),
        //   $this->birthdate->format('d'),
        //   $this->birthdate->format('Y')    	   
    	//);
    }
     
    
}