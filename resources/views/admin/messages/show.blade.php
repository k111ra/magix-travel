@extends('admin.layout.layout')
@section('content')
    <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-8 col-xl-12">


                    <div class="card-header d-flex justify-content-between align-items-center p-3"
                        style="border-top: 4px solid #ffa900;">
                        <h5 class="mb-0">{{ $messages->subject }}</h5>
                        {{-- <div class="d-flex flex-row align-items-center">
                <span class="badge bg-warning me-3">20</span>
                <i class="fas fa-minus me-3 text-muted fa-xs"></i>
                <i class="fas fa-comments me-3 text-muted fa-xs"></i>
                <i class="fas fa-times text-muted fa-xs"></i>
              </div> --}}
                    </div>
                    <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

                        <div class="d-flex justify-content-between">
                            <p class="small mb-1">{{ $messages->nom ?? '' }}</p>
                            <p class="small mb-1 text-muted">{{ $messages->updated_at->format('d-M-Y') }}</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                                <p class="xxx-large p-2 ms-3 mb-3 rounded-3" style="background-color: #f5f6f7;">
                                    {{ $messages->message }}</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        </div>
    </section>
@endsection
