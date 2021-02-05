<?php
session_start();
require "constants.php";
$page_name = "Config";
require_once HEAD;
include NAVBAR; ?>

<section class="">
  <!-- data analytics button -->
  <section id="admin-config-nav" class="container d-flex justify-content-around p-3">
    <div class="svg-container-icon-4 manzoku-border-accent1-3 rounded-circle p-2 tooltip-enabler active" role="button" onclick="carouselSwitchTo(0, '#admin-config-carousel');">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g fill='var(--manzoku-contrast)'>
          <path d="M4 12h4v10H4zM10 4h4v18h-4zM16 8h4v14h-4z"></path>
        </g>
      </svg>
      <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
        Site Analytics
      </span>
    </div>
    <!-- messages button -->
    <div class="svg-container-icon-4 manzoku-border-accent1-3 rounded-circle p-2 tooltip-enabler" role="button" onclick="carouselSwitchTo(1, '#admin-config-carousel');">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g fill='var(--manzoku-contrast)'>
          <path d="M1 5v14l7-7-7-7zm22 14V5l-7 7 7 7zm-11-3l-3.5-3.5L1 20h22l-7.5-7.5L12 16zM1 4l11 11L23 4H1z"></path>
        </g>
      </svg>
      <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
        Messages
      </span>
    </div>
    <!-- files button -->
    <div class="svg-container-icon-4 manzoku-border-accent1-3 rounded-circle p-2 tooltip-enabler" role="button" onclick="carouselSwitchTo(2, '#admin-config-carousel');">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g fill='var(--manzoku-contrast)'>
          <path d="M21 16.2V13c0-1.1-.9-2-2-2h-6V7.8c1.3-.5 2.2-1.9 1.9-3.4-.2-1.2-1.2-2.1-2.4-2.3C10.7 1.7 9 3.2 9 5c0 1.3.8 2.4 2 2.8V11H5c-1.1 0-2 .9-2 2v3.2c-1.3.5-2.2 1.9-1.9 3.4.2 1.2 1.2 2.1 2.4 2.3C5.3 22.3 7 20.8 7 19c0-1.3-.8-2.4-2-2.8V13h6v3.2c-1.3.5-2.2 1.9-1.9 3.4.2 1.2 1.2 2.1 2.4 2.3 1.9.3 3.6-1.1 3.6-2.9 0-1.3-.8-2.4-2-2.8V13h6v3.2c-1.3.5-2.2 1.9-1.9 3.4.2 1.2 1.2 2.1 2.4 2.3 1.9.3 3.6-1.1 3.6-2.9-.2-1.3-1-2.4-2.2-2.8z"></path>
        </g>
      </svg>
      <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
        File Manager
      </span>
    </div>
    <!-- register button -->
    <div class="svg-container-icon-4 manzoku-border-accent1-3 rounded-circle p-2 tooltip-enabler" role="button" onclick="carouselSwitchTo(3, '#admin-config-carousel');">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <g fill='var(--manzoku-contrast)'>
          <path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm4 10h-3v3.13c0 .48-.39.88-.88.88h-.25c-.48-.01-.87-.4-.87-.88V13H8c-.55 0-1-.45-1-1s.45-1 1-1h3V7.88c0-.49.39-.88.88-.88h.25c.48 0 .87.39.87.88V11h3c.55 0 1 .45 1 1s-.45 1-1 1z"></path>
        </g>
      </svg>
      <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
        Registration
      </span>
    </div>
    <!-- logout button -->
    <div class="svg-container-icon-4 manzoku-border-accent1-3 rounded-circle p-2 tooltip-enabler" role="button" onclick="document.querySelector('#sign-out-form').submit()">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 25 25" version="1.1" x="0px" y="0px">
        <g fill="var(--manzoku-contrast)">
          <path d="M14.0739,15.8331 C13.6549,15.7941 13.2949,16.0951 13.2549,16.5071 C13.1749,17.3291 12.5139,18.0971 12.0309,18.1841 C10.0509,18.5111 8.9059,18.5101 6.9349,18.1851 C6.4419,18.0971 5.7819,17.3291 5.7029,16.5131 C5.4319,13.4951 5.4319,10.4351 5.7019,7.4221 C5.7819,6.6011 6.4419,5.8331 6.9259,5.7461 C8.9049,5.4191 10.0499,5.4191 12.0209,5.7441 C12.5139,5.8331 13.1749,6.6011 13.2549,7.4221 C13.2939,7.8341 13.6449,8.1331 14.0739,8.0961 C14.4859,8.0561 14.7879,7.6891 14.7469,7.2771 C14.6059,5.8351 13.5019,4.4851 12.2749,4.2661 C10.1319,3.9111 8.8229,3.9111 6.6719,4.2681 C5.4549,4.4851 4.3499,5.8351 4.2089,7.2831 C3.9299,10.3891 3.9299,13.5401 4.2099,16.6521 C4.3499,18.0941 5.4549,19.4441 6.6809,19.6631 C7.7519,19.8401 8.6139,19.9291 9.4759,19.9291 C10.3419,19.9291 11.2069,19.8401 12.2849,19.6621 C13.5019,19.4441 14.6059,18.0941 14.7469,16.6521 C14.7879,16.2401 14.4859,15.8741 14.0739,15.8331"></path>
          <path d="M21.8707,12.128 C21.8757,12.095 21.8897,12.064 21.8897,12.031 C21.8897,12.03 21.8907,12.029 21.8907,12.027 C21.8897,11.923 21.8667,11.824 21.8277,11.734 C21.3067,10.525 20.5957,9.635 19.3777,8.664 C19.0537,8.407 18.5827,8.458 18.3227,8.783 C18.0647,9.107 18.1187,9.579 18.4417,9.837 C19.0667,10.335 19.5127,10.793 19.8667,11.294 L10.3837,11.371 C9.9697,11.374 9.6367,11.712 9.6397,12.127 C9.6417,12.539 9.9777,12.871 10.3897,12.871 L10.3947,12.871 L19.6797,12.795 C19.2657,13.224 18.7817,13.611 18.3587,13.867 C18.0047,14.081 17.8907,14.542 18.1037,14.897 C18.2457,15.13 18.4927,15.259 18.7477,15.259 C18.8797,15.259 19.0137,15.224 19.1347,15.151 C20.0487,14.599 21.3037,13.53 21.8267,12.335 C21.8277,12.332 21.8267,12.33 21.8287,12.327 C21.8547,12.266 21.8617,12.197 21.8707,12.128"></path>
        </g>
      </svg>
      <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
        Logout
      </span>
    </div>
  </section>
  <section id="admin-config-carousel" class="carousel" data-flickity='{ "wrapAround": true, "adaptiveHeight": true, "pageDots": false }' onload="initCarouselNav();">
    <div class="carousel-cell w-100">
      <?php include ADMIN_CONFIG_ANALYTICS; ?>
    </div>
    <div class="carousel-cell w-100">
      <?php include ADMIN_CONFIG_MESSAGES; ?>
    </div>
    <div class="carousel-cell w-100">
      <?php include ADMIN_CONFIG_FILES; ?>
    </div>
    <div class="carousel-cell w-100">
      <?php include ADMIN_CONFIG_REGISTRATION; ?>
    </div>
  </section>
  <!-- HIDDEN -->
  <form id="sign-out-form" action="components/scripts/sign-out.script.php" class=" w-100 text-left d-none" method="POST">
    <input type="submit" value="Sign Out" class="btn manzoku-btn-accent1 btn-lg btn-block manzoku-typeface-main0" />
  </form>
</section>
<?php include FOOTER; ?>

<style>
  #admin-config-nav .svg-container-icon-4:hover, 
      #admin-config-nav .svg-container-icon-4.active {
    border: 3px solid var(--manzoku-accent2);
    transition: 0.4s;
  }

  #admin-config-nav .svg-container-icon-4:hover svg g, 
      #admin-config-nav .svg-container-icon-4.active svg g {
    fill: var(--manzoku-base);
    transition: 0.4s;
  }
</style>