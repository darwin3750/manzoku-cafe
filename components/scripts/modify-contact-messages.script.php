<?php
require "../../constants.php";

//connect to the DB
require_once "connect-database.script.php";

$sql_statement = mysqli_stmt_init($conn);
//to prevent SQL injections
function prepareSQLStatement($sql_query) {
  global $sql_statement;
  if (!mysqli_stmt_prepare($sql_statement, $sql_query)) {
    header("Location: ../../contact_us.php?error=sqlerorr");
    exit();
  }
}
if (isset($_POST['send-message'])) {
//for inserting a new message
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  prepareSQLStatement("INSERT INTO CONTACT_MESSAGES (SENDER_NAME, SENDER_EMAIL, SENDER_PHONE, SUBJECT, BODY)  VALUES (?, ?, ?, ?, ?)");
  mysqli_stmt_bind_param($sql_statement, "sssss", $name, $email, $phone, $subject, $message);
  header("Location: ../../contact_us.php?messagesend=success");
}
//for deleting messages
else if (isset($_POST['delete-message-submit'])){
  $message_id = $_POST['message-id'];
  prepareSQLStatement("DELETE FROM CONTACT_MESSAGES WHERE MESSAGE_ID=?");
  mysqli_stmt_bind_param($sql_statement, "s", $message_id);
  header("Location: ../../config.admin.php?messagedelete=success");
} else {
  header("Location: ../../");
  exit();
} 
mysqli_stmt_execute($sql_statement);
exit();
?>


