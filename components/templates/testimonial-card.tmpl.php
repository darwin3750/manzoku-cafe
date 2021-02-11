<section class="col-lg-3 col-md-4 col-sm-6 p-3 p-sm-1">
  <div class="manzoku-border-base-3 rounded p-3 h-100">
    <!-- edit button -->
    <?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
      <div class="svg-container-icon-1 position-absolute right-0 float-right mr-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="d-inline-block p-1" role="button" onclick="
            openModal('#modify-content-modal', this);
            populateFormModal({<?php echo
            "testimony_id:'{$testimony_id}', title:'{$title}',author_name:'{$author_name}', content:'{$content}',img_src:'{$img_src}'"
            ?>});">
          <g fill='var(--manzoku-contrast)'>
            <path d="M2 17l-2 7 7-2zM3 16L16 3l5 5L8 21zM22 7l1-1c2-2-3-7-5-5l-1 1 5 5z"></path>
          </g>
        </svg>
      </div>
    <?php } ?>
    <div class="d-flex flex-column justify-content-between align-items-center h-100">
      <!-- IMAGE -->
      <section class="w-100 d-flex flex-column align-items-center">
        <?php if (!is_null($img_src)) { ?>
          <img class="img-fluid w-75" src="<?php echo ROOT_TESTIMONIALS_FOLDER . $img_src; ?>">
        <?php } else { ?>
          <div class="svg-container w-75">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <g fill='var(--manzoku-base)'>
                <path d="M16.14 12.33C17.28 11.24 18 9.71 18 8c0-3.31-2.69-6-6-6S6 4.69 6 8c0 1.71.72 3.24 1.86 4.33C3.52 13.05 0 14.94 0 18c0 4 1 4 12 4s12 0 12-4c0-3.06-3.52-4.95-7.86-5.67z"></path>
              </g>
            </svg>
          </div>
        <?php } ?>

        <p class="manzoku-regular"><blockquote class="font-italic">"<?php echo $content ?>"</blockquote></p>
      </section>

      <section class="mt-5 w-100 text-center">
        <p class="card-title manzoku-regular style=" font-style: italic; "><?php echo $author_name ?></p>
        <p class=" card-title manzoku-regular" style="font-weight:bold; "><?php echo $title ?></p>
      </section>

    </div>
  </div>
</section>