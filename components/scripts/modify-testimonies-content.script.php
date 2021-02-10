

<?php
require "../../constants.php";

//connect to the DB
require_once "connect-database.script.php";

$testimony_id = $_POST['about_id'];
$title = $_POST['title'];
$name = $_POST['name'];
$statement = $_POST['statement'];
$img_src = $_POST['img_src'];

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
  prepareSQLStatement("INSERT INTO TESTIMONIES (TITLE,AUTHOR_NAME,CONTENT, IMG_SRC) VALUES (?, ?, ?, ?)");
  mysqli_stmt_bind_param($sql_statement, "ssss", $title, $name, $statement, $img_src);
}
//for editing content
else if(isset($_POST['edit-content-submit'])){
  prepareSQLStatement("UPDATE TESTIMONIES SET TITLE=?, AUTHOR_NAME=?, CONTENT=?, IMG_SRC=? WHERE TESTIMONY_ID=?");
  mysqli_stmt_bind_param($sql_statement, "ssss", $title, $name, $statement, $img_src);
}
//for deleting content
else if(isset($_POST['delete-section-submit'])){
  prepareSQLStatement("DELETE FROM TESTIMONIES WHERE ABOUT_ID=?");
  mysqli_stmt_bind_param($sql_statement, "i", $about_id);
}else{
  header("Location: ../../testimonies.php");
  exit();
}
mysqli_stmt_execute($sql_statement);
header("Location: ../../testimonies.php?query_status=success");
exit();
?>