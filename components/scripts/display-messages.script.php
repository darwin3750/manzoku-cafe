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
    $sender_name = filterLineBreaks($row['SENDER_NAME']);
    $sender_email = filterLineBreaks($row['SENDER_EMAIL']);
    $sender_phone = filterLineBreaks($row['SENDER_PHONE']);
    $subject = filterLineBreaks($row['SUBJECT']);
    $body = filterLineBreaks($row['BODY']);
    $js_sender_name = filterAll($row['SENDER_NAME']);
    $js_sender_email = filterAll($row['SENDER_EMAIL']);
    $js_sender_phone = filterAll($row['SENDER_PHONE']);
    $js_subject = filterAll($row['SUBJECT']);
    $js_body = filterAll($row['BODY']);
    include ADMIN_MESSAGES;
  }
}
?>