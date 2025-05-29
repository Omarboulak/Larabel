    @extends('layouts.app')

    @section('content')
    <div class="container">
        <form method="POST" action="{{ route('activities.store') }}">
            @csrf

            <div>
                <label for="type">Tipo</label>
                <input type="text" id="type" name="type" placeholder="tipo de actividad" class="form-control">
            </div>

            <div>
                <label for="user_id">User ID</label>
                <input type="number" id="user_id" name="user_id" placeholder="ID de usuario" class="form-control">
            </div>

            <div>
                <label for="datetime">Fecha y hora</label>
                <input type="datetime-local" id="datetime" name="datetime" class="form-control">
            </div>

            <div>
                <label>
                    <input type="hidden" name="paid" value="0">
                    <input type="checkbox" name="paid" value="1">
                    Pagado
                </label>
            </div>

            <div>
                <label for="notes">Notas</label>
                <textarea id="notes" name="notes" rows="3" class="form-control"></textarea>
            </div>

            <div>
                <label for="satisfaction">Satisfacción</label>
                <input type="number" id="satisfaction" name="satisfaction" min="0" max="10" class="form-control">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('activities.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    @endsection
