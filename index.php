<?php
require_once "constants.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=<?php echo CSS; ?>>
  <title>Manzoku Cafe</title>
</head>

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