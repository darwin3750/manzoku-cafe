<?php

define('CSS', "assets/styles/styles.css");  
define('LOGO', "assets/images/logo.png"); 
define('LOGO2', "assets/images/logo2.png"); 
define('BANNER', "assets/images/banner.png"); 
define('BANNER2', "assets/images/banner2.png"); 
define('SITE_NAME', "Manzoku Cafe");
define('FOOTER_BG', "assets/images/decorations/footerbg.png");

//TEMPLATES
define('HEAD', SERVER_ROOT . "/components/templates/head.tmpl.php"); 
define('NAVBAR', SERVER_ROOT . "/components/templates/navbar.tmpl.php"); 
define('FOOTER', SERVER_ROOT . "/components/templates/footer.tmpl.php"); 
define('PRODUCT_CARD', SERVER_ROOT . "/components/templates/product-card.tmpl.php"); 
define('TESTIMONIAL_CARD', SERVER_ROOT . "/components/templates/testimonial-card.tmpl.php"); 
define('CONTACT_US_CARD', SERVER_ROOT . "/components/templates/contact-us-card.tmpl.php"); 

//SCRIPTS
define('CONNECT_DATABASE', SERVER_ROOT . "/components/scripts/connect-database.script.php"); 
define('CLOSE_DATABASE', SERVER_ROOT . "/components/scripts/close-database.script.php"); 
define('AUTHENTICATE', SERVER_ROOT . "/components/scripts/authenticate.script.php"); 
define('DISPLAY_POSTS', SERVER_ROOT . "/components/scripts/display-posts.script.php"); 
define("REGISTER", SERVER_ROOT . "/components/scripts/register.script.php"); 
?>