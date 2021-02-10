<?php
session_start();
require_once "constants.php";
$page_name = "Contact Us";
require_once HEAD;
include NAVBAR; ?>

<section class="manzoku-color-contrast">
  <?php
  //connect to DB
  require_once CONNECT_DATABASE;

  //render modal
  $form = FORM_ABOUT_US;
  include "components/templates/modify-content-modal.tmpl.php";

  //render message us form
  include CONTACT_US_MESSAGE;
  ?>

  <!-- Main Content -->
  <div class="container p-0 manzoku-color-contrast">
    <heading class="p-3">
      <h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Connect with us:</h1>
    </heading>
    <div class="row">
      <?php
      //render contact us socials
      $template = CONTACT_US_SOCIALS_CARD;
      include DISPLAY_CONTACT_US;
      ?>
    </div>
    <heading class="p-3">
      <h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Communicate with us:</h1>
    </heading>
    <div class="row">
      <?php
      //render about card content
      $template = CONTACT_US_NUMBERS_CARD;
      include DISPLAY_CONTACT_US;
      ?>
    </div>
  </div>
  <?php
  //render add-content section for admins
  include "components/templates/add-content-section.tmpl.php";

  //close DB connection
  require_once CLOSE_DATABASE;
  ?>
</section>
<?php include FOOTER; ?>

<style>
  .contact-card:hover {
    border: 3px solid var(--manzoku-accent2);
    transition: 0.2s;
  }

  .manzoku-send {
    border: none;
  }
</style>