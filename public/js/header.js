const btnMenu = document.getElementById("btn-menu");
const icone = document.querySelector(".icone-menu");
const menu_Mobile = document.querySelector(".navagation-mobile");
btnMenu.addEventListener("click", () =>{
 if(icone.classList.contains("bi-list")){
   icone.classList.remove("bi-list")
   icone.classList.add("bi-x-lg")
 } else{
  icone.classList.add("bi-list")
  icone.classList.remove("bi-x-lg")
 }
 menu_Mobile.classList.toggle("active-nav-menu");
})