<?php

namespace Manwin\Bundle\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/about")
     * @Template()
     */
    public function indexAction()
    {
    	$message = 'My name is %name%';
    	
    	$translator = $this->get('translator');
    	$translated = $translator->trans(
    	   $message,
    	   array('%name%' => 'Thomas'),
	    	   'about',
	    	   'fr'
    	);
    	
    	//die($translated);
    	
        return array();
    }
    
    public function switchLocaleAction() {
    	$request = $this->getRequest();
    	$session = $request->getSession();
    	//$session->setLocale('fr');
    	$session->setLocale($request->getPreferredLanguage(array('en', 'fr')));
    }
}
