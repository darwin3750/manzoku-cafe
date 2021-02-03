<div class="modal" id="modify-content-modal">
  <div class="modal-dialog">
    <div class="modal-content manzoku-bg-primary manzoku-color-contrast manzoku-typeface-main0 rounded manzoku-border-contrast-3">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title manzoku-color-base">Modify content in <?php echo $page_name ?> page</h4>
        <button type="button" class="close manzoku-color-base manzoku-font-4" onclick="closeModal('#modify-content-modal');">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <?php include $form ?>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <div id="modal-add-footer" class="d-none w-100">
          <input type="submit" value="ADD CONTENT" class="btn manzoku-btn-accent1 btn-lg btn-block manzoku-typeface-main0" name="add-content-submit" form="currentForm" />
        </div>
        <div id="modal-edit-footer" class="d-none w-100">
          <input type="submit" value="APPLY CHANGES" class="btn manzoku-btn-accent1 btn-lg btn-block manzoku-typeface-main0" name="edit-content-submit" form="currentForm" />
          <input type="submit" value="DELETE SECTION" class="btn manzoku-btn-secondary btn-lg btn-block manzoku-typeface-main0" name="delete-section-submit" form="currentForm" />
        </div>
      </div>
    </div>
  </div>
</div>