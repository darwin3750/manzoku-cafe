<?php if ($contact_type == "SOCIAL MEDIA") { ?>
  <div class="col-md-6">
    <div class="manzoku-border-base-3 mt-2 contact-card rounded position-relative">
      <!-- edit button -->
      <?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
      <div class="svg-container-icon-1 position-absolute right-0 float-right mt-1 mr-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="d-inline-block p-1" role="button" onclick="
              openModal('#modify-content-modal', this);
              populateFormModal({<?php echo 
                "contact_id:'{$contact_id}', contact_type:'{$contact_type}', title:'{$title}', 
                content:'{$content}', img_src:'{$img_src}'"
              ?>});">
          <g fill='var(--manzoku-contrast)'>
            <path d="M2 17l-2 7 7-2zM3 16L16 3l5 5L8 21zM22 7l1-1c2-2-3-7-5-5l-1 1 5 5z"></path>
          </g>
        </svg>
      </div>
      <?php } ?>
      <a href="<?php echo $content; ?>"><img src="<?php echo ROOT_CONTACT_US_FOLDER . $img_src ?>" class="img-fluid"></a>
    </div>
  </div>
<?php } ?>

<style>
  .contact-card:hover {
    border: 3px solid var(--manzoku-accent2);
    transition: 0.2s;
  }
</style>