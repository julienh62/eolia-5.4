// Assurez-vous que le code est exécuté après le chargement complet du document
document.addEventListener("DOMContentLoaded", function() {
    // Sélectionnez le formulaire
    console.log("FormSearchActivity : Le DOM est chargé");
    const searchForm = document.querySelector('#searchForm');
    const loadingIndicator = document.getElementById('loadingIndicator');
    const loader = document.createElement('div');
    loader.classList.add('loader');
    loadingIndicator.appendChild(loader);
    const noResultsMessage = document.createElement('p');
    noResultsMessage.textContent = 'Aucune séance ne correspond à votre demande.';

    // Ajouter une variable pour suivre l'état du chargement
    let isLoading = false;
    //console.log("isLoading: " + isLoading);

    // Fonction pour afficher le loader et le message "Nous lançons votre recherche"
    function showLoading() {
        isLoading = true;
       // console.log("FormSearchActivity : Affichage du loader et du message de chargement showLoading");
        loadingIndicator.style.display = 'block';
    }

    // Fonction pour masquer le loader et le message "Nous lançons votre recherche"
    function hideLoading() {
        isLoading = false;
        //console.log("FormSearchActivity : Masquage du loader et du message de chargement");
        loadingIndicator.style.display = 'none';
       // console.log("isLoading: " + isLoading);
    }

    // Ajoutez un gestionnaire d'événements pour l'événement de soumission du formulaire
    searchForm.addEventListener('submit', function(event) {
        // Empêchez le comportement par défaut du formulaire (soumission traditionnelle)
        event.preventDefault();

        // Afficher le loader et le message "Nous lançons votre recherche"
        showLoading();

        // Collectez les données du formulaire
        const formData = new FormData(searchForm);

        // Créez une chaîne de requête en encodant les données du formulaire
        const queryString = new URLSearchParams(formData).toString();

        //console.log("FormSearchActivity : QueryString :", queryString);

        // Envoyez une requête Ajax GET avec la chaîne de requête
        fetch('/filter?' + queryString, {
            method: 'GET'
        })
        .then(response => response.json())
        .then(data => {
            console.log("FormSearchActivity : Données reçues :", data);

            // Sélectionnez l'élément où vous souhaitez afficher les résultats
            const calendarList = document.querySelector('#calendarList');

            // Effacez tout contenu précédent
            calendarList.innerHTML = '';

            // Vérifiez si la liste de calendriers est vide
            if (data.calendars.length === 0) {
                // Affichez le message "Aucune séance ne correspond à votre demande"
                console.log("FormSearchActivity : Aucune séance ne correspond à votre demande.");
                calendarList.appendChild(noResultsMessage);
            } else {
                // Parcourez les calendriers filtrés et créez des éléments HTML pour les afficher
                data.calendars.forEach((calendar, index) => {
                    const calendarItem = document.createElement('div');
                    calendarItem.classList.add('calendar-item');

                    // Créez du contenu HTML pour chaque calendrier
                    calendarItem.innerHTML = `
                        <p>${calendar.title}</p>
                        <p>Start: ${calendar.formattedStartDate}</p>
                        <p>End: ${calendar.formattedEndDate}</p>
                        <p>Price: ${(calendar.price / 100).toFixed(2)} €</p>       
                        <p>Stock: ${calendar.stock}</p>
                    `;

                    // Ajoutez l'élément du calendrier à la liste
                    calendarList.appendChild(calendarItem);

                    // Ajoutez une ligne horizontale entre chaque résultat, sauf pour le dernier élément
                    if (index < data.calendars.length - 1) {
                        const separator = document.createElement('hr');
                        calendarList.appendChild(separator);
                    }
                });
            }

            // Masquer le loader et le message "Nous lançons votre recherche"
            hideLoading();
        })
        .catch(error => {
            console.error('Erreur lors de la récupération des données filtrées :', error);
            // Masquer le loader et le message "Nous lançons votre recherche"
            hideLoading();
        });
    });
});
