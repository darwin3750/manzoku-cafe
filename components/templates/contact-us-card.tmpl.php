

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
    '<div class="col-sm-4" style="background-color:none;">
    <div class="card manzoku-bg-contrast p-2 m-1">
      <div class="card-title text-center"><b>'.$title.'</b></div>
      <div class="text-center">'.$content.'</div>
    </div>
    </div>';
   }
?>