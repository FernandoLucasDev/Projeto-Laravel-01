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
            <label for="date">Data do evento</label><br>
            <input type="date" name="date" id="date"><br><br>
            <label for="">Adicione itens de infraestrutura:</label><br>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="items" value="cadeiras"> Cadeiras <br>
                <input type="checkbox" name="items[]" id="items" value="palco"> Palco <br>
                <input type="checkbox" name="items[]" id="items" value="bebidagratis"> Bebida gratis <br>
                <input type="checkbox" name="items[]" id="items" value="comida"> Open food <br>
                <input type="checkbox" name="items[]" id="items" value="brindes"> Brindes <br>
            </div><br>
            <label for="description">Descrição:</label>
            <textarea rows="08" name="description" id="description" class="form-control" placeholder="Descrição do evento"></textarea><br>
            <label for="image">Imagem da capa:</label>
            <input type="file" id="image" name="image" class="form-control-file"><br><br>
            <input type="submit" class="btn btn-dark button-send-event" value="Criar"><br><br>
        </div>
    </form>
</div>

@endsection

