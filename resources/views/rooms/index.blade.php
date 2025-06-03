@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Listado de Rooms</h1>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Nueva Room</a>

    <table class="table">
      <thead>
        <tr>
          <th>Número</th>
          <th>Tipo</th>
          <th>Precio</th>
          <th>Oferta</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse($rooms as $room)
          <tr>
            <td>{{ $room->room_number }}</td>
            <td>{{ $room->room_type }}</td>
            <td>{{ $room->price }}</td>
            <td>{{ $room->offer ? 'Sí' : 'No' }}</td>
            <td>
              <a href="{{ route('rooms.show', $room) }}" class="btn btn-sm btn-info">Ver</a>
              <a href="{{ route('rooms.edit', $room) }}" class="btn btn-sm btn-warning">Editar</a>
              <form action="{{ route('rooms.destroy', $room) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5">No hay rooms aún.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
</div>
@endsection
