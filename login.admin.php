<?php
require "constants.php";
$page_name = "Administrator Login";
require_once HEAD;
?>
  <section class="container p-0">
    <heading class="d-block text-center">
      <img src="<?php echo BANNER ?>" class="img-fluid w-md-50 d-inline-block">
      <h2 class=" manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">ADMINISTRATOR LOGIN
        <span class="tooltip-enabler">(?)
          <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
            This feature is for the website's administrators only. If you got to this page by accident, please leave now.
          </span>
        </span>
      </h2>
      <hr/>
      <img src="assets/images/decorations/art.svg" height="auto" width="300px" />
    </heading>
    <article class="manzoku-color-contrast p-3 manzoku-regular text-center">
      <form action="components/scripts/authenticate.script.php" class="d-inline-block w-100 w-md-50 text-left" method="POST">
        <div class="form-group">
          <label for="username" class="manzoku-bold">Username:</label>
          <input id="username" type="text" name="username" required="required" autocomplete="off"
              class="manzoku-form-transparent" />
        </div>
        <div class="form-group">
          <label for="password" class="manzoku-bold">Password:</label>
          <input id="password" type="password" name="password" required="required" autocomplete="off"
              class="manzoku-form-transparent" />
        </div>
        <input type="submit" value="LOGIN" class="btn manzoku-btn-accent1 btn-lg btn-block manzoku-typeface-main0" name="signin-submit"/>
      </form>
    </article>
  </section>
</body>
</html>