@extends('layouts.app')

@section('content')
    <h1>Crear Tarea</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit">Guardar</button>
    </form>
@endsection
