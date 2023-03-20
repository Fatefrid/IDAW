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
                //myLog('Erreur : '.$erreur->getMessage());
                error_log($erreur->getMessage());
            }
            
            $request = $pdo->prepare("select * from users");
            // TODO: add your code here
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

            // retrieve data from database using fetch(PDO::FETCH_OBJ) and
            // display them in HTML array
            /*** close the database connection ***/
            $pdo = null;
        ?>
    </body>
</html>