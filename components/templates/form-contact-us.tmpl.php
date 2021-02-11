<form id="currentForm" action="components/scripts/modify-contact-us.script.php" class="" method="POST" enctype="multipart/form-data">
  <!-- HIDDEN -->
  <div class="form-group d-none">
    <label for="contact_id" class="manzoku-color-secondary">Contact ID:</label>
    <input id="contact_id" type="text" name="contact_id" class="manzoku-form-transparent"/>
  </div>
  <div class="form-group">
    <label for="title" class="manzoku-color-secondary">Title:</label>
    <input id="title" type="text" name="title" autocomplete="off" class="manzoku-form-transparent manzoku-regular" />
  </div>
  <div class="form-group">
    <label for="content" class="manzoku-color-secondary">Content:</label>
    <!-- <input id="content" type="text" name="content" autocomplete="off" class="manzoku-form-transparent" /> -->
    <textarea id="content" name="content" autocomplete="off" class="manzoku-form-transparent manzoku-textarea manzoku-regular"></textarea>
  </div>
  <select id="img_src" name="img_src" class="form-select manzoku-form-transparent mt-2 mb-2 manzoku-regular">
    <option class="d-none" value="" selected>Select image to display</option>
    <?php
    foreach (scandir(CONTACT_US_FOLDER) as $key => $file) {
      if(preg_match('/(jpg|png|webp|jpeg)$/', strtolower(pathinfo($file, PATHINFO_EXTENSION)))){ 
        echo '<option value="' . $file . '">' . $file . '</option>';
      }
    }
    ?>
  </select>
  <select id="contact_type" name="contact_type" class="form-select manzoku-form-transparent mt-2 mb-2 manzoku-regular" required>
    <option class="d-none" value="" selected>Select Content Type</option>
    <option value="NUMBER">NUMBER</option>
    <option value="SOCIAL MEDIA">SOCIAL MEDIA</option>
  </select>
</form>