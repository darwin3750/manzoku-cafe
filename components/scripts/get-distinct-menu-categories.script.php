<?php
$categories = array();

$sql_statement = mysqli_stmt_init($conn);
$sql_query = "SELECT DISTINCT CATEGORY FROM MENUS";
if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
  echo "sqlerror";
}
mysqli_stmt_execute($sql_statement);
$result = mysqli_stmt_get_result($sql_statement);
while ($row = mysqli_fetch_assoc($result)) {
  array_push($categories, $row['CATEGORY']);
}

?>

