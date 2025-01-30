@extends('layouts.app')

@section('content')
    <h1>Gestión de Tareas</h1>
    <a href="{{ route('tasks.create') }}">Crear Tarea</a>
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->completed ? 'Completada' : 'Pendiente' }}
                <a href="{{ route('tasks.edit', $task) }}">Editar</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                <form action="{{ route('tasks.toggle', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Cambiar Estado</button>
                </form>
            </li>
        @endforeach
    </ul>
    {{ $tasks->links() }} <!-- Paginación -->
@endsection
