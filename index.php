<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<?php include './models/head.html'; ?>

<body class="flex column center">
    
    <!-- Formulaire qui sert a recuperer les premieres données du jeu. Le nom et la classe -->
    <div class="flex column center">
        <h1>Jeu de combat</h1>

        <form action="./views/jeu.php" method="POST" class="flex column center">
        <p><label>Entrez le nom de votre personnage :<input type="text" name="charName"></label></p>
        <p><label>Choisissez votre classe :
            <select name="classes" id="1">
                <option value="Guerrier(e)">Guerrier(e)</option>
                <option value="Sorcier(e)">Sorcier(e)</option>
                <option value="Heretique">Hérétic</option>
            </select>
        </label></p>
        <p><input id='submit' type="submit" value="JOUER"></p>
        </form>
    </div>











</body>
</html>