

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
<div class="col-sm-4 d-flex" style="margin-left:auto; margin-right:auto;">
<div class="p-2 row-sm-2 d-flex align-items-stretch">
<div class="card shadow p-40 text-white bg-secondary mb-4" style="width: 20rem; height: 550px;">
  <img class="card-img-top img-fluid rounded img-thumbnail" src="<?php echo $img_src?>"  alt="Card image cap">
  <div class="card-body" style="text-align:center;">
  <p class="card-title" style="font-weight:bold;"><?php echo $title ?></p>
  <p class="card-body" style="margin-top:-8%;"><?php echo $content ?></p>
  <div style="position: absolute; bottom: 0; left:36%;";>
  
  </div>
  </div>
</div>
</div>
</div>
