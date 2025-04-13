<!DOCTYPE html>
<html>
<head>
    <title>Lista de Eventos</title>
</head>
<body>
    <h1>Lista de Eventos</h1>
    <a href="{{ route('eventos.create') }}">Crear Nuevo Evento</a>
    <ul>
        @foreach ($eventos as $evento)
            <li>
                {{ $evento->nombre }} - {{ $evento->fecha_inicio }}
                <a href="{{ route('eventos.show', $evento->id) }}">Ver</a>
                <a href="{{ route('eventos.edit', $evento->id) }}">Editar</a>
                <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>