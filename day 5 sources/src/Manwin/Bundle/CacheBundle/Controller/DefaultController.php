<?php

namespace Manwin\Bundle\CacheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/cache/expiration")
     * @ Template()
     * @ Cache(maxage=120)
     */
    public function indexAction()
    {
    	$response = new Response();
    	$response->setEtag('12345ll');
    	
    	if($response->isNotModified($this->getRequest())) {
    	   return $response;	
    	}
    	
    	return $response = $this->render(
    	   'ManwinCacheBundle:Default:index.html.twig',
    	   array(),
    	   $response
    	);
        
    }
    
    /**
     * @Route("/cache/shared")
     * @Template()
     * @Cache(smaxage=60)
     */
    public function sharedAction()
    {
    	return array();
        
    }
    
}
