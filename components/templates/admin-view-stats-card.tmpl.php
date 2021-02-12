<section class="row p-5">
  <?php foreach ($values as $index => $value) { ?>
    <div class="col-md-3 p-1">
      <section class="p-3 manzoku-border-contrast-2 rounded view-stats-card">
        <h5><?php echo $labels[$index] ?>: </h5>
        <hr class="manzoku-semibold manzoku-bg-contrast" />
        <h2 class="manzoku-black"><?php echo $value ?></h2>
      </section>
    </div>
  <?php } ?>
</section>

<style>
  .view-stats-card{
    transition: 0.4s;
  }
  .view-stats-card:hover{
    border: 2px solid var(--manzoku-accent2);
    color: var(--manzoku-base);
  }
</style>