<section class="">
  <div class="container p-0">
    <div class="row p-3 mt-1 mb-1">
      <?php 
      if ($img_layout == "RIGHT"){
        include "featured-content-txt-col.tmpl.php";
        include "featured-content-img-col.tmpl.php";
      }else if ($img_layout == "LEFT"){
        include "featured-content-img-col.tmpl.php";
        include "featured-content-txt-col.tmpl.php";
      }
      ?>
    </div>
  </div>
</section>