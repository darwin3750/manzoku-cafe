<?php

//ASSETS
define('CSS', "assets/styles/styles.css");  
define('LOGO', "assets/images/logo.png"); 
define('LOGO2', "assets/images/logo2.png"); 
define('BANNER', "assets/images/banner.png"); 
define('BANNER2', "assets/images/banner2.png"); 
define('SITE_NAME', "Manzoku Cafe");
define('FOOTER_BG', "assets/images/decorations/footerbg.png");

//FOLDER--RELATIVE PATH FROM ROOT
define('ROOT_POSTERS_FOLDER', "assets/images/posters/"); 
define('ROOT_MENUS_FOLDER', "assets/images/menus/"); 
define('ROOT_CONTACT_US_FOLDER', "assets/images/contact-us/"); 
define('ROOT_DECORATIONS_FOLDER', "assets/images/posters/"); 
define('ROOT_ABOUT_FOLDER', "assets/images/about/");

//FOLDER--RELATIVE PATH FROM TEMPLATE
define('TEMPLATE_POSTERS_FOLDER', "../../assets/images/posters/"); 
define('TEMPLATE_MENUS_FOLDER', "../../assets/images/menus/"); 
define('TEMPLATE_CONTACT_US_FOLDER', "../../assets/images/contact-us/"); 
define('TEMPLATE_DECORATIONS_FOLDER', "../../assets/images/posters/"); 

//FOLDERS--ABSOLUTE PATH
define('POSTERS_FOLDER', SERVER_ROOT . "/assets/images/posters/"); 
define('MENUS_FOLDER', SERVER_ROOT . "/assets/images/menus/"); 
define('CONTACT_US_FOLDER', SERVER_ROOT . "/assets/images/contact-us/"); 
define('DECORATIONS_FOLDER', SERVER_ROOT . "/assets/images/posters/");  

//TEMPLATES--ABSOLUTE PATH
define('HEAD', SERVER_ROOT . "/components/templates/head.tmpl.php"); 
define('NAVBAR', SERVER_ROOT . "/components/templates/navbar.tmpl.php"); 
define('FOOTER', SERVER_ROOT . "/components/templates/footer.tmpl.php"); 
define('FEATURED_CONTENT', SERVER_ROOT . "/components/templates/featured-content.tmpl.php"); 
define('TESTIMONIAL_CARD', SERVER_ROOT . "/components/templates/testimonial-card.tmpl.php"); 
define('MENU_CATEGORY', SERVER_ROOT . "/components/templates/menu-category.tmpl.php");

//TEMPLATES--FILE NAME
define('FORM_FEATURED_CONTENT', "form-featured-content.tmpl.php"); 
define('FORM_MENUS', "form-menus.tmpl.php"); 
define('PRODUCT_CARD', SERVER_ROOT . "/components/templates/product-card.tmpl.php"); 
define('CONTACT_US_CARD', SERVER_ROOT . "/components/templates/contact-us-card.tmpl.php"); 
define('ABOUT_CARD', SERVER_ROOT . "/components/templates/about-card.tmpl.php"); 
define('MAP', SERVER_ROOT . "/components/templates/map.tmpl.php"); 

//TEMPLATES--FILE NAME
define('FORM_FEATURED_CONTENT', "form-featured-content.tmpl.php"); 
define('FORM_MENUS', "form-menus.tmpl.php"); 

//SCRIPTS--ABSOLUTE PATH
define('CONNECT_DATABASE', SERVER_ROOT . "/components/scripts/connect-database.script.php"); 
define('CLOSE_DATABASE', SERVER_ROOT . "/components/scripts/close-database.script.php"); 
define('AUTHENTICATE', SERVER_ROOT . "/components/scripts/authenticate.script.php"); 
define("REGISTER", SERVER_ROOT . "/components/scripts/register.script.php"); 
define('DISPLAY_POSTS', SERVER_ROOT . "/components/scripts/display-posts.script.php"); 
define('GET_DISTINCT_MENU_CATEGORIES', SERVER_ROOT . "/components/scripts/get-distinct-menu-categories.script.php"); 
?>