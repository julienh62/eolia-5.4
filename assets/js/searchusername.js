'use strict';

console.log("coucou searchnamejs");

let inputName = document.querySelector('#user-search-name');
let resultsName = document.querySelector('#result-name');

inputName.addEventListener('input', function() {
    searchByName();
});

function searchByName() {
    let searchTerm = inputName.value.trim();
    if (searchTerm === '') {
        resultsName.innerHTML = '';
        return;
    }

    fetch(`/searchname/${searchTerm}`)
        .then(response => response.json())
        .then(users => {
            resultsName.innerHTML = '';
            users.forEach(user => {
                let div = document.createElement('div');
                let email = user.email;
                div.classList.add('container');
                div.innerHTML = `
                    <h2>${user.email}</h2>
                    <a href="purchase/user/${user.id}">Voir détail client</a>
                `;
                resultsName.append(div);
            });
        });
}
