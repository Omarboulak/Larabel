@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Room</h1>

    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $msg)
            <li>{{ $msg }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('rooms.store') }}">
        @csrf

        <div class="mb-3">
            <label for="room_number" class="form-label">Número de Room</label>
            <input type="number" id="room_number" name="room_number" class="form-control">
        </div>

        <div class="mb-3">
            <label for="room_type" class="form-label">Tipo</label>
            <input type="text" id="room_type" name="room_type" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea id="description" name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="photos" class="form-label">Photos (URL)</label>
            <input type="text" id="photos" name="photos" class="form-control">
        </div>

        <div class="form-check mb-3">
            <input type="hidden" name="offer" value="0">
            <input type="checkbox" id="offer" name="offer" value="1" class="form-check-input">
            <label for="offer" class="form-check-label">En oferta</label>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input type="number" id="price" name="price" step="0.01" class="form-control">
        </div>

        <div class="mb-3">
            <label for="discount" class="form-label">Descuento</label>
            <input type="number" id="discount" name="discount" step="0.01" class="form-control">
        </div>

        <div class="mb-3">
            <label for="cancellation_policy" class="form-label">Política de cancelación</label>
            <textarea id="cancellation_policy" name="cancellation_policy" class="form-control" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <label for="amenities" class="form-label">Amenities (separados por comas)</label>
            <input type="text" id="amenities" name="amenities" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
