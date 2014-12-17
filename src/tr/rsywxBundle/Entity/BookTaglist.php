<?php

namespace tr\rsywxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookTaglist
 */
class BookTaglist
{
    /**
     * @var integer
     */
    private $tid;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var \tr\rsywxBundle\Entity\BookBook
     */
    private $bookid;


    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return BookTaglist
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set bookid
     *
     * @param \tr\rsywxBundle\Entity\BookBook $bookid
     * @return BookTaglist
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