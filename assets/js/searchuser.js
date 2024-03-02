'use strict';
console.log("coucous searchjs");

// Sélectionne l'élément input avec l'ID 'user-search-email'
let input = document.querySelector('#user-search-email');
// Sélectionne l'élément avec l'ID 'result-email'
let results = document.querySelector('#result-email');

// Ajoute un écouteur d'événements qui détecte les changements dans l'input
input.addEventListener('input', function() {
    searchUser();// Appelle la fonction searchUser lorsque
    // l'utilisateur saisit quelque chose
});

// Récupère le contenu de l'input en supprimant les espaces blancs avant et après

function searchUser() {
    let searchTerm = input.value.trim();
    if (searchTerm === '') {
        results.innerHTML = '';
        return;
    }
    // Effectue une requête fetch pour récupérer les utilisateurs 
    //route dans adminUserController
    fetch(`/search/${searchTerm}`)
     // Convertit la réponse en JSON
     // promesse envoyée 
        .then(response => response.json())
        // Traite les données des utilisateurs récupérées
        .then(users => {
            // Vide les résultats précédents
            results.innerHTML = '';
            /* Pour chaque utilisateur, crée un élément div 
            et affiche son nom et un lien vers les détails du client*/
            users.forEach(user => {
                //cree un elemnt div
                let div = document.createElement('div');
                //recupere l'email
                let email = user.email;
             
                // ajoute des classes à elmnt div
                div.classList.add('container');

                /*Injecte le HTML avec le nom de l'utilisateur
                 et un lien vers les détails du client dans l'élément div*/
                div.innerHTML = `
                    <h2>${user.fullName}</h2>
                    <a href="purchase/user/${user.id}">Voir détails client</a>
                `;
                // Ajoute l'élément div à la liste des résultats
                results.append(div);
            });
        });
}
