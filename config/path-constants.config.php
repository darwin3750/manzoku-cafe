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
define('ROOT_TESTIMONIALS_FOLDER', "assets/images/testimonies/");
define('ROOT_IMAGES_FOLDER', "assets/images/"); 

//FOLDERS--ABSOLUTE PATH
define('IMAGES_FOLDER', SERVER_ROOT . "/assets/images/"); 
define('MENUS_FOLDER', SERVER_ROOT . "/assets/images/menus/"); 
define('CONTACT_US_FOLDER', SERVER_ROOT . "/assets/images/contact-us/"); 
define('POSTERS_FOLDER', SERVER_ROOT . "/assets/images/posters/"); 
define('DECORATIONS_FOLDER', SERVER_ROOT . "/assets/images/decorations/"); 
define('ABOUT_FOLDER', SERVER_ROOT . "/assets/images/about/"); 

//TEMPLATES--ABSOLUTE PATH
define('HEAD', SERVER_ROOT . "/components/templates/head.tmpl.php"); 
define('NAVBAR', SERVER_ROOT . "/components/templates/navbar.tmpl.php"); 
define('FOOTER', SERVER_ROOT . "/components/templates/footer.tmpl.php"); 
define('FEATURED_CONTENT', SERVER_ROOT . "/components/templates/featured-content.tmpl.php"); 
define('FEATURED_CONTENT_CAROUSEL', SERVER_ROOT . "/components/templates/featured-content-carousel.tmpl.php"); 
define('TESTIMONIAL_CARD', SERVER_ROOT . "/components/templates/testimonial-card.tmpl.php"); 
define('MENU_CATEGORY', SERVER_ROOT . "/components/templates/menu-category.tmpl.php");
define('CONTACT_US_SOCIALS_CARD', SERVER_ROOT . "/components/templates/contact-us-socials-card.tmpl.php"); 
define('CONTACT_US_NUMBERS_CARD', SERVER_ROOT . "/components/templates/contact-us-numbers-card.tmpl.php"); 
define('CONTACT_US_MESSAGE', SERVER_ROOT . "/components/templates/contact-us-message.tmpl.php"); 
define('ABOUT_US_CARD', SERVER_ROOT . "/components/templates/about-us-card.tmpl.php"); 
define('ABOUT_US_HEADER', SERVER_ROOT . "/components/templates/about-us-header.tmpl.php"); 
define('MAP', SERVER_ROOT . "/components/templates/map.tmpl.php"); 
define('ADMIN_CONFIG_REGISTRATION', SERVER_ROOT . "/components/templates/admin-config-registration.tmpl.php"); 
define('ADMIN_CONFIG_MESSAGES', SERVER_ROOT . "/components/templates/admin-config-messages.tmpl.php"); 
define('ADMIN_CONFIG_FILES', SERVER_ROOT . "/components/templates/admin-config-files.tmpl.php"); 
define('ADMIN_CONFIG_ANALYTICS', SERVER_ROOT . "/components/templates/admin-config-analytics.tmpl.php"); 
define('ADMIN_CONFIG_FILES_CARD', SERVER_ROOT . "/components/templates/admin-config-files-card.tmpl.php"); 
define('ADMIN_MESSAGES', SERVER_ROOT . "/components/templates/admin-messages.tmpl.php"); 
define('ADMIN_VIEW_STATS_CARD', SERVER_ROOT . "/components/templates/admin-view-stats-card.tmpl.php"); 

//TEMPLATES--FILE NAME
define('FORM_FEATURED_CONTENT', "form-featured-content.tmpl.php"); 
define('FORM_MENUS', "form-menus.tmpl.php"); 
define('FORM_ABOUT_US', "form-about-us.tmpl.php"); 
define('FORM_TESTIMONIES', "form-testimonies.tmpl.php"); 
define('FORM_CONTACT_US', "form-contact-us.tmpl.php"); 

//SCRIPTS--ABSOLUTE PATH
define('CONNECT_DATABASE', SERVER_ROOT . "/components/scripts/connect-database.script.php"); 
define('CLOSE_DATABASE', SERVER_ROOT . "/components/scripts/close-database.script.php"); 
define('AUTHENTICATE', SERVER_ROOT . "/components/scripts/authenticate.script.php"); 
define("REGISTER", SERVER_ROOT . "/components/scripts/register.script.php"); 
define('DISPLAY_POSTS', SERVER_ROOT . "/components/scripts/display-posts.script.php"); 
define('DISPLAY_ABOUT', SERVER_ROOT . "/components/scripts/display-about.script.php"); 
define('GET_DISTINCT_MENU_CATEGORIES', SERVER_ROOT . "/components/scripts/get-distinct-menu-categories.script.php"); 
define('DISPLAY_FOLDER', SERVER_ROOT . "/components/scripts/display-folder.script.php");
define('DISPLAY_MESSAGES', SERVER_ROOT . "/components/scripts/display-messages.script.php");
define('DISPLAY_CONTACT_US', SERVER_ROOT . "/components/scripts/display-contact-us.script.php");
define('DISPLAY_CONTACT_SOCIALS', SERVER_ROOT . "/components/scripts/display-contact-us.script.php");
define('DISPLAY_VIEW_STATS', SERVER_ROOT . "/components/scripts/display-view-stats.script.php");
?>
