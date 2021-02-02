

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

//for when adding content
if(isset($_POST['add-content-submit'])){
  //put to DB
  $sql_query = "INSERT INTO FEATURED_CONTENT (IMG_LAYOUT, IS_CAROUSEL, CONTENT_TITLE, SUBHEADING, DESCRIPTION, IMG_SRC) VALUES (?, ?, ?, ?, ?, ?)";
  $sql_statement = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    header("Location: ../../?error=sqlerorr");
    exit();
  }
  else{
    mysqli_stmt_bind_param($sql_statement, "sissss", $img_layout, $is_carousel, $content_title, $subheading, $description, $img_src);
    mysqli_stmt_execute($sql_statement);
    header("Location: ../../?add=success");
    exit();
  }
  // mysqli_stmt_close($sql_statement);
  // mysqli_close($conn);
}
//for when editing content
else if(isset($_POST['edit-content-submit'])){
  //update in DB
  $sql_query = "UPDATE FEATURED_CONTENT SET IMG_LAYOUT=?, IS_CAROUSEL=?, CONTENT_TITLE=?, SUBHEADING=?, DESCRIPTION=?, IMG_SRC=? WHERE CONTENT_ID=?";
  $sql_statement = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    header("Location: ../../?error=sqlerorr");
    exit();
  }
  else{
    mysqli_stmt_bind_param($sql_statement, "sissssi", $img_layout, $is_carousel, $content_title, $subheading, $description, $img_src, $content_id);
    mysqli_stmt_execute($sql_statement);
    header("Location: ../../?update=success");
    exit();
  }
  // mysqli_stmt_close($sql_statement);
  // mysqli_close($conn);
}
//for when deleting content
else if(isset($_POST['delete-section-submit'])){
  //update in DB
  $sql_query = "DELETE FROM FEATURED_CONTENT WHERE CONTENT_ID=?";
  $sql_statement = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    header("Location: ../../?error=sqlerorr2");
    exit();
  }
  else{
    mysqli_stmt_bind_param($sql_statement, "i", $content_id);
    mysqli_stmt_execute($sql_statement);
    header("Location: ../../?delete=success");
    exit();
  }
  // mysqli_stmt_close($sql_statement);
  // mysqli_close($conn);
}else{
  header("Location: ../../");
  exit();
}
?>