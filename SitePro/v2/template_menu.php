<!--<nav id="menu_dynamique">
    <ul id="menu-navigation-principale" class="menu">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Mon CV</a></li>
        <li><a href="projets.php">Mes Projets</a></li>
    </ul>
</nav>-->

<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
    
    $mymenu = array(
    // idPage titre
    'index' => 'Accueil',
    'cv' => 'Mon CV',
    'projets' => 'Mes Projets'
    );

    echo '<nav id="menu_dynamique">
    <ul id="menu-navigation-principale" class="menu">';
    foreach($mymenu as $pageId => $pageParameters) {
        echo '<li';
        if($pageId == $currentPageId){
            echo ' id="selected"';
        }
        echo '><a href="'.$pageId.'.php">'.$pageParameters.'</li>';
    }
    echo '</ul></nav>';
    }
?>
