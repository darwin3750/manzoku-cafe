<?php

$sql_query = "SELECT * FROM VIEW_STATS WHERE DATE = CURRENT_DATE";
if($result = mysqli_query($conn, $sql_query)){
  $values = mysqli_fetch_array($result, 2);
  $labels = array("Date today", "Home", "Menus", "About Us", "Contact Us", "Testimonies");
  include $template;
}
?>