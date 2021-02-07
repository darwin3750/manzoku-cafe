<?php
require "../../constants.php";

if(unlink(SERVER_ROOT . "/assets/images/" . $_GET['dest'])){
  header("Location: ../../config.admin.php?delete=success");
}else{
  header("Location: ../../config.admin.php?delete=failed");
}

exit();
?>