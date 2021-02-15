<?php 
foreach (scandir(IMAGES_FOLDER . $folder . "/") as $key => $file) {
  if(preg_match("/(jpeg|jpg|png|webp)$/i", $file)){
    include ADMIN_CONFIG_FILES_CARD;
  }
}
?>
