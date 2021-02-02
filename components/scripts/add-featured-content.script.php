

<?php
require "../../constants.php";

echo $_POST['img_layout'] . "<br/>";
echo isset($_POST['is_carousel']) . "<br/>";
echo $_POST['content_title'] . "<br/>";
echo $_POST['subheading'] . "<br/>";
echo $_POST['description'] . "<br/>";

echo implode("<br/>", scandir(SERVER_ROOT));
 
// //check if the user got to this page by clicking the sign up button
// if(isset($_POST['featured-content-submit'])){
//   //connect to the DB
//   require_once "connect-database.script.php";
//   $img_layout = $_POST['img_layout'];
//   $is_carousel = $_POST['is_carousel'];
//   $content_title = $_POST['content_title'];
//   $subheading = $_POST['subheading'];
//   $description = $_POST['description'];
//   $img_src = $_POST['img_src'];


//   $errors = "Location: ". SERVER_ROOT . "?error=;";

//   //put to DB
//   $sql_query = "INSERT INTO USERS (USERNAME, PRIVILEGE, PASSWORD) VALUES (?, ?, ?)";
//   $sql_statement = mysqli_stmt_init($conn);
//   if(!mysqli_stmt_prepare($sql_statement, $sql_query)){
//     header("Location: ". SERVER_ROOT . "?error=sqlerorr2");
//     exit();
//   }
//   else{
//     $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//     mysqli_stmt_bind_param($sql_statement, "sss", $username, $privilege, $hashed_password);
//     mysqli_stmt_execute($sql_statement);
//     header("Location: ". SERVER_ROOT . "?signup=success");
//     exit();
//   }
//   mysqli_stmt_close($sql_statement);
//   mysqli_close($conn);
// }
// else{
//   header("Location: ". SERVER_ROOT);
//   exit();
// }
?>