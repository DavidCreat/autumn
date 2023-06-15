// Función para mostrar/ocultar el menú lateral
function toggleMenu() {
    var menu = document.querySelector('.menu-lateral');
    menu.classList.toggle('menu-cerrado');
  }
  
  // Función para mostrar/ocultar los submenús del menú lateral
  function toggleSubmenu(event) {
    event.stopPropagation();
    var submenu = event.currentTarget.nextElementSibling;
    submenu.classList.toggle('submenu-abierto');
  }
  
  // Evento click en el icono del menú lateral
  var iconoMenu = document.querySelector('.icono-menu');
  iconoMenu.addEventListener('click', toggleMenu);
  
  // Evento click en los elementos del menú lateral con submenús
  var itemsMenu = document.querySelectorAll('.item-menu.submenu');
  itemsMenu.forEach(function(item) {
    item.addEventListener('click', toggleSubmenu);
  });
  