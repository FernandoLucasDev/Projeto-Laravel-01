@extends('layouts.main')

@section('title', 'HTC EVENTS | Home')

@section('content')

<div class="col-md-12" id="search-container">
    <div class="col-md-12">
        <p class="fs-3 title-form-search text-center text-light">Busque por um evento:</p>
        <form action="">
            <input type="text" id="search" name="search" class="form-control form-search-home" placeholder="Procure por algo...">
        </form>
    </div>
</div>

<div class="col-md-12 mt-3" id="events-container">
    <p class="fs-3 title-form-search">Proximos eventos</p>
    <p class="fs-5 text-secondary">Veja os eventos dos proximos dias:</p>
    <div class="row div-events" id="cards-container">
        @foreach($events as $event)
        <div class="card" style="width: 18rem;">
            <img src="/img/back.jpg" class="card-img-top" alt="{{ $event->title }}">
            <div class="card-body">
              <h5 class="card-title">{{ $event->title }}</h5>
              <p class="text-secondary card-text text-card">X participantes</p>
              <p class="text-card text-end text-success mb-2">{{ $event->city }}</p>
              <p class="card-text">{{ $event->description }}</p>
              <a class="btn btn-dark w-100">Participar</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
    
@endsection