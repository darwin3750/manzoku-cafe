window.onload = () => {
  //count page view
  countView();

  //close preloader on load
  document.querySelector("#preloader-container").classList.replace("d-flex", "d-none");

  //DESKTOP NAVBAR
  [].slice.call(document.querySelector("#navigation-links").children).forEach(function(el){
    if(el.textContent == document.title.slice(document.title.indexOf("|") + 2)){
      el.classList.add("active");
    }else{
      el.classList.remove("active");
    };
  });
  //MOBILE NAVBAR
  [].slice.call(document.querySelector("#mobile-navigation-links").children).forEach(function(el){
    if(el.textContent == document.title.slice(document.title.indexOf("|") + 2)){
      el.classList.add("active");
    }else{
      el.classList.remove("active");
    };
  });

  //menu & admin-config accordion
  document.querySelectorAll(".manzoku-accordion-head ").forEach(head => {
    head.addEventListener('click', () => {
      head.nextElementSibling.firstElementChild.classList.toggle("active");
      document.querySelectorAll(".manzoku-accordion-body").forEach(body => {
        //close other menus if the user opens one 
        if(head != body.parentElement.previousElementSibling) {body.classList.remove("active");}
        //rotate chevron
        body.parentElement.previousElementSibling.firstElementChild.lastElementChild.style.transform = 
            body.classList.contains("active") ? 'rotate(900deg)' : 'rotate(0deg)';
      });
    })
  })

  // create an Observer instance
  const headerResizeObserver = new ResizeObserver(entries => 
    document.querySelector("#header-bottom").style.paddingTop = entries[0].target.clientHeight + "px"
  )
  // start observing a DOM node
  headerResizeObserver.observe(document.querySelector("#header"));
  
  //when in config page
  if(document.title.slice(document.title.indexOf("|") + 2) == "Config"){
    //admin carousel page buttons
    let adminCarousel = new Flickity("#admin-config-carousel");
    adminCarousel.on( 'change', function( index ) {
      document.querySelectorAll("#admin-config-nav .svg-container-icon-4").forEach((el, i) => {
        if(index != i){
          el.classList.remove("active");
        }else{
          el.classList.add("active");
        }
      });
    });

    // admin carousel resizing
    document.querySelectorAll(".manzoku-accordion-body").forEach(el => {
      el.addEventListener('transitionend', () => {
        resizeFlickity('#admin-config-carousel', null);
      })
    });
  }
  
  //home carousel resize on change settle
  if(document.title.slice(document.title.indexOf("|") + 2) == "Home"){
    let homeCarousel = new Flickity(".carousel");
    resizeFlickity(null, homeCarousel);
    homeCarousel.on('settle', ()=>{
      resizeFlickity(null, homeCarousel);
    });
  }

  //fade-in animation
  document.querySelectorAll(".manzoku-animate-slidefadein").forEach(el => {
    if(isInViewportPartially(el) && !el.classList.contains("animation-activated")){
      el.classList.add("animation-activated");
      slideFadeIn(el);
    }
  })

  //slideInX animation
  anime({
    targets: '.manzoku-animate-slideinx',
    translateX: ['-100%', '0'],
    easing: "easeOutQuad",
    delay: (el, i) => i * 200,
    offset: 600,
    duration: 1000,
    complete: function() {
    }
  });
}

//ANIMATIONS
window.onscroll = function(){
  document.querySelectorAll(".manzoku-animate-slidefadein").forEach(el => {
    if(isInViewportPartially(el) && !el.classList.contains("animation-activated")){
      el.classList.add("animation-activated");
      slideFadeIn(el);
    }
  })
}

// Admin Carousel
function carouselSwitchTo(page, flickityId){
  let targetCarousel = new Flickity(flickityId);
  targetCarousel.select(page);
  //resizeFlickity(null, targetCarousel);
}

//general carousel resizing
function resizeFlickity(flickityId = null, flickityObject = null){
  let targetCarousel = flickityId == null ? flickityObject: new Flickity(flickityId);
  targetCarousel.watchCSS();
  targetCarousel.resize();
}

//admin upload image
var loadImage = function(event) {
  let imgContainer = event.target.nextElementSibling.firstElementChild;
  imgContainer.innerHTML = '';
  let img = document.createElement("img");
  let btn = document.createElement("input");
  img.classList.add("img-fluid");
  img.src = URL.createObjectURL(event.target.files[0]);
  btn.type = "submit";
  btn.value = "Submit";
  btn.name = "upload-submit";
  btn.classList.add("btn", "manzoku-btn-accent1", "btn-block", "manzoku-typeface-main0");
  imgContainer.appendChild(img);
  imgContainer.appendChild(btn);
};

// Modals
function openModal(modal, caller){
  document.querySelector(modal).classList.add("d-block");
  if(caller.id == "add-content"){
    document.querySelector("#modal-add-footer").classList.replace("d-none", "d-block");
    document.querySelector("#modal-edit-footer").classList.replace("d-block", "d-none");
    document.querySelector("#modal-add-footer input").disabled = false;
  }else{
    document.querySelector("#modal-edit-footer").classList.replace("d-none", "d-block");
    document.querySelector("#modal-add-footer").classList.replace("d-block", "d-none");
    document.querySelector("#modal-add-footer input").disabled = true;
  }
}

function closeModal(modal){
  document.querySelector(modal).classList.remove("d-block");
}

function populateFormModal(values){
  document.querySelector("#currentForm").reset();
  for (var key in values) {
    if(el = document.querySelector("#" + key)) {
      el.value = (values[key]).replace(/<br\/>/g, '\n');
      if(el.type=="checkbox" && (values[key] == true)){
        el.checked = true;
        console.log((values[key]));
      }else{
        el.checked = false;
      }
    }
  }
}

//check if in viewport entirely
function isInViewportEntirely(el) {
  const elBorders = el.getBoundingClientRect();
  return (
    elBorders.top >= 0 &&
    elBorders.left >= 0 &&
    elBorders.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    elBorders.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

//check if in viewport partially
function isInViewportPartially(el) {
  const elBorders = el.getBoundingClientRect();
  let elMiddle = elBorders.top + (elBorders.bottom - elBorders.top)/2;
  return (
    elMiddle <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

//ANIMATION FUNCTIONS
let slideFadeIn = el => anime({
  targets: el,
  opacity: [0,1],
  translateY: ['3rem', 0],
  easing: "easeOutExpo",
  duration: 2000,
  complete: function() {
  }
});

let slideInX = el => anime({
  targets: el,
  translateX: ['-100%', '0'],
  easing: "easeOutQuad",
  delay: (el, i) => i * 200,
  offset: 600,
  duration: 1000,
  complete: function() {
  }
});

//Count page view
function countView(){
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
    }
  };
  xhttp.open("GET", "components/scripts/count-page.script.php?page="+document.title.slice(document.title.indexOf("|") + 2), true);
  xhttp.send();
}