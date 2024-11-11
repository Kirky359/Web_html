function openMenu() {
  document.querySelector(".menu").classList.add("menu--active");
  document.body.style.overflow = "hidden";
}

function closeMenu() {
  document.querySelector(".menu").classList.remove("menu--active");
  document.body.style.overflow = "";
}
