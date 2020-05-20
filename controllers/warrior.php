<?php 

    class Warrior extends Character{
        public $_class = 'Guerrier(e)';
        public $_strength = 2;
        public $_basicHp = 150;
        public $_healthPoint = 150;
        public $_abnegation = false;
        
    
        public function leveeDeBouclier(){
            $this->_reduc = true;
            echo 'Vous levée votre bouclier pour vous defendre.';
        }
        public function coupDechaine($enemie){
            $dmg = 10*$this->_strength;
            $halfLife = $enemie->_healthPoint / 2;

            while($enemie->_healthPoint > $halfLife){
                echo $enemie->_healthPoint;
                $enemie->setHealthPoint($dmg);
                echo '<p>Vous ingligez '.$dmg.' de damage avec votre coup déchainé ! </p>';
                echo '<p>Il a désormais '.$enemie->_healthPoint.' point de vie!</p>';
            }
            echo $dmg;
            echo '<p>Vous infligez '.$dmg.' de damage avec votre coup déchainé.</p>';
            $dmg = 12*$this->_strength + 4*$this->_strength;
            echo $dmg;
            $enemie->setHealthPoint($dmg);
            echo '<p>Cependant comme votre enemie est grandement bléssé, votre rage vous permet de le blésser d\'avantage et d\'ingliger totalement '. $dmg. ' de damage !</p>';
            echo '<p>Il a désormais '.$enemie->_healthPoint.' point de vie!</p>';
        }
        public function contreAttaque($enemie){
            $dmg = $this->_strength;
            $this->_dodge = true;
            $enemie->setHealthPoint($dmg);
            echo '<p>Vous avez lancé transparence !</p>';
            echo '<p>Vous en profiter pour attaquer '.$enemie->_class.' avec votre dague et lui infliger '.$dmg.' de demage! Il a maintenant '.$enemie->_healthPoint.' point de vie !</p>';

        }
    }

?>