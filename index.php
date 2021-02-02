<?php
session_start();
require_once "constants.php";
$page_name = "Home";
require_once HEAD;
include NAVBAR; ?>

<section class="container">
  <div class="row p-3 p-md-0">
    <?php
    require_once "components/scripts/connect-database.script.php";
    $form = FORM_FEATURED_CONTENT;
    include "components/templates/add-content-modal.tmpl.php";
    include "components/scripts/display-featured-content.script.php";
    include "components/templates/add-content-section.tmpl.php";
    ?>
    <?php
    require_once "components/scripts/close-database.script.php";
    ?>
  </div>
</section>

<?php include FOOTER; ?>