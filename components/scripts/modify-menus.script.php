

<?php
require "../../constants.php";

//connect to the DB
require_once "connect-database.script.php";

$menu_id = $_POST['menu_id'];
$img_src =  $_POST['img_src'];
$category = $_POST['category'];

$sql_statement = mysqli_stmt_init($conn);
//to prevent SQL injections
function prepareSQLStatement($sql_query){
  global $sql_statement;
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    header("Location: ../../menus.php?error=sqlerorr");
    exit();
  }
}

//for adding content
if(isset($_POST['add-content-submit'])){
  prepareSQLStatement("INSERT INTO MENUS (IMG_SRC, CATEGORY) VALUES (?, ?)");
  mysqli_stmt_bind_param($sql_statement, "ss", $img_src, $category);
}
//for editing content
else if(isset($_POST['edit-content-submit'])){
  prepareSQLStatement("UPDATE MENUS SET IMG_SRC=?, CATEGORY=? WHERE MENU_ID=?");
  mysqli_stmt_bind_param($sql_statement, "ssi", $img_src, $category, $menu_id);
}
//for deleting content
else if(isset($_POST['delete-section-submit'])){
  prepareSQLStatement("DELETE FROM MENUS WHERE MENU_ID=?");
  mysqli_stmt_bind_param($sql_statement, "i", $menu_id);
}else{
  header("Location: ../../menus.php");
  exit();
}
mysqli_stmt_execute($sql_statement);
header("Location: ../../menus.php?query_status=success");
exit();
?>