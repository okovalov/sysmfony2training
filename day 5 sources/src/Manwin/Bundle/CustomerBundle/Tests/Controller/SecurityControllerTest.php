<?php

namespace Manwin\Bundle\CustomerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testIndex()
    {
    	$client = static::createClient();
    	
    	// go to the login form page
    	$crowler = $client->request('GET', '/customer/login');
    	
    	$response = $client->getResponse();
//    	
//    	$this->assertRegExp(
//    	   '/There are \d+ people connected/',
//    	   $response->getContent()
//    	);
//    	
//        $this->assertEquals(
//           3,
//           $crowler->filter('#header #menu_head li')->count()
//        );
        
        //Fill and post the form
        $form = $crowler->selectButton('LOGIN')->form();
        $form['_username'] = 'foobar';
        $form['_password'] = 'barfoo';
        
        //$crowler = $client->submit($form);
        $client->submit($form);
        $crowler = $client->followRedirect();
        
        //echo $client->getResponse()->getContent();
        //echo $client->getResponse()->getContent();
        
        $this->assertEquals(
           1,
           $crowler->filter('html:contains("Bad credentials")')->count()
        );        

        //Fill and post the form
        $form = $crowler->selectButton('LOGIN')->form();
        $form['_username'] = 'hhamon';
        $form['_password'] = 'secret2';
        
        //$crowler = $client->submit($form);
        $client->submit($form);
        $crowler = $client->followRedirect();
        
        //echo $client->getResponse()->getContent();
        //echo $client->getResponse()->getContent();
        
        $this->assertEquals(
           1,
           $crowler->filter('html:contains("You are on a secured page")')->count()
        );

        $container = $client->getContainer();
        $token = $container->get('security.context')->getToken();

        $this->assertEquals(
           'hhamon',
           $token->getUsername()
        );
        
        //profiler
        $profile = $client->getProfile();

        $this->assertLessThanOrEqual(
           10,
           $profile->getCollector('db')->getQueryCount()
        );
        
        // log out from the interface
        $link = $crowler->selectLink('Logout')->link();
        
        $client->click($link);
        $crowler = $client->followRedirect();
        
        $this->assertEquals(
           '/customer/login',
           $client->getRequest()->getPathInfo()
        );        
        
    }
}
