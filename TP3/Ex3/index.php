<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

<?php
    $style_choisi = "style1";
    if(isset($_GET['css'])){
        $style_choisi = $_GET['css'];
        setcookie('Style', $style_choisi , time()+3600);
        $_COOKIE['Style'] = $style_choisi;
    }
    if($_COOKIE['Style'] == 'style1'){
        echo '<link rel="stylesheet" href="style1.css"/>';
    }
    if($_COOKIE['Style'] == 'style2') {
        echo '<link rel="stylesheet" href="style2.css"/>';
    }
    
?>

    </head>
    <body>
        <form id="style_form" action="index.php" method="GET">
            <select name="css">
                <option value="style1" <?php if($_COOKIE['Style'] == 'style1') echo 'selected';?>>style1</option>
                <option value="style2" <?php if($_COOKIE['Style'] == 'style2') echo 'selected';?>>style2</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>
    </body>
</html>