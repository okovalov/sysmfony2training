<?php

namespace Manwin\Bundle\CustomerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Manwin\Bundle\CustomerBundle\Domain\Registration;
use Manwin\Bundle\CustomerBundle\Form\RegistrationType;
    
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    /**
     * @Route("/hash/{password}")
     * @Template()
     */
    public function indexAction($password)
    {
    	$encoder = $this->get('manwin.password_encoder');
    	$encoded = $encoder->encodePassword($password, 'azerty');
    	$res = $encoder->isPasswordValid($encoded, $password, 'azerty2');
    	
        return array(
        	'password' => $password,
        	'encoded' => $encoded,
            'res' => $res,
        );
    }

    /**
     * @Route("/register", name="registration")
     * @Template()
     */    
    public function registerAction()
    {
        $registration = new Registration();
        $registration->setSkills(array('','',''));
        
        $form = $this->createForm(new RegistrationType(), $registration);

        
        $request = $this->getRequest();
        
        if('POST' === $request->getMethod()) 
        {
            $form->bindRequest($request);

            if($form->isValid())
            {
            	// send an email etc
            	$message = \Swift_Message::newInstance()
            	   ->setTo($registration->getEmail())
            	   ->setFrom(array('website@example.com' => 'Registration Department'))
            	   ->setSubject('Registration confirmation')
            	   ->setBody($this->renderView(
            	       'ManwinCustomerBundle:Mail:registration.txt.twig',
            	       array(
            	           'user' => $registration
            	       )
            	   ))
            	;
            	
            	if ($file = $registration->getAvatar() ) 
            	{
            		//$newName = $registration->getUserName().'.'.$file->guessExtension();
            		$newName = $registration->getUserName().'.'.$file->guessExtension();
            		$target = $this->container->getParameter('avatars_dir').'/'.$newName;
            		
                    $file->move(
                          $this->container->getParameter('avatars_dir'),
                          $newName
                    );
                                		
            		$attachment = \Swift_Attachment::fromPath(        		  
            		      $target,
            		      $file->getClientMimeType()
            		)
            		->setFilename($newName);
                                		
            		$message->attach($attachment);

            	}
            	
            	$this->get('mailer')->send($message);
            	
            	return $this->redirect($this->generateUrl('register_success'));
            }
        }
        
        return array('form' => $form->createView());
        
    }
}
