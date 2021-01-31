<section class="manzoku-svg-bg-1 p-3">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand"><img src=<?php echo BANNER2 ?> class="img-fluid" width="300px"></a>
    <section id="navigation-links" class="manzoku-typeface-main0 manzoku-color-contrast">
      <a class="manzoku-font-2" href="#">Home</a>
      <a class="manzoku-font-2" href="#">About Us</a>
      <a class="manzoku-font-2" href="#">Contact Us</a>
      <a class="manzoku-font-2" href="#">Testimonies</a>
      <?php if($_SESSION['current_user_privilege'] == "ADMIN"){ ?>
        <a class="manzoku-font-2" href="#">Config</a>
      <?php }?>
    </section>
  </div>
</section>

<script>
  window.onload = () => {
    [].slice.call(document.querySelector("#navigation-links").children).forEach(function(el){
      if(el.textContent == "<?php echo $page_name ?>"){
        el.classList.add("active");
      }else{
        el.classList.remove("active");
      };
    });
    //div[text()="Hello World"]
  }
</script>


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