<?php
  $description = strip_tags($description);
  if (strlen($description) > 160) {
  
      // truncate string
      $stringCut = substr($description, 0, 160);
      $endPoint = strrpos($stringCut, ' ');
  
      //if the string doesn't contain any space then it will cut without word basis.
      $description = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
      $description .= '...';
  } 
  ?>
<br/>
<?php if ($title == "BRINGING JAPANESE CUISINE TO YOUR TASTEBUDS")
   {
     echo 
    '<div class="card bg-dark text-white">
    <img src="'.$img_src.'" class="card-img">
    <div class="card-img-overlay">
        <h5 class="card-title">'.$title.'</h5>
        <p class="card-text">'.$idescription.'</p>
    </div>
    </div>'
?>

<div class="col-sm-4 d-flex" style="margin-left:auto; margin-right:auto;">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title"><?php echo $title ?></h5>
        <p class="card-text"><?php echo $description ?></p>
      </div>
    </div>
  </div>
</div>