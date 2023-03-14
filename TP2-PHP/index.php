<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <title> Exemple Dynamique </title>
    </head>

    <body>
        La date d'aujourd'hui est le :
        <?php
            echo date("d.m.Y");
        ?>
        <br>2 + 5,8 fait :
        <?php
            $entier = 2;
            $reel = 5.8;
            echo $entier + $reel;
        ?>

        <br>Les informations personnelles de John sont :<br><br>
        <?php
            $personne = array(
                'prenom' => 'John',
                'nom' => 'Doe',
                'age' => 20
                );
            foreach($personne as $key => $value){
                echo "$key : $value<br>";
            }    
        ?>
    </body>
</html>
