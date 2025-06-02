
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista</h1>
    <ul>
        @foreach($activities as $act)
            <li>
                {{ $act->type }} —
                {{ $act->datetime }} —
                <a href="{{ route('activities.edit', $act) }}">Editar</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
