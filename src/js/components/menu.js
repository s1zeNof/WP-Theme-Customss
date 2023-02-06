const menu = document.querySelector('#menu_mobile');

const gamburger = document.querySelector('.burger');

gamburger.addEventListener('click', function() {
  console.log("It works")
  

  display = menu.style.display;

  if (display == 'flex' ) {
    display = menu.style.display = 'none'
  } else {
    display = menu.style.display = 'flex';
  }
});