<?php
namespace Manwin\Bundle\CustomerBundle\Document;

use Doctrine\ODM\MongoDB\DocumentRepository;

class CustomerRepository extends DocumentRepository
{
	public function getByFirstLetter($letter) {
		
		$qb = $this->createQueryBuilder();
		  
		if('all' !== $letter ) {
			$qb
			->field('firstName')
			->equals(new \MongoRegex('/^'.$letter . '/i'));
		}
		
		$qb->sort('first_name', 'ASC')->sort('last_name', 'DESC');
		
		return $qb->getQuery()->execute();
	}
	
	

}