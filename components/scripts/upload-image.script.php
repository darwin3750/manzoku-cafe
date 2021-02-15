<?php 
if(isset($_POST['upload-submit'])){

  require "../../constants.php";

  $target_dir = SERVER_ROOT . "/assets/images/" . $_GET['destfolder'] . "/";
  $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  $output = getimagesize($_FILES["fileUpload"]["tmp_name"]) !== false ? "File is an image" : "File is not an image.";
  echo $output;

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
  }

  // Check file size
  if ($_FILES["fileUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
  }

  // Allow certain file formats
  $imageFileType = strtolower($imageFileType);
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  }

  //
  if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
    header("Location: ../../config.admin.php?upload=success");
  } else {
    echo "Sorry, there was an error uploading your file.";
    header("Location: ../../config.admin.php?upload=delete");
  }

  exit();
}else{
  header("Location: ../../");
  exit();
}
?>