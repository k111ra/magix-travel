@extends('layouts.layout')
    @section('content')
        <section>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                    </div>
                </div>
            @endif

            <!-- Affichage du message de succès Toastr -->
            @if (session('success'))
                <script>
                    toastr.success('{{ session('success') }}');
                </script>
            @endif
            <div class="container">
                <div class="card" id="add-reservation-card">
                    
                    <form action="{{ route('create-reservation') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="hidden" name="client_id" value="2"> --}}
                        <div class="card-header">
                            <h4>Ajouter une réservation</h4>
                        </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="tour_id">hotel</label>
                                                    <input type="text"  name="hotel_id" class="form-control" id="hotel_id" value="{{ $hotel->id }}" >
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="destination_id">Localisation</label>
                                                    <input type="text"  name="destination_id" class="form-control" id="destination_id" value="{{  $hotel->localisation  }}" >
                                                </div>
                                            </div>
                                            {{-- <div class="col-4">
                                                <div class="form-group">
                                                    <label for="vol_id">Vol</label>
                                                    <select name="vol_id" class="form-control" id="vol_id">
                                                        @foreach ($hotels as $hotel)
                                                            <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="reservation_date">Date de réservation</label>
                                                    <input type="date" name="reservation_date" class="form-control"
                                                        id="reservation_date" value="{{date('Y-m-d')}}" >
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="amount">Montant</label>
                                                    
                                                    <input type="number"  min="0" value="{{ $hotel->prix }}" name="amount" class="form-control" id="amount" >
                                                
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="num_persons">Nombre de personnes</label>
                                                    <input type="number" min="0" name="num_persons" class="form-control" id="num_persons">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="first_name">Prénom</label>
                                                    <input type="text" name="first_name" class="form-control" id="first_name">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="last_name">Nom</label>
                                                    <input type="text" name="last_name" class="form-control" id="last_name">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="phone_number">Numéro de téléphone</label>
                                                    <input type="text" name="phone_number" class="form-control" id="phone_number">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email">
                                                </div>
                                            </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                            <label for="">Bébé ( 0-2 ans)</label>
                                                        <select name="nombre_bebe" id="nmbre_bebe" class="custom-select">
                                                            <option>Nombre de bébé</option>
                                                            <option>0
                                                            </option>
                                                            <option>
                                                                1
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                            <label for="">Enfant ( 2-12 ans)</label>
                                                            <select name="nombre_enfant" id="nombre_enfant" class="custom-select">
                                                                <option>Nombre d'enfant</option>
                                                                <option>
                                                                    0
                                                                </option> 
                                                                <option>
                                                                    1
                                                                </option>
                                                            
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Continuez-></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endsection