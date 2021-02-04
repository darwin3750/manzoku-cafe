<section class="container p-3">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 manzoku-border-base-4 rounded-lg">
      <heading class="d-block text-center">
        <h2 class="manzoku-typeface-main0 manzoku-font-3 manzoku-color-base p-3 m-0">Admin Registration
          <span class="tooltip-enabler">(?)
            <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
              Register new administrator accounts here. 
            </span>
          </span>
        </h2>
      </heading>
      <article class="manzoku-color-contrast p-3 manzoku-regular text-center">
        <form action="components/scripts/register.script.php" class="d-inline-block text-left w-100" method="POST">
          <div class="form-group">
            <label for="username" class="">Username:</label>
            <input id="username" type="text" name="username" required="required" autocomplete="off" class="manzoku-form-transparent" />
          </div>
          <div class="form-group">
            <label for="password" class="">Password:</label>
            <input id="password" type="password" name="password" required="required" autocomplete="off" class="manzoku-form-transparent" />
          </div>
          <div class="form-group">
            <label for="confirmpassword" class="">Confirm Password:</label>
            <input id="confirmpassword" type="password" name="confirmpassword" required="required" autocomplete="off" class="manzoku-form-transparent" />
          </div>
          <input type="submit" value="Register" class="btn manzoku-btn-accent1 btn-lg btn-block manzoku-typeface-main0" name="register-submit" />
        </form>
      </article>
    </div>
    <div class="col-md-2"></div>
  </div>
</section>