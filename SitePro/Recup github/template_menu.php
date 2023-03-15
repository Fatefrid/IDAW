<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
    $lang = 'fr';
    
    $mymenu = array(
    // idPage titre
    'accueil' => 'Accueil',
    'cv' => 'Mon CV',
    'projets' => 'Mes projets',
    'contact' => 'Contact'
    );

    echo '<div class="main-nav">
    <div class="container">
        <header class="group top-nav">
            <div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
                <span class="logo">DRACO</span>
            </div>
            <nav id="navbar-1" class="navbar item-nav">
                <ul>';
    foreach($mymenu as $pageId => $pageParameters) {
        echo '<li';
        if($pageId == $currentPageId){
            echo ' class="active"';
        }
        echo '><a href="index.php?page='.$pageId.'&lang='.$lang.'">'.$pageParameters.'</a></li>';
    }
    echo '</ul></nav></header></div></div>';
    }
?>
