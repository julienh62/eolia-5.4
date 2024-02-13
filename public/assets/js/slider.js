'use strict';    
console.log("cc sliders.js");

let slide = [];
let slidemobil = [];
// Fonction pour récupérer les données des catégories avec les images via une requête AJAX
function fetchCategoryImages() {
    fetch('/admin/category/images')
        .then(response => response.json())
        .then(data => {
            // Une fois les données récupérées, extrayez les URLs des images des catégories et mettez-les dans les tableaux slide et slidemobil
            data.forEach(category => {
                console.log("slide: ",slide);
                // Assurez-vous que category.image contient l'URL de l'image
                // Ajoutez l'URL de l'image aux tableaux slide et slidemobil
                slide.push(category.image);
                slidemobil.push(category.image);
                console.log("URL de l'image ajoutée aux tableaux slide et slidemobil :", category.image);
                console.log("Tableaux slide et slidemobil mis à jour :", slide, slidemobil);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des données des catégories :', error));
}

// Appelez la fonction fetchCategoryImages pour récupérer les données des catégories avec les images
fetchCategoryImages();























