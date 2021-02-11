<form id="currentForm" action="components/scripts/modify-menus.script.php" class="" method="POST" enctype="multipart/form-data">
  <!-- HIDDEN -->
  <div class="form-group d-none">
    <label for="menu_id" class="manzoku-color-secondary">Menu ID:</label>
    <input id="menu_id" type="text" name="menu_id" class="manzoku-form-transparent manzoku-regular"/>
  </div>
  <select id="img_src" name="img_src" class="form-select manzoku-form-transparent mt-2 mb-2 manzoku-regular" required>
    <option class="d-none" value="" selected>Select image to display</option>
    <?php
    foreach (scandir(MENUS_FOLDER) as $key => $file) {
      if(preg_match('/(jpg|png|webp|jpeg)$/', strtolower(pathinfo($file, PATHINFO_EXTENSION)))){ 
        echo '<option value="' . $file . '">' . $file . '</option>';
      }
    }
    ?>
  </select>

  <input id="category" name="category" type="text" list="categories" class="form-select manzoku-form-transparent mt-2 mb-2" required placeholder="Select category" autocomplete="off"/>
  <datalist id="categories">
    <?php
      require GET_DISTINCT_MENU_CATEGORIES;
      foreach ($categories as $key => $category) {
        echo "<option value='{$category}'>{$category}</option>";
      }
    ?>
  </datalist>
</form>