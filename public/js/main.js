// Nav bar
const mobileBtn = document.querySelector("#Mobile-btn");
const mobileMenu = document.querySelector("#Mobile-menu");

mobileBtn.addEventListener("click",()=>{
  mobileMenu.classList.toggle("hidden");
});