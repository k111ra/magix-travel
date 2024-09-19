document.getElementById('oneWayBtn').addEventListener('click', function () {
    document.getElementById('oneWayForm').style.display = 'block';
    document.getElementById('roundTripForm').style.display = 'none';
});

document.getElementById('roundTripBtn').addEventListener('click', function () {
    document.getElementById('oneWayForm').style.display = 'none';
    document.getElementById('roundTripForm').style.display = 'block';
});

// Afficher le formulaire "Aller simple" par défaut lors du chargement du modal
document.getElementById('oneWayBtn').click();

//gestion des boutons et la mise à jour de l'input

document.getElementById('passenger-input').addEventListener('click', function() {
    document.getElementById('passenger-modal').style.display = 'block';
});

document.getElementById('close-passenger-modal').addEventListener('click', function() {
    document.getElementById('passenger-modal').style.display = 'none';

    // Mise à jour de l'input avec les valeurs sélectionnées
    const adulteCount = document.getElementById('adulte-count').innerText;
    const enfantCount = document.getElementById('enfant-count').innerText;
    const bebeCount = document.getElementById('bebe-count').innerText;
    document.getElementById('passenger-input').value = `${adulteCount} adulte(s), ${enfantCount} enfant(s), ${bebeCount} bébé(s)`;
});

// Gestion des boutons plus et moins

document.querySelectorAll('.plus').forEach(button => {
    button.addEventListener('click', function() {
        const type = this.getAttribute('data-type');
        const countElement = document.getElementById(`${type}-count`);
        let count = parseInt(countElement.innerText);
        countElement.innerText = count + 1;
    });
});

document.querySelectorAll('.minus').forEach(button => {
    button.addEventListener('click', function() {
        const type = this.getAttribute('data-type');
        const countElement = document.getElementById(`${type}-count`);
        let count = parseInt(countElement.innerText);
        if (count > 0) {
            countElement.innerText = count - 1;
        }
    });
});
