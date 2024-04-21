const header = document.querySelector("#header");
const burgerBtn = document.querySelector(".burger__btn");
// Gère l'animation du bouton du menu et l'animation du menu
burgerBtn.addEventListener("click", (e) => {
  // Ajoute ou supprime la classe "active" pour animer le bouton
  e.target.classList.toggle("active");
  // Ajoute ou supprime la classe "slideInDown" pour animer l'apparition du menu
  burgerMenu.classList.toggle("slideInDown");
  header.classList.toggle("fixed");
});

const burgerMenu = document.getElementById("header-menu");
const icon = document.getElementById("icon");

// Gère l'ouverture du menu
icon.addEventListener("click", () => {
  // Ajoute ou supprime la classe "active" pour afficher ou cacher le menu
  burgerMenu.classList.toggle("active");
});

const burgernav = document.getElementById("header-menu");

// Gère le click sur les liens du menu
document.querySelectorAll("li a").forEach((e) =>
  // Supprime la classe "active" pour fermer le menu lorsque l'un des liens est cliqué
  e.addEventListener("click", () => {
    burgernav.classList.remove("active");
  })
);
