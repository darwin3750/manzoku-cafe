<?php
    require "../../constants.php"; 
    //check if the user got to this page by clicking the Send Message button
    if(isset($_POST['send-message'])){
      //connect to the DB
      require_once "connect-database.script.php";
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      $errors = "Location: ../../contact_us.php?error=;";
      //put to DB
      $sql_query = "INSERT INTO CONTACT_MESSAGES (SENDER_NAME, SENDER_EMAIL, SENDER_PHONE, SUBJECT, BODY)  VALUES (?, ?, ?, ?, ?)";
      $sql_statement = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
        header("Location: ../../contact_us.php?error=sqlerorr2");
        exit();
      }
      else{
        mysqli_stmt_bind_param($sql_statement, "sssss", $name, $email, $phone, $subject, $message);
        mysqli_stmt_execute($sql_statement);
        header("Location: ../../contact_us.php?send=success");
        exit();
      }
      mysqli_stmt_close($sql_statement);
      mysqli_close($conn);
    }
    else{
      header("Location: ../../contact_us.php?send=fail");
      exit();
    }
?>