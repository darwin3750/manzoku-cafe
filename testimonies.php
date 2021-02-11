<?php
session_start();
require_once "constants.php";
$page_name = "Testimonies";
require_once HEAD;
include NAVBAR; ?>

<section class="manzoku-color-contrast">
  <?php
  //connect database script
  require_once CONNECT_DATABASE;

  //render modal
  $form = FORM_TESTIMONIES;
  include "components/templates/modify-content-modal.tmpl.php";
  ?>

  <!-- Main Content -->
  <div class="container p-0 manzoku-color-contrast">
    <heading class="p-3 manzoku-animate-slidefadein d-block">
      <h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Testimonials</h1>
      <h2 class="manzoku-typeface-main0 manzoku-font-2 text-center manzoku-color-secondary">See what customers say about our services</h2>
    </heading>
    <article class="row p-3">
      <?php
      //render testimonies cardds
      $template = TESTIMONIAL_CARD;
      include "components/scripts/display-testimonials.script.php";
      ?>
    </article>
  </div>

  <?php
  //
  include "components/templates/add-content-section.tmpl.php";

  //
  require_once CLOSE_DATABASE;
  ?>
</section>
<?php include FOOTER; ?>