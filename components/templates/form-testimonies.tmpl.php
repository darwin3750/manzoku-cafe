<form id="currentForm" action="components/scripts/modify-testimonies-content.script.php" class="" method="POST" enctype="multipart/form-data">
  <!-- HIDDEN -->
  <div class="form-group d-none">
    <label for="testimony_id" class="manzoku-color-secondary">Testimony ID:</label>
    <input id="testimony_id" type="text" name="testimony_id" class="manzoku-form-transparent"/>
  </div>
  <div class="form-group">
    <label for="name" class="manzoku-color-secondary">Person's Name:</label>
    <input id="name" type="text" name="name" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="title" class="manzoku-color-secondary">Person's Title</label>
    <input id="title" type="text" name="title" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="statement" class="manzoku-color-secondary">Testimonal Statement:</label>
    <input id="statement" type="text" name="statement" autocomplete="off" class="manzoku-form-transparent" />
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