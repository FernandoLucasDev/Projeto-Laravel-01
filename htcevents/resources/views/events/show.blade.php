@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div class="col-md-6" id="image-container">
                <img src="@if($event->image)
                /img/events/{{ $event->image }}
              @else
              /img/back.jpg
              @endif" class="img-fluid">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><ion-icon name="location-outline">{{ $event->city }}</ion-icon></p>
                <p class="events-participants"><ion-icon name="peopple-outline"></ion-icon>Participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Organizador</p>
                   @if ($event->items != null)
                        @foreach ($event->items as $item)
                            <p> > {{ $item }}</p>
                        @endforeach
                   @endif
                <a href="#" class="btn btn-dark" id="event-submit">Confirmar presença</a>
            </div>
            <div class="event-description">
                <h3>Descrição do evento: </h3>
                <p class="event-description-txt">{{ $event->description }}</p>
            </div>
        </div>
    </div>
    
@endsection
