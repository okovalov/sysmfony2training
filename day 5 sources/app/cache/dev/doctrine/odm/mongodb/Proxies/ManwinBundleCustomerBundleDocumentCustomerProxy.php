<?php

namespace Proxies;

use Doctrine\ODM\MongoDB\Persisters\DocumentPersister;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class ManwinBundleCustomerBundleDocumentCustomerProxy extends \Manwin\Bundle\CustomerBundle\Document\Customer implements \Doctrine\ODM\MongoDB\Proxy\Proxy
{
    private $__documentPersister__;
    private $__identifier__;
    public $__isInitialized__ = false;
    public function __construct(DocumentPersister $documentPersister, $identifier)
    {
        $this->__documentPersister__ = $documentPersister;
        $this->__identifier__ = $identifier;
    }
    private function __load()
    {
        if (!$this->__isInitialized__ && $this->__documentPersister__) {
            $this->__isInitialized__ = true;
            if ($this->__documentPersister__->load($this->__identifier__, $this) === null) {
                throw \Doctrine\ODM\MongoDB\MongoDBException::documentNotFound(get_class($this), $this->__identifier__);
            }
            unset($this->__documentPersister__, $this->__identifier__);
        }
    }

    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getFirstName()
    {
        $this->__load();
        return parent::getFirstName();
    }

    public function setFirstName($firstName)
    {
        $this->__load();
        return parent::setFirstName($firstName);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function setLastName($lastName)
    {
        $this->__load();
        return parent::setLastName($lastName);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }

    public function setCompany($company)
    {
        $this->__load();
        return parent::setCompany($company);
    }

    public function getBirthday()
    {
        $this->__load();
        return parent::getBirthday();
    }

    public function setBirthday(\DateTime $birthday)
    {
        $this->__load();
        return parent::setBirthday($birthday);
    }

    public function getNbProjects()
    {
        $this->__load();
        return parent::getNbProjects();
    }

    public function setNbProjects($nbProjects)
    {
        $this->__load();
        return parent::setNbProjects($nbProjects);
    }

    public function addHobbie($hobby)
    {
        $this->__load();
        return parent::addHobbie($hobby);
    }

    public function setHobbies($hobby)
    {
        $this->__load();
        return parent::setHobbies($hobby);
    }

    public function getHobbies()
    {
        $this->__load();
        return parent::getHobbies();
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }


    public function __sleep()
    {
        return array('id', 'firstName', 'lastName', 'company', 'birthday', 'nbProjects', 'hobbies', 'address');
    }
}