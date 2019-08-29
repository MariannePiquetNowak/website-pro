<!-- <nav class="main-nav">
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Projets</a></li>
        <li><a href="artbook.html">Artbook</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav> -->
<?php

wp_nav_menu([
    'container' => 'nav',
    'menu_class' => false,
    'container_class' => 'main-nav',
    'theme_location' => 'burger'
]);