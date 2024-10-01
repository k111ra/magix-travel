@extends('admin.layout.layout')
@section('content')
    <section>
        <div class="row ">
            {{-- Tours --}}
            @include('admin.dashboard.tours.tours')
           
            {{-- Hotels --}}
            @include('admin.dashboard.hotels.hotels')

            {{-- Reservations --}}
            @include('admin.dashboard.reservations.reservation')
           
            {{-- Destinations --}}
            @include('admin.dashboard.destinations.destination')
        </div>
    </section>
    <section>
        <div class="row ">
            
            {{-- Reservations vol--}}
            @include('admin.dashboard.reservations.reservation-vol.vol')

             
        </div>
        <section>
            <div class="row ">
                
                {{-- Reservations vol--}}
                @include('admin.dashboard.reservations.reservation-hotel.hotel')
                @include('admin.dashboard.reservations.reservation-hotel.hoteltraitement')
                @include('admin.dashboard.reservations.reservation-hotel.hotelvalider')
                @include('admin.dashboard.reservations.reservation-hotel.hotelannuler')
    
                 
               
            </div>
        </section>
    </section>

@endsection
