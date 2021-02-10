

<?php
require "../../constants.php";

//connect to the DB
require_once "connect-database.script.php";

$contact_id = $_POST['contact_id'];
$contact_type = $_POST['contact_type'];
$title = $_POST['title'];
$content = $_POST['content'];
$img_src =  $_POST['img_src'];

$sql_statement = mysqli_stmt_init($conn);
//to prevent SQL injections
function prepareSQLStatement($sql_query){
  global $sql_statement;
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    header("Location: ../../contact_us.php?error=sqlerorr");
    exit();
  }
}

//for adding content
if(isset($_POST['add-content-submit'])){
  prepareSQLStatement("INSERT INTO CONTACT_US (CONTACT_TYPE, TITLE, CONTENT, IMG_SRC) VALUES (?, ?, ?, ?)");
  mysqli_stmt_bind_param($sql_statement, "ssss", $contact_type, $title, $content, $img_src);
}
//for editing content
else if(isset($_POST['edit-content-submit'])){
  prepareSQLStatement("UPDATE CONTACT_US SET CONTACT_TYPE=?, TITLE=?, CONTENT=?, IMG_SRC=? WHERE CONTACT_ID=?");
  mysqli_stmt_bind_param($sql_statement, "ssssi", $contact_type, $title, $content, $img_src, $contact_id);
}
//for deleting content
else if(isset($_POST['delete-section-submit'])){
  prepareSQLStatement("DELETE FROM CONTACT_US WHERE CONTACT_ID=?");
  mysqli_stmt_bind_param($sql_statement, "i", $contact_id);
}else{
  header("Location: ../../contact_us.php");
  exit();
}
mysqli_stmt_execute($sql_statement);
header("Location: ../../contact_us.php?query_status=success");
exit();
?>