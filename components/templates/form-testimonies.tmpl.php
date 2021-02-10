<form id="currentForm" action="components/scripts/modify-testimonies-content.script.php" class="" method="POST" enctype="multipart/form-data">
  <!-- HIDDEN -->
  <div class="form-group d-none">
    <label for="testimony_id" class="manzoku-color-secondary">Testimony ID:</label>
    <input id="testimony_id" type="text" name="testimony_id" class="manzoku-form-transparent"/>
  </div>
  <div class="form-group">
    <label for="author_name" class="manzoku-color-secondary">Author's Name:</label>
    <input id="author_name" type="text" name="author_name" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="title" class="manzoku-color-secondary">Person's Title</label>
    <input id="title" type="text" name="title" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="content" class="manzoku-color-secondary">Testimonial Statement:</label>
    <!-- <input id="content" type="text" name="content" autocomplete="off" class="manzoku-form-transparent" /> -->
    <textarea id="content" name="content" autocomplete="off" class="manzoku-form-transparent" style="min-height:120px;resize:vertical;"></textarea>
  </div>
  <select id="img_src" name="img_src" class="form-select manzoku-form-transparent mt-2 mb-2" required>
    <option class="d-none" value="" selected>Select profile image to display</option>
    <?php
    foreach (scandir(ROOT_TESTIMONIALS_FOLDER) as $key => $file) {
      if(preg_match('/(jpg|png|webp|jpeg)$/', strtolower(pathinfo($file, PATHINFO_EXTENSION)))){ 
        echo '<option value="' . $file . '">' . $file . '</option>';
      }
    }
    ?>
  </select>
</form>