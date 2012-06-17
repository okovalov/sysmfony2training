<?php

namespace Manwin\Bundle\TrainingBundle\Controller;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}", name="greet" )
     * @Template()
     */
    public function indexAction($name)
    {
	    return array('name' => $name);
    }
    
    /**
     * @Route("/color/{color}", requirements={
     * 		"color" = "red|green|blue"
     * } )
     */
    public function selectColorAction($color){
    	
    	// An example of using cookies
    	/*
    	$cookie = new Cookie('my_theme', $color, time()+3600*24*31);
    	$response = $this->redirect($this->generateUrl('show_color'));
    	$response->headers->setCookie($cookie);
    	*/
    	
    	//return $response;
    	
    	//An example of using session
    	$request = $this->getRequest();
    	$session = $request->getSession();
    	$session->set('my_theme', $color);
    	
    	return $this->redirect($this->generateUrl('show_color'));
    	
    	
    	
    }

    /**
     * @Route("/color", name="show_color" )
     * @Template()
     */    
    public function colorAction(){
    	$request = $this->getRequest();
    	
    	// An example of using cookies
    	//$color = $request->cookies->get('my_theme');
    	
    	//An example of using session
    	$color = $request->getSession()->get('my_theme');
    	
    	return array('color' => $color);
    	
    }
    
    /**
     * @Template()
     * @Cache(smaxage=30)
     */     
    public function counterAction($foo) {
    	$counter = rand(0,3);
    	$counter++;
    	return array('counter' => $counter);
    	
    }
}
