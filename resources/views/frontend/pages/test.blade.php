@extends('layouts.layout')

<!-- Bouton pour ouvrir le modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#flightSearchModal">
    Ouvrir le formulaire de recherche de vol
</button>

<!-- Modal -->
<div class="modal fade" id="flightSearchModal" tabindex="-1" aria-labelledby="flightSearchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="flightSearchModalLabel">Recherche de vol</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Boutons pour basculer entre "Aller simple" et "Aller-retour" -->
                <div class="d-flex justify-content-around mb-3">
                    <button class="btn btn-outline-primary" id="oneWayBtn">Aller simple</button>
                    <button class="btn btn-outline-primary" id="roundTripBtn">Aller-retour</button>
                </div>

                <!-- Formulaire "Aller simple" -->
                <form id="oneWayForm" style="display: none;">
                    <div class="mb-3">
                        <label for="departure" class="form-label">Départ</label>
                        <input type="text" class="form-control" id="departure" placeholder="Ville de départ">
                    </div>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destination" placeholder="Ville de destination">
                    </div>
                    <div class="mb-3">
                        <label for="departureDate" class="form-label">Date de départ</label>
                        <input type="date" class="form-control" id="departureDate">
                    </div>
                    <button type="submit" class="btn btn-primary">Rechercher un vol</button>
                </form>

                <!-- Formulaire "Aller-retour" -->
                <form id="roundTripForm" style="display: none;">
                    <div class="mb-3">
                        <label for="departureRound" class="form-label">Départ</label>
                        <input type="text" class="form-control" id="departureRound" placeholder="Ville de départ">
                    </div>
                    <div class="mb-3">
                        <label for="destinationRound" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destinationRound" placeholder="Ville de destination">
                    </div>
                    <div class="mb-3">
                        <label for="departureDateRound" class="form-label">Date de départ</label>
                        <input type="date" class="form-control" id="departureDateRound">
                    </div>
                    <div class="mb-3">
                        <label for="returnDate" class="form-label">Date de retour</label>
                        <input type="date" class="form-control" id="returnDate">
                    </div>
                    <button type="submit" class="btn btn-primary">Rechercher un vol aller-retour</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
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
</script>

