<?php
session_start();
require_once "constants.php";
$page_name = "Menus";
require_once HEAD;
include NAVBAR; ?>

<section class="">
  <section class="p-3 manzoku-bg-secondary">
  </section>
  <section class="container p-3">
    <h1 class="manzoku-typeface-main0 manzoku-font-5 manzoku-color-contrast p-3 m-0">Food Categories: </h1>
  </section>
  <?php
  //connect to DB
  require_once "components/scripts/connect-database.script.php";

  //render modal
  $form = FORM_MENUS;
  include "components/templates/modify-content-modal.tmpl.php";

  //render menus content
  include "components/scripts/display-menus.script.php";

  //render add-content section for admins
  include "components/templates/add-content-section.tmpl.php";

  //close DB connection
  require_once "components/scripts/close-database.script.php";
  ?>
</section>

<?php include FOOTER; ?>