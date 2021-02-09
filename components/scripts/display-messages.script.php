<?php 
$sql_query = "SELECT * FROM CONTACT_MESSAGES";
$sql_statement = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($sql_statement, $sql_query)) {
  echo "sqlerror";
} else {
  mysqli_stmt_execute($sql_statement);
  $result = mysqli_stmt_get_result($sql_statement);
  while ($row = mysqli_fetch_assoc($result)) {
    $message_id = $row['MESSAGE_ID'];
    $sender_name = $row['SENDER_NAME'];
    $sender_email = $row['SENDER_EMAIL'];
    $sender_phone = $row['SENDER_PHONE'];
    $subject = $row['SUBJECT'];
    $body = $row['BODY'];
    include ADMIN_MESSAGES;
  }
}
?>