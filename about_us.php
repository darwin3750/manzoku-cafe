<?php
session_start();
require_once "constants.php"; 
$page_name = "About Us";
require_once HEAD; 
include NAVBAR; ?>
  <section class="container">
    <br><h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">About Us</h1><br><br>
    <div class="row">
      <?php 
      require_once "components/scripts/connect-database.script.php";
      //require_once "components/scripts/get-testimonies.script.php";
      $template = ABOUT_CARD;
      include "components/scripts/display-about.script.php";
      require_once "components/scripts/close-database.script.php";
      ?>
    </div>
  </section>

  <div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

</body>
</html>
<?php include FOOTER; ?>

