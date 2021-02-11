<?php 
require "../../constants.php";
require "connect-database.script.php";

$page = preg_replace("/ /", "_", strtoupper($_GET['page']));

$sql_query = "SELECT * FROM VIEW_STATS WHERE DATE = CURRENT_DATE";
$result = mysqli_query($conn, $sql_query);
if(mysqli_num_rows($result)<=0){
  $sql_query = "INSERT INTO VIEW_STATS (DATE, HOME, MENUS, ABOUT_US, CONTACT_US, TESTIMONIES) VALUES (CURRENT_DATE(),0,0,0,0,0)";
  mysqli_query($conn, $sql_query);
}
$sql_query = "UPDATE VIEW_STATS SET $page = $page + 1 WHERE DATE = CURRENT_DATE()";
if(mysqli_query($conn, $sql_query)){echo "success";}

require "close-database.script.php";
?>