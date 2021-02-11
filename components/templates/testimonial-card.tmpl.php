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

<br />
<div class="col-sm-4 d-flex mx-auto text-center justify-content-center">
    <div class="p-2 row-sm-2 d-flex align-items-stretch mb-5">
        <div class="test-card manzoku-border-base-3 p-40 text-white  mb-1" style="width: 20rem; height: 570px; ">
            <?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
            <div class="svg-container-icon-1 position-absolute right-0 float-right  mt-1 mr-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="d-inline-block p-1" role="button"
                    onclick="
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
            <div class="d-flex flex-column justify-content-between h-100">
                <img class="card-img mt-2 ml-2 mb-3" src="<?php echo ROOT_TESTIMONIALS_FOLDER . $img_src ?>"
                    alt="<?php echo ROOT_TESTIMONIALS_FOLDER?>default-user.png" style="width: 299px; height: 299px;">
                <div class="card-body" style="text-align:center;">
                    <p style="margin-top:-8%;" class="manzoku-regular"><?php echo $content ?></p>
                      <div style="position:absolute; bottom:0; margin-bottom:60px; margin-left: auto; margin-right: auto; left: 0; right: 0; text-align: center;">
                          <p class="card-title manzoku-regular style="font-style: italic; "><?php echo $author_name ?></p>
                          <p class="card-title manzoku-regular" style="font-weight:bold; "><?php echo $title ?></p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.test-card:hover {
    border: 3px solid var(--manzoku-accent2);
    transition: 0.2s;
}
</style>