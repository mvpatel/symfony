<?php

namespace tr\rsywxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookHeadline
 */
class BookHeadline
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $reviewtitle;

    /**
     * @var \DateTime
     */
    private $createAt;

    /**
     * @var boolean
     */
    private $show;

    /**
     * @var \tr\rsywxBundle\Entity\BookBook
     */
    private $bookid;


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
     * Set reviewtitle
     *
     * @param string $reviewtitle
     * @return BookHeadline
     */
    public function setReviewtitle($reviewtitle)
    {
        $this->reviewtitle = $reviewtitle;
    
        return $this;
    }

    /**
     * Get reviewtitle
     *
     * @return string 
     */
    public function getReviewtitle()
    {
        return $this->reviewtitle;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     * @return BookHeadline
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    
        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set show
     *
     * @param boolean $show
     * @return BookHeadline
     */
    public function setShow($show)
    {
        $this->show = $show;
    
        return $this;
    }

    /**
     * Get show
     *
     * @return boolean 
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * Set bookid
     *
     * @param \tr\rsywxBundle\Entity\BookBook $bookid
     * @return BookHeadline
     */
    public function setBookid(\tr\rsywxBundle\Entity\BookBook $bookid = null)
    {
        $this->bookid = $bookid;
    
        return $this;
    }

    /**
     * Get bookid
     *
     * @return \tr\rsywxBundle\Entity\BookBook 
     */
    public function getBookid()
    {
        return $this->bookid;
    }
}