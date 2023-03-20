<!DOCTYPE html>
<html>
    <header>
        <title>Users</title>
        <meta charset="utf-8">
    </header>
    <body>

        <?php
            require_once('config.php');

            //Ajouter champ dans BDD
            if(isset($_POST['submit'])){
                if(isset($_POST['name']) && isset($_POST['email'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    try{
                        $db = new PDO("mysql:host="._MYSQL_HOST.";dbname="._MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
                        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO users(name, email)
                                VALUES('".$name."', '".$email."')";
                        $db->exec($sql);
                        
                    }
                    
                    catch(PDOException $e){
                      echo "Erreur : " . $e->getMessage() . "<br>" . $sql;
                    }
                }
            }

            //Supprimer un champ de la BDD
            if(isset($_POST['delete'])){
                try{
                    $db = new PDO("mysql:host="._MYSQL_HOST.";dbname="._MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = 'DELETE FROM users WHERE id='.$_POST['id'];
                    $db->exec($sql);
                    
                }
                
                catch(PDOException $e){
                  echo "Erreur : " . $e->getMessage() . "<br>" . $sql;
                }
            }

            //update champ BDD
            if(isset($_POST['modifier'])){

                try{
                    $db = new PDO("mysql:host="._MYSQL_HOST.";dbname="._MYSQL_DBNAME, _MYSQL_USER, _MYSQL_PASSWORD);
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE users SET name='".$_POST['name']."', email='".$_POST['email']."' WHERE id='".$_POST['id']."'";
                    $db->exec($sql);
                    
                }
                
                catch(PDOException $e){
                  echo "Erreur : " . $e->getMessage() . "<br>" . $sql;
                }
            }

            //Récupérer tout les champs de la BDD
            $connectionString = "mysql:host=". _MYSQL_HOST;
            
            if(defined('_MYSQL_PORT')){
                $connectionString .= ";port=". _MYSQL_PORT;
            }
            
            $connectionString .= ";dbname=" . _MYSQL_DBNAME;
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
            
            try {
                $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $erreur) {
                error_log($erreur->getMessage());
            }
            
            $request = $pdo->prepare("select * from users");
            $request->execute();
            $users = $request->fetchAll(PDO::FETCH_OBJ);

            //Affichages champs de la BDD
            echo '<h1 align="center">Users</h1>
                <table align="center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>';

            foreach($users as $value){
                echo '
                    <tr align="center">
                        <td>'.$value->id.'</td>
                        <td>'.$value->name.'</td>
                        <td>'.$value->email.'</td>
                        <td>
                            <form name="form_modifier" action="users.php" method="post">
                                <input type="hidden" name="id" value="'.$value->id.'">
                                <input type="submit" name="delete" value="Supprimer">
                            </form></td>
                        <td>
                            <form name="form_modifier" action="users.php" method="post">
                                <input type="hidden" name="id" value="'.$value->id.'">
                                <input type="hidden" name="name" value="'.$value->name.'">
                                <input type="hidden" name="email" value="'.$value->email.'">
                                <input type="submit" name="update" value="Modifier">
                            </form></td>
                    </tr>';
            }

            echo '</tbody></table>';
            $pdo = null;

            //Form si !update
            if(!isset($_POST['update'])){
                echo '
                <form id="update_form" action="users.php" method="POST">
                    <table>
                        <tr>
                            <th>Name :</th>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="submit" value="Ajouter" /></td>
                        </tr>
                    </table>
                </form>';
            }

            //Form si update
            if(isset($_POST['update'])){
                echo '
                <form id="update_form" action="users.php" method="POST">
                    <table>
                        <tr>
                            <td><input type="hidden" name="id" value="'.$_POST['id'].'"></td>
                        </tr>
                        <tr>
                            <th>Name :</th>
                            <td><input type="text" name="name" value="'.$_POST['name'].'"></td>
                        </tr>
                        <tr>
                            <th>Email :</th>
                            <td><input type="text" name="email" value="'.$_POST['email'].'"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="ajouter" value="Ajouter" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="modifier" value="Modifier" /></td>
                        </tr>
                    </table>
                </form>';
            }

        ?>
    </body>
</html>