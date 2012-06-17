<?php
namespace Manwin\Bundle\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

/**
* @Route("/customer")
*/
class SecurityController extends Controller 
{
	/**
    * @Route("/account")
    * @Template()
    */
    public function indexAction() {
    	//$name = $this->get('security.context')->getToken()->getUsername();
    	$name = $this->get('security.context')->getToken()->isAuthenticated();
        //$name = $this->get('security.context')->getToken();
            	
    	return array('name' => $name);
    }
    
    /**
    * @Route("/login", name="customer_login")
    * @Template()
    */
    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        
        $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
    	return array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    	
        return array();
    }
    
    //@codeCoverageIgnoreStart
    
    /**
    * @Route("/auth", name="customer_auth")
    */
    public function authenticateAction() {
    	// this code will never be executed by symfony
        
    }
    
    /**
    * @Route("/logout", name="customer_logout")
    */
    public function logoutAction() {
        // this code will never be executed by symfony
    }
    //@codeCoverageIgnoreEnd    
}