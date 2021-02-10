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
   '<div class="col-sm-6">
   <div class="manzoku-border-base-3 mt-2 contact-card text-center">;';
     if($title=="Facebook Page")
       echo '<a href="'.$content.'"><img class="mx-auto img-fluid" src= "'.ROOT_CONTACT_US_FOLDER."/fb.jpg".'"  style="margin-left:auto; margin-right:auto;"></a>';
     else if($title=="Instagram Feed")
       echo '<a href="'.$content.'"><img class="mx-auto img-fluid" src= "'.ROOT_CONTACT_US_FOLDER."/ig.jpg".'"  style="margin-left:auto; margin-right:auto;"></a>';
   echo'</div>
   </div>';
   }

?>
<style>
  .contact-card:hover{
    border: 3px solid var(--manzoku-accent2);
    transition: 0.2s;
  }
</style>