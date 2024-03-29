@extends('layouts.main')

@section('title', 'HTC EVENTS | Home')

@section('content')

<div class="col-md-12" id="search-container">
    <div class="col-md-12">
        <p class="fs-3 title-form-search text-center text-light">Busque por um evento:</p>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control form-search-home" placeholder="Procure por algo...">
        </form>
    </div>
</div>

<div class="col-md-12 mt-3" id="events-container">
    @if ($search == null)
    <p class="fs-3 title-form-search">Proximos eventos</p>
    <p class="fs-5 text-secondary">Veja os eventos dos proximos dias:</p>
    @else
    <p class="fs-3 title-form-search">Eventos encontrados</p>
    <p class="fs-5 text-secondary">Eventos encontrados na busca "{{ $search }}"</p>
    @endif
    
    <div class="row div-events" id="cards-container">
        @foreach($events as $event)
        <div class="card" style="width: 18rem;">
            <img src="@if($event->image)
                        /img/events/{{ $event->image }}
                      @else
                      /img/back.jpg
                      @endif" 
                      class="card-img-top" alt="{{ $event->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $event->title }}</h5>
              <p class="text-secondary card-text text-card">X participantes</p>
              <p class="text-card text-end text-success mb-2">{{ $event->city }}</p>
              <p class="card-text">{{ $event->description }}</p>
              <p>Data: {{ date('d/m/Y', strtotime($event->date)) }}</p>
              <a class="btn btn-dark w-100" href="/events/{{ $event->id }}">Participar</a>
            </div>
          </div>
        @endforeach
        @if (count($events) == 0)
            <h1 class="text-center">Não existem eventos disponíveis</h1>
        @endif
    </div>
</div>
    
@endsection