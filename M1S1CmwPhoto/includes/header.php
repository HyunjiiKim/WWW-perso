<?php include 'functions/DynamicMenu.php'?>

<header>
    <nav>
        <div id="logo">Margaret<br>Bourke-White</div>
        <ul>
            <li <?php CurrentPage($pageTitle,"Accueil")?>><a href="index.php">Accueil</a></li>
            <li <?php CurrentPage($pageTitle,"About")?>><a href="About.php">À propos</a></li>
            <li <?php CurrentPage($pageTitle,"Photo")?>><a href="Photos.php">Mes travaux</a></li>
            <li <?php CurrentPage($pageTitle,"Blog")?>><a href="mbw_blog.php">Blog</a></li>
            <li <?php CurrentPage ($pageTitle,"Contact")?>><a href="Contact.php">Contact</a></li>
        </ul>
    </nav>
</header>