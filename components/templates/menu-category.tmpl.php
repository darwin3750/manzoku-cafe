<section>
  <header class="manzoku-bg-base manzoku-accordion-head">
    <div class="container pr-5 pl-5 position-relative d-flex justify-content-between align-items-center">
      <!-- edit button -->
      <h2 class="manzoku-typeface-main0 manzoku-font-3 manzoku-color-primary p-3 m-0"><?php echo $category ?></h2>
      <div class="svg-container-icon-3 transition-1" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <g fill='var(--manzoku-primary)'>
            <path d="M18.2 7.6c-.4 0-.7.1-.9.4L13 12.6c-.5.5-1.4.5-1.9 0L6.8 8c-.3-.2-.6-.4-1-.4-1.1 0-1.7 1.3-.9 2.1l6.2 6.8c.5.6 1.4.6 1.9 0l6.2-6.8c.6-.8 0-2.1-1-2.1z"></path>
          </g>
        </svg>
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
              <?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
                <div class="svg-container-icon-1 position-absolute right-0 top-0 float-right">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="d-inline-block p-1" role="button" onclick="
              openModal('#modify-content-modal', this); populateFormModal({
              <?php echo "menu_id:'{$menu_id}', img_src:'{$img_src}', category:'{$category}'" ?>});">
                    <g fill='var(--manzoku-contrast)'>
                      <path d="M2 17l-2 7 7-2zM3 16L16 3l5 5L8 21zM22 7l1-1c2-2-3-7-5-5l-1 1 5 5z"></path>
                    </g>
                  </svg>
                </div>
              <?php } ?>
              <img src="<?php echo ROOT_MENUS_FOLDER . $img_src ?>" class="img-fluid manzoku-border-base-5 p-3">
            </div>
            <div class="col-md-2"></div>
          </div>
        </section>
      <?php } ?>
    </div>
  </article>
</section>