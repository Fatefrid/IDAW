<!DOCTYPE html>
<html>
    <header>
        <title>Users</title>
    </header>
    <body>
        <?php
            require_once('config.php');

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
                        <td>'.$value->email.'</td></tr>';
            }

            echo '</tbody></table>';
            $pdo = null;
        ?>

        <form id="adding_form" action="users.php" method="POST">
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
                    <td><input type="submit" value="Ajouter" /></td>
                </tr>
            </table>
        </form>
        
        <?php
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
        ?>
    </body>
</html>