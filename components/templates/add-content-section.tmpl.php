<?php if(isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN"){ ?>
  <section class="manzoku-border-base-4 rounded m-3">
    <article class="container p-3 d-flex flex-column align-items-center">
      <h4 class="manzoku-color-contrast manzoku-typeface-main0">
        This feature is visible only to the website's administrators. Add content to this page by clicking on the button below.
      </h4>
      <button type="button" id="add-content" class="btn manzoku-btn-accent1 btn-lg manzoku-typeface-main0" onclick="openModal('#modify-content-modal', this);populateFormModal({})">ADD CONTENT</button>
    </article>
  </section>

<?php } ?>