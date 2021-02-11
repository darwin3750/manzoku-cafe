<?php

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL,NULL, CERRTIFICATE_AUTHORITY_FILE, NULL, NULL);
mysqli_real_connect($conn, DB_SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: '.mysqli_connect_error());
}

function filterLineBreaks($str){
  $str = preg_replace("/\n/","<br/>",$str);
  $str = preg_replace("/\r/","",$str);
  return $str;
}

function filterQuotations($str){
  $str = str_replace("'", "\'", $str);
  $str = str_replace('"', '\"', $str);
  return $str;
}

function filterAll($str){
  $str = filterLineBreaks($str);
  $str = filterQuotations($str);
  return htmlspecialchars($str);
}
?>