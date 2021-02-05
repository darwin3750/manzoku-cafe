<section class="container p-3 manzoku-border-base-4 rounded-lg">

  <heading class="d-block text-center">
    <h2 class="manzoku-typeface-main0 manzoku-font-3 manzoku-color-base p-3 m-0">Files
      <span class="tooltip-enabler">(?)
        <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
          Manage files here.
        </span>
      </span>
    </h2>
  </heading>

  <article class="manzoku-color-contrast manzoku-regular">
      <!-- view section -->
      <?php
        foreach (array_filter(scandir(IMAGES_FOLDER), function($file) { return preg_match("/^[^\.]+$/", $file); } ) as $key => $folder) {
        ?>
        <heading class="manzoku-bg-base w-100 manzoku-accordion-head">
          <div class="d-flex justify-content-between">
            <h4>
              /<?php echo $folder?>
            </h4>
            <div class="svg-container-icon-1 transition-1" role="button">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g fill='var(--manzoku-contrast)'>
                  <path d="M18.2 7.6c-.4 0-.7.1-.9.4L13 12.6c-.5.5-1.4.5-1.9 0L6.8 8c-.3-.2-.6-.4-1-.4-1.1 0-1.7 1.3-.9 2.1l6.2 6.8c.5.6 1.4.6 1.9 0l6.2-6.8c.6-.8 0-2.1-1-2.1z"></path>
                </g>
              </svg>
            </div>
          </div>
        </heading>
        <article class="overflow-hidden">
          <div class="manzoku-accordion-body p-3 row">
            <?php include DISPLAY_FOLDER; ?>
          </div>
        </article>
      <?php }?>

  </article>

</section>