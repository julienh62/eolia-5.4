'use strict'  
console.log("coucous searchcustomerjs");

let inputcustomer = document.querySelector('#customer-search');

let resultscustomer = document.querySelector('#resultcustomer');
//let li = document.createElement('li');
//console.log(results);

inputcustomer.addEventListener('change', function(){
// search c'est la route 
// input.value c'est la valeur searchItem
//etape 1 ;  la requete se fait sur l'url  fonction searchuser()
// est envoyé au controller 
    fetch('/searchcustomer/' + inputcustomer.value)

  
//etape 4 on recupere le json de la reponse du controller 
    .then(response => response.json())
    //etape 5 on recupere la reponse qui est transforme par 
    //fonction response.json qui transforme en format exploitable pour js
    .then( customers => {
        // je vide reponse
        resultscustomer.innerHTML = ''
      console.log(customers);
       //je remplis
        customers.forEach( customer => {
        let div = document.createElement('div')
            let email = customer.email;
        //nom que je dois trouver et afficher
        console.log(email);
        div.classList.add('container')
        div.innerHTML = `
        
                    
        <h2>${ customer.name } </h2>
        <h2>${ customer.firstname } </h2>
                     
                     <a href="customer/${ customer.id }">Voir détail client</a>
               `;


           resultscustomer.append(div);

        })
    })
 
})




