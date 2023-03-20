
<?php
    require_once('config.php');
    $servname = _MYSQL_HOST; $dbname = _MYSQL_DBNAME; $user = _MYSQL_USER; $pass = _MYSQL_PASSWORD;
    
    //suppression table users       
    try{
        $db = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "DROP TABLE users";
        $db->exec($sql);
    }
          
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

    //création table users
    try{
        $db = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "CREATE TABLE users(
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                name VARCHAR(30) NOT NULL,
                email VARCHAR(30) NOT NULL)";
        
        $db->exec($sql);
    }
    
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }

    //importation données
    try{
        $db = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql1 = "INSERT INTO users(name, email)
                VALUES('Michel','michel.patulacci@gmail.com')";
        $db->exec($sql1);
        
        $sql2 = "INSERT INTO users(name, email)
        VALUES('Jean-pierre','jean-pierre.polnareff@gmail.com')";
        $db->exec($sql2);

        $sql3 = "INSERT INTO users(name, email)
        VALUES('Giorno','giorno.brando@gmail.com')";
        $db->exec($sql3);

        $sql4 = "INSERT INTO users(name, email)
        VALUES('Jotaro','jotaro.kujo@hotmail.fr')";
        $db->exec($sql4);

        $sql5 = "INSERT INTO users(name, email)
        VALUES('Jonathan','jonathan.joestar@outlook.fr')";
        $db->exec($sql5);
        
    }
    
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
?>