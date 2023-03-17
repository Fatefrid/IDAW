<?php
    $params = $_POST;
    // on simule une base de données
    $users = array(
    // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    $style = "";
    if(isset($params['login']) && isset($params['password'])) {
        $tryLogin=$params['login'];
        $tryPwd=$params['password'];
        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            session_start();
            $_SESSION['login'] = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "<h1>Bienvenu ".$login."</h1>";
    }
    echo '<br>Login : '.$_SESSION['login'];
?>
<br><a href="page_test.php">page_test</a>