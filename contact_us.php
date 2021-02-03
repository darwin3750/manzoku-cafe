<?php
session_start();
require_once "constants.php"; 
$page_name = "Contact Us";
require_once HEAD; 
include NAVBAR; ?>
  <section class="container">
    <br><h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Contact Us</h1><br><br>
    <div class="row">
      <?php 
      require_once "components/scripts/connect-database.script.php";
      //require_once "components/scripts/get-testimonies.script.php";
      $template = CONTACT_US_CARD;
      include "components/scripts/display-contact-us.script.php";
      require_once "components/scripts/close-database.script.php";
      ?>
    </div>
  </section>
<?php include FOOTER; ?>