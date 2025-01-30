@extends('layouts.app')

@section('content')
    <h1>Editar Tarea</h1>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
        <button type="submit">Actualizar</button>
    </form>
@endsection
