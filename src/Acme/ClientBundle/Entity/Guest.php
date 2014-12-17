<?php

namespace Acme\ClientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Guest
 */
class Guest
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $guestFirstName;

    /**
     * @var string
     */
    private $guestLastName;

    /**
     * @var string
     */
    private $gusetGender;

    /**
     * @var string
     */
    private $guestCar;

    /**
     * @var string
     */
    private $gusetCarName;

    /**
     * @var string
     */
    private $guestCarCompany;

    /**
     * @var string
     */
    private $gusetCompany;

    /**
     * @var string
     */
    private $guestCompanyName;

    /**
     * @var string
     */
    private $guestMobileNo;

    /**
     * @var string
     */
    private $guestPhoneNo;

    /**
     * @var string
     */
    private $gusetRegisterDate;

    /**
     * @var string
     */
    private $guestLoginName;

    /**
     * @var string
     */
    private $guestLoginDate;

    /**
     * @var string
     */
    private $guestPassword;


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
     * Set guestFirstName
     *
     * @param string $guestFirstName
     * @return Guest
     */
    public function setGuestFirstName($guestFirstName)
    {
        $this->guestFirstName = $guestFirstName;

        return $this;
    }

    /**
     * Get guestFirstName
     *
     * @return string 
     */
    public function getGuestFirstName()
    {
        return $this->guestFirstName;
    }

    /**
     * Set guestLastName
     *
     * @param string $guestLastName
     * @return Guest
     */
    public function setGuestLastName($guestLastName)
    {
        $this->guestLastName = $guestLastName;

        return $this;
    }

    /**
     * Get guestLastName
     *
     * @return string 
     */
    public function getGuestLastName()
    {
        return $this->guestLastName;
    }

    /**
     * Set gusetGender
     *
     * @param string $gusetGender
     * @return Guest
     */
    public function setGusetGender($gusetGender)
    {
        $this->gusetGender = $gusetGender;

        return $this;
    }

    /**
     * Get gusetGender
     *
     * @return string 
     */
    public function getGusetGender()
    {
        return $this->gusetGender;
    }

    /**
     * Set guestCar
     *
     * @param string $guestCar
     * @return Guest
     */
    public function setGuestCar($guestCar)
    {
        $this->guestCar = $guestCar;

        return $this;
    }

    /**
     * Get guestCar
     *
     * @return string 
     */
    public function getGuestCar()
    {
        return $this->guestCar;
    }

    /**
     * Set gusetCarName
     *
     * @param string $gusetCarName
     * @return Guest
     */
    public function setGusetCarName($gusetCarName)
    {
        $this->gusetCarName = $gusetCarName;

        return $this;
    }

    /**
     * Get gusetCarName
     *
     * @return string 
     */
    public function getGusetCarName()
    {
        return $this->gusetCarName;
    }

    /**
     * Set guestCarCompany
     *
     * @param string $guestCarCompany
     * @return Guest
     */
    public function setGuestCarCompany($guestCarCompany)
    {
        $this->guestCarCompany = $guestCarCompany;

        return $this;
    }

    /**
     * Get guestCarCompany
     *
     * @return string 
     */
    public function getGuestCarCompany()
    {
        return $this->guestCarCompany;
    }

    /**
     * Set gusetCompany
     *
     * @param string $gusetCompany
     * @return Guest
     */
    public function setGusetCompany($gusetCompany)
    {
        $this->gusetCompany = $gusetCompany;

        return $this;
    }

    /**
     * Get gusetCompany
     *
     * @return string 
     */
    public function getGusetCompany()
    {
        return $this->gusetCompany;
    }

    /**
     * Set guestCompanyName
     *
     * @param string $guestCompanyName
     * @return Guest
     */
    public function setGuestCompanyName($guestCompanyName)
    {
        $this->guestCompanyName = $guestCompanyName;

        return $this;
    }

    /**
     * Get guestCompanyName
     *
     * @return string 
     */
    public function getGuestCompanyName()
    {
        return $this->guestCompanyName;
    }

    /**
     * Set guestMobileNo
     *
     * @param string $guestMobileNo
     * @return Guest
     */
    public function setGuestMobileNo($guestMobileNo)
    {
        $this->guestMobileNo = $guestMobileNo;

        return $this;
    }

    /**
     * Get guestMobileNo
     *
     * @return string 
     */
    public function getGuestMobileNo()
    {
        return $this->guestMobileNo;
    }

    /**
     * Set guestPhoneNo
     *
     * @param string $guestPhoneNo
     * @return Guest
     */
    public function setGuestPhoneNo($guestPhoneNo)
    {
        $this->guestPhoneNo = $guestPhoneNo;

        return $this;
    }

    /**
     * Get guestPhoneNo
     *
     * @return string 
     */
    public function getGuestPhoneNo()
    {
        return $this->guestPhoneNo;
    }

    /**
     * Set gusetRegisterDate
     *
     * @param string $gusetRegisterDate
     * @return Guest
     */
    public function setGusetRegisterDate($gusetRegisterDate)
    {
        $this->gusetRegisterDate = $gusetRegisterDate;

        return $this;
    }

    /**
     * Get gusetRegisterDate
     *
     * @return string 
     */
    public function getGusetRegisterDate()
    {
        return $this->gusetRegisterDate;
    }

    /**
     * Set guestLoginName
     *
     * @param string $guestLoginName
     * @return Guest
     */
    public function setGuestLoginName($guestLoginName)
    {
        $this->guestLoginName = $guestLoginName;

        return $this;
    }

    /**
     * Get guestLoginName
     *
     * @return string 
     */
    public function getGuestLoginName()
    {
        return $this->guestLoginName;
    }

    /**
     * Set guestLoginDate
     *
     * @param string $guestLoginDate
     * @return Guest
     */
    public function setGuestLoginDate($guestLoginDate)
    {
        $this->guestLoginDate = $guestLoginDate;

        return $this;
    }

    /**
     * Get guestLoginDate
     *
     * @return string 
     */
    public function getGuestLoginDate()
    {
        return $this->guestLoginDate;
    }

    /**
     * Set guestPassword
     *
     * @param string $guestPassword
     * @return Guest
     */
    public function setGuestPassword($guestPassword)
    {
        $this->guestPassword = $guestPassword;

        return $this;
    }

    /**
     * Get guestPassword
     *
     * @return string 
     */
    public function getGuestPassword()
    {
        return $this->guestPassword;
    }
}
