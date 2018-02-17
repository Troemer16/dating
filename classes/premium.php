<?php

/**
 * Class Premium
 *
 * This class represents a premium member on a dating site
 * and extends the Member class keeping track of all the
 * information that the Member class tracks as well as
 * the members in-door and out-door interests
 * @author Tyler Roemer <troemer@greenriver.edu>
 * @copyright 2018
 */
class Premium extends Member
{
    private $_inDoor;
    private $_outDoor;


        //setters

    /**
     * Sets Member's in-door interests
     * @param String[] $inDoor - list of in-door interests
     */
    public function setInDoor($inDoor)
    {
        $this->_inDoor = $inDoor;
    }

    /**
     * Sets Member's out-door interests
     * @param String[] $outDoor - list of out-door interests
     */
    public function setOutDoor($outDoor)
    {
        $this->_outDoor = $outDoor;
    }


        //getters

    /**
     * Gets list of Member's in-door interests
     * @return String[] $inDoor - list of in-door interests
     */
    public function getInDoor()
    {
        return $this->_inDoor;
    }

    /**
     * Gets list of Member's out-door interests
     * @return String[] $outDoor - list of out-door interests
     */
    public function getOutDoor()
    {
        return $this->_outDoor;
    }
}
