<?php
namespace Manwin\Bundle\CustomerBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
	public function testIndex()
    {
        $client = static::createClient();
        
        // go to /register and check emails quantity
        
        $crowler = $client->request('GET', '/register');
        
        $response = $client->getResponse();
        
        $form = $crowler->selectButton('Register')->form();
        
        $form['registration[email]'] = 'me@example.com';
        $form['registration[username]'] = 'hhamon123456';
        $form['registration[password]'] = 'secret123456';
        $form['registration[skills][0]'] = 'php';
        $form['registration[skills][1]'] = 'mysql';
        $form['registration[skills][2]'] = 'css';
        $form['registration[phonenumber][number]'] = '0102030405';
        $form['registration[phonenumber][type]'] = 'mobile';
        
        $client->submit($form);
        $profile = $client->getProfile();
        
        //echo $client->getResponse()->getContent();
        
        $this->assertEquals(
           1,
           $profile->getCollector('swiftmailer')->getMessageCount()
        );        
        
        //$crowler = $client->followRedirect();
        
        
    }
	
}