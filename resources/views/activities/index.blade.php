
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Actividades</h1>
    <a href="{{ route('activities.create') }}" class="btn btn-primary mb-3">Nueva Actividad</a>
    <ul>
        @foreach($activities as $act)
            <li>
                <strong>{{ $act->type }}</strong> —
                {{ $act->datetime }} —
                <a href="{{ route('activities.edit', $act) }}">Editar</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
