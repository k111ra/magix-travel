@extends('admin.layout.layout')

@section('content')
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
            <form action="{{route('store-info')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- <input type="hidden" name="client_id" value="2"> --}}
                <div class="card-header">
                    <h4>Information sur votre compagnie</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nom_compagnie">Nom de la compagnie</label>
                                        <input type="text" value="Magix-Travel" name="nom_compagnie" class="form-control"
                                        id="nom_compagnie">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="localisation">Zone de localisation</label>
                                        <input type="text" value="Treichville, Abidjan, Côte d'Ivoire" name="localisation" class="form-control"
                                        id="localisation">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="contact">Votre numéro de téléphone</label>
                                        <input type="text" value="+225 27 21 37 70 38" name="contact" class="form-control"
                                        id="contact">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="lien_google_map">Lien Google Maps</label>
                                        <input type="text" name="lien_google_map" class="form-control"
                                            id="lien_google_map">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="email">E-mail public de l'entreprise</label>
                                        <input type="text" value="info@magixtravel.com" name="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregitrer</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="card" id="add-reservation-card">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                {{-- <input type="hidden" name="client_id" value="2"> --}}
                <div class="card-header">
                    <h4>Réseaux sociaux</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" value="www.facebook.com" name="facebook" class="form-control"
                                        id="facebook">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="linkedin">Linkdin</label>
                                        <input type="text" value="linkdin.com" name="linkdin" class="form-control"
                                        id="linkdin">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" value="www.instagram.com" name="instagram" class="form-control"
                                        id="instagram">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="twitter">X(Twitter)</label>
                                        <input type="text" value="x.com" name="twitter" class="form-control"
                                            id="twitter">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="youtube">Youtube</label>
                                        <input type="text" value="www.youtube.com" name="youtube" class="form-control" id="youtube">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
@endsection
