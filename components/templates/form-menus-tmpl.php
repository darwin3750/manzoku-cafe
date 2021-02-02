<form id="currentForm" action="components/scripts/modify-menus.script.php" class="" method="POST" enctype="multipart/form-data">
  <div class="form-group d-none">
    <label for="menu_id" class="manzoku-color-secondary">Menu ID:</label>
    <input id="menu_id" type="text" name="menu_id" class="manzoku-form-transparent"/>
  </div>
  <select id="img_src" name="img_src" class="form-select manzoku-form-transparent mt-2 mb-2" required>
    <option class="d-none" value="" selected>Select image to display</option>
    <?php
    foreach (scandir(MENUS_FOLDER) as $key => $file) {
      if(preg_match('/(jpg|png|webp|jpeg)$/', strtolower(pathinfo($file, PATHINFO_EXTENSION)))){ 
        echo '<option value="' . $file . '">' . $file . '</option>';
      }
    }
    ?>
  </select>
  <select id="category" name="category" class="form-select manzoku-form-transparent mt-2 mb-2" required>
    <option class="d-none" value="" selected>Select image position</option>
    <option value="SUSHI, SASHIMI, AND NIGIRI">SUSHI, SASHIMI, AND NIGIRI</option>
    <option value="NON-JAPANESE MEALS">NON-JAPANESE MEALS</option>
    <option value="JAPANESE MEALS">JAPANESE MEALS</option>
    <option value="SALAD BOWLS AND ROLLS">SALAD BOWLS AND ROLLS</option>
    <option value="COMBOS">COMBOS</option>
  </select>
</form>