<?php 
    abstract class Monstre{
        public $_isAlive = true; 

        private function discrib(){
            print_r($monstre);
        }
        // method qui affiche les hp.
        public function getHealthPoint(){
            return $this->_healthPoint;
        }
        // method qui actualise le hp.
        public function setHealthPoint($dmg){
            return $this->_healthPoint -= $dmg;
        }
        // La method d'attaque des enemie.
        public function attack($character){
            $dmg = 2*$this->_ferocity;
            // Check si le buff de reduction de damage est actif.
            if($character->_reduc == true){
                $damageReduc = 50*$dmg/100;
                $character->setHealthPoint($damageReduc);
                echo '<p>'.$this->_class.' vous a attaqué mais vous avez reduis les degats. Il vous inflige '.$damageReduc.' point de degat.</p>';
                echo '<p>Vous avez desormais désormais '.$character->_healthPoint.' point de vie!</p>';
                $character->_reduc == false;
            }else{
                // Check si le buff mirror du wizard est actif.
                if($character->_dodge == true){
                    $rand = rand(1, 4);
                    if($rand == 4){
                        $character->setHealthPoint($dmg);
                        echo '<p>'.$this->_class.' vous a attaqué et vous inflige '.$dmg.' point de degat.</p>';
                        echo '<p>Vous avez desormais désormais '.$character->_healthPoint.' point de vie!</p>';
                    }else{
                        echo '<p> Vous equivez cette attaque!</p>';
                        $character->_dodge = false;
                    }
                }else{
                    // Check le buff abnégation de l'Hérétique.
                    if($character->_abnegation == true){
                        $dmg = $dmg -= 50;
                        if($dmg <= 0){
                            $dmg = 0;    
                        }
                
                        $character->setHealthPoint($dmg);
                        echo '<p>'.$this->_class.' vous a attaqué et vous inflige '.$dmg.' point de degat.</p>';
                        echo '<p>Vous avez desormais désormais '.$character->_healthPoint.' point de vie!</p>';
                        $character->_abnegation = false;
                    }else{
                        $character->setHealthPoint($dmg);
                        echo '<p>'.$this->_class.' vous a attaqué et vous inflige '.$dmg.' point de degat.</p>';
                        echo '<p>Vous avez desormais désormais '.$character->_healthPoint.' point de vie!</p>';

                    }
                }
            }
        }
    }
?>