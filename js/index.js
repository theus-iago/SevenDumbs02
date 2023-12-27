const body = document.querySelector("body");
const sidenav = document.querySelector(".sidenav");
const botao = document.querySelector(".botao");
const labelB = document.querySelector(".button-label");
function menu() {
  if(sidenav.style.left == 0 + "px" && botao.style.left == 150 + "px") {
   sidenav.style.left = -150 + "px";
   botao.style.left = 0 + "px";
  }else {
   sidenav.style.left = 0 + "px";
   botao.style.left = 150 + "px";
  }
}
