<?php
session_start();
require_once "constants.php"; 
$page_name = "Contact Us";
require_once HEAD; 
include NAVBAR; ?>
  <section class="container">
    <br><h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Send Us a Message</h1><br><br>
    <div class="container-fluid row card manzoku-bg-contrast">
    <div class="container-fluid py-3">
    <form id="contact-form" method="POST" action="components/scripts/modify-contact-messages.script.php" role="form">
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Juan Dela Cruz" required="required" data-error="name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input id="email" type="email" name="email" class="form-control" placeholder="juandelacruz@xample.com*" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" type="tel" name="phone" class="form-control" placeholder="09123456789">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input id="subject" type="text" name="subject" class="form-control" placeholder="Business Inquiry" required="required" data-error="Subject line is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="send a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn manzoku-btn-base btn-send form-control" value="SEND MESSAGE" name="send-message">
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
    <br><h1 class="manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">Our Socials</h1><br><br>
    <div class="row">
      <?php 
      require_once CONNECT_DATABASE;
      $template = CONTACT_US_CARD;
      include DISPLAY_CONTACT_US;
      require_once CLOSE_DATABASE;
      ?>
    </div>
  </section>
<?php include FOOTER; ?>