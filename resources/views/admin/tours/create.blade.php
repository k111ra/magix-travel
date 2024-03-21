@extends('admin.layout.layout')
@section('content')
    <div class="container">
        <div class="card" id="add-tour-card">
            <form action="{{ route('tours.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card-header">
                    <h4>Ajouter un Tour</h4>
                </div>

                <div class="card-body">
                
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nom">Nom:</label>
                                <input type="text" name="nom" id="nom" class="form-control" required>
                            </div>

                           

                            <div class="form-group">
                                <label for="duree">Durée (en jours):</label>
                                <input type="number" name="duree" id="duree" class="form-control" required>
                            </div>
                            

                            <div class="form-group">
                                <label for="prix">Prix:</label>
                                <input type="number" name="prix" id="prix" class="form-control" required>
                            </div>
                        
                        
                            <!-- Group 2 -->
                            <div class="form-group">
                                <label for="destination">Destination:</label>
                                <input type="text" name="destination" id="destination" class="form-control" required>
                            </div>
                        </div>

                            <div class="col-sm-4">
                            <div class="form-group">
                                <label for="place">Places disponibles:</label>
                                <input type="number" name="place" id="place" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="date_depart">Date de départ:</label>
                                <input type="date" name="date_depart" id="date_depart" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="moyen_transport">Moyen de transport:</label>
                                <input type="text" name="moyen_transport" id="moyen_transport" class="form-control"
                                    required>
                            </div>

                            
                            <!-- Common Group -->
                           
                            <div class="form-group">
                                <label for="images">Images:</label>
                                <input type="file" name="images[]" id="images" multiple accept="image/*"
                                    class="form-control-file">
                            </div>
                        
                        </div>
                    </div> 
                

                </div>

                <div class="col-sm-12">
                     <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                 </div>


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ajouter le Tour</button>
                </div>
            </form>
        </div>
    </div>
@endsection
