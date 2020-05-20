<?php 

    class Wizard extends Character{
        public $_class = 'Sorcier(e)';
        public $_magicPower = 4;
        public $_basicHp = 50;
        public $_healthPoint = 50;
        public $_abnegation = false;

        public function reflet(){
            $this->_mirror = true;
            echo 'Vous avez lancé reflet';
        }
        public function transparence($enemie){
            $dmg = 2*$this->_magicPower;
            $this->_reduc = true;
            $enemie->setHealthPoint($dmg);
            echo '<p>Vous avez lancé transparence !</p>';
            echo '<p>Vous en profiter pour attaquer '.$enemie->_class.' avec votre dague et lui infliger '.$dmg.' de demage! Il a maintenant '.$enemie->_healthPoint.' point de vie !</p>';


        }
        public function conflagration($enemie){
            $dmg = 10*$this->_magicPower;
            $enemie->setHealthPoint($dmg);
            echo '<p>Vous avez attaqué '.$enemie->_class.' avec une conflagration et lui avez infligé '.$dmg.' point de degat.</p>';
            echo '<p>Il a désormais '.$enemie->_healthPoint.' point de vie!</p>';
        }
    }

?>