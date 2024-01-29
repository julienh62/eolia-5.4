'use strict';
console.log("coucous searchjs");

let input = document.querySelector('#user-search-email');
let results = document.querySelector('#result-email');

input.addEventListener('input', function() {
    searchUser();
});

function searchUser() {
    let searchTerm = input.value.trim();
    if (searchTerm === '') {
        results.innerHTML = '';
        return;
    }
    fetch(`/search/${searchTerm}`)
        .then(response => response.json())
        .then(users => {
            results.innerHTML = '';
            users.forEach(user => {
                let div = document.createElement('div');
                let email = user.email;
             //   let fullName = user.fullName;
            
                div.classList.add('container');
                div.innerHTML = `
                    <h2>${user.fullName}</h2>
                    <a href="purchase/user/${user.id}">Voir détails client</a>
                `;
                results.append(div);
            });
        });
}
