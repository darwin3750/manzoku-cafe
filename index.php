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

  //render featured content
  include "components/scripts/display-featured-content.script.php";

  //render add-content section for admins
  include "components/templates/add-content-section.tmpl.php";

  //close DB connection
  require_once "components/scripts/close-database.script.php";
  ?>



<div class="carousel"
  data-flickity='{ "wrapAround": true }'>
  <div class="carousel-cell">1</div>
  <div class="carousel-cell">2</div>
</div>


<style>

.carousel-cell {
  width: 100%;
  height: 200px;
  margin-right: 10px;
  background: #8C8;
  border-radius: 5px;
  counter-increment: carousel-cell;
}

</style>

</section>
<?php include FOOTER; ?>