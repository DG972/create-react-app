document.addEventListener("DOMContentLoaded", function() {
  const texte = document.querySelector(".texte");

  // Obtenir la largeur du conteneur
  const containerWidth = document.querySelector(".container").offsetWidth;

  // Obtenir la largeur du texte
  const texteWidth = texte.offsetWidth;

  // Animation
  function defilement() {
    texte.style.transform = "translateX(" + (containerWidth) + "px)";
    setTimeout(() => {
      texte.style.transform = "translateX(" + (-texteWidth) + "px)";
      setTimeout(defilement, 1000); // Répéter après 1 seconde
    }, 1000);
  }

  // Lancer l'animation
  defilement();
});
