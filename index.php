<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php objet</title>
</head>
<body>
    
    <h1>Voici un simili rogue like crée en PHP orienté objet</h1>
<!-- Formulaire qui sert a recuperer les premieres données du jeu. Le nom et la classe -->
    <div>
        <form action="./views/jeu.php" method="POST">
        <p><label>Entrez le nom de votre personnage :<input type="text" name="charName"></label></p>
        <p><label>Choisissez votre classe :
            <select name="classes" id="1">
                <option value="Guerrier(e)">Guerrier(e)</option>
                <option value="Sorcier(e)">Sorcier(e)</option>
                <option value="Heretique">Hérétic</option>
            </select>
        </label></p>
        <p><input type="submit" value="JOUER"></p>
        </form>
    </div>











</body>
</html>