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
<?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
        <div class="svg-container-icon-1 position-absolute right-0 float-right mt-1 mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="d-inline-block p-1" role="button" onclick="
                openModal('#modify-content-modal', this);
                populateFormModal({<?php echo 
                  "testimony_id:'{$testimony_id}', title:'{$title}',author_name:'{$author_name}', content:'{$content}',img_src:'{$img_src}'"
                ?>});">
            <g fill='var(--manzoku-primary)'>
              <path d="M2 17l-2 7 7-2zM3 16L16 3l5 5L8 21zM22 7l1-1c2-2-3-7-5-5l-1 1 5 5z"></path>
            </g>
          </svg>
        </div>
        <?php } ?>
  <img class="card-img-top rounded" src="<?php echo ROOT_TESTIMONIALS_FOLDER . $img_src ?>"  alt="<?php echo ROOT_TESTIMONIALS_FOLDER?>default-user.png" style="width: 320px; height: 320px;">
  <div class="card-body" style="text-align:center;">
  <p class="card-body" style="margin-top:-8%;"><?php echo $content ?></p>
  <div style="position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; text-align: center; bottom: 0; ">
  <p class="card-title" style="font-style: italic;"><?php echo $author_name ?></p>
  <p class="card-title" style="font-weight:bold;"><?php echo $title ?></p>
  </div>
  </div>
</div>
</div>
</div>
