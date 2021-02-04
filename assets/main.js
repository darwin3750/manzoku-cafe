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

  //menu accordion
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
  const resizeObserver = new ResizeObserver(entries => 
    document.querySelector("#header-bottom").style.paddingTop = entries[0].target.clientHeight + "px"
  )
  // start observing a DOM node
  resizeObserver.observe(document.querySelector("#header"));
}

// Admin Carousel
function carouselSwitchTo(page){
  console.log("asd1");
  let adminCarousel = new Flickity('#admin-config-carousel');
  adminCarousel.select(page);
  console.log("asd");
}

// Modals
function openModal(modal, caller){
  console.log("asd")
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