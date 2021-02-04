<?php

$sql_query_cardcode = "SELECT * FROM CONTACT_US";
$sql_statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($sql_statement, $sql_query_cardcode)) {
  echo "sqlerror";
} else {
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  while ($row = mysqli_fetch_assoc($result)) {
    $type = $row['CONTACT_TYPE'];
    $title = $row['TITLE'];
    $content = $row['CONTENT'];
    $img_src = $row['IMG_SRC'];
    include $template;
  }
}
      ?>