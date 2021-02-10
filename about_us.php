<?php
session_start();
require_once "constants.php"; 
$page_name = "About Us";
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

      <!-- Main Content -->
      <div class="container p-0 manzoku-color-primary">
        <h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">About Us</h1>
        <?php
          //render about header content
          $template = ABOUT_US_HEADER;
          include DISPLAY_ABOUT;
        ?>
        <div class="row p-3 mt-2 mb-2 position-relative">
          <?php
            //render about card content
            $template = ABOUT_US_CARD;
            include DISPLAY_ABOUT;
          ?>
        </div>
      </div>

      <?php
      //render add-content section for admins
      include "components/templates/add-content-section.tmpl.php";

      //close DB connection
      require_once CLOSE_DATABASE;

      //render map
      include MAP;?>
  </section>

  
<?php include FOOTER; ?>

