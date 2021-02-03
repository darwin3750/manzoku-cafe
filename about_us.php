<?php
session_start();
require_once "constants.php"; 
$page_name = "About Us";
require_once HEAD; 
include NAVBAR; ?>
  <section class="container">
    <br><h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">About Us</h1><br><br>
    <div class="row">
      <?php 
      require_once "components/scripts/connect-database.script.php";
      //require_once "components/scripts/get-testimonies.script.php";
      $template = ABOUT_CARD;
      include "components/scripts/display-about.script.php";
      require_once "components/scripts/close-database.script.php";
      ?>
    </div>
    <br><br><h2 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Where to find us?</h2>
    <?php include MAP;?>
  </section>

  
<?php 
    include FOOTER; 
?>

