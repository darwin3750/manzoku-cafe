<?php if ($is_carousel) { ?>
  <section class="carousel-cell w-100 p-4">
    <div class="container p-0">
      <div class="row pr-3 pl-3 p-1 mt-1 mb-1 position-relative custom-border-frame">
        <!-- edit button -->
        <?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
          <div class="svg-container-icon-1 position-absolute right-0 float-right mt-1 mr-4" style="z-index: 3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="d-inline-block p-1" role="button" onclick="
                  openModal('#modify-content-modal', this);
                  populateFormModal({<?php echo
                                      "content_id:'{$content_id}', content_title:'{$js_content_title}', subheading:'{$js_subheading}', description:'{$js_description}', 
                    img_src:'{$img_src}', img_layout:'{$img_layout}', is_carousel:'{$is_carousel}'"
                                      ?>});">
              <g fill='var(--manzoku-contrast)'>
                <path d="M2 17l-2 7 7-2zM3 16L16 3l5 5L8 21zM22 7l1-1c2-2-3-7-5-5l-1 1 5 5z"></path>
              </g>
            </svg>
          </div>
        <?php } ?>
          <?php
          if ($img_layout == "RIGHT") {
            $imgCol = "6";
            $txtCol = "6";
            include "featured-content-txt-col.tmpl.php";
            include "featured-content-img-col.tmpl.php";
          } else if ($img_layout == "LEFT") {
            $imgCol = "6";
            $txtCol = "6";
            include "featured-content-img-col.tmpl.php";
            include "featured-content-txt-col.tmpl.php";
          } else if ($img_layout == "CENTER") {
            $imgCol = "6";
            echo '<div class="col-md-3"></div>';
            include "featured-content-img-col.tmpl.php";
            echo '<div class="col-md-3"></div>';
          } else if ($img_layout == "") {
            $txtCol = "10";
            echo '<div class="col-md-1"></div>';
            include "featured-content-txt-col.tmpl.php";
            echo '<div class="col-md-1"></div>';
          }
          ?>
      </div>
    </div>
  </section>
<?php } ?>