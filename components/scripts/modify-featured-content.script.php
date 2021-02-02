

<?php
require "../../constants.php";

//connect to the DB
require_once "connect-database.script.php";

$content_id = $_POST['content_id'];
$img_layout = $_POST['img_layout'];
$is_carousel = isset($_POST['is_carousel']) ? 1 : 0;
$content_title = $_POST['content_title'];
$subheading = $_POST['subheading'];
$description = $_POST['description'];
$img_src =  $_POST['img_src'];

$sql_statement = mysqli_stmt_init($conn);

function prepareSQLStatement($sql_query){
  global $sql_statement;
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    header("Location: ../../?error=sqlerorr");
    exit();
  }
}

//for adding content
if(isset($_POST['add-content-submit'])){
  prepareSQLStatement("INSERT INTO FEATURED_CONTENT (IMG_LAYOUT, IS_CAROUSEL, CONTENT_TITLE, SUBHEADING, DESCRIPTION, IMG_SRC) VALUES (?, ?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($sql_statement, "sissss", $img_layout, $is_carousel, $content_title, $subheading, $description, $img_src);
}
//for editing content
else if(isset($_POST['edit-content-submit'])){
  prepareSQLStatement("UPDATE FEATURED_CONTENT SET IMG_LAYOUT=?, IS_CAROUSEL=?, CONTENT_TITLE=?, SUBHEADING=?, DESCRIPTION=?, IMG_SRC=? WHERE CONTENT_ID=?");
  mysqli_stmt_bind_param($sql_statement, "sissssi", $img_layout, $is_carousel, $content_title, $subheading, $description, $img_src, $content_id);
}
//for deleting content
else if(isset($_POST['delete-section-submit'])){
  prepareSQLStatement("DELETE FROM FEATURED_CONTENT WHERE CONTENT_ID=?");
  mysqli_stmt_bind_param($sql_statement, "i", $content_id);
}else{
  header("Location: ../../");
  exit();
}
mysqli_stmt_execute($sql_statement);
header("Location: ../../?query_status=success");
exit();
?>