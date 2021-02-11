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
  $form = FORM_ABOUT_US;
  include "components/templates/modify-content-modal.tmpl.php";
  ?>

  <!-- Main Content -->
  <div class="container p-0 manzoku-color-contrast">
    <heading class="p-3">
      <h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">About Us</h1>
    </heading>
    <article class="p-3">
      <?php
      //render about header content
      $template = ABOUT_US_HEADER;
      include DISPLAY_ABOUT;
      ?>
    </article>
    <article class="row p-3">
        <?php
        //render about card content
        $template = ABOUT_US_CARD;
        include DISPLAY_ABOUT;
        ?>
    </article>
  </div>

  <?php
  //render add-content section for admins
  include "components/templates/add-content-section.tmpl.php";

  //close DB connection
  require_once CLOSE_DATABASE;

  //render map
  include MAP; ?>
</section>
<?php include FOOTER; ?>