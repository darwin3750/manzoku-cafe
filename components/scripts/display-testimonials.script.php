<?php

$sql_query = "SELECT * FROM TESTIMONIES";
$sql_statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($sql_statement, $sql_query)) {
  echo "sqlerror";
} else {
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  while ($row = mysqli_fetch_assoc($result)) {
    $testimony_id = $row['TESTIMONY_ID'];
    $title = filterLineBreaks($row['TITLE']);
    $author_name = filterLineBreaks($row['AUTHOR_NAME']);
    $content = filterLineBreaks($row['CONTENT']);
    $js_title = filterAll($row['TITLE']);
    $js_author_name = filterAll($row['AUTHOR_NAME']);
    $js_content = filterAll($row['CONTENT']);
    $img_src = $row['IMG_SRC'];
    include $template;
  }
}
      ?>