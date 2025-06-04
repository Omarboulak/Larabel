{{-- resources/views/rooms/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="mb-4">Listado de Rooms</h1>
  <div class="mb-3">
    <a href="{{ route('rooms.create') }}" class="btn btn-primary">Nueva Room</a>
  </div>

  @forelse($rooms as $room)
  <div class="d-flex justify-content-between align-items-center p-3 border rounded mb-2">
    <div>
      <strong>Número:</strong> {{ $room->room_number }} —
      <strong>Tipo:</strong> {{ $room->room_type }} —
      <strong>Precio:</strong> {{ $room->price }} €
      @if($room->offer)
      — <span>Oferta</span>
      @endif
      @if($room->discount)
      — <strong>Descuento:</strong> {{ $room->discount }} €
      @endif
      <br>
      <strong>Descripción:</strong> {{ Str::limit($room->description, 50) }} —
      <strong>Amenities:</strong> {{ $room->amenities }}
    </div>
    <div class="btn-group" role="group">
      <a href="{{ route('rooms.edit', $room->room_number) }}"
        class="btn btn-sm btn-warning">Editar</a>
      <form action="{{ route('rooms.destroy', $room->room_number) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
      </form>
    </div>
  </div>
  @empty
  @endforelse
</div>
@endsection