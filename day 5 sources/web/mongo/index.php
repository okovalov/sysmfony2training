<?php

try {
	$mongo = new Mongo();
	$db = $mongo->selectDB('manwin2');
	
	// if we have pipe error -
	$db->wtimeout = 1000; 
	// if we have pipe error -
	
//	$collections = $db->listCollections();
	
//	foreach ($collections as $collection) {
//		echo $collection->getName();
//		echo '<br />';
//		
//	}
	
	$collection = $db->selectCollection('clients');
	$query = array(
	   '$set' =>  array(
	       'nb_projects' => 1
	   ) );
	   
	$collection->update( array(), $query, array(
	   'multiple' => true,
	   'safe' => true
	));
	
	// or - but the first one is faster 
	//$collection = $db->clients;
	
//	$client = array(
//	   'first_name' => 'Steve',
//	   'last_name' => 'Williams',
//	   'hobbies' => array(
//	       'biking', 'swimming'
//	   ),
//	   'company' => 'Microsoft',
//	   'address' => array(
//	       'city' => 'Richmond',
//	       'contry' => 'United States'
//	   )
//	);
	
//	$collection->insert($client);
	

//	$client = $collection->findOne(array(
//	   'company' => 'Microsoft',
//	   'hobbies' => array(
//	       '$in' => array(
//	           'swimming'
//	       )
//	   )
//	));
//	
//	$client['address']['city'] = 'San Francisco';
//
//	$collection->save($client);
	
	
  echo '<pre>';
  //print_r($client);
  echo '</pre>';
		
} catch (Exception $e) {
	// Error...
	echo $e->getMessage();
}
