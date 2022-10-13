const carrouselGauchebtnDroite = document.querySelector(
  "#galerie .gauche .btnDroite"
);
const carrouselGauchebtnGauche = document.querySelector(
  "#galerie .gauche .btnGauche"
);
const carrouselGaucheImg = document.querySelector("#galerie .gauche .images");

const carrouselDroitebtnDroite = document.querySelector(
  "#galerie .droite .btnDroite"
);
const carrouselDroitebtnGauche = document.querySelector(
  "#galerie .droite .btnGauche"
);
const carrouselDroiteImg = document.querySelector("#galerie .droite .images");

const image = document.querySelector("#galerie img");

let width = image.width;

console.log(width);

// ------------------------------------ CARROUSEL GAUCHE -------------------------------------------------------

// pos = position dans le carousel, au départ pos = 0
let gauchePos = 0;
console.log(gauchePos);

// à chaque click du bouton droite, execute la fonction

carrouselGauchebtnDroite.onclick = function () {
  console.log(width);
  // incrémente la position de 1
  gauchePos++;
  console.log(gauchePos);
  // si la position dans le caroussel est <= à 4 (4e image)
  if (gauchePos <= 4) {
    // ajoute une translation de l'axe X en fonction de la position dans le carrousel
    carrouselGaucheImg.style.transform =
      "translateX(" + gauchePos * -width + "px)";
    carrouselGaucheImg.style.transition = "all .5s ease";
  }
  if (gauchePos == 4) {
    gauchePos = 0;
    carrouselGaucheImg.style.transform =
      "translateX(" + droitePos * width + "px)";
    carrouselGaucheImg.style.transition = "all .5s ease";
  }
  // masquer();
};
// même fonction pour le bouton gauche, juste la condition de départ qui change
carrouselGauchebtnGauche.onclick = function () {
  console.log(width);
  gauchePos--;
  console.log(gauchePos);

  if (gauchePos >= 0) {
    carrouselGaucheImg.style.transform =
      "translateX(" + gauchePos * -width + "px)";
    carrouselGaucheImg.style.transition = "all .5s ease";
  }
  if (gauchePos == -1) {
    gauchePos = 3;
    carrouselGaucheImg.style.transform =
      "translateX(" + gauchePos * -width + "px)";
    carrouselGaucheImg.style.transition = "all .5s ease";
  }
  // masquer();
};

// -------------------------------------CARROUSEL DROITE-------------------------------------------------

let droitePos = 0;
console.log(droitePos);

carrouselDroitebtnDroite.onclick = function () {
  console.log(width);
  droitePos++;
  console.log(droitePos);
  if (droitePos <= 4) {
    carrouselDroiteImg.style.transform =
      "translateX(" + droitePos * -width + "px)";
    carrouselDroiteImg.style.transition = "all .5s ease";
  }
  if (droitePos == 4) {
    droitePos = 0;
    carrouselDroiteImg.style.transform =
      "translateX(" + droitePos * width + "px)";
    carrouselDroiteImg.style.transition = "all .5s ease";
  }
  // masquer();
};

carrouselDroitebtnGauche.onclick = function () {
  console.log(width);
  droitePos--;
  console.log(droitePos);

  if (droitePos >= 0) {
    carrouselDroiteImg.style.transform =
      "translateX(" + droitePos * -width + "px)";
    carrouselDroiteImg.style.transition = "all .5s ease";
  }
  if (droitePos == -1) {
    droitePos = 3;
    carrouselDroiteImg.style.transform =
      "translateX(" + droitePos * -width + "px)";
    carrouselDroiteImg.style.transition = "all .5s ease";
  }
  // masquer();
};

// -------------------------------FONCTION MASQUER-----------------------------------------------

// fonction qui permet de masquer le bouton quand on arrive au bout du carrousel
function masquer() {
  // ---------------------------CARROUSEL GAUCHE------------------------------------------------
  if (gauchePos == 3) {
    carrouselGauchebtnDroite.classList.add("masquer-bouton");
  } else carrouselGauchebtnDroite.classList.remove("masquer-bouton");

  if (gauchePos == 0) {
    carrouselGauchebtnGauche.classList.add("masquer-bouton");
  } else carrouselGauchebtnGauche.classList.remove("masquer-bouton");

  // ---------------------------CARROUSEL DROITE------------------------------------------------
  if (droitePos == 3) {
    carrouselDroitebtnDroite.classList.add("masquer-bouton");
  } else carrouselDroitebtnDroite.classList.remove("masquer-bouton");

  if (droitePos == 0) {
    carrouselDroitebtnGauche.classList.add("masquer-bouton");
  } else carrouselDroitebtnGauche.classList.remove("masquer-bouton");
}

// masquer();
