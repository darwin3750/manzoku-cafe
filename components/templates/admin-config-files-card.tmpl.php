<div class="col-md-3 p-1">
  <div class="p-2 manzoku-border-contrast-1 rounded h-100 d-flex flex-column justify-content-between">
    <section>
      <form class="float-right" method="POST" action="components/scripts/delete-image.script.php?dest=<?php echo $folder . "/" . $file?>">
        <div class="svg-container-icon-1" onclick="this.parentElement.submit();" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <g fill='var(--manzoku-contrast)'>
              <path d="M19.5 4.5c-.8-.8-2.2-.8-3 0L12 9 7.5 4.5c-.8-.8-2.2-.8-3 0-.8.8-.8 2.2 0 3L9 12l-4.5 4.5c-.8.8-.8 2.2 0 3 .8.8 2.2.8 3 0L12 15l4.5 4.5c.8.8 2.2.8 3 0 .8-.8.8-2.2 0-3L15 12l4.5-4.5c.8-.8.8-2.2 0-3z"></path>
            </g>
          </svg>
        </div>
      </form>
      <img src="<?php echo ROOT_IMAGES_FOLDER . $folder . "/" . $file ?>" class="img-fluid">
    </section>
    <div class="d-flex align-items-start">
      <p><?php echo $file ?></p>
    </div>
  </div>
</div>