<form id="currentForm" action="components/scripts/modify-featured-content.script.php" class="" method="POST" enctype="multipart/form-data">
  <!-- HIDDEN -->
  <div class="form-group d-none">
    <label for="content_id" class="manzoku-color-secondary">Content ID:</label>
    <input id="content_id" type="text" name="content_id" class="manzoku-form-transparent"/>
  </div>
  <div class="form-group">
    <label for="content_title" class="manzoku-color-secondary">Content Title:</label>
    <input id="content_title" type="text" name="content_title" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="subheading" class="manzoku-color-secondary">Subheading:</label>
    <input id="subheading" type="text" name="subheading" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="description" class="manzoku-color-secondary">Description:</label>
    <!-- <input id="description" type="text" name="description" autocomplete="off" class="manzoku-form-transparent" /> -->
    <textarea id="description" name="description" autocomplete="off" class="manzoku-form-transparent" style="min-height:120px;resize:vertical;"></textarea>
  </div>
  <select id="img_src" name="img_src" class="form-select manzoku-form-transparent mt-2 mb-2" required>
    <option class="d-none" value="" selected>Select image to display</option>
    <?php
    foreach (scandir(DECORATIONS_FOLDER) as $key => $file) {
      if(preg_match('/(jpg|png|webp|jpeg)$/', strtolower(pathinfo($file, PATHINFO_EXTENSION)))){ 
        echo '<option value="' . $file . '">' . $file . '</option>';
      }
    }
    ?>
  </select>
  <select id="img_layout" name="img_layout" class="form-select manzoku-form-transparent mt-2 mb-2" required>
    <option class="d-none" value="" selected>Select image position</option>
    <option value="CENTER">CENTER</option>
    <option value="RIGHT">RIGHT</option>
    <option value="LEFT">LEFT</option>
    <option value="NONE">NONE</option>
  </select>
  <section class="d-flex justify-content-end">
    <div class="form-check">
      <input id="is_carousel" class="form-check-input manzoku-color-base" type="checkbox" name="is_carousel">
      <label class="form-check-label manzoku-color-secondary" for="is_carousel">
        Put inside carousel?
      </label>
    </div>
  </section>
</form>