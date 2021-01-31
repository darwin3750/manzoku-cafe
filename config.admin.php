<?php
session_start();
require "constants.php"; 
$page_name = "Config";
require_once HEAD; 
?>
<body class="theme1 manzoku-bg-primary">
  <?php include NAVBAR; ?>
<section class="container p-0">
    <heading class="d-block text-center">
    </heading>
    <article class="manzoku-color-contrast p-3 manzoku-regular text-center">
      <form action="components/scripts/register.script.php" class="d-inline-block w-100 w-md-50 text-left" method="POST">
        <div class="form-group">
          <label for="username" class="">Username:</label>
          <input id="username" type="text" name="username" required="required" autocomplete="off"
              class="manzoku-form-transparent" />
        </div>
        <div class="form-group">
          <label for="password" class="">Password:</label>
          <input id="password" type="password" name="password" required="required" autocomplete="off"
              class="manzoku-form-transparent" />
        </div>
        <div class="form-group">
          <label for="confirmpassword" class="">Confirm Password:</label>
          <input id="confirmpassword" type="password" name="confirmpassword" required="required" autocomplete="off"
              class="manzoku-form-transparent" />
        </div>
        <input type="submit" value="Register" class="btn manzoku-btn-accent1 btn-lg btn-block manzoku-typeface-main0" name="register-submit"/>
      </form>
      <form action="components/scripts/sign-out.script.php" class="d-inline-block w-100 w-md-50 text-left" method="POST">
        <input type="submit" value="Sign Out" class="btn manzoku-btn-accent1 btn-lg btn-block manzoku-typeface-main0"/>
      </form>
    </article>
  </section>
</body>
</html>