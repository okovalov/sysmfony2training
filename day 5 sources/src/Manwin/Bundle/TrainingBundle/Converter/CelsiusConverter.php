<?php
namespace Manwin\Bundle\TrainingBundle\Converter;

class CelsiusConverter 
{
	private $value;
	
	public function __construct($value) {
	    $this->setValue($value);		
	}
	
	public function setValue($value) {
		
		if ($value < -273) {
			throw new \InvalidArgumentExceptation('Value must be gtreater that -273');
		}
		
		$this->value = (float) $value;
	}

	public function getValue() {
		return $this->value;
	}
	
	public function toFahrenheit() {
		return ($this->value * 9) / 5 + 32;
	}
} 