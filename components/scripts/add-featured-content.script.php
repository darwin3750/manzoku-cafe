

<?php
require "../../constants.php";

echo $_POST['img_layout'] . "<br/>";
echo isset($_POST['is_carousel']) . "<br/>";
echo $_POST['content_title'] . "<br/>";
echo $_POST['subheading'] . "<br/>";
echo $_POST['description'] . "<br/>";

$target_dir = SERVER_ROOT . "/assets/images/posters/";
$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
$output = getimagesize($_FILES["imageToUpload"]["tmp_name"]) !== false ? "File is an image" : "File is not an image.";
echo $output;
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
}
// Check file size
if ($_FILES["imageToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
}
if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars( basename( $_FILES["imageToUpload"]["name"])). " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
}
 
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