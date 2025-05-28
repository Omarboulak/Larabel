{{-- resources/views/activities/create.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Actividad</title>
</head>
<body>
    <h1>Crear nueva Actividad</h1>

    <form method="POST" action="{{ route('activities.store') }}">
        @csrf

        {{-- Type --}}
        <label for="type">Tipo</label>
        <input 
            type="text" 
            id="type" 
            name="type" 
            value="{{ old('type', 'surf') }}"
        >
        <br>

        {{-- User ID aleatorio --}}
        <label for="user_id">User ID</label>
        {{-- rand(1,5) genera un número al azar entre 1 y 5 --}}
        <input 
            type="number" 
            id="user_id" 
            name="user_id" 
            value="{{ old('user_id', rand(1,5)) }}" 
            min="1" 
            max="5"
        >
        <br>

        {{-- Fecha y hora --}}
        <label for="datetime">Fecha y hora</label>
        <input type="datetime-local" id="datetime" name="datetime" value="{{ old('datetime') }}">
        <br>

        {{-- Paid --}}
        <input type="hidden" name="paid" value="0">
        <label>
            <input type="checkbox" name="paid" value="1" {{ old('paid') ? 'checked' : '' }}>
            Pagado
        </label>
        <br>

        {{-- Notes --}}
        <label for="notes">Notas</label>
        <textarea id="notes" name="notes">{{ old('notes') }}</textarea>
        <br>

        {{-- Satisfaction --}}
        <label for="satisfaction">Satisfacción (0–10)</label>
        <input 
            type="number" 
            id="satisfaction" 
            name="satisfaction" 
            min="0" 
            max="10" 
            value="{{ old('satisfaction', 5) }}"
        >
        <br>

        <button type="submit">Crear</button>
    </form>
</body>
</html>
