<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class MakinMindUserBundleEntityUserProxy extends \MakinMind\UserBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setFirstname($firstname)
    {
        $this->__load();
        return parent::setFirstname($firstname);
    }

    public function getFirstname()
    {
        $this->__load();
        return parent::getFirstname();
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setLastname($lastname)
    {
        $this->__load();
        return parent::setLastname($lastname);
    }

    public function getLastname()
    {
        $this->__load();
        return parent::getLastname();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setBirthdate($birthdate)
    {
        $this->__load();
        return parent::setBirthdate($birthdate);
    }

    public function getBirthdate()
    {
        $this->__load();
        return parent::getBirthdate();
    }

    public function setPhone($phone)
    {
        $this->__load();
        return parent::setPhone($phone);
    }

    public function getPhone()
    {
        $this->__load();
        return parent::getPhone();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setZipcode($zipcode)
    {
        $this->__load();
        return parent::setZipcode($zipcode);
    }

    public function getZipcode()
    {
        $this->__load();
        return parent::getZipcode();
    }

    public function setCity($city)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }

    public function setCountry($country)
    {
        $this->__load();
        return parent::setCountry($country);
    }

    public function getCountry()
    {
        $this->__load();
        return parent::getCountry();
    }

    public function setJob($job)
    {
        $this->__load();
        return parent::setJob($job);
    }

    public function getJob()
    {
        $this->__load();
        return parent::getJob();
    }

    public function setCompany($company)
    {
        $this->__load();
        return parent::setCompany($company);
    }

    public function getCompany()
    {
        $this->__load();
        return parent::getCompany();
    }

    public function setRank($rank)
    {
        $this->__load();
        return parent::setRank($rank);
    }

    public function getRank()
    {
        $this->__load();
        return parent::getRank();
    }

    public function setNbContracts($nbContracts)
    {
        $this->__load();
        return parent::setNbContracts($nbContracts);
    }

    public function getNbContracts()
    {
        $this->__load();
        return parent::getNbContracts();
    }

    public function setSuscribeDate($suscribeDate)
    {
        $this->__load();
        return parent::setSuscribeDate($suscribeDate);
    }

    public function getSuscribeDate()
    {
        $this->__load();
        return parent::getSuscribeDate();
    }

    public function setWorkSocialURL($workSocialURL)
    {
        $this->__load();
        return parent::setWorkSocialURL($workSocialURL);
    }

    public function getWorkSocialURL()
    {
        $this->__load();
        return parent::getWorkSocialURL();
    }

    public function setFacebookURL($facebookURL)
    {
        $this->__load();
        return parent::setFacebookURL($facebookURL);
    }

    public function getFacebookURL()
    {
        $this->__load();
        return parent::getFacebookURL();
    }

    public function setTwitterURL($twitterURL)
    {
        $this->__load();
        return parent::setTwitterURL($twitterURL);
    }

    public function getTwitterURL()
    {
        $this->__load();
        return parent::getTwitterURL();
    }

    public function setTwitterShowTweets($twitterShowTweets)
    {
        $this->__load();
        return parent::setTwitterShowTweets($twitterShowTweets);
    }

    public function getTwitterShowTweets()
    {
        $this->__load();
        return parent::getTwitterShowTweets();
    }

    public function setResume(\MakinMind\ResourceBundle\Entity\Resource $resume)
    {
        $this->__load();
        return parent::setResume($resume);
    }

    public function getResume()
    {
        $this->__load();
        return parent::getResume();
    }

    public function setPicture(\MakinMind\ResourceBundle\Entity\Resource $picture)
    {
        $this->__load();
        return parent::setPicture($picture);
    }

    public function getPicture()
    {
        $this->__load();
        return parent::getPicture();
    }

    public function addRole($role)
    {
        $this->__load();
        return parent::addRole($role);
    }

    public function equals(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
        $this->__load();
        return parent::equals($user);
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function getUsernameCanonical()
    {
        $this->__load();
        return parent::getUsernameCanonical();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function getEmailCanonical()
    {
        $this->__load();
        return parent::getEmailCanonical();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getPlainPassword()
    {
        $this->__load();
        return parent::getPlainPassword();
    }

    public function getLastLogin()
    {
        $this->__load();
        return parent::getLastLogin();
    }

    public function getConfirmationToken()
    {
        $this->__load();
        return parent::getConfirmationToken();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function hasRole($role)
    {
        $this->__load();
        return parent::hasRole($role);
    }

    public function isAccountNonExpired()
    {
        $this->__load();
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        $this->__load();
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        $this->__load();
        return parent::isCredentialsNonExpired();
    }

    public function isCredentialsExpired()
    {
        $this->__load();
        return parent::isCredentialsExpired();
    }

    public function isEnabled()
    {
        $this->__load();
        return parent::isEnabled();
    }

    public function isExpired()
    {
        $this->__load();
        return parent::isExpired();
    }

    public function isLocked()
    {
        $this->__load();
        return parent::isLocked();
    }

    public function isSuperAdmin()
    {
        $this->__load();
        return parent::isSuperAdmin();
    }

    public function isUser(\FOS\UserBundle\Model\UserInterface $user = NULL)
    {
        $this->__load();
        return parent::isUser($user);
    }

    public function removeRole($role)
    {
        $this->__load();
        return parent::removeRole($role);
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function setUsernameCanonical($usernameCanonical)
    {
        $this->__load();
        return parent::setUsernameCanonical($usernameCanonical);
    }

    public function setCredentialsExpireAt(\DateTime $date)
    {
        $this->__load();
        return parent::setCredentialsExpireAt($date);
    }

    public function setCredentialsExpired($boolean)
    {
        $this->__load();
        return parent::setCredentialsExpired($boolean);
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function setEmailCanonical($emailCanonical)
    {
        $this->__load();
        return parent::setEmailCanonical($emailCanonical);
    }

    public function setEnabled($boolean)
    {
        $this->__load();
        return parent::setEnabled($boolean);
    }

    public function setExpired($boolean)
    {
        $this->__load();
        return parent::setExpired($boolean);
    }

    public function setExpiresAt(\DateTime $date)
    {
        $this->__load();
        return parent::setExpiresAt($date);
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function setSuperAdmin($boolean)
    {
        $this->__load();
        return parent::setSuperAdmin($boolean);
    }

    public function setPlainPassword($password)
    {
        $this->__load();
        return parent::setPlainPassword($password);
    }

    public function setLastLogin(\DateTime $time)
    {
        $this->__load();
        return parent::setLastLogin($time);
    }

    public function setLocked($boolean)
    {
        $this->__load();
        return parent::setLocked($boolean);
    }

    public function setConfirmationToken($confirmationToken)
    {
        $this->__load();
        return parent::setConfirmationToken($confirmationToken);
    }

    public function setPasswordRequestedAt(\DateTime $date = NULL)
    {
        $this->__load();
        return parent::setPasswordRequestedAt($date);
    }

    public function getPasswordRequestedAt()
    {
        $this->__load();
        return parent::getPasswordRequestedAt();
    }

    public function isPasswordRequestNonExpired($ttl)
    {
        $this->__load();
        return parent::isPasswordRequestNonExpired($ttl);
    }

    public function generateConfirmationToken()
    {
        $this->__load();
        return parent::generateConfirmationToken();
    }

    public function setRoles(array $roles)
    {
        $this->__load();
        return parent::setRoles($roles);
    }

    public function getGroups()
    {
        $this->__load();
        return parent::getGroups();
    }

    public function getGroupNames()
    {
        $this->__load();
        return parent::getGroupNames();
    }

    public function hasGroup($name)
    {
        $this->__load();
        return parent::hasGroup($name);
    }

    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->__load();
        return parent::addGroup($group);
    }

    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->__load();
        return parent::removeGroup($group);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'lastLogin', 'locked', 'expired', 'expiresAt', 'confirmationToken', 'passwordRequestedAt', 'roles', 'credentialsExpired', 'credentialsExpireAt', 'id', 'firstname', 'lastname', 'birthdate', 'phone', 'address', 'zipcode', 'city', 'country', 'job', 'company', 'rank', 'nbContracts', 'suscribeDate', 'description', 'workSocialURL', 'facebookURL', 'twitterURL', 'twitterShowTweets', 'resume', 'picture');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}