<?php
require_once "constants.php"; 
$page_name = "Home";
require_once HEAD; 
?>

<body class="theme1">
  <?php include NAVBAR; ?>
  <section class="container">

    <h1>MENU</h1>
    <div class="row">
      <?php
      require_once "components/scripts/connect-database.script.php";
      $template = PRODUCT_CARD;
      require_once "components/scripts/display-posts.script.php";
      ?>
    </div>
  </section>
  <?php include FOOTER; ?>
</body>

</html>