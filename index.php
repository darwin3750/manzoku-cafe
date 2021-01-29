<?php 

require_once "config/constants.php";
require_once "components/scripts/database-handler.script.php";

$sql_query_cardcode = "SELECT * FROM test_table";
$sql_statement = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($sql_statement, $sql_query_cardcode)){
  echo "sqlerror";
  exit();
}
else{
  mysqli_stmt_execute($sql_statement);
    $result = mysqli_stmt_get_result($sql_statement);
    $matches_cardcode=0;
    while($row = mysqli_fetch_assoc($result)){
        echo $row['COLUMN1'];
    }
}

?>