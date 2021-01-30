<?php
require_once "constants.php";
$page_name = "Admin Login";
require_once HEAD;
?>

<body class="theme1 manzoku-bg-primary">
  <section class="container p-0">
    <heading class="d-block text-center">
      <img src="<?php echo BANNER ?>" class="img-fluid w-md-50 d-inline-block">
      <h2 class=" manzoku-typeface-main0 manzoku-font-3 text-center manzoku-color-base">ADMINISTRATOR LOGIN</h2>
      <hr/>
      <img src="assets/images/decorations/art.svg" height="auto" width="300px" />
    </heading>
    <article class="manzoku-color-contrast p-3 manzoku-regular text-center">
      <form action="/" class="d-inline-block w-100 w-md-50 text-left" method="POST">
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
        <input type="submit" value="Login" class="btn manzoku-btn-accent1 btn-lg btn-block" />
      </form>
    </article>
  </section>
</body>

<style>
  
</style>

</html>