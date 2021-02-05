window.onload = () => {
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
  
  // admin carousel resizing
  document.querySelectorAll(".manzoku-accordion-body").forEach(el => {
    el.addEventListener('transitionend', () => {
      resizeFlickity('#admin-config-carousel', null);
    })
  });
  //admin carousel page buttons
  if(document.title.slice(document.title.indexOf("|") + 2) == "Config"){
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
  }
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
    if(el = document.querySelector("#" + key)) el.value = values[key];
  }
}