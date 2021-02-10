

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
    <div class="manzoku-border-base-3 contact-card p-2 m-1">
      <div class="card-title text-center manzoku-color-secondary"><b>'.$title.'</b></div>
      <div class="text-center manzoku-color-contrast">'.$content.'</div>
    </div>
    </div>';
   }
?>
<style>
  .contact-card:hover{
    border: 3px solid var(--manzoku-accent2);
    transition: 0.2s;
  }
</style>