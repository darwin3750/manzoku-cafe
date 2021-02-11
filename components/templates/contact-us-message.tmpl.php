<heading class="p-3">
  <h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Send Us a Message</h1>
</heading>
<div class="container manzoku-border-base-3 contact-card rounded p-3">
  <form id="contact-form row d-flex mt-5 mx-auto" method="POST" action="components/scripts/modify-contact-messages.script.php" role="form">
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group manzoku-color-contrast">
          <label for="name" class="manzoku-bold manzoku-regular">Name <span class="manzoku-color-accent1">*</span></label>
          <input id="name" type="text" name="name" class="manzoku-form-transparent" placeholder="Juan Dela Cruz" data-error="Name is required." required autocomplete="off">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group manzoku-color-contrast">
          <label for="email" class="manzoku-bold manzoku-regular">Email <span class="manzoku-color-accent1">*</span></label>
          <input id="email" type="email" name="email" class="manzoku-form-transparent" placeholder="juandelacruz@xample.com*" data-error="Valid email is required." required autocomplete="off">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group manzoku-color-contrast ">
          <label for="phone" class="manzoku-bold manzoku-regular">Phone</label>
          <input id="phone" type="tel" name="phone" class="manzoku-form-transparent" placeholder="09123456789">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group manzoku-color-contrast">
          <label for="subject" class="manzoku-bold manzoku-regular">Subject <span class="manzoku-color-accent1">*</span></label>
          <input id="subject" type="text" name="subject" class="manzoku-form-transparent" placeholder="Business Inquiry" data-error="Subject line is required." required autocomplete="off">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group manzoku-color-contrast">
          <label for="message" class="manzoku-bold manzoku-regular">Message <span class="manzoku-color-accent1">*</span></label>
          <textarea id="message" name="message" class="manzoku-form-transparent" placeholder="Message for us *" rows="4" data-error="send a message." required autocomplete="off"></textarea>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-12">
        <input type="submit" class="btn manzoku-btn-secondary btn-lg btn-block manzoku-typeface-main0" name="send-message">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 d-flex justify-content-end">
        <p class=""><span class="manzoku-color-accent1">*</span> These fields are required.</p>
      </div>
    </div>
  </form>
</div>

<style>
  .contact-card:hover {
    border: 3px solid var(--manzoku-accent2);
    transition: 0.2s;
  }
</style>