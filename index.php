<?php
session_start();
require_once "constants.php"; 
$page_name = "Home";
require_once HEAD; 
include NAVBAR; ?>
  <section class="container">
    <h1>MENU</h1>
    <div class="row">
      <?php
      require_once "components/scripts/connect-database.script.php";
      include "components/scripts/display-featured-content.script.php";
      require_once "components/scripts/close-database.script.php";
      ?>
    </div>
  </section>
<?php include FOOTER; ?>