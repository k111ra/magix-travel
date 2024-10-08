
    <h1>Bonjour {{ $reservation['nom'] }}  {{ $reservation['prenoms'] }},</h1>

    <p>Votre réservation de vol a été reçu avec succès ! Voici les détails :</p>

    <ul>
        <li><strong>Numéro de Réservation :</strong> {{ $reservation['ref_reservation'] }}</li>
        <li><strong>Destination depart :</strong> {{ $reservation['destination_depart'] }}</li>
        <li><strong>Destination final :</strong> {{ $reservation['destination_final'] }}</li>
        <li><strong>Nombre de personnes :</strong> {{ $reservation['num_persons'] }}</li>
        <li><strong>Date de départ :</strong> {{ $reservation['date_depart'] }}</li>
        <li><strong>Date retour :</strong> {{ $reservation['date_retour'] ?? 'Pas de date retour' }}</li>
    </ul>

    <p>Merci d'avoir réservé avec <strong>Magix Travel</strong> !</p>

    <p>Cordialement,<br>
    L'équipe de Magix Travel</p>

