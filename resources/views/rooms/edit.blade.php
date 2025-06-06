@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Room</h1>

    <form method="POST" action="{{ route('rooms.update', $room) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="room_number" class="form-label">Número de Room</label>
            <input type="number" id="room_number" name="room_number" class="form-control" value="{{ old('room_number', $room->room_number) }}" required>
        </div>

        <div class="mb-3">
            <label for="room_type" class="form-label">Tipo</label>
            <input type="text" id="room_type" name="room_type" class="form-control" value="{{ old('room_type', $room->room_type) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea id="description" name="description" class="form-control" rows="3" required>{{ old('description', $room->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="photos" class="form-label">Photos</label>
            <input type="text" id="photos" name="photos" class="form-control" value="{{ old('photos', $room->photos) }}" required>
        </div>

        <div class="form-check mb-3">
            <input type="hidden" name="offer" value="0">
            <input 
                type="checkbox" 
                id="offer" 
                name="offer" 
                value="1" 
                class="form-check-input"
                {{ old('offer', $room->offer) ? 'checked' : '' }}
            >
            <label for="offer" class="form-check-label">En oferta</label>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input 
                type="number" 
                id="price" 
                name="price" 
                step="0.01" 
                class="form-control"
                value="{{ old('price', $room->price) }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="discount" class="form-label">Descuento</label>
            <input 
                type="number" 
                id="discount" 
                name="discount" 
                step="0.01" 
                class="form-control"
                value="{{ old('discount', $room->discount) }}"
            >
        </div>

        <div class="mb-3">
            <label for="cancellation_policy" class="form-label">Política de cancelación</label>
            <textarea 
                id="cancellation_policy" 
                name="cancellation_policy" 
                class="form-control" 
                rows="2"
                required
            >{{ old('cancellation_policy', $room->cancellation_policy) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="amenities" class="form-label">Amenities (separados por comas)</label>
            <input 
                type="text" 
                id="amenities" 
                name="amenities" 
                class="form-control"
                value="{{ old('amenities', $room->amenities) }}"
                required
            >
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
