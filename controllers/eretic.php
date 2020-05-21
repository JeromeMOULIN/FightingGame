<?php 

    class Heretique extends Character{
        public $_class = 'Hérétique';
        public $_magicPower = 4;
        public $_basicHp = 50;
        public $_healthPoint = 50;
        public $_abnegation = false;
        

        public function morsure($enemie){
            $dmg = 4*$this->_magicPower;
            $addhp = $dmg/2;
            $enemie->setHealthPoint($dmg);
            if($this->_healthPoint >= 50){
                echo '<p>Vous avez attaqué '.$enemie->_class.' avec une morsure et lui avez infligé '.$dmg.' point de degat.</p>';

            }else{
                $this->addHealthPoint($addhp);
                if($this->_healthPoint > 50){
                    $this->setAtBasicHp();
                    echo '<p>Vous avez attaqué '.$enemie->_class.' avec une morsure et lui avez infligé '.$dmg.' point de degat.</p>';
                    echo '<p>Il a désormais '.$enemie->_healthPoint.' point de vie!</p>';
                    echo '<p>Cela vous soigne de '.$addhp.' point de vie.Vous avez désormais '. $this->_healthPoint.' point de vie !</p>';
                }else{
                    
                    echo '<p>Vous avez attaqué '.$enemie->_class.' avec une morsure et lui avez infligé '.$dmg.' point de degat.</p>';
                    echo '<p>Il a désormais '.$enemie->_healthPoint.' point de vie!</p>';
                    echo '<p>Cela vous soigne de '.$addhp.' point de vie.Vous avez désormais '. $this->_healthPoint.' point de vie !</p>';
                }
            }
        }
        public function abnegation(){
            $this->_abnegation = true;
            echo '<p>Votre abnégation vous premet de reduire les degats subit.</p>';

        }
        public function partage($enemie){
            $dmg = 6*$this->_magicPower;
            $enemie->setHealthPoint($dmg);
            echo '<p>Vous attaqué votre enemie avec partage et lui infligé '.$dmg.' de damage! '.$enemie->_class.' a désormais '.$enemie->_healthPoint.' point de vie.</p>';
            $dmg = 2*$this->_magicPower;
            $this->setHealthPoint($dmg);
            echo '<p>En contrepartie vous vous infligé '.$dmg.' de damage. Vous avez désormais '.$this->_healthPoint.' point de vie.</p>';
        }
    }

?>