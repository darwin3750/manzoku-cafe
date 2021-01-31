<?php
require "../../constants.php"; 
if(isset($_POST['signin-submit'])){
  //connect to the DB
  require_once "connect-database.script.php";

  $username = $_POST['username'];
  $password = $_POST['password'];

  //ERROR HANDLERS
  $errors = "Location: ../../admin-login.php?error=;";

  $sql_query = "SELECT * FROM USERS WHERE USERNAME=?";
  $sql_statement = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
    header("Location: ../../admin-login.php?error=sqlerorr");
    exit();
  }
  else{
    mysqli_stmt_bind_param($sql_statement, "s", $username);
    mysqli_stmt_execute($sql_statement);
    $result = mysqli_stmt_get_result($sql_statement);

    if($row = mysqli_fetch_assoc($result)){
      $passwordcheck = password_verify($password, $row['PASSWORD']);
      if($passwordcheck == false){
        $errors .= "wrongpassword;";
      }else if($passwordcheck == true){
        //log the user in to the website
        session_start();
        $_SESSION['current_user'] = $row['USERNAME'];
        $_SESSION['current_user_privilege'] = $row['PRIVILEGE'];

        $success_reply = "Location: ../../config.admin.php?login=success;";
        header($success_reply);
        exit();
      }else{
        $errors .= "erroroccurred;";
      }
    }
    else{
      $errors .= "nouser;";
    }
  }

  if(!preg_match("/error=;$/", $errors)){
    header($errors);
    exit();
  }
  
  mysqli_stmt_close($sql_statement);
  require_once "components/scripts/close-database.script.php";
}
header("Location: /");
?>