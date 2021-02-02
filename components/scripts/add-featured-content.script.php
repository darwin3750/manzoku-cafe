

<?php
require "../../constants.php";
echo "Location: ". SERVER_ROOT;
//check if the user got to this page by clicking the sign up button
if(isset($_POST['add-content-submit'])){
  //connect to the DB
  require_once "connect-database.script.php";
  $img_layout = $_POST['img_layout'];
  $is_carousel = isset($_POST['is_carousel']) ? 1 : 0;
  $content_title = $_POST['content_title'];
  $subheading = $_POST['subheading'];
  $description = $_POST['description'];
  $img_src =  $_POST['img_src'];

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
    header("Location: ../../?signup=success");
    exit();
  }
  mysqli_stmt_close($sql_statement);
  mysqli_close($conn);
}
else{
  header("Location: ../../");
  exit();
}
?>