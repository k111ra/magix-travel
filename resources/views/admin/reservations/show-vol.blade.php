@extends('admin.layout.layout')

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card author-box">
            <div class="card-body">
              <div class="author-box-center">
                <img alt="image" src="{{asset('admin/assets/img/users/user-1.png')}}" class="rounded-circle author-box-picture">
                <div class="clearfix"></div>
                <div class="author-box-name">
                  <a href="#">{{$showvol->nom}} {{$showvol->prenoms}}</a>
                </div>
              </div>
              <div class="text-center">
                <div class="author-box-description">
                  <p>
                    <h6>
                        <span class="float-left">
                        Téléphone :
                        </span>
                        {{$showvol->contact}}
                    </h6>
                    <h6>
                        <span class="float-left">
                        whatsapp :
                        </span>
                        {{$showvol->numero_whatsapp}}
                    </h6>
                    <h6>
                        <span class="float-left">
                        E-mail     :
                        </span>
                        {{$showvol->email}}
                    </h6>
                    <h6>
                        <span class="float-left">
                        Adresse     :
                        </span>
                        {{$showvol->adresse}}
                    </h6>
                    
                  </p>
                </div>
                
                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-github">
                  <i class="fab fa-github"></i>
                </a>
                <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                  <i class="fab fa-instagram"></i>
                </a>
                <div class="w-100 d-sm-none"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-8">
          <div class="card">
            <div class="padding-20">
                  <div class="card-header d-flex justify-content-between">
                      <h4>Détails de réservation</h4>
                      <h4 class="ml-auto">Status de reservation :
                          @if ($showvol->status === 'initialiser')
                          <span class="badge badge-secondary">Initialisation</span>
                          @elseif ($showvol->status === 'traiter')
                          <span class="badge badge-primary">Traitement</span>
                          @elseif ($showvol->status === 'valider')
                          <span class="badge badge-success">Valider</span>
                          @else
                          <span class="badge badge-danger">Annuler</span>
                          @endif
                      </h4>

                  </div>
                  <div class="card-body">
                    <div class="py-4">
                        <p class="clearfix">
                            <span class="float-left">
                                Date de réservation:
                            </span>
                            <span class="float-right text-muted">
                             {{ ($showvol->created_at)->format('d/m/Y') }}
                            </span>
                          </p>
                      <p class="clearfix">
                        <span class="float-left">
                            Destination de Départ :
                        </span>
                        <span class="float-right text-muted">
                            {{$showvol->destination_depart}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                            Destination d'Arrivée :
                        </span>
                        <span class="float-right text-muted">
                          {{($showvol->destination_final)}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                            Date de Départ :
                        </span>
                        <span class="float-right text-muted">
                            {{$showvol->date_depart}}
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                            Date de retour:
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">{{$showvol->date_retour}}</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                            Nombre de passager(s):
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">{{$showvol->num_persons}}</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                           Adulte(s):
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">{{$showvol->nombre_adultes}}</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                           Enfant(s) de 2 à 12 ans:
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">{{$showvol->nombre_enfant}}</a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                           Bébé(s) de 0 à 2 ans:
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">{{$showvol->nombre_bebe}}</a>
                        </span>
                      </p>
                    </div>
                  </div>
          </div>
        </div> 
      </div>
    </div>
  </section>
  @endsection