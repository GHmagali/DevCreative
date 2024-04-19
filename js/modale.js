jQuery(document).ready(function ($) {
  const modal = $("#myModal");
  const btn = $("#menu-item-55 a").add("#menu-item-100 a");

  // Gère le clic pour ouvrir la modale
  btn.on("click", function (event) {
    event.preventDefault(); // Pour éviter le comportement par défaut du lien
    modal.css("display", "block");
  });

  // Gère le click pour fermer la modale
  $(window).on("click", function (event) {
    if (event.target == modal[0]) {
      modal.css("display", "none");
    }
  });
});

///// Modale de contact du menu burger /////
jQuery(document).ready(function ($) {
  const contactPopup = $(".burger-popup");
  const modal = $("#myModal");

  // Ajoute un écouteur d'événements au bouton
  contactPopup.on("click", function () {
    modal.css("display", "block");
  });
});
