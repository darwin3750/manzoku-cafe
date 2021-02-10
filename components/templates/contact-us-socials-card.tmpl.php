<?php
  $content = strip_tags($content);
  if (strlen($content) > 160) {
  
      // truncate string
      $stringCut = substr($content, 0, 160);
      $endPoint = strrpos($stringCut, ' ');
  
      //if the string doesn't contain any space then it will cut without word basis.
      $content = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
      $content .= '...';
   }
   if ($type == "SOCIAL MEDIA")
   {
   echo
   '<div class="col-sm-6" style="background-color:none;">
   <div class="card manzoku-bg-contrast m-1 p-2">
     <h5 class="card-title text-center">'.$title.'</h5>';
     if($title=="Facebook Page")
       echo '<img src= "'.ROOT_CONTACT_US_FOLDER."/fb.jpg".'" class="card-img-top mt-1"  style="margin-left:auto; margin-right:auto;">';
     else
       echo '<img src= "'.ROOT_CONTACT_US_FOLDER."/ig.jpg".'" class="card-img-top mt-1"  style="margin-left:auto; margin-right:auto;">';
     echo '<a href="'.$content.'" class="btn manzoku-btn-secondary">Visit</a>
   </div>
   </div>';
   }

?>