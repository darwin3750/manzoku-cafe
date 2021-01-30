<?php

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL,NULL, CERRTIFICATE_AUTHORITY_FILE, NULL, NULL);
mysqli_real_connect($conn, DB_SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>