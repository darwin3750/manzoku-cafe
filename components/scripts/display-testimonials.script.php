<?php

$sql_query_cardcode = "SELECT * FROM TESTIMONIES";
$sql_statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($sql_statement, $sql_query_cardcode)) {
  echo "sqlerror";
} else {
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  while ($row = mysqli_fetch_assoc($result)) {
    $testimony_id = $row['TESTIMONY_ID'];
    $title = preg_replace("/\r|\n/","<br/>",$row['TITLE']);
    $author_name = preg_replace("/\r|\n/","<br/>",$row['AUTHOR_NAME']);
    $content = preg_replace("/\r|\n/","<br/>",$row['CONTENT']);
    $img_src = $row['IMG_SRC'];
    include $template;
  }
}
      ?>