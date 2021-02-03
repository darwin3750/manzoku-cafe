<section class="manzoku-svg-bg-1 p-3">
  <div class="container d-flex justify-content-between align-items-center flex-xl-row flex-column">
    <a class="navbar-brand" href="index.php"><img src=<?php echo BANNER2 ?> class="img-fluid" width="300px"></a>

    <!-- navbar for desktop view -->
    <section id="navigation-links" class="manzoku-typeface-main0 manzoku-color-contrast d-md-block d-none">
      <a class="manzoku-font-2" href="index.php">Home</a>
      <a class="manzoku-font-2" href="menus.php">Menus</a>
      <a class="manzoku-font-2" href="about_us.php">About Us</a>
      <a class="manzoku-font-2" href="contact_us.php">Contact Us</a>
      <a class="manzoku-font-2" href="testimonies.php">Testimonies</a>
      <?php if(isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN"){ ?>
        <a class="manzoku-font-2" href="config.admin.php">Config</a>
      <?php }?>
    </section>

    <!-- navbar for mobile view -->
    <section class="d-md-none d-block fixed-bottom w-100 manzoku-typeface-main0 manzoku-color-contrast">
      <div class="d-flex justify-content-end">
        <button class="btn btn-lg manzoku-btn-accent1 flat-hill pr-3 pl-3" 
            onclick='document.querySelector("#mobile-navigation-links").classList.toggle("mh-100")'>
          Navigation
        </button>
      </div>
      <section id="mobile-navigation-links" class="mh-0 h-auto manzoku-bg-primary d-flex flex-column p-0 manzoku-border-top-base-4">
        <a class="manzoku-font-2" href="index.php">Home</a>
        <a class="manzoku-font-2" href="menus.php">Menus</a>
        <a class="manzoku-font-2" href="about_us.php">About Us</a>
        <a class="manzoku-font-2" href="contact_us.php">Contact Us</a>
        <a class="manzoku-font-2" href="testimonies.php">Testimonies</a>
        <?php if(isset($_SESSION['current_user_privilege']) && $_SESSION['current_user_privilege'] == "ADMIN"){ ?>
          <a class="manzoku-font-2" href="config.admin.php">Config</a>
        <?php }?>
      </section>
    </section>
    
  </div>
</section>

<style>
  #navigation-links > a, #mobile-navigation-links > a {
    margin-right: 0.5rem;
    margin-left: 0.5rem;
    color: var(--manzoku-contrast);
    transition: 0.2s
  }
  #navigation-links > a:hover, #mobile-navigation-links > a:hover {
    color: var(--manzoku-accent2);
  }
  #navigation-links > a.active, #mobile-navigation-links > a.active {
    color: var(--manzoku-accent2);
  }
</style>