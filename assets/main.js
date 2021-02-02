window.onload = () => {
  //NAVBAR
  [].slice.call(document.querySelector("#navigation-links").children).forEach(function(el){
    if(el.textContent == document.title.slice(document.title.indexOf("|") + 2)){
      el.classList.add("active");
    }else{
      el.classList.remove("active");
    };
  });
}

function openModal(modal, caller){
  document.querySelector(modal).classList.add("d-block");
  if(caller.id == "add-content"){
    document.querySelector("#modal-add-footer").classList.replace("d-none", "d-block");
    document.querySelector("#modal-edit-footer").classList.replace("d-block", "d-none");
  }else{
    document.querySelector("#modal-edit-footer").classList.replace("d-none", "d-block");
    document.querySelector("#modal-add-footer").classList.replace("d-block", "d-none");
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