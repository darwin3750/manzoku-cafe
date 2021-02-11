<?php
session_start();
require_once "constants.php";
$page_name = "Home";
require_once HEAD;
include NAVBAR; ?>

<section class="manzoku-color-contrast">
  <?php
    //connect to DB
    require_once CONNECT_DATABASE;

    //render modal
    $form = FORM_FEATURED_CONTENT;
    include "components/templates/modify-content-modal.tmpl.php";
  ?>
  <!-- CAROUSEL -->
  <div class="carousel pl-md-3 pr-md-3" data-flickity='{ "wrapAround": true, "autoPlay": true, "adaptiveHeight": false, "pageDots": false }'>
    <?php
      $template = FEATURED_CONTENT;
      include "components/scripts/display-featured-content-carousel.script.php";
    ?>
  </div>
  <?php
    //render featured content
    include "components/scripts/display-featured-content.script.php";

    //render add-content section for admins
    include "components/templates/add-content-section.tmpl.php";

    //close DB connection
    require_once CLOSE_DATABASE;
  ?>

</section>
<?php include FOOTER; ?>

<style>
  .flickity-slider {
    display: flex;
    align-items: center;
  }
</style>