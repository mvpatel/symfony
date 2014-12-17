<?php

namespace tr\rsywxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookReview
 */
class BookReview
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $datein;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var \tr\rsywxBundle\Entity\BookHeadline
     */
    private $headlineid;


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
     * Set title
     *
     * @param string $title
     * @return BookReview
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set datein
     *
     * @param \DateTime $datein
     * @return BookReview
     */
    public function setDatein($datein)
    {
        $this->datein = $datein;
    
        return $this;
    }

    /**
     * Get datein
     *
     * @return \DateTime 
     */
    public function getDatein()
    {
        return $this->datein;
    }

    /**
     * Set uri
     *
     * @param string $uri
     * @return BookReview
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    
        return $this;
    }

    /**
     * Get uri
     *
     * @return string 
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set headlineid
     *
     * @param \tr\rsywxBundle\Entity\BookHeadline $headlineid
     * @return BookReview
     */
    public function setHeadlineid(\tr\rsywxBundle\Entity\BookHeadline $headlineid = null)
    {
        $this->headlineid = $headlineid;
    
        return $this;
    }

    /**
     * Get headlineid
     *
     * @return \tr\rsywxBundle\Entity\BookHeadline 
     */
    public function getHeadlineid()
    {
        return $this->headlineid;
    }
}