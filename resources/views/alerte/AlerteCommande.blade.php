

<div style="display :flex; justify-content:space-between; background:rgb(150, 150, 153)">
            {{-- <span style="font-weight: 900; font-size:50px;">
                Magix <span style="color: green">Travel</span>
            </span> --}}
            <img src="https://magixtravel.com/frontend/assets/images/logo.png" width="200px" alt=""
                title="Magix Travel">
         <div class="links-box clearfix">
            <div class="link call-to">
                <a href="tel:+96899999000"><i class="icon fa-solid fa-phone"></i> Appelez-nous <span
                        class="nmbr"> <h1>+225 27 21 37 70 38</h1></span></a>
            </div>
        </div>
    </div>
    <section>
        bonjour vous avez une commande de reservation de :
        <div class="card">
            <div class="card-header">
                <h4>Détails de la réservation</h4>
            </div>
            <div class="card-body">
                <p><strong>Nom du client: </strong> {{ $reservation->first_name }} {{ $reservation->last_name }}</p>
                <p><strong>Téléphone: </strong> {{ $reservation->phone_number }}</p>
                <p><strong>Email: </strong> {{ $reservation->email }}</p>
                <p><strong>Date de réservation: </strong> {{ $reservation->reservation_date }}</p>
                <p><strong>Montant: </strong> {{ $reservation->amount }}</p>
                <p><strong>Nombre de personnes: </strong> {{ $reservation->num_persons }}</p>
                @if ($reservation->nombre_bebe)
                    <p><strong>Nombre de bébé: </strong> {{ $reservation->nombre_bebe }}</p>
                @endif
                @if ($reservation->nombre_enfant)
                    <p><strong>Nombre d'enfant : </strong> {{ $reservation->nombre_enfant }}</p>
                @endif
                @if ($reservation->tour)
                    <p><strong>Tour: </strong> {{ $reservation->tour->nom }}</p>
                @endif
                @if ($reservation->hotel)
                    <p><strong>Hôtel: </strong> {{ $reservation->hotel->name }}</p>
                @endif
                @if ($reservation->vol)
                    <p><strong>Compagnie Aérienne: </strong> {{ $reservation->vol->compagnie_aerienne }}</p>
                    <p><strong>Départ: </strong> {{ $reservation->vol->depart->name }}</p>
                    <!-- Ajoutez d'autres détails du vol ici -->
                @endif
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-primary">Retour à la liste</a>
            </div>
        </div>
    </section>
