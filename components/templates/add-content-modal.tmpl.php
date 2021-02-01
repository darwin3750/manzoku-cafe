<div class="modal" id="add-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add content to <?php echo $page_name ?> page</h4>
        <button type="button" class="close" onclick="closeModal();">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        Content goes here
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="closeModal();">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  function closeModal(){
    document.querySelector("#add-modal").classList.remove("d-block");
  }
</script>