<?php

$sql_query_cardcode = "SELECT * FROM CONTACT_US";
$sql_statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($sql_statement, $sql_query_cardcode)) {
  echo "sqlerror";
} else {
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  while ($row = mysqli_fetch_assoc($result)) {
    $contact_id = $row['CONTACT_ID'];
    $contact_type = $row['CONTACT_TYPE'];
    $title = filterLineBreaks($row['TITLE']);
    $content = filterLineBreaks($row['CONTENT']);
    $js_title = filterAll($row['TITLE']);
    $js_content = filterAll($row['CONTENT']);
    $img_src = $row['IMG_SRC'];
    include $template;
  }
}
?>