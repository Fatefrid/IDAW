<?php
require_once('template_header.php');
?>
        <h1>Bienvenue sur la liste de mes projets !</h1><br>
        <dl>
            <li>Site Web
                <article>
                    <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</section>
                    <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</section>
                </article>
            </li>
            <li>Jeu video VR
                <article>
                    <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</section>
                    <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</section>
                </article>
            </li>
            <li>Aplication web
                <article>
                    <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</section>
                    <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</section>
                </article>
            </li>
            <li>Logiciel de supervision
                <article>
                    <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</section>
                    <section>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</section>
                </article>
            </li>
        </dl>
<?php
require_once('template_menu.php');
renderMenuToHTML('projets');
require_once('template_footer.php');
?>