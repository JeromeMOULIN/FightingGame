<?php 
    abstract class Character{
        public $_isAlive = true;
        public $_name;
        public $_level = 1;
        public $_reduc = false;
        public $_dodge = false;

        public function getHealthPoint(){
            return $this->_healthPoint;
        }
        public function addHealthPoint($addhp){
            return $this->_healthPoint += $addhp;
        }
        public function setHealthPoint($dmg){
            return $this->_healthPoint -= $dmg;
        }
        public function setAtBasicHp(){
            $this->_healthPoint = $this->_basicHp;
        }



    }


?>