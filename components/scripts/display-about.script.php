<?php

$sql_query = "SELECT * FROM ABOUT_US";
$sql_statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($sql_statement, $sql_query)) {
  echo "sqlerror";
} else {
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  while ($row = mysqli_fetch_assoc($result)) {
    $about_id = $row['ABOUT_ID'];
    $title = filterLineBreaks($row['TITLE']);
    $description = filterLineBreaks($row['DESCRIPTION']);
    $js_title = filterAll($row['TITLE']);
    $js_description = filterAll($row['DESCRIPTION']);
    $img_src = $row['IMG_SRC'];
    $is_card = $row['IS_CARD'];
    include $template;
  }
}
      ?>