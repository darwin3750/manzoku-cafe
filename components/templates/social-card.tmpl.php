

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
  
   if ($type == "NUMBER")
   {
     echo 
     '<div class="card border-warning mb-3" style="max-width: 18rem;">
        <div class="card-header">'.$title.'</div>
        <div class="card-body">
          <!-- <img src="'.$img_src.'" style= "width: 70pt; height:50pt; display: block; margin-left: auto;">-->
          <p class="card-text">'.$content.'</p>
        </div>
      </div>';
   } 
    if ($type == "SOCIAL MEDIA")
    {
    echo
    '<div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">'.$title.'</h5>
      <a href="'.$content.'" class="btn btn-primary">Visit</a>
    </div>
    </div>';
    }

?>