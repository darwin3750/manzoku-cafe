<section class="manzoku-svg-bg-1 p-3">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand" href="index.php"><img src=<?php echo BANNER2 ?> class="img-fluid" width="300px"></a>
    <section id="navigation-links" class="manzoku-typeface-main0 manzoku-color-contrast">
      <a class="manzoku-font-2" href="index.php">Home</a>
      <a class="manzoku-font-2" href="menus.php">Menu</a>
      <a class="manzoku-font-2" href="about_us.php">About Us</a>
      <a class="manzoku-font-2" href="contact_us.php">Contact Us</a>
      <a class="manzoku-font-2" href="testimonies.php">Testimonies</a>
      <?php if(isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN"){ ?>
        <a class="manzoku-font-2" href="config.admin.php">Config</a>
      <?php }?>
    </section>
  </div>
</section>

<style>
  #navigation-links > a {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
    color: var(--manzoku-contrast);
    transition: 0.2s
  }
  #navigation-links > a:hover {
    color: var(--manzoku-accent2);
  }
  #navigation-links > a.active {
    color: var(--manzoku-accent2);
  }
</style>