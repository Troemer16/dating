<?php

    class Premium extends Member
    {
        private $_inDoor;
        private $_outDoor;

        //setters
        public function setInDoor($inDoor)
        {
            $this->_inDoor = $inDoor;
        }

        public function setOutDoor($outDoor)
        {
            $this->_outDoor = $outDoor;
        }

        //getters
        public function getInDoor()
        {
            return $this->_inDoor;
        }

        public function getOutDoor()
        {
            return $this->_outDoor;
        }
    }
