window.onload = () => {
  //NAVBAR
  [].slice.call(document.querySelector("#navigation-links").children).forEach(function(el){
    if(el.textContent == document.title.slice(document.title.indexOf("|") + 2)){
      el.classList.add("active");
      console.log("asd");
    }else{
      el.classList.remove("active");
    };
  });
  //ADD CONTENT MODAL
  document.querySelector("#add-content").addEventListener('click', ()=> {
    document.querySelector("#add-modal").classList.add("d-block");
  });
}

function closeModal(){
  document.querySelector("#add-modal").classList.remove("d-block");
}