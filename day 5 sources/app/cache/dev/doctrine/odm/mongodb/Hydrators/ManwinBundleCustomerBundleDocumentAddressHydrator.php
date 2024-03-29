<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class ManwinBundleCustomerBundleDocumentAddressHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data)
    {
        $hydratedData = array();

        /** @Field(type="string") */
        if (isset($data['street'])) {
            $value = $data['street'];
            $return = (string) $value;
            $this->class->reflFields['street']->setValue($document, $return);
            $hydratedData['street'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['zip_code'])) {
            $value = $data['zip_code'];
            $return = (string) $value;
            $this->class->reflFields['zipCode']->setValue($document, $return);
            $hydratedData['zipCode'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['city'])) {
            $value = $data['city'];
            $return = (string) $value;
            $this->class->reflFields['city']->setValue($document, $return);
            $hydratedData['city'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['state'])) {
            $value = $data['state'];
            $return = (string) $value;
            $this->class->reflFields['state']->setValue($document, $return);
            $hydratedData['state'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['country'])) {
            $value = $data['country'];
            $return = (string) $value;
            $this->class->reflFields['country']->setValue($document, $return);
            $hydratedData['country'] = $return;
        }
        return $hydratedData;
    }
}