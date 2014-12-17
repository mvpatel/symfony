<?php

namespace tr\rsywxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BookVisit
 */
class BookVisit
{
    /**
     * @var string
     */
    private $bid;

    /**
     * @var integer
     */
    private $visitwhen;


    /**
     * Set bid
     *
     * @param string $bid
     * @return BookVisit
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
    
        return $this;
    }

    /**
     * Get bid
     *
     * @return string 
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set visitwhen
     *
     * @param integer $visitwhen
     * @return BookVisit
     */
    public function setVisitwhen($visitwhen)
    {
        $this->visitwhen = $visitwhen;
    
        return $this;
    }

    /**
     * Get visitwhen
     *
     * @return integer 
     */
    public function getVisitwhen()
    {
        return $this->visitwhen;
    }
}