
    <h1>Bonjour Admin,</h1>

    <p>Un client a effectué une nouvelle réservation de vol sur Magixtravel. Voici les détails :</p>

    <ul>
        <li><strong>Numéro de Réservation :</strong> {{ $reservation['ref_reservation'] }}</li>
        <li><strong>Client :</strong> {{ $reservation['nom'] }}  {{ $reservation['prenoms'] }}</li>
        <li><strong>Destination depart :</strong> {{ $reservation['destination_depart'] }}</li>
        <li><strong>Destination depart :</strong> {{ $reservation['destination_final'] }}</li>
        <li><strong>Date de départ :</strong> {{ $reservation['date_depart'] }}</li>
        <li><strong>Date retour :</strong> {{ $reservation['date_retour'] ?? 'Pas de date retour' }}</li>

    </ul>

    <p>Vous pouvez voir la réservation en cliquant sur le lien ci-dessous :</p>
    <a href="{{ route('reservation.vols.reservationVols') }}">Voir la réservation</a>
    <p>Cordialement,<br>
    L'équipe de Magixtravel</p>

