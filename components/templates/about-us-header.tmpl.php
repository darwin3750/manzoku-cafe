<?php if (!$is_card) { ?>
  <div class="manzoku-border-base-3 p-3 rounded about-header position-relative manzoku-animate-slidefadein" style="">
    <!-- edit button -->
    <?php if (isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN") { ?>
      <div class="svg-container-icon-1 position-absolute right-0 top-0 float-right mt-1 mr-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="d-inline-block p-1" role="button" onclick="
              openModal('#modify-content-modal', this);
              populateFormModal({<?php echo 
                "about_id:'{$about_id}', title:'{$title}', description:'{$description}', 
                img_src:'{$img_src}', is_card:'{$is_card}'"
              ?>});">
          <g fill='var(--manzoku-contrast)'>
            <path d="M2 17l-2 7 7-2zM3 16L16 3l5 5L8 21zM22 7l1-1c2-2-3-7-5-5l-1 1 5 5z"></path>
          </g>
        </svg>
      </div>
      <?php } ?>
    <heading>
      <h5 class=""><?php echo $title; ?></h5>
    </heading>
    <hr class="manzoku-bg-contrast" />
    <article>
      <p>
        <?php echo $description; ?>
      </p>
    </article>
  </div>
<?php } ?>

<style>
  .about-header:hover{
    border: 3px solid var(--manzoku-accent2);
    transition: 0.2s;
  }
</style>