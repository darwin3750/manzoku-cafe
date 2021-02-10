<?php
session_start();
require_once "constants.php"; 
$page_name = "Testimonies";
require_once HEAD; 
include NAVBAR; ?>

  <section class="container">
    
    <br><h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Testimonials</h1>
    <br><h2 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">See what customers say about our services</h2><br><br>
    <div class="row">
      
      <?php 
      require_once "components/scripts/connect-database.script.php";
      //require_once "components/scripts/get-testimonies.script.php";
      //render modal
      $form = FORM_TESTIMONIES;
      include "components/templates/modify-content-modal.tmpl.php";
      $template = TESTIMONIAL_CARD;
      include "components/scripts/display-testimonials.script.php";
      include "components/templates/add-content-section.tmpl.php";
      require_once "components/scripts/close-database.script.php";
      ?>
    </div>
  </section>
<?php include FOOTER; ?>