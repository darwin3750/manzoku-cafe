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
  ?>
<br/>
<div class="col-sm-4 d-flex" style="margin-left:auto; margin-right:auto; ">
<div class="p-2 row-sm-2 d-flex align-items-stretch manzoku-bg-contrast mb-5">
<div class="card p-40 text-black manzoku-bg-contrast mb-1" style="width: 20rem; height: 570px; border: none;">
  <img class="card-img-top img-fluid rounded img-thumbnail" src="assets\images\testimonies\default-user.png"  alt="assets\images\testimonies\default-user.png">
  <div class="card-body" style="text-align:center;">
  <p class="card-body" style="margin-top:-8%;"><?php echo $content ?></p>
  <div style="position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; text-align: center; bottom: 0; ">
  <p class="card-title" style="font-style: italic;"><?php echo $author ?></p>
  <p class="card-title" style="font-weight:bold;"><?php echo $title ?></p>
  </div>
  </div>
</div>
</div>
</div>
