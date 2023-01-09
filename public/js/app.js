const nav = document.querySelector('header');
const body = document.querySelector('body');
const menu = document.querySelector('.menu>div.enlaces');
const menuToggle = document.querySelector('.nav__toggle');
const animacion = document.querySelector('.hamburguesa g');
const categorias = document.querySelector('.categorias > div.enlace-categorias');
const categoriasgeneral = document.querySelectorAll('.categorias > div');
const submenu = document.querySelector('.submenu');
const categoriaschild = document.querySelector('.categorias .enlace-categorias ul');
let isMenuOpen = false;
let isCatOpen = false;

// TOGGLE MENU ACTIVE STATE
menuToggle.addEventListener('click', e => {
  e.preventDefault();
  isMenuOpen = !isMenuOpen;
  animacion.classList.add("init");

  
  // toggle action
  menu.hidden = !isMenuOpen;

  // nav.classList.toggle('nav--open');

  if(!nav.classList.toggle('nav--open')){
    submenu.classList.remove("slideDown");
    submenu.classList.add("animate");
    categorias.classList.remove("rotate");
    body.classList.remove("desactivar-scroll");
  }else{
    body.classList.add("desactivar-scroll");
  }
  
  for (var box of categoriasgeneral) {
    box.classList.add('animacionmenu');
  }

});

categorias.addEventListener('click', e => {
  e.preventDefault();
  isCatOpen = !isCatOpen;

  categoriaschild.classList.toggle('animate');
  
  // toggle action
  menu.hidden = !isCatOpen;
  categorias.classList.toggle("rotate");
  submenu.classList.toggle("slideDown");

});