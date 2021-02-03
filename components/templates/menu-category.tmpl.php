<section>
  <header class="manzoku-bg-base mt-2 mb-2 manzoku-accordion-head">
    <div class="container p-0">
      <div class="position-relative">
        <!-- edit button -->
        <?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
          <div class="svg-container-icon-1 position-absolute right-0 float-right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="d-inline-block p-1" role="button" onclick="
                openModal('#modify-content-modal', this); populateFormModal({<?php
                                                                              echo "menu_id:'{$content_id}', img_src:'{$img_src}', category:'{$category}'" ?>});">
              <g fill='var(--manzoku-contrast)'>
                <path d="M2 17l-2 7 7-2zM3 16L16 3l5 5L8 21zM22 7l1-1c2-2-3-7-5-5l-1 1 5 5z"></path>
              </g>
            </svg>
          </div>
        <?php } ?>
        <h2 class="manzoku-typeface-main0 manzoku-font-5 manzoku-color-primary p-3"><?php echo $category ?></h2>
      </div>
    </div>
  </header>
  <article class="overflow-hidden">
    <div class="manzoku-accordion-body">
      <?php
          while ($row = mysqli_fetch_assoc($result)) {
            $menu_id = $row['MENU_ID'];
            $img_src = $row['IMG_SRC'];
          ?>
        <section class="manzoku-bg-primary manzoku-color-contrast container accordion-content">
          <div class="row p-0">
            <div class="col-md-2"></div>
            <div class="col-md-8 p-5 manzoku-border-secondary-5">
              <img src="<?php echo TEMPLATE_MENUS_FOLDER . $img_src ?>" class="img-fluid manzoku-border-base-5 p-3">
            </div>
            <div class="col-md-2"></div>
          </div>
        </section>
      <?php } ?>
    </div>
  </article>
</section>