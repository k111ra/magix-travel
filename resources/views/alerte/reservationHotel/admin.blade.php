<h1>Bonjour Admin,</h1>

<p>Un client a effectué une nouvelle réservation de {{ $reservation->typeReservation->nom ?? '' }} sur Magixtravel.
    Voici les détails :</p>

<ul>
    <li><strong>Numéro de Réservation :</strong> {{ $reservation['ref_reservation'] }}</li>
    <li><strong>Client :</strong> {{ $reservation['nom'] }} {{ $reservation['prenoms'] }}</li>
    <li><strong>{{ $reservation->typeReservation->nom }} :</strong> {{ $reservation->hotel->name }}</li>
    <li><strong>Date de départ :</strong> {{ $reservation['departure_date'] }}</li>
</ul>

<p>Vous pouvez voir la réservation en cliquant sur le lien ci-dessous :</p>

<a href="{{ url('/admin/liste-reservations-hotels/' . $reservation['id']) }}">Voir la réservation</a>

<p>Cordialement,<br>
    L'équipe de Magixtravel</p>
