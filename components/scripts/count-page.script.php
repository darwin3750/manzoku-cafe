<?php 
require "../../constants.php";
require "connect-database.script.php";

$page = preg_replace("/ /", "_", strtoupper($_GET['page']));

$sql_query = "SELECT * FROM VIEW_STATS WHERE DATE = CURRENT_DATE";
if (mysqli_query($conn, $sql_query)){
  $sql_query = "UPDATE VIEW_STATS SET $page = $page + 1 WHERE DATE = CURRENT_DATE()";
  if(mysqli_query($conn, $sql_query)){echo "success";}
}



require "close-database.script.php";
?>