

<?php
require "../../constants.php";

//connect to the DB
require_once "connect-database.script.php";

$about_id = $_POST['about_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$img_src = $_POST['img_src'];
$is_card = isset($_POST['is_card']) ? 1 : 0;

$sql_statement = mysqli_stmt_init($conn);
//to prevent SQL injections
function prepareSQLStatement($sql_query){
  global $sql_statement;
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    header("Location: ../../about_us.php?error=sqlerorr");
    exit();
  }
}

//for adding content
if(isset($_POST['add-content-submit'])){
  prepareSQLStatement("INSERT INTO ABOUT_US (TITLE, DESCRIPTION, IMG_SRC, IS_CARD) VALUES (?, ?, ?, ?)");
  mysqli_stmt_bind_param($sql_statement, "sssi", $title, $description, $img_src, $is_card);
}
//for editing content
else if(isset($_POST['edit-content-submit'])){
  prepareSQLStatement("UPDATE ABOUT_US SET TITLE=?, DESCRIPTION=?, IMG_SRC=?, IS_CARD=? WHERE ABOUT_ID=?");
  mysqli_stmt_bind_param($sql_statement, "ssssi", $title, $description, $img_src, $is_card, $about_id);
}
//for deleting content
else if(isset($_POST['delete-section-submit'])){
  prepareSQLStatement("DELETE FROM ABOUT_US WHERE ABOUT_ID=?");
  mysqli_stmt_bind_param($sql_statement, "i", $about_id);
}else{
  header("Location: ../../about_us.php");
  exit();
}
mysqli_stmt_execute($sql_statement);
header("Location: ../../about_us.php?query_status=success");
exit();
?>