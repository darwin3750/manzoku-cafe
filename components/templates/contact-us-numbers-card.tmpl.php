<?php if ($contact_type == "NUMBER") { ?>
  <div class="col-sm-4">
    <div class="manzoku-border-base-3 contact-card p-3 h-100 d-flex flex-column justify-content-between rounded position-relative">
      <!-- edit button -->
      <?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
      <div class="svg-container-icon-1 position-absolute right-0 float-right mr-3">
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
      <heading class="">
        <div class=" manzoku-font-1 text-center manzoku-regular manzoku-color-secondary"><span class="font-weight-bold"><?php echo $title; ?></span></div>
        <hr class="manzoku-bg-contrast" />
      </heading>
      <div class="manzoku-font-1 text-center manzoku-regular manzoku-color-contrast"><?php echo $content; ?></div>
    </div>
  </div>
<?php } ?>
<style>
  .contact-card:hover {
    border: 3px solid var(--manzoku-accent2);
    transition: 0.2s;
  }
</style>