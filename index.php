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

      $sql_query_cardcode = "SELECT * FROM POSTS";
      $sql_statement = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($sql_statement, $sql_query_cardcode)) {
        echo "sqlerror";
      } else {
        mysqli_stmt_execute($sql_statement);
        $result = mysqli_stmt_get_result($sql_statement);
        while ($row = mysqli_fetch_assoc($result)) {
          $title = $row['TITLE'];
          $description = $row['DESCRIPTION'];
          $img_src = $row['IMG_SRC'];
          include PRODUCT_CARD;
        }
      }
      ?>
    </div>
  </section>



  <?php include FOOTER; ?>
</body>

</html>