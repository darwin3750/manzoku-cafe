<?php

$sql_statement = mysqli_stmt_init($conn);
//to prevent SQL injections
function prepareSQLStatement($sql_query){
  global $sql_statement;
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    echo "sqlerror";
  }
}

require GET_DISTINCT_MENU_CATEGORIES;

foreach ($categories as $key => $category) {
  prepareSQLStatement("SELECT * FROM MENUS WHERE CATEGORY=?");
  mysqli_stmt_bind_param($sql_statement, "s", $category);
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  include MENU_CATEGORY;
}

?>

