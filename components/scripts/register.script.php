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

    $sql_statement = mysqli_stmt_init($conn);
    //to prevent SQL injections
    function prepareSQLStatement($sql_query){
      global $sql_statement;
      if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
        header("Location: ../../config.admin.php?error=sqlerorr");
        exit();
      }
    }

    //ERROR HANDLERS
    //check if passwords matched
    if($password !== $confirmpassword){
      $errors .= "passwordnotmatch;";
    }

    //check if username already taken
    prepareSQLStatement("SELECT USERNAME FROM USERS WHERE USERNAME=?");
    mysqli_stmt_bind_param($sql_statement, "s", $username);
    mysqli_stmt_execute($sql_statement);
    mysqli_stmt_store_result($sql_statement);
    if(mysqli_stmt_num_rows($sql_statement) > 0){
      $errors .= "usernametaken;";
    }
    
    //halt execution if there were errors
    if(!preg_match("/error=;$/", $errors)){
      header($errors);
      exit();
    }

    //put to DB
    prepareSQLStatement("INSERT INTO USERS (USERNAME, PRIVILEGE, PASSWORD) VALUES (?, ?, ?)");
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($sql_statement, "sss", $username, $privilege, $hashed_password);
    mysqli_stmt_execute($sql_statement);
    header("Location: ../../config.admin.php?signup=success");
    exit();
  }
  else{
    header("Location: ../../");
    exit();
  }
?>