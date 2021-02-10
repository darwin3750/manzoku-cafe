<form id="currentForm" action="components/scripts/modify-about-us-content.script.php" class="" method="POST" enctype="multipart/form-data">
  <!-- HIDDEN -->
  <div class="form-group d-none">
    <label for="about_id" class="manzoku-color-secondary">Content ID:</label>
    <input id="about_id" type="text" name="about_id" class="manzoku-form-transparent"/>
  </div>
  <div class="form-group">
    <label for="title" class="manzoku-color-secondary">Content Title:</label>
    <input id="title" type="text" name="title" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="description" class="manzoku-color-secondary">Description:</label>
    <!-- <input id="description" type="text" name="description" autocomplete="off" class="manzoku-form-transparent" /> -->
    <textarea id="description" name="description" autocomplete="off" class="manzoku-form-transparent" style="min-height:120px;resize:vertical;"></textarea>
  </div>
  <select id="img_src" name="img_src" class="form-select manzoku-form-transparent mt-2 mb-2" required>
    <option class="d-none" value="" selected>Select image to display</option>
    <?php
    foreach (scandir(ABOUT_FOLDER) as $key => $file) {
      if(preg_match('/(jpg|png|webp|jpeg)$/', strtolower(pathinfo($file, PATHINFO_EXTENSION)))){ 
        echo '<option value="' . $file . '">' . $file . '</option>';
      }
    }
    ?>
  </select>
  <section class="d-flex justify-content-end">
    <div class="form-check">
      <input id="is_card" class="form-check-input manzoku-color-base" type="checkbox" name="is_card">
      <label class="form-check-label manzoku-color-secondary" for="is_card">
        Is this a card content?
      </label>
    </div>
  </section>
</form>