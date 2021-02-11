<?php
session_start();
require_once "constants.php"; 
$page_name = "Testimonies";
require_once HEAD; 
include NAVBAR; ?>

  <section class="container">
    
    <h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base mt-5">TESTIMONIES</h1>
    <h2 class="manzoku-regular-semibold manzoku-font-2 text-center manzoku-color-secondary">SEE WHAT CUSTOMERS SAY ABOUT OUR SERVICES</h2><br><br>
    <div class="row">
      
      <?php 
      require_once "components/scripts/connect-database.script.php";
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