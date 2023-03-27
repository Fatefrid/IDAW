<?php
    
    require_once("config.php");
    require_once("connexion.php");

    $request_method = $_SERVER['REQUEST_METHOD'];
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = explode( '/', $uri );

    $resultat=NULL;

    switch ($request_method) {
        case 'GET':
            if(!empty($uri[5])) {
                $request = $pdo->prepare("SELECT * FROM Users WHERE id=$uri[5]");
                $request->execute();
                $resultat = $request->fetchAll(PDO::FETCH_OBJ);
            } else {
                $request = $pdo->prepare("SELECT * FROM Users ORDER BY id ASC");
                $request->execute();
                $resultat = $request->fetchAll(PDO::FETCH_OBJ);
            }
            break;

        case 'POST':
            $json = json_decode(file_get_contents('php://input'), true);
            $name = $json['name'];
            $email = $json['email'];
            $request = $pdo->prepare("INSERT INTO users(name, email) VALUES('".$name."', '".$email."')");
            $request->execute();
            $resultat = $request->fetchAll(PDO::FETCH_OBJ);
            break;

        case 'PUT':
            if(!empty($uri[5])) {
                $json = json_decode(file_get_contents('php://input'), true);
                $name = $json['name'];
                $email = $json['email'];
                $request = $pdo->prepare("UPDATE users SET name='".$name."', email='".$email."' WHERE id='".$uri[5]."'");
                $request->execute();
            }
            break;
        case 'DELETE':
            if(!empty($uri[5])) {
                $request = $pdo->prepare("DELETE FROM Users WHERE id='".$uri[5]."'");
                $request->execute();
            }
            break;

        default:
            echo '<h1>ERROR BAD REQUEST</h1>';
    }

    header('Content-Type: application/json');
    echo json_encode($resultat, JSON_PRETTY_PRINT);
    $pdo = null;

?>