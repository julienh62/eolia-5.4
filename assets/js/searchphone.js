'use strict';

console.log("coucou searchphonejs");

let inputPhone = document.querySelector('#user-search-phone');
let resultsPhone = document.querySelector('#result-phone');

inputPhone.addEventListener('input', function() {
    searchByPhone();
});

function searchByPhone() {
    let searchTerm = inputPhone.value.trim();
    if (searchTerm === '') {
        resultsPhone.innerHTML = '';
        return;
    }

    fetch(`/searchphone/${searchTerm}`)
        .then(response => response.json())
        .then(users => {
            resultsPhone.innerHTML = '';
            users.forEach(user => {
                let div = document.createElement('div');
                let email = user.email;
                div.classList.add('container');
                div.innerHTML = `
                    <h2>${user.email}</h2>
                    <a href="purchase/user/${user.id}">Voir détail client</a>
                `;
                resultsPhone.append(div);
            });
        });
}
