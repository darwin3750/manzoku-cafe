<section class="">
  <div class="container p-0">
    <div class="row p-3 mt-2 mb-2">
      <?php 
      if ($img_layout == "RIGHT"){
        $imgCol = "6"; $txtCol = "6";
        include "featured-content-txt-col.tmpl.php";
        include "featured-content-img-col.tmpl.php";
      }else if ($img_layout == "LEFT"){
        $imgCol = "6"; $txtCol = "6";
        include "featured-content-img-col.tmpl.php";
        include "featured-content-txt-col.tmpl.php";
      }else if ($img_layout == "CENTER"){
        $imgCol = "6";
        echo '<div class="col-md-3"></div>';
        include "featured-content-img-col.tmpl.php";
        echo '<div class="col-md-3"></div>';
      }else if ($img_layout == ""){
        $txtCol = "10";
        echo '<div class="col-md-1"></div>';
        include "featured-content-txt-col.tmpl.php";
        echo '<div class="col-md-1"></div>';
      }
      ?>
    </div>
  </div>
</section>