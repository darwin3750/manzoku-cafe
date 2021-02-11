<?php

$sql_query = "SELECT * FROM VIEW_STATS WHERE DATE = CURRENT_DATE";
if($result = mysqli_query($conn, $sql_query)){
  $row = mysqli_fetch_assoc($result);
  $date = $row['DATE'];
  $home = $row['HOME'];
  $menus = $row['MENUS'];
  $about_us = $row['ABOUT_US'];
  $contact_us = $row['CONTACT_US'];
  $testimonies = $row['TESTIMONIES'];
  include $template;
}
?>