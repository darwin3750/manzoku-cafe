<?php
  require "../../constants.php"; 
  //check if the user got to this page by clicking the sign up button
  if(isset($_POST['register-submit'])){
    //connect to the DB
    require_once "connect-database.script.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $privilege = "ADMIN";
    $errors = "Location: ../../config.admin.php?error=;";
    //ERROR HANDLERS
    //check if passwords matched
    if($password !== $confirmpassword){
      $errors .= "passwordnotmatch;";
    }
    //check if username already taken
    $sql_query_username = "SELECT USERNAME FROM USERS WHERE USERNAME=?";
    $sql_statement = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($sql_statement, $sql_query_username)){
      header("Location: ../../config.admin.php?error=sqlerror1");
      exit();
    }
    else{
      mysqli_stmt_bind_param($sql_statement, "s", $username);
      mysqli_stmt_execute($sql_statement);
      mysqli_stmt_store_result($sql_statement);
      $matches_username = mysqli_stmt_num_rows($sql_statement);

      if($matches_username > 0){
        $errors .= "usernametaken;";
      }
    }
    if(!preg_match("/error=;$/", $errors)){
      header($errors);
      exit();
    }

    //put to DB
    $sql_query = "INSERT INTO USERS (USERNAME, PRIVILEGE, PASSWORD) VALUES (?, ?, ?)";
    $sql_statement = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
      header("Location: ../../config.admin.php?error=sqlerorr2");
      exit();
    }
    else{
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($sql_statement, "sss", $username, $privilege, $hashed_password);
      mysqli_stmt_execute($sql_statement);
      header("Location: ../../config.admin.php?signup=success");
      exit();
    }
    mysqli_stmt_close($sql_statement);
    mysqli_close($conn);
  }
  else{
    header("Location: ../../config.admin.php?signup=failed ");
    exit();
  }
?>