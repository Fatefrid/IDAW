<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            if(isset($_SESSION['login'])){
                echo 'Bonjour '.$_SESSION['login'];
            }
            else {
                echo 'Oh, vous avez était déconnecté :(';
            }
        ?>
        <br><a href="connected.php">accueil</a>
        <form id="style_form" action="login.php" method="POST">
            <input name="deconnexion" type="submit" value="Déconnexion" />
        </form>
    </body>
</html>