<form id="currentForm" action="components/scripts/add-featured-content.script.php" class="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="content_title" class="">Content Title:</label>
    <input id="content_title" type="text" name="content_title" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="subheading" class="">Subheading:</label>
    <input id="subheading" type="text" name="subheading" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-group">
    <label for="description" class="">Description:</label>
    <input id="description" type="text" name="description" autocomplete="off" class="manzoku-form-transparent" />
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="is_carousel" name="is_carousel">
    <label class="form-check-label" for="is_carousel">
      Put inside carousel?
    </label>
  </div>
  <select name="img_layout" class="form-select manzoku-form-transparent">
    <option class="d-none" selected>Select image position</option>
    <option value="CENTER">CENTER</option>
    <option value="RIGHT">RIGHT</option>
    <option value="LEFT">LEFT</option>
    <option value="NONE">NONE</option>
  </select>
</form>