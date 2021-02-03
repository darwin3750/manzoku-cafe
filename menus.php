<?php
session_start();
require_once "constants.php";
$page_name = "Menus";
require_once HEAD;
include NAVBAR; ?>

<section class="">
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