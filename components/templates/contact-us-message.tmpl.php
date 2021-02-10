<h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Send Us a Message</h1>
<div class="container-fluid row manzoku-border-base-3 m-1 contact-card">
  <div class="container-fluid py-3">
    <form id="contact-form row d-flex mt-5 mx-auto" method="POST" action="components/scripts/modify-contact-messages.script.php" role="form">
      <div class="messages"></div>
      <div class="controls">
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group manzoku-color-contrast">
              <label for="name">Name *</label>
              <input id="name" type="text" name="name" class="form-control manzoku-bg-contrast" placeholder="Juan Dela Cruz" required="required" data-error="name is required.">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group manzoku-color-contrast">
              <label for="email">Email *</label>
              <input id="email" type="email" name="email" class="form-control manzoku-bg-contrast" placeholder="juandelacruz@xample.com*" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group manzoku-color-contrast">
              <label for="phone">Phone</label>
              <input id="phone" type="tel" name="phone" class="form-control manzoku-bg-contrast" placeholder="09123456789">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group manzoku-color-contrast">
              <label for="subject">Subject *</label>
              <input id="subject" type="text" name="subject" class="form-control manzoku-bg-contrast" placeholder="Business Inquiry" required="required" data-error="Subject line is required.">
              <div class="help-block with-errors"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="form-group manzoku-color-contrast">
            <label for="message">Message *</label>
            <textarea id="message" name="message" class="form-control manzoku-bg-contrast" placeholder="Message for us *" rows="4" required="required" data-error="send a message."></textarea>
            <div class="help-block with-errors"></div>
          </div>
        </div>
        <div class="col-md-12">
          <input type="submit" class="btn manzoku-send manzoku-btn-secondary btn-send form-control" value="SEND MESSAGE" name="send-message">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-muted"><strong>*</strong> These fields are required.</p>
        </div>
      </div>
    </form>
  </div>
</div>