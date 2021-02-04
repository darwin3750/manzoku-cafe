<?php
session_start();
require_once "constants.php";
$page_name = "Home";
require_once HEAD;
include NAVBAR; ?>

<section class="manzoku-color-contrast">
  <?php
  //connect to DB
  require_once "components/scripts/connect-database.script.php";

  //render modal
  $form = FORM_FEATURED_CONTENT;
  include "components/templates/modify-content-modal.tmpl.php";
  
  //render featured content carousel
  ?><div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true, "adaptiveHeight": true, "pageDots": false }'><?php
    include "components/scripts/display-featured-content-carousel.script.php";
  ?></div><?php
  
  //render featured content
  include "components/scripts/display-featured-content.script.php";

  //render add-content section for admins
  include "components/templates/add-content-section.tmpl.php";

  //close DB connection
  require_once "components/scripts/close-database.script.php";
  ?>

</section>
<?php include FOOTER; ?>