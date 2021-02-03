<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manzokucafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO testimonies (TESTIMONY_TYPE, TITLE, AUTHOR_NAME, CONTENT,  IMG_SRC)
VALUES ('Normal', 'Tebgol', 'Marin Superior', 'My name is marin', '/assets/images/menus/chicken-best-sellers.jpeg')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();
?>