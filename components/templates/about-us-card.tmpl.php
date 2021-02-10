<?php if($is_card){ ?>
  <div class="col-sm-4 d-flex mt-5 mx-auto">
    <div class="col">
      <div class="card h-100 manzoku-bg-contrast">
        <img src="<?php echo ROOT_ABOUT_FOLDER . $img_src ?>" class="card-img-top mt-3" style="width:20%; margin-left:auto; margin-right:auto;">
        <div class="card-body ">
          <h5 class="card-title"><?php echo $title; ?></h5>
          <p class="card-text"><?php echo $description; ?></p>
        </div>
      </div>
    </div>
  </div>
<?php }?>