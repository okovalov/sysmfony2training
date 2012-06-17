<?php

namespace Manwin\Bundle\CustomerBundle\Encoder;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class HashPasswordEncoder implements PasswordEncoderInterface
{
	private $algorithm;
	
	public function __construct($algorithm) 
	{
		$this->algorithm = $algorithm;
	}
	
	public function encodePassword($raw, $salt) 
	{
		$pwd = hash($this->algorithm, $raw);
		
		return hash($this->algorithm, $pwd.$salt);
	}
	
	public function isPasswordValid($encoded, $raw, $salt) 
	{
		return $encoded === $this->encodePassword($raw, $salt);
	}
	
}
