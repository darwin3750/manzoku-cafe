<?php

define('CSS', "assets/styles/styles.css");  
define('LOGO', "assets/images/logo.png"); 
define('LOGO2', "assets/images/logo2.png"); 
define('BANNER', "assets/images/banner.png"); 
define('BANNER2', "assets/images/banner2.png"); 
define('SITE_NAME', "Manzoku Cafe");

//TEMPLATES--ABSOLUTE PATH
define('HEAD', SERVER_ROOT . "/components/templates/head.tmpl.php"); 
define('NAVBAR', SERVER_ROOT . "/components/templates/navbar.tmpl.php"); 
define('FOOTER', SERVER_ROOT . "/components/templates/footer.tmpl.php"); 
define('PRODUCT_CARD', SERVER_ROOT . "/components/templates/product-card.tmpl.php"); 
define('FEATURED_CONTENT', SERVER_ROOT . "/components/templates/featured-content.tmpl.php"); 

//TEMPLATES--FILE NAME
define('FORM_FEATURED_CONTENT', "form-featured-content.tmpl.php"); 

//SCRIPTS--ABSOLUTE PATH
define('CONNECT_DATABASE', SERVER_ROOT . "/components/scripts/connect-database.script.php"); 
define('CLOSE_DATABASE', SERVER_ROOT . "/components/scripts/close-database.script.php"); 
define('AUTHENTICATE', SERVER_ROOT . "/components/scripts/authenticate.script.php"); 
define('DISPLAY_POSTS', SERVER_ROOT . "/components/scripts/display-posts.script.php"); 
define("REGISTER", SERVER_ROOT . "/components/scripts/register.script.php"); 
?>