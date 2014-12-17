<?php

namespace Acme\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $clientEmail;

    /**
     * @var string
     */
    private $clientMobile;

    /**
     * @var string
     */
    private $clientGender;

    /**
     * @var string
     */
    private $clientCar;

    /**
     * @var string
     */
    private $clientCarName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Client
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Client
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set clientEmail
     *
     * @param string $clientEmail
     * @return Client
     */
    public function setClientEmail($clientEmail)
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }

    /**
     * Get clientEmail
     *
     * @return string 
     */
    public function getClientEmail()
    {
        return $this->clientEmail;
    }

    /**
     * Set clientMobile
     *
     * @param string $clientMobile
     * @return Client
     */
    public function setClientMobile($clientMobile)
    {
        $this->clientMobile = $clientMobile;

        return $this;
    }

    /**
     * Get clientMobile
     *
     * @return string 
     */
    public function getClientMobile()
    {
        return $this->clientMobile;
    }

    /**
     * Set clientGender
     *
     * @param string $clientGender
     * @return Client
     */
    public function setClientGender($clientGender)
    {
        $this->clientGender = $clientGender;

        return $this;
    }

    /**
     * Get clientGender
     *
     * @return string 
     */
    public function getClientGender()
    {
        return $this->clientGender;
    }

    /**
     * Set clientCar
     *
     * @param string $clientCar
     * @return Client
     */
    public function setClientCar($clientCar)
    {
        $this->clientCar = $clientCar;

        return $this;
    }

    /**
     * Get clientCar
     *
     * @return string 
     */
    public function getClientCar()
    {
        return $this->clientCar;
    }

    /**
     * Set clientCarName
     *
     * @param string $clientCarName
     * @return Client
     */
    public function setClientCarName($clientCarName)
    {
        $this->clientCarName = $clientCarName;

        return $this;
    }

    /**
     * Get clientCarName
     *
     * @return string 
     */
    public function getClientCarName()
    {
        return $this->clientCarName;
    }
}
