<section id="preloader-container" class="top-0 bottom-0 right-0 left-0 position-fixed w-100 h-100 
    manzoku-svg-bg-1 d-flex flex-column justify-content-center align-items-center" style="z-index: 99999;">
  <img src="<?php echo LOADER_GIF;?>" class="" height="200" width="auto">
  <h1 class="manzoku-black manzoku-color-contrast manzoku-animate-wavetext font-weight-bolder">Loading...</h1>
</section>

<script defer>
    //put every letter in the text on a separate tag
    const textWrapper = document.querySelector('.manzoku-animate-wavetext');
    const textRetain = textWrapper.innerHTML;
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, 
        "<div class='manzoku-animate-wavetext-letter-container'><span class='manzoku-animate-wavetext-letter'>$&</span></div>");

    //animate texts
    anime.timeline({ loop: true }).add({
      targets: '.manzoku-animate-wavetext-letter',
      translateY: [0, -100],
      easing: "easeOutExpo",
      delay: (el, i) => i * 30,
      duration: 600,
      offset: 600,
      complete: function() {
      }
    }).add({
      targets: '.manzoku-animate-wavetext-letter',
      translateY: [-100, 0],
      easing: "easeOutExpo",
      delay: (el, i) => i * 30,
      duration: 600,
      complete: function() {
      }
    })
</script>