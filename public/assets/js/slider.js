'use strict';

console.log("cc sliders.js");

// Obtenir la hauteur de l'écran
const screenHeight = window.innerHeight;

// Calculer 2/3 de la hauteur de l'écran
const twoThirdsScreenHeight = screenHeight * (1 / 2);

// Appliquer la hauteur maximale aux images
document.querySelectorAll('.imgslider').forEach(image => {
    image.style.maxHeight = `${twoThirdsScreenHeight}px`;
});

// Définir la racine du chemin vers les images
const imageRootPath = '/uploads/images/';

let slide = [];
//let slidemobil = [];

// Fonction pour récupérer les données des catégories avec les images via une requête AJAX
function fetchCategoryImages() {
    //route dans AdminCategoryController
    fetch('/categoryimages')
        .then(response => response.json())
        .then(data => {
            // Une fois les données récupérées, extrayez les chemins d'images complets des catégories et mettez-les dans les tableaux slide et slidemobil
            
            data.forEach(category => {
                // Assurez-vous que category.image contient le chemin d'image complet
                // Ajoutez le chemin d'image complet aux tableaux slide et slidemobil
                console.log ("category.image ;" + category.image);
                slide.push(imageRootPath + category.image);
            //    slidemobil.push(imageRootPath + category.image);
                
               console.log("Chemin d'image complet ajouté aux tableaux slide et slidemobil :", category.image);
               // console.log("Tableaux slide et slidemobil mis à jour :", slide, slidemobil);
            });

            // Démarrer le défilement des images après avoir récupéré les données
            startImageSlider();
        })
        .catch(error => console.error('Erreur lors de la récupération des données des catégories :', error));
}

// Appelez la fonction fetchCategoryImages pour récupérer les données des catégories avec les images
fetchCategoryImages();

let numero = 0;

function ChangeSlide(sens) {
    /* document , page en cours */
    /* sens est un paramètre */
    numero = numero + sens;
    /*les conditions permettent de boucler */
    if (numero > slide.length - 1)
        numero = 0;
    if (numero < 0)
        numero = slide.length - 1;
    document.getElementById("slide").src = slide[numero]; // Utiliser le chemin d'image complet récupéré
}

/*let numeromob = 0;

function ChangeSlideMob(sens) {
    // document , page en cours 
    // sens est un paramètre 
    numeromob = numeromob + sens;
    //les conditions permettent de boucler 
  /*  if (numeromob > slidemobil.length - 1)
        numeromob = 0;
    if (numeromob < 0)
        numeromob = slidemobil.length - 1;
    document.getElementById("slidemobil").src = slidemobil[numeromob]; // Utiliser le chemin d'image complet récupéré
}*/

// Fonction pour faire défiler les images avec un intervalle de 4 secondes
function startImageSlider() {
    setInterval(function() {
        ChangeSlide(1);
      //  ChangeSlideMob(1);
    }, 4000);

}
