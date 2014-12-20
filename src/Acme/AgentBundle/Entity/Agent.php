<?php

namespace Acme\AgentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Agent
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\AgentBundle\Entity\AgentRepository")
 */
class Agent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="agentId", type="integer")
     */
    private $agentId;

    /**
     * @var string
     * @ORM\Column(name="agent_firstname", type="string", length=255)
     */
    private $agentFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_lastname", type="string", length=255)
     */
    private $agentLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_Lastextra", type="string", length=255)
     */
    private $agentLastextra;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_Lastone", type="string", length=255)
     */
    private $agentLastone;

    /**
     * @var string
     * @ORM\Column(name="agent_email", type="string", length=255, unique=true)
     */
    private $agentEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="agentp_password", type="string", length=255)
     */
    private $agentpPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_mobile", type="string", length=255)
     */
    private $agentMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_phone", type="string", length=255)
     */
    private $agentPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_car", type="string", length=255)
     */
    private $agentCar;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_gender", type="string", length=255)
     */
    private $agentGender;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_car_company", type="string", length=255)
     */
    private $agentCarCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_website", type="string", length=255)
     */
    private $agentWebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_city", type="string", length=255)
     */
    private $agentCity;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_postcode", type="string", length=255)
     */
    private $agentPostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_address_1", type="string", length=255)
     */
    private $agentAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_address_2", type="string", length=255)
     */
    private $agentAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_registration_date", type="string", length=255)
     */
    private $agentRegistrationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_login_date", type="string", length=255)
     */
    private $agentLoginDate;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_age", type="string", length=255)
     */
    private $agentAge;


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
     * Set agentId
     *
     * @param integer $agentId
     * @return Agent
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * Get agentId
     *
     * @return integer 
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * Set agentFirstname
     *
     * @param string $agentFirstname
     * @return Agent
     */
    public function setAgentFirstname($agentFirstname)
    {
        $this->agentFirstname = $agentFirstname;

        return $this;
    }

    /**
     * Get agentFirstname
     *
     * @return string 
     */
    public function getAgentFirstname()
    {
        return $this->agentFirstname;
    }

    /**
     * Set agentLastname
     *
     * @param string $agentLastname
     * @return Agent
     */
    public function setAgentLastname($agentLastname)
    {
        $this->agentLastname = $agentLastname;

        return $this;
    }

    /**
     * Get agentLastname
     *
     * @return string 
     */
    public function getAgentLastname()
    {
        return $this->agentLastname;
    }

    /**
     * Set agentEmail
     *
     * @param string $agentEmail
     * @return Agent
     */
    public function setAgentEmail($agentEmail)
    {
        $this->agentEmail = $agentEmail;

        return $this;
    }

    /**
     * Get agentEmail
     *
     * @return string 
     */
    public function getAgentEmail()
    {
        return $this->agentEmail;
    }

    /**
     * Set agentpPassword
     *
     * @param string $agentpPassword
     * @return Agent
     */
    public function setAgentpPassword($agentpPassword)
    {
        $this->agentpPassword = $agentpPassword;

        return $this;
    }

    /**
     * Get agentpPassword
     *
     * @return string 
     */
    public function getAgentpPassword()
    {
        return $this->agentpPassword;
    }

    /**
     * Set agentMobile
     *
     * @param string $agentMobile
     * @return Agent
     */
    public function setAgentMobile($agentMobile)
    {
        $this->agentMobile = $agentMobile;

        return $this;
    }

    /**
     * Get agentMobile
     *
     * @return string 
     */
    public function getAgentMobile()
    {
        return $this->agentMobile;
    }

    /**
     * Set agentPhone
     *
     * @param string $agentPhone
     * @return Agent
     */
    public function setAgentPhone($agentPhone)
    {
        $this->agentPhone = $agentPhone;

        return $this;
    }

    /**
     * Get agentPhone
     *
     * @return string 
     */
    public function getAgentPhone()
    {
        return $this->agentPhone;
    }

    /**
     * Set agentCar
     *
     * @param string $agentCar
     * @return Agent
     */
    public function setAgentCar($agentCar)
    {
        $this->agentCar = $agentCar;

        return $this;
    }

    /**
     * Get agentCar
     *
     * @return string 
     */
    public function getAgentCar()
    {
        return $this->agentCar;
    }

    /**
     * Set agentGender
     *
     * @param string $agentGender
     * @return Agent
     */
    public function setAgentGender($agentGender)
    {
        $this->agentGender = $agentGender;

        return $this;
    }

    /**
     * Get agentGender
     *
     * @return string 
     */
    public function getAgentGender()
    {
        return $this->agentGender;
    }

    /**
     * Set agentCarCompany
     *
     * @param string $agentCarCompany
     * @return Agent
     */
    public function setAgentCarCompany($agentCarCompany)
    {
        $this->agentCarCompany = $agentCarCompany;

        return $this;
    }

    /**
     * Get agentCarCompany
     *
     * @return string 
     */
    public function getAgentCarCompany()
    {
        return $this->agentCarCompany;
    }

    /**
     * Set agentWebsite
     *
     * @param string $agentWebsite
     * @return Agent
     */
    public function setAgentWebsite($agentWebsite)
    {
        $this->agentWebsite = $agentWebsite;

        return $this;
    }

    /**
     * Get agentWebsite
     *
     * @return string 
     */
    public function getAgentWebsite()
    {
        return $this->agentWebsite;
    }

    /**
     * Set agentCity
     *
     * @param string $agentCity
     * @return Agent
     */
    public function setAgentCity($agentCity)
    {
        $this->agentCity = $agentCity;

        return $this;
    }

    /**
     * Get agentCity
     *
     * @return string 
     */
    public function getAgentCity()
    {
        return $this->agentCity;
    }

    /**
     * Set agentPostcode
     *
     * @param string $agentPostcode
     * @return Agent
     */
    public function setAgentPostcode($agentPostcode)
    {
        $this->agentPostcode = $agentPostcode;

        return $this;
    }

    /**
     * Get agentPostcode
     *
     * @return string 
     */
    public function getAgentPostcode()
    {
        return $this->agentPostcode;
    }

    /**
     * Set agentAddress1
     *
     * @param string $agentAddress1
     * @return Agent
     */
    public function setAgentAddress1($agentAddress1)
    {
        $this->agentAddress1 = $agentAddress1;

        return $this;
    }

    /**
     * Get agentAddress1
     *
     * @return string 
     */
    public function getAgentAddress1()
    {
        return $this->agentAddress1;
    }

    /**
     * Set agentAddress2
     *
     * @param string $agentAddress2
     * @return Agent
     */
    public function setAgentAddress2($agentAddress2)
    {
        $this->agentAddress2 = $agentAddress2;

        return $this;
    }

    /**
     * Get agentAddress2
     *
     * @return string 
     */
    public function getAgentAddress2()
    {
        return $this->agentAddress2;
    }

    /**
     * Set agentRegistrationDate
     *
     * @param string $agentRegistrationDate
     * @return Agent
     */
    public function setAgentRegistrationDate($agentRegistrationDate)
    {
        $this->agentRegistrationDate = $agentRegistrationDate;

        return $this;
    }

    /**
     * Get agentRegistrationDate
     *
     * @return string 
     */
    public function getAgentRegistrationDate()
    {
        return $this->agentRegistrationDate;
    }

    /**
     * Set agentLoginDate
     *
     * @param string $agentLoginDate
     * @return Agent
     */
    public function setAgentLoginDate($agentLoginDate)
    {
        $this->agentLoginDate = $agentLoginDate;

        return $this;
    }

    /**
     * Get agentLoginDate
     *
     * @return string 
     */
    public function getAgentLoginDate()
    {
        return $this->agentLoginDate;
    }

    /**
     * Set agentAge
     *
     * @param string $agentAge
     * @return Agent
     */
    public function setAgentAge($agentAge)
    {
        $this->agentAge = $agentAge;

        return $this;
    }

    /**
     * Get agentAge
     *
     * @return string 
     */
    public function getAgentAge()
    {
        return $this->agentAge;
    }

    /**
     * Set agentLastextra
     *
     * @param string $agentLastextra
     * @return Agent
     */
    public function setAgentLastextra($agentLastextra)
    {
        $this->agentLastextra = $agentLastextra;

        return $this;
    }

    /**
     * Get agentLastextra
     *
     * @return string 
     */
    public function getAgentLastextra()
    {
        return $this->agentLastextra;
    }

    /**
     * Set agentLastone
     *
     * @param string $agentLastone
     * @return Agent
     */
    public function setAgentLastone($agentLastone)
    {
        $this->agentLastone = $agentLastone;

        return $this;
    }

    /**
     * Get agentLastone
     *
     * @return string 
     */
    public function getAgentLastone()
    {
        return $this->agentLastone;
    }
}
