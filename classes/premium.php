<?php

class Premium extends Member
{
    private $_inDoorInterests;
    private $_outDoorInterests;

    //setters
    /**
     * @param mixed $inDoorIntersts
     */
    public function setInDoorInterests($inDoorInterests)
    {
        $this->_inDoorInterests = $inDoorInterests;
    }

    /**
     * @param mixed $outDoorInterests
     */
    public function setOutDoorInterests($outDoorInterests)
    {
        $this->_outDoorInterests = $outDoorInterests;
    }

    //getters
    /**
     * @return mixed
     */
    public function getInDoorInterests()
    {
        return $this->_inDoorInterests;
    }

    /**
     * @return mixed
     */
    public function getOutDoorInterests()
    {
        return $this->_outDoorInterests;
    }
}
