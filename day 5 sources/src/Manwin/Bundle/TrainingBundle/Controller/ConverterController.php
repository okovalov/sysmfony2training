<?php 

namespace Manwin\Bundle\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Manwin\Bundle\TrainingBundle\Converter\CelsiusConverter;

class ConverterController extends Controller
{
	
    /**
     * @Route("/celsius/{celsius}/fahrenheit.{_format}", requirements={
     * 		"celsius" = "\-?\d+",
     * 		"_format" = "xml|json"
     * })
     * @Method( "GET" )
     * @Template()
     */
    public function celsiusAction($celsius, $_format)
    {
    	$converter = new CelsiusConverter($celsius);
				
		return array(
			'fahrenheit' => $converter->toFahrenheit(),
			'celsius' => $converter->getValue() 
		);
		
    }
    	
}