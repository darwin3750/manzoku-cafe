

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
     '<div class="card col-sm-4 mt-3 manzoku-bg-contrast text-center" style="max-width: 370px; margin: 5px; ">
        <div class="card-header"><b>'.$title.'</b></div>
        <div class="card-body">
          <p class="card-text">'.$content.'</p>
        </div>
      </div>';
   } 
    if ($type == "SOCIAL MEDIA")
    {
    echo
    '<div class="card w-50 mr-2 manzoku-bg-contrast" style="max-width: 555px; margin:5px">
    <div class="card-body m-2" style="margin:20px">
      <h5 class="card-title">'.$title.'</h5>';
      if($title=="Facebook Page")
      echo '<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmanzokucafe%2Fposts%2F279671486822968&width=500&show_text=true&height=589&appId" width="500" height="589" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>';
      else
      echo '<iframe src="https://www.instagram.com/p/B6SuPPpHY6f/embed" width="500" height="580" frameborder="0" scrolling="no" allowtransparency="true"></iframe>';
      echo '<a href="'.$content.'" class="btn manzoku-btn-secondary form-control">Visit</a>
      
    </div>
    </div>';
    }

?>