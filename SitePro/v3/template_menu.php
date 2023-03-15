<?php
    function renderMenuToHTML($currentPageId, $lang) {
    // un tableau qui d\'efinit la structure du site
    
    $mymenu = array();
    $lang = 'fr';
    if(isset($_GET['lang'])) {
        $lang = $_GET['lang'];
    }
    if($lang == 'fr') {
        $mymenu = array(
            'accueil' => 'Accueil',
            'cv' => 'Mon CV',
            'projets' => 'Mes projets',
            'contact' => 'Contact'
            );
    }
    if($lang == 'en') {
        $mymenu = array(
            'accueil' => 'Main page',
            'cv' => 'My resume',
            'projets' => 'My projects',
            'contact' => 'Contact'
            );
    }

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
    echo '<li><a href="index.php?page='.$currentPageId.'&lang=fr"><img src="img/la-france.png" width="20px"></a></li>
    <li><a href="index.php?page='.$currentPageId.'&lang=en"><img src="img/royaume-uni.png" width="20px" ></a></li></ul></nav></header></div></div>';
    }
?>
