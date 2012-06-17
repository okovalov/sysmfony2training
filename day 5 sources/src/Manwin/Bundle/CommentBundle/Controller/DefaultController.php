<?php

namespace Manwin\Bundle\CommentBundle\Controller;

use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\SecureParam;
use Manwin\Bundle\CommentBundle\Entity\Comment;
use Manwin\Bundle\CommentBundle\Form\CommentType;

//use Symfony\Component\Security\Core\Exception\AccessDeniedException;


/**
* @Route("/customer/comment")
*/
class DefaultController extends Controller
{
    /**
     * @Route("/add", name="add_comment")
     * @Template()
     */
    public function indexAction()
    {
    	$token = $this->get('security.context')->getToken();
    	
    	$request = $this->getRequest();
    	$comment = new Comment();
    	$comment->setAuthor($token->getUsername());
    	
    	$form = $this->createForm(new CommentType(), $comment);
    	
    	if('POST' === $request->getMethod()) {
    		$form->bindRequest($request);
    		
    		if($form->isValid()) {
    			$em = $this->getDoctrine()->getEntityManager();
    			$em->persist($comment);
    			$em->flush();
    			
    			// Security
    			
    			// creating the ACL
    			$aclProvider  = $this->get('security.acl.provider');
				$objectIdentity = ObjectIdentity::fromDomainObject($comment);
				$acl = $aclProvider->createAcl($objectIdentity);
				
				// retrieving the security identity of the currently logged-in user
				//$securityContext = $this->get('security.context');
				
				// the first way
				//$user = $securityContext->getToken()->getUser();
				//$securityIdentity = UserSecurityIdentity::fromAccount($user);

				// the second way
				//$token = $this->get('security.context')->getToken();
                $securityIdentity = UserSecurityIdentity::fromToken($token);
				
				// grant owner access
				$acl->insertObjectAce($securityIdentity, MaskBuilder::MASK_OWNER);
				$aclProvider->updateAcl($acl);   
				
    			//$comment->setAuthor('the new author');
    			//$em->flush();
    			
    			//$em->detach($comment); // - after this that object will not managed by doctrine -disable persist
    			
    			
    			return $this->redirect($this->generateUrl('show_comment', array(
    			 'id'=> $comment->getId()
    			)));
    		}
    	}
    	
        return array('form' => $form->createView());
    }
    
    /**
     * @Route("/{id}/show", name="show_comment")
     * @ParamConverter("comment", class="ManwinCommentBundle:Comment")
     * @SecureParam(name="comment", permissions="VIEW")
     * @Template()
     */    
    public function showAction(Comment $comment) {
    	
    	// @ParamConverter("comment", class="ManwinCommentBundle:Comment")
    	/*$em = $this->getDoctrine()->getEntityManager();
    	$comment = $em
    	   ->getRepository('ManwinCommentBundle:Comment')
    	   ->find($id)
    	;
    	
    	if(!$comment) {
    		throw $this->createNotFoundException(sprintf('Unable to fetch ManwinCommentBundle:Comment entity object identified by #%u.', $id));
    	} */
    	
        /*$securityContext = $this->get('security.context');
        
        //@SecureParam(name="comment", permission="VIEW")
        if(!$securityContext->isGranted('VIEW', $comment)) {
        	throw new AccessDeniedException(sprintf('The user identified by "%s" is not alllowed to VIEW the ManwinCommentBundle:Comment entity identified by #%u', $securityContext->getToken()->getUsername(), $id));
        }
        */
        
        return array('comment' => $comment);
    }
}
