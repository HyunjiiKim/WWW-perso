<?php
function currentPage($a,$b){
    if($a==$b){
        echo 'id="current"';
    }
}
?>


<nav style="width: 1440px; margin: 0px auto; height: 20px;"><ul style=" display: flex; justify-content: space-between; font-size: 16pt; list-style-type:none; text-decoration: none; color:inherit;">
<a href="index.php"<?php currentPage($pageTitle,"Home")?>><li>Home</li></a>
<a href="about.php"<?php currentPage($pageTitle,"About")?>><li>About</li></a>
<a href="article.php"<?php currentPage($pageTitle,"Article")?>><li>Article</li></a>
<a href="contact.php"<?php currentPage($pageTitle,"Contact")?>><li style="margin-right: 15px;">Contact</li></a>
</ul></nav>