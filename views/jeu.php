<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<?php include '../models/head.html'; ?>

<body class="flex column center">
    <div class="flex column center">
        <?php 
            // Vas chercher les class personnages et monstres.
            include '../controllers/loadingCharacters.php';
            // Recupere le nom et la classe que le joueur a rentré.
            $name = htmlspecialchars($_POST['charName']);
            $class = $_POST['classes'];
            // Crée un nouveau personnage et lui attribut le nom et la classe du joueur.
            
            switch ($class) {
                case 'Guerrier(e)':
                    $character = new Warrior;
                    break;
                
                case 'Sorcier(e)':
                    $character = new Wizard;
                    break;
                case 'Heretique':
                    $character = new Heretique;
                    break;
            }
            // Attribut le nom du joueur a la classe.
            $character->_name = $name;
            echo '<p>Un monstre vous attaque !</p>';
            // Crée un nouveau monstre aleatoirement.
            $rng = rand(1, 3);
            switch($rng){
                case '1':
                    $enemie = new Gobelin; 
                    echo '<p>Cest un '.$enemie->_class.' !</p>';
                    echo '<p>Il a '.$enemie->_ferocity.' de férocité et '.$enemie->_healthPoint.' point de vie !</p>';
                    break;
                case '2':
                    $enemie = new Kobold;
                    echo '<p>Cest un '.$enemie->_class.' !</p>';
                    echo '<p>Il a '.$enemie->_ferocity.' de férocité et '.$enemie->_healthPoint.' point de vie !</p>';
                    break;
                case '3':
                    $enemie = new Satyre;
                    echo '<p>Cest un '.$enemie->_class.' !</p>';
                    echo '<p>Il a '.$enemie->_ferocity.' de férocité et '.$enemie->_healthPoint.' point de vie !</p>';
                    break;
            
            }

            // Combat.
            while($enemie->_isAlive == true || $character->_isAlive == true){
                // Attaque du joueur généré aleatoirement selon la classe choisi.
                switch($character->_class){
                    case 'Guerrier(e)' :
                        $rand = rand(1, 3);
                        switch($rand){
                            case '1' :
                                $character->coupDechaine($enemie);
                            break;
                            case '2' :
                                $character->leveeDeBouclier();
                            break;
                            case '3' :
                                $character->contreAttaque($enemie);
                            break;
                
                        }
                    break;
        
                    case 'Sorcier(e)' :
                        $rand = rand(1, 3);
                        switch($rand){
                            case '1' :
                                $character->reflet();
                            break;
                            case '2' :
                                $character->transparence($enemie);
                            break;
                            case '3' :
                                $character->conflagration($enemie);
                            break;
                
                        }
                    break;
        
                    case 'Hérétique' :
                        $rand = rand(1, 3);
                        switch($rand){
                            case '1' :
                                $character->morsure($enemie);
                            break;
                            case '2' :
                                $character->abnegation();
                            break;
                            case '3' :
                                $character->partage($enemie);
                            break;
                
                        }
                    break;
                }
                if($enemie->_healthPoint <= 0){
                    $enemie->_isAlive = false;
                    echo '<p>'.$enemie->_class.' est mort. Vous avez gagné.</p>';
                    break;
                }
                // Attaque de l'ennemie.
                $enemie->attack($character);
                if($character->_healthPoint <= 0){
                    $character->isAlive = false;
                    echo '<p>Vous etes mort. '. $enemie->_class.' vous a vaincu.</p>';
                    break;
                }
            }
        ?>
    </div>
    
</body>
</html>