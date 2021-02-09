<section class="p-1">
  <div class="manzoku-border-contrast-2 rounded p-3">
    <form class="float-right" method="POST" action="components/scripts/modify-contact-messages.script.php">
      <input type="hidden" name="delete-message-submit" value="true" />
      <input type="hidden" name="message-id" value="<?php echo $message_id ?>" />
      <div class="svg-container-icon-1" onclick="this.parentElement.submit();" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <g fill='var(--manzoku-contrast)'>
            <path d="M19.5 4.5c-.8-.8-2.2-.8-3 0L12 9 7.5 4.5c-.8-.8-2.2-.8-3 0-.8.8-.8 2.2 0 3L9 12l-4.5 4.5c-.8.8-.8 2.2 0 3 .8.8 2.2.8 3 0L12 15l4.5 4.5c.8.8 2.2.8 3 0 .8-.8.8-2.2 0-3L15 12l4.5-4.5c.8-.8.8-2.2 0-3z"></path>
          </g>
        </svg>
      </div>
    </form>
    <header class="">
      <h3 class="text-left">
        <span class="font-weight-bold manzoku-color-accent1"><?php echo $subject ?></span>
      </h3>
    </header>
    <article class="p-2">
      <p class="text-left"><?php echo $body; ?></p>
    </article>
    <hr class=" manzoku-bg-contrast" />
    <footer class="">
      <div class="row">
        <div class="col-md-4 p-3">
          <h5 class="manzoku-color-base"><?php echo $sender_name ?></h5>
          <h6>Sender's Name</h6>
        </div>
        <div class="col-md-4 p-3">
          <h5 class="manzoku-color-base"><?php echo $sender_email ?></h5>
          <h6>Sender's Email</h6>
        </div>
        <div class="col-md-4 p-3">
          <h5 class="manzoku-color-base"><?php echo $sender_phone ?></h5>
          <h6>Sender's Contact Number</h6>
        </div>
      </div>
    </footer>
  </div>
</section>