<?php

namespace Manwin\Bundle\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
* @Route("/customer/man")
*/

class CustomerManagerController extends Controller
{
	/**
	 * @Route("/{letter}", defaults={"letter"="all"})
	 * @Template()
     */	
	public function indexAction($letter)
	{
		$dm = $this->get('doctrine.odm.mongodb.document_manager');
		
		$repository = $dm->getRepository('ManwinCustomerBundle:Customer');
		
		return array('customers' => $repository->getByFirstLetter($letter));
		//return array('customers' => $repository->findAll());
		
	}

}
