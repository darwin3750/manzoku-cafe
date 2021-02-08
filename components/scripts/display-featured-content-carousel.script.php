<?php

$sql_query = "SELECT * FROM FEATURED_CONTENT";
$sql_statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($sql_statement, $sql_query)) {
  echo "sqlerror";
} else {
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  while ($row = mysqli_fetch_assoc($result)) {
    $content_id = $row['CONTENT_ID'];
    $img_layout = $row['IMG_LAYOUT'];
    $is_carousel = $row['IS_CAROUSEL'];
    $content_title = $row['CONTENT_TITLE'];
    $subheading = $row['SUBHEADING'];
    $description = $row['DESCRIPTION'];
    $img_src = $row['IMG_SRC'];
    include FEATURED_CONTENT_CAROUSEL;
  }
}
?>
