<?php
require "../../constants.php"; 
if(isset($_POST['signin-submit'])){
  //connect to the DB
  require_once "connect-database.script.php";

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql_statement = mysqli_stmt_init($conn);
  //to prevent SQL injections
  function prepareSQLStatement($sql_query){
    global $sql_statement;
    if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
      header("Location: ../../?error=sqlerorr");
      exit();
    }
  }

  //TEMPORARY HARDCODED ACCOUNT FOR SET UP ONLY
  if($username == "ADMIN" && $password == "BOTSWANA"){
    session_start();
    $_SESSION['current_user'] = $row['USERNAME'];
    $_SESSION['current_user_privilege'] = $row['PRIVILEGE'];

    $success_reply = "Location: ../../config.admin.php?login=success;";
    header($success_reply);
    exit();
  }
  //*.

  //ERROR HANDLERS
  $errors = "Location: ../../login.admin.php?error=;";

  //search for username in DB
  prepareSQLStatement("SELECT * FROM USERS WHERE USERNAME=?");
  mysqli_stmt_bind_param($sql_statement, "s", $username);
  mysqli_stmt_execute($sql_statement);

  $result = mysqli_stmt_get_result($sql_statement);
  if($row = mysqli_fetch_assoc($result)){
    if(password_verify($password, $row['PASSWORD'])){
      //log the user in to the website
      session_start();
      $_SESSION['current_user'] = $row['USERNAME'];
      $_SESSION['current_user_privilege'] = $row['PRIVILEGE'];

      header("Location: ../../config.admin.php?login=success;");
      exit();
    }else{
      $errors .= "wrongpassword;";
    }
  }
  else{
    $errors .= "nouser;";
  }
  

  if(!preg_match("/error=;$/", $errors)){
    header($errors);
    exit();
  }
  
  mysqli_stmt_close($sql_statement);
  require_once "components/scripts/close-database.script.php";
}
header("Location: ../../");
?>