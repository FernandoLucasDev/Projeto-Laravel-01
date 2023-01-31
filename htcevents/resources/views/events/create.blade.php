@extends('layouts.main')

@section('title', 'HTC | Create')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <p class="fs-4 text-center">Crie um evento</p>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"><br>
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento"><br>
            <label for="private">Privado</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Público</option>
                <option value="1">Privado</option>
            </select><br>
            <label for="description">Descrição:</label>
            <textarea rows="08" name="description" id="description" class="form-control" placeholder="Descrição do evento"></textarea><br>
            <label for="image">Imagem da capa:</label>
            <input type="file" id="image" name="image" class="form-control-file"><br><br>
            <input type="submit" class="btn btn-dark button-send-event" value="Criar">
        </div>
    </form>
</div>

@endsection

