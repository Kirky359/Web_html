function openMenu() {
  document.querySelector(".menu").classList.add("menu--active");
  document.body.style.overflow = "hidden"; // Отключаем прокрутку страницы
}

function closeMenu() {
  document.querySelector(".menu").classList.remove("menu--active");
  document.body.style.overflow = ""; // Включаем прокрутку страницы
}
