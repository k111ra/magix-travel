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