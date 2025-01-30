<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Mostrar todas las tareas
    public function index()
    {
        $tasks = Task::paginate(5); // Paginación opcional
        return view('index', compact('tasks')); // Cambiado a 'index' sin la carpeta tasks
    }

    // Mostrar el formulario de creación
    public function create()
    {
        return view('create'); // Cambiado a 'create' sin la carpeta tasks
    }

    // Almacenar una nueva tarea
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    // Mostrar el formulario de edición
    public function edit(Task $task)
    {
        return view('edit', compact('task')); // Cambiado a 'edit' sin la carpeta tasks
    }

    // Actualizar una tarea
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index');
    }

    // Eliminar una tarea
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

    // Cambiar el estado de completado
    public function toggleComplete(Task $task)
    {
        $task->completed = !$task->completed;
        $task->save();
        return redirect()->route('tasks.index');
    }
}
