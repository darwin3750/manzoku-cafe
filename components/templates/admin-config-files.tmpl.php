<div class="p-3">
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
      foreach (array_filter(scandir(IMAGES_FOLDER), function ($file) {
        return preg_match("/^[^\.]+$/", $file);
      }) as $key => $folder) {
      ?>
        <heading class="manzoku-bg-base w-100 manzoku-accordion-head">
          <div class="d-flex justify-content-between">
            <h4>
              /<?php echo $folder ?>
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
            <div class="col-md-3 p-1">
              <form class="h-100 w-100" method="POST" action="components/scripts/upload-image.script.php?destfolder=<?php echo $folder; ?>" enctype="multipart/form-data">
                <input type="file" accept="image/*" name="fileUpload" id="<?php echo $folder; ?>-file" class="d-none" onchange="loadImage(event);">
                <label for="<?php echo $folder; ?>-file" class="h-100 w-100">
                  <div class="p-2 manzoku-border-accent1-1 rounded h-100 d-flex flex-column justify-content-around align-items-center manzoku-add-file" role="button" onclick="">
                    <div class="svg-container-icon-5 transition-1">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g fill='var(--manzoku-contrast)'>
                          <path d="M19 10h-5V5c0-1.1-.9-2-2-2s-2 .9-2 2v5H5c-1.1 0-2 .9-2 2s.9 2 2 2h5v5c0 1.1.9 2 2 2s2-.9 2-2v-5h5c1.1 0 2-.9 2-2s-.9-2-2-2z"></path>
                        </g>
                      </svg>
                    </div>
                    <div class="d-flex align-items-start">
                      <p>Add File</p>
                    </div>
                  </div>
                </label>
              </form>
            </div>
          </div>
          <?php ?>
        </article>
      <?php } ?>

    </article>

  </section>
</div>

<style>
  .manzoku-add-file:hover,
  .manzoku-add-file.active {
    border: 3px solid var(--manzoku-accent2);
    color: var(--manzoku-base);
    transition: 0.4s;
  }

  .manzoku-add-file:hover div svg g,
  .manzoku-add-file.active div svg g {
    fill: var(--manzoku-base)
  }
</style>