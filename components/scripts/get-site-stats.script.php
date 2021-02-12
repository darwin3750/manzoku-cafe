<?php
require "../../constants.php";
require "connect-database.script.php";

$date_results = array();
$sql_query = "SELECT * FROM view_stats WHERE (DATE BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()) ORDER BY DATE DESC";
$sql_statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($sql_statement, $sql_query)) {
  echo "sqlerror";
} else {
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  while ($row = mysqli_fetch_assoc($result)) {
    array_push($date_results, array(
      "date" => $row['DATE'],
      "home" => $row['HOME'],
      "menus" => $row['MENUS'],
      "about_us" => $row['ABOUT_US'],
      "contact_us" => $row['CONTACT_US'],
      "testimonies" => $row['TESTIMONIES'],
    ));
  }
  echo json_encode($date_results);
}
require "close-database.script.php";
      ?>