let contenedorDiv = document.querySelectorAll(".div");
var menuLink1 = document.getElementById("menu__link1");
var menuLink2 = document.getElementById("menu__link2");
var menuLink3 = document.getElementById("menu__link3");
var menuLink4 = document.getElementById("menu__link4");
var logoContent = document.getElementById("logo-content");

function mostrarScroll() {
  let scrollTop = document.documentElement.scrollTop;// Altura mientras baja scroll
  
  for(var i=0; i < contenedorDiv.length; i++) {
    let alturaContenedor = contenedorDiv[i].offsetTop;// Altura de arriva de los div

    if(alturaContenedor + 225 < scrollTop) {
      contenedorDiv[i].style.opacity = 1;
      contenedorDiv[i].style.background = '#fff';
      menuLink1.style.color = '#222';
      menuLink2.style.color = '#222';
      menuLink3.style.color = '#222';
      menuLink4.style.color = '#222';
      logoContent.style.color = '#222';
      // contenedorDiv[i].style.border = '-bottom 1px solid rgb(0,80,130)';
    } else {
      contenedorDiv[i].style.background = 'none';
      menuLink1.style.color = '#fff';
      menuLink2.style.color = '#fff';
      menuLink3.style.color = '#fff';
      menuLink4.style.color = '#fff';
      logoContent.style.color = '#fff';
      // contenedorDiv[i].style.border = '-bottom 1px solid gray';
    }
  }
}

window.addEventListener('scroll', mostrarScroll);