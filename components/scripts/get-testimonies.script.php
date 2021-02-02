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

$sql = "INSERT INTO testimonies (TESTIMONY_TYPE, TITLE, DATE, AUTHOR_NAME, CONTENT,  IMG_SRC)
VALUES ('NORMAL', 'CUSTOMER', '2020-07-22', 'Reynalita G Maglalang', 'Delicious foods. The family enjoyed it. Will order again.', 'assets/images/testimonies/default-user.png')";

//('NORMAL', 'CUSTOMER', '2020-07-22', 'Reynalita G Maglalang', 'Delicious foods. The family enjoyed it. Will order again.', 'assets/images/testimonies/default-user.png')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();
?>