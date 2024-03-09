@extends('layouts.layout')

@section('content')

        <section id="pack" class="packages">
            <div class="container">
                <div class="gallary-header text-center">
                @if ($tours->isEmpty())
                 <h2 class="no-results">Pas de résultat</h2>
                  @else
                  <h2 class="resultat">Résultat trouvé</h2>
                </div><!--/.gallery-header-->
                <div class="packages-content">
                    <div class="row">
                   
                        @foreach ($tours as $tour)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-package-item">
                                <!-- <img src="{{ asset('storage/' . $tour->images[0]) }}" alt="package-place"> -->
                                <div class="single-package-item-txt">
                                    <h3>{{ $tour->nom }} <span class="pull-right">{{ number_format($tour->prix, 0, ',', ' ') }} CFA</span></h3>
                                    <div class="packages-para">
                                        <p><span><i class="fa fa-angle-right"></i> {{ $tour->duree }} Jours {{ $tour->duree > 1 ? 'nights' : 'night' }}</span>
                                        <p><span><i class="fa fa-angle-right"></i> Moyen de transport: {{ $tour->moyen_transport }}</span>
                                    </div>
                                    <!--/.packages-review-->
                                    <div class="about-btn">
                                        <button class="about-view packages-btn">
                                            Reserve maintenant
                                        </button>
                                    </div><!--/.about-btn-->
                                </div><!--/.single-package-item-txt-->
                            </div><!--/.single-package-item-->
                        </div><!--/.col-->
                        @endforeach
                        @endif
                    </div><!--/.row-->
                </div><!--/.packages-content-->
            </div><!--/.container-->
        </section>

@endsection
